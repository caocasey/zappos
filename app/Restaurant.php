<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    //
    protected $primaryKey = 'rid';
    protected $fillable = ['rid', 'rname','rdescription'];

}
