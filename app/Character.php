<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $fillable = [
        'user_id', 'name', 'class_type', 'level', 'is_main', 'raid_team'
    ];

    public function user()
    {
        return $this->belongsto('App\User');
    }
}
