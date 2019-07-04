<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    protected $table='tbl_customer';
    protected $primaryKey='id';
    public $timestamps=false;
}
