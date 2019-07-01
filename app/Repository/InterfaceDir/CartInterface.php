<?php
namespace App\Repository\InterfaceDir;
use Illuminate\Http\Request;

interface CartInterface
{
    /*
     * store cart data
     */
  public function store(array $data);
  public function getCartContent();
  public function getCartCount();
  public function deleteCartItem($id);
  public function updateCartItem($rowId,$qty);
  public function deleteAllCartContent();
}