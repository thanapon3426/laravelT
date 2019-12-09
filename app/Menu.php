<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
    protected $fillable = [
        'title',
        'price',
        'discount',
        'type',
        'status',
        'path'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
