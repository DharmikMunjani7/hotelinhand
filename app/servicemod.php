<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servicemod extends Model
{
     protected $table="service_tbl";
    public $timestamps=false;
    protected $primaryKey='ServiceId';
}
