<?php
namespace App\Http\Controllers;

use App\CentralLogics\Helpers;
use App\Models\BusinessSetting;
use Illuminate\Http\Request;


class FrontController extends Controller
{
    public function index(){
        return view('front.index');
    }
    public function index_1(){
        return view('front.index-1');
    }
    public function index_2(){
        return view('front.index-2');
    }
    public function index_3(){
        return view('front.index-3');
    }
    public function listing(){
        return view('front.listing');
    }
    public function category(){
        return view('front.category');
    }
    public function sellerList(){
        return view('front.seller_list');
    }
    public function seller(){
        return view('front.seller');
    }
    public function becomeSeller(){
        return view('front.become_seller');
    }
    public function detail(){
        return view('front.detail');
    }
    public function cart(){
        return view('front.cart');
    }
    public function checkout(){
        return view('front.checkout');
    }
    public function wishlist(){
        return view('front.wishlist');
    }
    public function login(){
        return view('front.login');
    }
    public function register(){
        return view('front.register');
    }
    public function userDashboard(){
        return view('front.user_dashboard');
    }
    public function forgot(){
        return view('front.forgot');
    }
    public function orderTracking(){
        return view('front.order_tracking');
    }
    public function orderSuccess(){
        return view('front.order_success');
    }
    public function notFound(){
        return view('front.404');
    }
}
