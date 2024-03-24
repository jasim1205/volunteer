<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activity extends Model
{
    use HasFactory,SoftDeletes;
    public function organization(){
        return $this->belongsTo(Organization::class);
    }

    public function volunteeractivity(){
        return $this->hasMany(volunteerActivity::class,'activity_id','id');
    }

}
