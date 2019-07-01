<div class="items" style="max-height: 550px;overflow-y: scroll;">
    @if(count($cartContents)==0)
        <p class="text-center">
            <span class="flaticon-shopping-basket" style="font-size: 40px;"></span>
        </p>

        <p  class="text-center">Cart is Empty</p>
    @else
        <h2 class="title-text">recently added items</h2>
        @foreach($cartContents as $items)
            <div class="cart-item clearfix">
                <div class="image-container">
                    <img src="{{$items->options->image}}"
                         alt="image_not_found">
                </div>
                <div class="item-content clearfix">
                    <h3 class="item-title mb-15">{{$items->name}}</h3>
                    <div class="item-price mb-30">
                        <strong class="color-black">${{$items->price*$items->qty}}</strong>
                        <del>{{$items->price}}</del>
                    </div>
                    <ul class="clearfix">
                        <li>
                            <span class="qty-text">qty:</span>
                            <input disabled class="quantity-input" id="productqty qtyItem_{{$items->rowId}}" data-panel-id="{{$items->rowId}}" name="qtyItem"
                                   onblur="updateQty(this)" type="number" min="1"  value="{{$items->qty}}">
                        </li>
                        <li>
                            <button onclick="window.location.href='http://localhost:8000/cart'" type="button" class="edit-btn"><i
                                        class="flaticon-pencil"></i></button>
                        </li>
                        <li>
                            <button type="button" class="remove-btn" data-cart-item-id="{{$items->rowId}}" onclick="deleteCartItem(this)"><i
                                        class="flaticon-dustbin"></i></button>
                        </li>
                    </ul>
                </div>
            </div>
        @endforeach

    @endif
</div>
@if(Cart::count()!=0)
<div class="footer-container clearfix">
    <div class="footer-left clearfix">
        <div class="total-price">
            total: <strong class="color-white">$129.00</strong>
        </div>
    </div>
    <div class="footer-right ul-li-right clearfix">
        <ul class="clearfix">
            <li><a href="{{route('cart.view')}}">view cart</a></li>
            <li><a href="{{route('product.checkout')}}">checkout</a></li>
        </ul>
    </div>
</div>
    @endif
