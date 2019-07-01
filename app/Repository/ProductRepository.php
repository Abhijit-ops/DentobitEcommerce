<?php

namespace App\Repository;

use App\Model\OrderDetailsModel;
use App\Model\OrderItemModel;
use App\Model\OrderModel;
use App\Model\ProductImages;
use App\Model\ProductModel;
use App\Repository\InterfaceDir\ProductInterface;
use App\Traits\CategoryTrait;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Support\Facades\DB;

class ProductRepository implements ProductInterface
{
    use CategoryTrait;

    public function getProductByColumnName($columnName, $status)
    {
        if ($columnName != null && $status != null) {
            $product = ProductModel::where($columnName, $status)->get();
            return $product;
        } else {
            return ProductModel::get();
        }
    }

    public function getHomeBestSellerProduct($tabName)
    {
        $productArray = [];
        $orderItems = OrderDetailsModel::select('product_id', DB::raw('count(*) as total'))
            ->groupBy('product_id')->orderBy('total', 'desc')->take(10)->get();
        foreach ($orderItems as $orderItem) {
            $product = ProductModel::where('id', $orderItem->product_id)->first();
            $orderItem->catName = $this->getCategoryName($orderItem->product_id);
            $product->checkStock = $this->checkStock($orderItem->product_id);
            if ($product) {
                array_push($productArray, $product);
            }

        }
        return $productArray;
    }

    public function getFeaturedProduct()
    {
        $product = ProductModel::where('featured', '1')->take(8)->get();
        return $product;
    }

    public function getSingleProductBySlug($slug)
    {
        $product = ProductModel::findOrFail($slug);
        $productImage = ProductImages::where('fk_product_id', $slug)->get();
        $product->galleryImage = $productImage;
        $product->checkStock = $this->checkStock($slug);
        return $product;
    }

    public function getProductByCategoryName($name)
    {
        $product = ProductModel::where('category_id',$name)->paginate(12);
        return $product;
    }


    public function checkStock($id)
    {
       $product = ProductModel::where('id',$id)->first();
       if($product->qty <1){
           return "Out Of Stock";
       }
        return 'Add to Cart';
    }

    public function preventAddToCart($id,$qty)
    {
        $product = ProductModel::where('id',$id)->first();
        if($product->qty <= $qty){
            return array(
                'status' =>"out of stock",
                'message' => "Product Out Of Stock",
                'qtyLeft' => $product->qty .' ' . "left"
            );
        }

    }

}