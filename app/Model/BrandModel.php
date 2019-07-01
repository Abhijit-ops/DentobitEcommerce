<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BrandModel extends Model
{
    protected $table='brands';
    protected $primaryKey='id';
    public $timestamps=false;
}
