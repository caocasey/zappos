<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    protected $primaryKey = 'mid';

     //security control
     protected $fillable = ['mid', 'mname','serve_time','mdescription','restaurant_id'];

    //add has many relationship
    public function items()
    {
        return $this->hasMany('App\Item');
    }
}
