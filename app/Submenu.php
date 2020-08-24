<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    protected $fillable = [
        'name', 'header', 'body'
    ];

    public function menus(){
        return $this->belongsTo('App\Menu');
     }
}
