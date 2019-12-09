<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'team';
    protected $fillable = [
        'title',
        'content',
        'facebook',
        'instagram',
        'path'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
