<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Organization;
use App\Models\Event;
use App\Models\Blog;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $org =Organization::count();
        $activity =Activity::count();
        $event =Event::count();
        $blog =Blog::count();
        return view('admindashboard',compact('org','activity','event','blog'));  
    }
}
