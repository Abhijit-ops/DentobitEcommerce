<?php

namespace App\Http\Controllers;

use App\Model\ProductModel;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        $search=  $request->term;

        $posts = ProductModel::where('name','LIKE',"%{$search}%")->get();

        if(!$posts->isEmpty())
        {
            foreach($posts as $post)
            {

                $new_row['name']= $post->name;
                $new_row['image']= $post->image;
                $new_row['url']= route('products.single',$post->id);

                $row_set[] = $new_row; //build an array
            }
        }

        echo json_encode($row_set);
    }
}
