<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roommod extends Model
{
    protected $table="room_tbl";
    public $timestamps=false;
    protected $primaryKey='RoomId';
}
