<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Job;

class Application extends Model
{
    protected $fillable = [
        'id','name', 'gender', 'location', 'age', 'contact', 'id_no', 'availability', 'experience', 'job_applied','located','hours','contract','salary','duties','user_id', 't_status'
    ];

    public function jobs()
    {
        return $this->belongsTo('App\Job');
    }
}
