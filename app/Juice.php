<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Juice extends Model
{
    protected $fillable = ['name','rate','done','comment'];

    public function products()
    {
        return $this->belongsToMany('App\Product')->withPivot('quantity');
    }
}
