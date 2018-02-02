<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
     protected $primaryKey = 'mid';
     protected $fillable = ['mid', 'mname','serve_time','mdescription'];

}
