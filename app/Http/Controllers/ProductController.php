<?php

namespace App\Http\Controllers;

use App\Model\CategoryModel;
use App\Repository\InterfaceDir\ProductInterface;
use App\Traits\BrandTrait;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use BrandTrait;
    private $product;

    public function __construct(ProductInterface $product)
    {
        $this->product = $product;
    }

    public function getProduct()
    {
        return $this->product->getProductBycolumnName('', '');
    }

    public function getSingleProductBySlug($slug)
    {
      $product = $this->product->getSingleProductBySlug($slug);
      return view('products.singleProduct')->with('product',$product);
    }

    public function getProductByCategoryName($name){
        $category = CategoryModel::where('name','=',$name)->first();
        $product = $this->product->getProductByCategoryName($category->id);
        return view('products.productList')->with('products',$product)->with('categoryName',$category->name);
    }
    public function getProductByBrandName($brandName){
        $brandId = $this->getBrandIdByName($brandName);
        $product = $this->product->getProductBycolumnName('brand_id',$brandId);
        return $product;
    }

}
