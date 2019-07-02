<?php
namespace App\Transformer;
use League\Fractal\TransformerAbstract;

class ProductTransformer extends TransformerAbstract
{
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


    public function transFormSingleProduct($product){
        return [
            'product_id' => $product->id,
            'catName' => $product->catName['name'],
            'product_name' => $product->name,
            'product_price' => $product->price,
            'product_qty' => $product->qty,
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