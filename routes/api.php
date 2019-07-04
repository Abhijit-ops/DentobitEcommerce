<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('register', 'AuthController@register');
});
/*
 * Product Routes
 */

Route::post('products/best_seller', 'Api\ProductController@getBestSellerProducts');
Route::post('products/featured', 'Api\ProductController@getFeaturedProduct');
Route::post('products/single', 'Api\ProductController@getSingleProduct');
Route::get('slider', 'Api\SliderController@getSlider');
/*
 * Category Routes
 */
Route::post('category/all', 'Api\CategoryController@getCaegory');

Route::get('cat', function () {
    $cat = \App\Model\CategoryModel::where('id', '4')->first();
    return $cat->name;
});

Route::post('phone/save', 'CustomerTestController@saveCustomer');