<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organization;
use App\Models\Event;
use App\Models\Blog;

class FrontEndController extends Controller
{
    
    public function home(){
        return view('frontend.home');
    }
    public function organization(){
        $org = Organization::get();
        return view('frontend.organization',compact('org'));
    }
    public function event(){
        $event = Event::get();
        return view('frontend.event',compact('event'));
    }
    public function blog(){
        $blog = Blog::get();
        return view('frontend.blog',compact('blog'));
    }
    // public function home(){
    //     return view('frontend.home');
    // }
}
