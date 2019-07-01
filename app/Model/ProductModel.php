<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table='products';
    protected $primaryKey='id';
    public $timestamps=false;
}
