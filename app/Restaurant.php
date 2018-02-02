<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    //
    protected $primaryKey = 'rid';
    //security control
    protected $fillable = ['rid', 'rname','rdescription'];

	//add has many relationship
    public function menus()
    {
        return $this->hasMany('App\Menu');
    }
}
