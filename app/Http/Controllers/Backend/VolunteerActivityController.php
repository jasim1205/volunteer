<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Skill;
use App\Models\volunteer;
use App\Models\volunteerActivity;
use Illuminate\Http\Request;

class VolunteerActivityController extends Controller
{
    public function blog_list(){
        $data = Blog::get();
        return view('blog.index',compact('data'));
    }

    public function skill_list(){
        $skill = Skill::get();
        return view('skill.index',compact('skill'));
    }
    public function activity_list(){
        $activity = volunteerActivity::get();
        return view('volactivitylist.activity',compact('activity'));
    }
}
