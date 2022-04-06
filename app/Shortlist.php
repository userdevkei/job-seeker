<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shortlist extends Model
{
    protected $fillable = [
'id','name', 'gender', 'location', 'age', 'contact', 'id_no', 'availability', 'experience', 'job_applied','status','located','hours','contract','salary','duties', 'user_id', 't_status'
        ];


}
