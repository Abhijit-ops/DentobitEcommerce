<?php

namespace App\Http\Controllers\Api;

use App\Repository\InterfaceDir\ProductInterface;
use App\Traits\CategoryTrait;
use App\Transformer\ProductTransformer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    use CategoryTrait;
    private $product;
    private $transformer;

    public function __construct(ProductInterface $product, ProductTransformer $transformer)
    {
        $this->product = $product;
        $this->transformer = $transformer;
    }

    public function getBestSellerProducts()
    {
        $bestSeller = [];

        $products = $this->product->getHomeBestSellerProduct('bestSeller');
        foreach ($products as $product) {
            $product->catName = $this->getCategoryName($product->category_id);
            array_push($bestSeller, $this->transformer->transFormProduct($product));
        }
        return response()->json($bestSeller);
    }

    public function getFeaturedProduct()
    {
        $featuredProduct = $this->product->getFeaturedProduct();
        $transformArray = [];
        foreach ($featuredProduct as $item) {
            $item->catName = $this->getCategoryName($item->category_id);
            array_push($transformArray, $this->transformer->transFormProduct($item));
        }
        return response()->json($transformArray);
    }


    public function getSingleProduct(Request $request)
    {

        $singleProduct = $this->product->getSingleProductBySlug($request->product_id);
        $productImages = $this->product->getProductGalleryImage($request->product_id);
        $singleProduct->galleryImage = $productImages;
        return $this->transformer->transFormSingleProduct($singleProduct);
    }


}
