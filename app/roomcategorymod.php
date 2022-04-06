<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roomcategorymod extends Model
{
    protected $table="roomcategory_tbl";
    public $timestamps=false;
    protected $primaryKey='RoomCategoryId';
}
