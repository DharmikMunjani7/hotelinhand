<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cartmod extends Model
{
    protected $table="cart_tbl";
    public $timestamps=false;
    protected $primaryKey='CartId';
}
