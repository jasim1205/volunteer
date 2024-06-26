<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class volunteer extends Model
{
    use HasFactory,SoftDeletes;

    public function blog(){
        return $this->hasMany(Blog::class);
    }
    public function skill(){
        return $this->hasMany(Skill::class);
    }
}
