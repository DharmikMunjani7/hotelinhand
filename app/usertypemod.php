<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usertypemod extends Model
{
    
     protected $table="usertype_tbl";
    public $timestamps=false;
    protected $primaryKey='UserTypeId';
}
