<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class volunteerActivity extends Model
{
    use HasFactory,SoftDeletes;

    public function volunteer(){
        return $this->belongsTo(volunteer::class);
    }
    public function activity(){
        return $this->belongsTo(Activity::class,'activity_id','id');
    }
}
