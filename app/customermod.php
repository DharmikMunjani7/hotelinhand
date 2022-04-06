<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customermod extends Model
{
    //
 protected $table="customer_tbl";
    public $timestamps=false;
    protected $primaryKey='CustomerId';
}
