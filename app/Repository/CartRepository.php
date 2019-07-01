<?php
namespace App\Repository;
use App\Repository\InterfaceDir\CartInterface;
use Cart;
class CartRepository implements CartInterface
{
    public function store(array $data)
    {
        $name = $data['name'];
        $price = $data['price'];
        $image = $data['imgages'];
        $id = $data['id'];
        $qty = $data['qty'];
        $index = null;
        Cart::add(array('id'=>$id,'name'=>$name,'qty' => $qty,'price' => $price, 'weight'=>$index,'options' => ['image' =>$image ]));
        return response()->json(Cart::content());
    }
    public function getCartContent()
    {
        return Cart::content();
    }
    public function getCartCount(){
        return Cart::content()->count();
    }

    public function deleteCartItem($id)
    {
        Cart::remove($id);
        return "Cart Item Removed";
    }
    public function updateCartItem($rowId,$qty){
        Cart::update($rowId,$qty);
    }

    public function deleteAllCartContent()
    {
        Cart::destroy();
    }
}