<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $fillable = [
        'title',
        'path'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
