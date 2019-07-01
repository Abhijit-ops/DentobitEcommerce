<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ShippingModel extends Model
{
    protected $table='tbl_shipping_details';
    protected $primaryKey='id';
    public $timestamps=false;
}
