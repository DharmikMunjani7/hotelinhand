<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class foodmod extends Model
{
    //
    protected $table="food_tbll";
    public $timestamps=false;
    protected $primaryKey='FoodId';

}
