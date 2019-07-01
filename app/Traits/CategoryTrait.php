<?php
namespace App\Traits;
use App\Model\CategoryModel;
use App\Model\SubCategoryModel;

trait CategoryTrait
{
   public function getCaegory(){
       $categories = CategoryModel::where('active','=','1')->get();
       foreach ($categories as $category){
           $category->subcategoryName = $this->getSubCategoryNameById($category->id);
       }
       return $categories;
   }

   public function getCategoryName($categoryId){
       $cat = CategoryModel::where('id',$categoryId)->first();
        return $cat;
   }
   public function getSubCategoryNameById($id){
    return   SubCategoryModel::where('fk_category_id',$id)->get();
   }
}