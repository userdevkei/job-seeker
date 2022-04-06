<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Application;

class Job extends Model
{
    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public  function apps()
    {
        return $this->hasMany('App\Application');
    }
}
