<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use App\Models\Store;
use App\Models\Vendor;
use Illuminate\Http\Request;
use App\CentralLogics\Helpers;
use App\Models\BusinessSetting;
use App\CentralLogics\StoreLogic;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Grimzy\LaravelMysqlSpatial\Types\Point;

class VendorController extends Controller
{
    public function create()
    {
        $status = BusinessSetting::where('key', 'toggle_store_registration')->first();
        if(!isset($status) || $status->value == '0')
        {
            Toastr::error(translate('messages.not_found'));
            return back();
        }
        return view('vendor-views.auth.register');
    }

    public function store(Request $request)
    {
        $status = BusinessSetting::where('key', 'toggle_store_registration')->first();
        if(!isset($status) || $status->value == '0')
        {
            Toastr::error(translate('messages.not_found'));
            return back();
        }
        $validator = Validator::make($request->all(), [
            'f_name' => 'required',
            'name' => 'required',
            'address' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'email' => 'required|unique:vendors',
            'identity_number' => 'required|max:30',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|unique:vendors',
            'minimum_delivery_time' => 'required',
            'maximum_delivery_time' => 'required',
            'password' => 'required|min:6',
            'zone_id' => 'required',
            'module_id' => 'required',
            'logo' => 'required',
            'tax' => 'required',
            'minimum_delivery_time' => 'required',
            'maximum_delivery_time' => 'required',
            'delivery_time_type'=>'required',
        ]);

        if($request->zone_id)
        {
            $point = new Point($request->latitude, $request->longitude);
            $zone = Zone::contains('coordinates', $point)->where('id', $request->zone_id)->first();
            if(!$zone){
                $validator->getMessageBag()->add('latitude', translate('messages.coordinates_out_of_zone'));
                return back()->withErrors($validator)
                        ->withInput();
            }
        }
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        $id_img_names = [];
        if (!empty($request->file('identity_image'))) {
            foreach ($request->identity_image as $img) {
                $identity_image = Helpers::upload('vendor/', 'png', $img);
                array_push($id_img_names, $identity_image);
            }
            $identity_image = json_encode($id_img_names);
        } else {
            $identity_image = json_encode([]);
        }
        
        $vendor = new Vendor();
        $vendor->f_name = $request->f_name;
        $vendor->l_name = $request->l_name;
        $vendor->email = $request->email;
        $vendor->phone = $request->phone;
        $vendor->identity_number = $request->identity_number;
        $vendor->identity_type = $request->identity_type;
        $vendor->identity_image = $identity_image;
        $vendor->password = bcrypt($request->password);
        $vendor->status = null;
        $vendor->save();

        $store = new Store;
        $store->name = $request->name;
        $store->phone = $request->phone;
        $store->email = $request->email;
        $store->logo = Helpers::upload('store/', 'png', $request->file('logo'));
        $store->cover_photo = Helpers::upload('store/cover/', 'png', $request->file('cover_photo'));
        $store->address = $request->address;
        $store->latitude = $request->latitude;
        $store->longitude = $request->longitude;
        $store->vendor_id = $vendor->id;
        $store->zone_id = $request->zone_id;
        $store->module_id = $request->module_id;
        $store->tax = $request->tax;
        $store->delivery_time = $request->minimum_delivery_time .'-'. $request->maximum_delivery_time.' '.$request->delivery_time_type;
        $store->status = 0;
        $store->footer_text = $request->about;
        $store->returnaddress = $request->returnaddress;
        $store->save();
        
        $data = [];
        $data['email'] = $request->email;
        $data['name'] = $request->f_name;
            
        //try{
           /* if(config('mail.status')){
                Mail::to($request['email'])->send(new \App\Mail\SelfRegistration('pending', $vendor->f_name.' '.$vendor->l_name));
            }*/
        
        
        $response = Mail::send('email-templates.shop-open', $data, function ($mail) use($data)
            {
                /**
                 *  Note 1: first $data is for mail view page.
                 *  Note 2: second $data is for closure method's parameter. mail param.
                */
            
               $mail->to($data['email'], $data['name']);
                $mail->subject('Shop Pending');
            });
        /*  }catch(\Exception $ex){
            info($ex);
        } */
        
       // if(!$response) Toastr::success('Message sent successfully');
      //  else Toastr::success($response); 
        
       // Mail::to($request['email'])->send(new \App\Mail\SelfRegistration('pending', $vendor->f_name.' '.$vendor->l_name));


        if(config('module.'.$store->module->module_type)['always_open'])
        {
            StoreLogic::insert_schedule($store->id);
        }
        Toastr::success('Your application has been sent. Kindly wait for at least 24-48 hours for verification. Thank you!');
        return back();
    }
}
