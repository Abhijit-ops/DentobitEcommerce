<?php
namespace App\Repository;
use App\Model\SliderModel;
use App\Repository\InterfaceDir\SliderInterface;

class SliderRepository implements SliderInterface
{
    public function getSlider($status)
    {
        return SliderModel::where('status',$status)->get();
    }
}