<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CustomersUser extends Model
{
    protected $table='tbl_customer_users';
    protected $primaryKey='id';
    public $timestamps=false;
}
