<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CustomerPhoneNumber extends Model
{
    protected $table='tbl_customer_phone_number';
    protected $primaryKey='id';
    public $timestamps=false;
}
