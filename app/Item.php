<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    //
     protected $primaryKey = 'iid';
     //security control
     protected $fillable = ['iid', 'iname','idescription','menu_id'];

}
