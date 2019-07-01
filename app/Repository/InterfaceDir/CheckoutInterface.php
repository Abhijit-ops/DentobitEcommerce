<?php
namespace App\Repository\InterfaceDir;
interface CheckoutInterface
{
    public function getCheckOutPage($cartItem);
    public function finalCheckOut(array $data);
    public function saveShippingData(array $data);
    public function saveOrderData($data);
    public function saveOrderDetailsData($data);
    public function getLastCartData($data);
    public function reduceQuantity($productId,$quantity);
}