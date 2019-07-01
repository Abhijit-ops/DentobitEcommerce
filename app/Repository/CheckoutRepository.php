<?php

namespace App\Repository;

use App\Model\OrderDetailsModel;
use App\Model\OrderModel;
use App\Model\ProductModel;
use App\Model\ShippingModel;
use App\Repository\InterfaceDir\CheckoutInterface;
use Carbon\Carbon;
use Cart;
use Illuminate\Support\Facades\Auth;

class CheckoutRepository implements CheckoutInterface
{
    public function getCheckOutPage($cartItem)
    {
        return view('products.checkout')->with('cartItems', $cartItem);
    }

    public function saveShippingData(array $data)
    {
        $shippingDetails = new ShippingModel();
        $shippingDetails->user_id = $data['user_id'];
        $shippingDetails->receiver_name = $data['receiver_name'];
        $shippingDetails->shipping_address = $data['shipping_address'];
        $shippingDetails->receiver_post_code = $data['receiver_post_code'];
        $shippingDetails->receiver_phone = $data['receiver_phone'];
        $shippingDetails->added_date = Carbon::now();
        $shippingDetails->save();

        return $this->saveOrderData($shippingDetails->id);

    }

    public function saveOrderData($data)
    {
        $order = OrderModel::select('order_id')->orderBy('order_id', 'desc')->first();

        $orderData = new OrderModel();
        $orderData->customer_id = Auth::user()->id;
        $orderData->shipping_id = $data;
        $orderData->payment_id = null;
        $orderData->invoice_no = date('Y') . date('m') . $order->order_id + 1;
        $orderData->order_status = '0';
        $orderData->shipping_charge = '0';
        $orderData->order_total = Cart::total();
        $orderData->order_date = Carbon::now();
        $orderData->due_date = 'null';
        $orderData->save();
        return $this->saveOrderDetailsData($orderData->order_id);


    }

    public function saveOrderDetailsData($data)
    {

        foreach (Cart::content() as $cart) {
            $orderDetails = new OrderDetailsModel();
            $orderDetails->order_id = $data;
            $orderDetails->product_id = $cart->id;
            $orderDetails->product_price = $cart->price;
            $orderDetails->product_name = $cart->name;
            $orderDetails->product_sales_quantity = $cart->qty;
            $orderDetails->save();
            $this->reduceQuantity($cart->id, $cart->qty);
        }
        Cart::destroy();
        $checkOutItem = $this->getLastCartData($data);
        return view('products.checkoutConfirm')->with('checkout', $data)->with('cartData', $checkOutItem);
    }

    public function getLastCartData($data)
    {
        $order = OrderDetailsModel::where('order_id', $data)->first();
        return $order;
    }

    public function reduceQuantity($productId, $quantity)
    {
        $product = ProductModel::findOrFail($productId);
        $product->qty = $product->qty - $quantity;
        $product->save();
    }

    public function finalCheckOut(array $data)
    {

    }


}