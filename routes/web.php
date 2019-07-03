<?php


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', function (){
    return redirect()->route('home');
});
Route::get('/products/{slug}','ProductController@getSingleProductBySlug')->name('products.single');

/*
 * Cart Routes Start
 */

Route::post('/cart/add','CartController@storeToCart')->name('cart.add');
Route::post('/cart/get-data','CartController@getCartContent')->name('cart.show');
Route::post('/cart/count','CartController@getCartCount')->name('cart.count');
Route::post('/cart/remove','CartController@deleteCartItem')->name('cart.remove');
Route::post('/cart/update','CartController@updateCart')->name('cart.update');
Route::get('/cart','CartController@getCartDetailsPage')->name('cart.view');
Route::get('/cart/remove-all','CartController@deleteCartContent')->name('cart.remove.all');

/*
 * Cart Routes End
 */

/*
 * Contact Routes Start
 */

    Route::get('/contact-us', 'ContactUsController@getContactForm')->name('contact.form');
    Route::post('/contact-us', 'ContactUsController@storeContactUsData')->name('contact.store');

/*
 * Contact Routes End
 */
//Route::get('/test', 'ProductController@getProduct')->name('product');


/*
 * Product By Category Routes Start
 */

Route::get('/product/category/{name}', 'ProductController@getProductByCategoryName')->name('productBy.catName');
Route::get('/product/brand/{brandName}', 'ProductController@getProductByBrandName')->name('productBy.brandName');

/*
 * CheckOut Routes Start
 */

Route::group(['middleware' => ['auth']], function () {
    Route::get('/checkout/', 'CheckoutController@checkoutPage')->name('product.checkout');
    Route::get('/checkout/final', 'CheckoutController@finalCheckOut')->name('product.finalCheckOut');
    Route::post('/checkout/final', 'CheckoutController@finalCheckOut')->name('product.finalCheckOut');
});

/*
 * User DashBoard Routes
 */
Route::group(['middleware' => ['auth']], function () {
    Route::get('/user/dashboard', 'UserController@getDashboard')->name('user.dashboard');
    Route::get('/user/orders', 'UserController@getOrders')->name('user.orders');
    Route::get('/user/update/profile', 'UserController@updateProfileForm')->name('user.updateProfileForm');
    Route::post('/user/update/profile', 'UserController@updateProfile')->name('user.updateProfile');
});


Route::get('search/autocompleteajax','SearchController@search')->name('search.products');
