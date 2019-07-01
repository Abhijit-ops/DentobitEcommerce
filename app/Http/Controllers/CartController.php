<?php

namespace App\Http\Controllers;

use App\Repository\InterfaceDir\CartInterface;
use App\Repository\InterfaceDir\ProductInterface;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    private $cart;
    private $product;

    public function __construct(CartInterface $cart, ProductInterface $product)
    {
        $this->cart = $cart;
        $this->product = $product;
    }

    public function storeToCart(Request $request)
    {
        $productStatus = $this->product->preventAddToCart($request->id, $request->qty);
        if (!$productStatus) {
            return $this->cart->store($request->toArray());
        } else {
            return $productStatus;
        }
    }

    public function getCartContent()
    {
        $cartContent = $this->cart->getCartContent();
        return view('Helper.Cart')->with('cartContents', $cartContent);
    }

    public function getCartCount()
    {
        return $this->cart->getCartCount();
    }

    public function deleteCartItem(Request $request)
    {
        return $this->cart->deleteCartItem($request->id);
    }

    public function getCartDetailsPage()
    {
        $cartCount = $this->cart->getCartCount();
        $cartItems = $this->cart->getCartContent();
        return view('products.showCart')->with('cartItems', $cartItems)->with('cartCount', $cartCount);

    }

    public function updateCart(Request $request)
    {
        $this->cart->updateCartItem($request->id, $request->qty);
        return response()->json("cart Updated Successfully", 200);
    }

    public function deleteCartContent()
    {
        $this->cart->deleteAllCartContent();
        return redirect()->route('cart.view');
    }
}
