<?php

namespace App\Http\Controllers\Api;

use App\Traits\CategoryTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    use CategoryTrait;

    public function getCategory()
    {
        return $this->getCategory();
    }
}
