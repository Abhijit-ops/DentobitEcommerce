<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CustomerDetailsModel extends Model
{
    protected $table='tbl_customer_details';
    protected $primaryKey='id';
    public $timestamps=false;
}
