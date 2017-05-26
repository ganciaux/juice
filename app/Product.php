<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = ['name'];

    public function type()
    {
        return $this->belongsTo('App\Type');
    }

    public function juices()
    {
        return $this->belongsToMany('App\Juice')->withPivot('quantity');
    }
}
