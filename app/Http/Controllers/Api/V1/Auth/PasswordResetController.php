<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\CentralLogics\Helpers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\CentralLogics\SMS_module;

// ---
use Mail;
use Illuminate\Support\Str;

// model
use App\Models\Admin;
use App\Models\User;
use App\Models\Vendor;
use App\Models\DeliveryMan;

class PasswordResetController extends Controller
{
    public function reset_password_request(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => Helpers::error_processor($validator)], 403);
        }

        $customer = User::Where(['phone' => $request['phone']])->first();

        if (isset($customer)) {
            if(env('APP_MODE')=='demo')
            {
                return response()->json(['message' => translate('messages.otp_sent_successfull')], 200);
            }
            $token = rand(1000,9999);
            DB::table('password_resets')->insert([
                'email' => $customer['email'],
                'token' => $token,
                'created_at' => now(),
            ]);
            // Mail::to($customer['email'])->send(new \App\Mail\PasswordResetMail($token));
            // return response()->json(['message' => 'Email sent successfully.'], 200);
            $response = SMS_module::send($request['phone'],$token);
            if($response == 'success')
            {
                return response()->json(['message' => translate('messages.otp_sent_successfull')], 200);
            }
            else
            {
                return response()->json([
                    'errors' => [
                        ['code' => 'otp', 'message' => translate('messages.failed_to_send_sms')]
                ]], 405);
            }
        }
        return response()->json(['errors' => [
            ['code' => 'not-found', 'message' => 'Phone number not found!']
        ]], 404);
    }

    public function verify_token(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'reset_token'=> 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => Helpers::error_processor($validator)], 403);
        }
        $user=User::where('phone', $request->phone)->first();
        if (!isset($user)) {
            return response()->json(['errors' => [
                ['code' => 'not-found', 'message' => 'Phone number not found!']
            ]], 404);
        }

        if(env('APP_MODE')=='demo')
        {
            if($request['reset_token']=="1234")
            {
                return response()->json(['message'=>"OTP found, you can proceed"], 200);
            }
            return response()->json(['errors' => [
                ['code' => 'invalid', 'message' => 'Invalid OTP.']
            ]], 400);
        }

        $data = DB::table('password_resets')->where(['token' => $request['reset_token'],'email'=>$user->email])->first();
        if (isset($data)) {
            return response()->json(['message'=>"OTP found, you can proceed"], 200);
        }
        return response()->json(['errors' => [
            ['code' => 'invalid', 'message' => 'Invalid OTP.']
        ]], 400);
    }

    public function reset_password_submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|exists:users,phone',
            'reset_token'=> 'required',
            'password'=> 'required|min:6',
            'confirm_password'=> 'required|same:password',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => Helpers::error_processor($validator)], 403);
        }

        if(env('APP_MODE')=='demo')
        {
            if($request['reset_token']=="1234")
            {
                DB::table('users')->where(['phone' => $request['phone']])->update([
                    'password' => bcrypt($request['confirm_password'])
                ]);
                return response()->json(['message' => 'Password changed successfully.'], 200);
            }
            return response()->json([
                'message' => 'Phone number and otp not matched!'
            ], 404);
        }
        $data = DB::table('password_resets')->where(['token' => $request['reset_token']])->first();
        if (isset($data)) {
            if ($request['password'] == $request['confirm_password']) {
                DB::table('users')->where(['email' => $data->email])->update([
                    'password' => bcrypt($request['confirm_password'])
                ]);
                DB::table('password_resets')->where(['token' => $request['reset_token']])->delete();
                return response()->json(['message' => 'Password changed successfully.'], 200);
            }
            return response()->json(['errors' => [
                ['code' => 'mismatch', 'message' => 'Password did,t match!']
            ]], 401);
        }
        return response()->json(['errors' => [
            ['code' => 'invalid', 'message' => translate('messages.invalid_otp')]
        ]], 400);
    }





    /*
        ------------------------------

        --------------- FORGET PASSWORD
    */

    public function fgpass_request(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => Helpers::error_processor($validator)], 403);
        }

        // ---
        $user = Admin::whereEmail($request->email)->first();

        if($user)
        {
            $data = [];
            $data['email'] = $user->email;
            $data['token'] = Str::uuid();
            $data['created_at'] = now();


            DB::table('password_resets')->insert($data);

            $data['type'] = 'admins';
            $data['name'] = $user->f_name;

            $response = Mail::send('email-templates.admin-password-reset', $data, function ($mail) use($data)
            {
                /**
                 *  Note 1: first $data is for mail view page.
                 *  Note 2: second $data is for closure method's parameter. mail param.
                */

                $mail->to($data['email'], $data['name']);
                $mail->subject('Password Reset');
            });


            if(!$response){
                // return response()->json(['message' => translate('messages.mail_sent_successfull')], 200);
                return response()->json(['message' => 'Mail sent successfully.'], 200);
            }
            else{
                return response()->json(['message' => 'Mail not found']);
            }
        }

        return response()->json(['message' => 'Mail not found']);
    }


    public function check_token(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'token'=> 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => Helpers::error_processor($validator)], 403);
        }

        $token = explode('/', base64_decode($request->token)); // string to array

        $email = $token[0];
        $token = $token[1];

        $pr = DB::table('password_resets')->where([
            'email' => $email,
            'token' => $token,
        ])->first();

        if ($pr){
            return response()->json(['message'=>"Token found, you can proceed"], 200);
        }

        return response()->json(['errors' => [
            ['code' => 'invalid', 'message' => 'Invalid Token']
        ]], 400);
    }


    public function new_pass(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'token'=> 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => Helpers::error_processor($validator)], 403);
        }

        $main_token = explode('/', base64_decode($request->token)); // string to array

        $email = $main_token[0];
        $token = $main_token[1];
        $type = $main_token[2];

        // dd(['token' => $main_token, 'request' => $request->all()]);

        // --------

        $pr = DB::table('password_resets')->where([
            'email' => $email,
            'token' => $token,
        ])->first();

        if ($pr) {
            if ($request->password == $request->confirm_password)
            {
                $table = $type;
                DB::table($table)->where('email', $email)->update([
                    'password' => bcrypt($request->confirm_password)
                ]);

                $pr = DB::table('password_resets')->where([
                    'email' => $email,
                    'token' => $token,
                ])->delete();

                return response()->json(['code' => 'ok', 'type' => $type, 'message' => 'Password changed successfully.'], 200);
            }

            return response()->json(['code' => 'mismatch', 'message' => 'Passwords do not match!'], 401);

            // return response()->json(['errors' => [
            //     ['code' => 'mismatch', 'message' => 'Password did,t match!']
            // ]], 401);
        }
        else{
            return response()->json(['code' => 'invalid', 'message' => 'Invalid Credential'], 400);

            // return response()->json(['errors' => [
            //     ['code' => 'invalid', 'message' => translate('messages.invalid_credential')]
            // ]], 400);
        }
    }



    /*
        ------------------------------

        --------------- FORGET PASSWORD: USER
    */

    public function user_fgpass_request(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => Helpers::error_processor($validator)], 403);
        }

        // ---
        $user = User::whereEmail($request->email)->first();

        if($user)
        {
            $data = [];
            $data['email'] = $user->email;
            $data['token'] = Str::uuid();
            $data['created_at'] = now();

            DB::table('password_resets')->insert($data);

            $data['type'] = 'users';
            $data['name'] = $user->f_name;

            $response = Mail::send('email-templates.admin-password-reset', $data, function ($mail) use($data)
            {
                /**
                 *  Note 1: first $data is for mail view page.
                 *  Note 2: second $data is for closure method's parameter. mail param.
                */

                $mail->to($data['email'], $data['name']);
                $mail->subject('Password Reset');
            });


            if(!$response){
                return response()->json(['message' => 'Mail sent successfully.'], 200);
            }
            else{
                return response()->json(['message' => 'Mail not found'], 403);
            }
        }

        return response()->json(['errors' => [
            ['code' => 'Invalid', 'message' => 'Email not found']
        ]], 403);

        // return response()->json(['message' => 'Mail not found'], 400);
    }


    public function user_check_token(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'token'=> 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => Helpers::error_processor($validator)], 403);
        }

        $token = explode('/', base64_decode($request->token)); // string to array

        $email = $token[0];
        $token = $token[1];

        $pr = DB::table('password_resets')->where([
            'email' => $email,
            'token' => $token,
        ])->first();

        if ($pr){
            return response()->json(['message'=>"Token found, you can proceed"], 200);
        }

        return response()->json(['errors' => [
            ['code' => 'invalid', 'message' => 'Invalid Token']
        ]], 400);
    }



    /*
        ------------------------------

        --------------- FORGET PASSWORD: Seller/vendor
    */

    public function seller_fgpass_request(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => Helpers::error_processor($validator)], 403);
        }

        // ---
        $user = Vendor::whereEmail($request->email)->first();

        if($user)
        {
            $data = [];
            $data['email'] = $user->email;
            $data['token'] = Str::uuid();
            $data['created_at'] = now();

            DB::table('password_resets')->insert($data);

            $data['type'] = 'vendors';
            $data['name'] = $user->f_name;

            $response = Mail::send('email-templates.admin-password-reset', $data, function ($mail) use($data)
            {
                /**
                 *  Note 1: first $data is for mail view page.
                 *  Note 2: second $data is for closure method's parameter. mail param.
                */

                $mail->to($data['email'], $data['name']);
                $mail->subject('Password Reset');
            });


            if(!$response){
                return response()->json(['message' => 'Mail sent successfully.'], 200);
            }
            else{
                return response()->json(['message' => 'Mail not found.'], 403);
            }
        }

        return response()->json(['errors' => [
            ['code' => 'Invalid', 'message' => 'Email not found']
        ]], 403);

        // return response()->json(['message' => 'Mail not found'], 400);
    }


        /*
        ------------------------------

        --------------- FORGET PASSWORD: Delivery partner
    */

    public function delivery_fgpass_request(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => Helpers::error_processor($validator)], 403);
        }

        // ---
        $user = DeliveryMan::whereEmail($request->email)->first();

        if($user)
        {
            $data = [];
            $data['email'] = $user->email;
            $data['token'] = Str::uuid();
            $data['created_at'] = now();

            DB::table('password_resets')->insert($data);

            $data['type'] = 'delivery_men';
            $data['name'] = $user->f_name;

            $response = Mail::send('email-templates.admin-password-reset', $data, function ($mail) use($data)
            {
                /**
                 *  Note 1: first $data is for mail view page.
                 *  Note 2: second $data is for closure method's parameter. mail param.
                */

                $mail->to($data['email'], $data['name']);
                $mail->subject('Password Reset');
            });


            if(!$response){
                return response()->json(['message' => 'Mail sent successfully.'], 200);
            }
            else{
                return response()->json(['message' => 'Mail not found'], 403);
            }
        }

        return response()->json(['errors' => [
            ['code' => 'Invalid', 'message' => 'Email not found']
        ]], 403);

        // return response()->json(['message' => 'Mail not found'], 400);
    }

    //test search tag

        public function searchtag(Request $request)
        {
            $validator = Validator::make($request->all(), [
                'keyword' => 'required',
                'zoneId'=> 'required',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => Helpers::error_processor($validator)], 403);
            }

            $data = [];
            $data['keyword'] = $request->keyword;
            $data['zoneId'] = $request->zoneId;
            $data['catId'] = $request->catId;

            if($data['catId']){
                $pr = DB::table('item_search')
                ->select('item_id','item_nm', 'item_description', 'item_cat', 'item_cat_ids', 'item_variations', 'item_add_ons', 'item_attributes', 'item_choice_options', 'item_price', 'item_tax', 'item_tax_type', 'item_discount','item_discount_type','item_available_time_starts','item_available_time_ends','item_veg','item_status','store_id','item_created_at','item_updated_at','item_order_count','item_avg_rating', 'item_rating_count',  'item_module_id','item_unit_id', 'item_image', 'item_store_nm','item_discount', 'store_schedule_order','item_unit_type','unit_created_at', 'unit_updated_at' )
                ->where(['zone_id' => $data['zoneId'], ])
                ->where(['item_cat' => $data['catId'], ])
                ->where('tag', 'like', '%' . $data['keyword'] . '%')
                ->get();
            }
            else{
                $pr = DB::table('item_search')
                ->select('item_id','item_nm', 'item_description', 'item_cat', 'item_cat_ids', 'item_variations', 'item_add_ons', 'item_attributes', 'item_choice_options', 'item_price', 'item_tax', 'item_tax_type', 'item_discount','item_discount_type','item_available_time_starts','item_available_time_ends','item_veg','item_status','store_id','item_created_at','item_updated_at','item_order_count','item_avg_rating', 'item_rating_count',  'item_module_id','item_unit_id', 'item_image', 'item_store_nm','item_discount', 'store_schedule_order','item_unit_type','unit_created_at', 'unit_updated_at' )
                ->where(['zone_id' => $data['zoneId'], ])
                ->where('tag', 'like', '%' . $data['keyword'] . '%')
                ->get();
            }
        // echo $pr;
            return response()->json($pr, 200);
        }



}
