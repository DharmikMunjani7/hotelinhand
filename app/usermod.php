<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usermod extends Model
{
   protected $table="user_tbl";
    public $timestamps=false;
    protected $primaryKey='UserId';
}
