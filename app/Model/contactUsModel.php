<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class contactUsModel extends Model
{
    protected $table='contact';
    protected $primaryKey='id';
    public $timestamps=false;
}
