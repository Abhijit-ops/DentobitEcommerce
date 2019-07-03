<?php

namespace App\Traits;

use App\Model\BrandModel;
use App\Model\CategoryModel;
use App\Model\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

trait BrandTrait
{
    public function getBrandNameByCategory()
    {
        $name = \Illuminate\Support\Facades\Request::route('name');
        if($name){
            $categoryName = CategoryModel::where('name',$name)->first();
            $products = ProductModel::where('category_id',$categoryName->id)
                ->select('brand_id', DB::raw('count(*) as total'))
                ->groupBy('brand_id')
                ->get();
            foreach ($products as $product){
                $product->brand_name = $this->getBrandNameById($product->brand_id);
            }
            return $products;
        }

    }


    public function getBrandNameById($id){
        $brand = BrandModel::where('id',$id)->first();
            return $brand->name;
    }

    public function getBrandIdByName($name){
        $brand = BrandModel::where('name',$name)->first();
        return $brand->id;
    }
    public function getAllBrands(){
        return BrandModel::all();
    }

}