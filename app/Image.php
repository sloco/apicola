<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'url',
    ];

    public function items()
    {
        return $this->belongsTo('App\Item');
    }
}