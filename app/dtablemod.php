<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dtablemod extends Model
{
      protected $table="dtable_tbl";
    public $timestamps=false;
    protected $primaryKey='TableId';
}
