<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Organization extends Model
{
    use HasFactory,SoftDeletes;
    public function activity(){
        return $this->hasMany(Activity::class);
    }
    public function event(){
        return $this->hasMany(Event::class);
    }
}
