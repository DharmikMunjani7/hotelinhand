<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tokenmod extends Model
{
    //
     protected $table="token_tbl";
    public $timestamps=false;
    protected $primaryKey='TokenNo';

}
