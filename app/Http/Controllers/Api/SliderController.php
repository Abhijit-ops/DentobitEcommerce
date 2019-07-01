<?php

namespace App\Http\Controllers\Api;

use App\Repository\InterfaceDir\SliderInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    private $slider;

    public function __construct(SliderInterface $slider)
    {
        $this->slider=$slider;
    }
    /*
     * get all the active slider form the database
     */
    public function getSlider(){
        return response()->json($this->slider->getSlider('1'));
    }
}
