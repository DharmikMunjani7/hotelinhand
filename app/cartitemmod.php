<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cartitemmod extends Model
{
    protected $table="cartitem_tbl";
    public $timestamps=false;
    protected $primaryKey='CartItemId';

}
