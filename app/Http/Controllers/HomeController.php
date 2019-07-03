<?php

namespace App\Http\Controllers;

use App\Repository\InterfaceDir\ProductInterface;
use App\Traits\BrandTrait;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $product;
    use BrandTrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ProductInterface $product)
    {
        // $this->middleware('auth');
        $this->product = $product;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $bestSellerProducts = $this->product->getHomeBestSellerProduct('bestSeller');
        $featuredProduct = $this->product->getFeaturedProduct();
        $newArrival = $this->product->getNewArriValProduct();
        return view('index')
            ->with('bestSellerProducts',$bestSellerProducts)
            ->with('featuredProducts',$featuredProduct)
            ->with('newArrivalProducts',$newArrival);
    }

    public function getTest($name){
        return $name;
    }
}
