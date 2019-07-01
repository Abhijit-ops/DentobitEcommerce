<?php

namespace App\Http\Controllers\Api;

use App\Repository\InterfaceDir\ProductInterface;
use App\Traits\CategoryTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    use CategoryTrait;
    private $product;

    public function __construct(ProductInterface $product)
    {
        $this->product = $product;
    }

    public function getBestSellerProducts()
    {
        $bestSeller=[];
        $products = $this->product->getHomeBestSellerProduct('bestSeller');
        foreach ($products as $product){
            $product->catName= $this->getCategoryName($product->category_id);
            array_push($bestSeller,$this->transFormProduct($product));
        }
        return response()->json($bestSeller);
    }

    public function getFeaturedProduct()
    {
        $featuredProduct = $this->product->getFeaturedProduct();
        $transformArray = [];
        foreach ($featuredProduct as $item) {
            $item->catName= $this->getCategoryName($item->category_id);
            array_push($transformArray, $this->transFormProduct($item));
        }
        return response()->json($transformArray);
    }

    public function transFormProduct($product)
    {
        return [
            'product_id' => $product->id,
            'catName' => $product->catName['name'],
            'product_name' => $product->name,
            'product_price' => $product->price,
            'product_image' => $product->image,
            'product_description' => $product->description,
            'product_stock' => $product->qty
        ];
    }
    public function getSingleProduct(Request $request){

        $singleProduct = $this->product->getSingleProductBySlug($request->product_id);
        $productImages = $this->product->getProductGalleryImage($request->product_id);

        $singleProduct->galleryImage = $productImages;
        return $this->transFormSingleProduct($singleProduct);
    }

    public function transFormSingleProduct($product){
        return [
            'product_id' => $product->id,
            'catName' => $product->catName['name'],
            'product_name' => $product->name,
            'product_price' => $product->price,
            'product_image' => $product->image,
            'product_description' => $product->description,
            'product_gallery_image' => $this->transFormGalleryImage($product->galleryImage),

        ];
    }
    public function transFormGalleryImage($galleryImages){
        $image=[];
        for ($i=0;$i<count($galleryImages);$i++){
           $gImage = [
               'gallery_image_path' =>env('App_External_Image_url'). $galleryImages[$i]->gallery_image,
               'gallery_image_id' => $galleryImages[$i]->id,
           ];
           array_push($image,$gImage);
        }
        return $image;
    }

}
