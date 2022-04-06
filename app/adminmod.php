<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adminmod extends Model
{
    //
    protected $table="admin_tbl";
    public $timestamps=false;
    protected $primaryKey='AdminId';

}
