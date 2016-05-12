<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_usergroup_map extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'group_id'
    ];

    public $timestamps = false;
}
