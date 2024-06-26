<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\volunteer;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = Blog::where('volunteer_id',currentUserId())->get();
        return view('volunteer.blog.index',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = volunteer::find(currentUserId());
        return view('volunteer.blog.create',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->blog_details = $request->blog_details;
        $blog->volunteer_id= currentUserId();
        if($request->hasFile('blog_image')){
            $imageName = rand(111,999).time().'.'.
            $request->blog_image->extension();
            $request->blog_image->move(public_path('uploads/blog'),$imageName);
            $blog->blog_image = $imageName;
        };
        if($blog->save()){
            $this->notice::success('data successfully saved');
            return redirect()->route('blog.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail(encryptor('decrypt',$id));
        return view('volunteer.blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail(encryptor('decrypt',$id));
        $blog->title = $request->title;
        $blog->blog_details = $request->blog_details;
        $blog->volunteer_id= currentUserId();
        if($request->hasFile('blog_image')){
            $imageName = rand(111,999).time().'.'.
            $request->blog_image->extension();
            $request->blog_image->move(public_path('uploads/blog'),$imageName);
            $blog->blog_image = $imageName;
        };
        if($blog->save()){
            $this->notice::success('data successfully Updated');
            return redirect()->route('blog.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail(encryptor('decrypt',$id));
        if($blog->delete()){
            $this->notice::warning('data successfully Deleted');
            return redirect()->route('blog.index');
        }
    }
}
