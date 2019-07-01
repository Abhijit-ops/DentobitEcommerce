<?php

namespace App\Http\Controllers;

use App\Repository\InterfaceDir\CheckoutInterface;
use Illuminate\Http\Request;
use Cart;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    private $checkout;

    public function __construct(CheckoutInterface $checkout)
    {
        $this->checkout = $checkout;
    }

    public function checkoutPage()
    {
        $cartItem = Cart::content();
        return $this->checkout->getCheckOutPage($cartItem);
    }
    public function finalCheckOut(Request $request){
        if($request->isMethod('get')){
            return "Ops";
        }
        if($request->checkShip !=null){
            $data=array();
            $data['user_id']=Auth::user()->id;
            $data['receiver_name']=$request->firstName.$request->lastName;
            $data['shipping_address']=$request->shipping_address;
            $data['receiver_post_code']=$request->receiver_post_code;
            $data['receiver_phone']=$request->receiver_phone;
                return $this->checkout->saveShippingData($data);
        }
        else{
            $data=array();
            $data['user_id']=Auth::user()->id;
            $data['receiver_name']=Auth::user()->name;
            $data['shipping_address']=Auth::user()->billing_address;
            $data['receiver_post_code']=Auth::user()->post_code;
            $data['receiver_phone']=Auth::user()->phone;
           return $this->checkout->saveShippingData($data);

        }
    }


}
