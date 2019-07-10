<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CustomerEmail extends Model
{
    protected $table='tbl_customer_email';
    protected $primaryKey='id';
    public $timestamps=false;
}
