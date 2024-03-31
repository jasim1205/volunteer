<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Organization;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Event::get();
        return view('event.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $org = Organization::get();
        return view('event.create',compact('org'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $event = new Event;
        $event->organization_id = $request->organization_id;
        $event->title = $request->title;
        $event->description = $request->description;
        $event->address = $request->address;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        if($request->hasFile('image')){
            $imageName = rand(111,999).time().'.'.
            $request->image->extension();
            $request->image->move(public_path('uploads/event'),$imageName);
            $event->image = $imageName;
        };
        if($event->save()){
            $this->notice::success('data successfully Updated');
            return redirect()->route('event.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $event = Event::findOrFail(encryptor('decrypt',$id));
        $org = Organization::get();
        return view('event.edit',compact('event','org'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $event = Event::findOrFail(encryptor('decrypt',$id));
        $event->organization_id = $request->organization_id;
        $event->title = $request->title;
        $event->description = $request->description;
        $event->address = $request->address;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        if($request->hasFile('image')){
            $imageName = rand(111,999).time().'.'.
            $request->image->extension();
            $request->image->move(public_path('uploads/event'),$imageName);
            $event->image = $imageName;
        };
        if($event->save()){
            $this->notice::success('data successfully Updated');
            return redirect()->route('event.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $event = Event::findOrFail(encryptor('decrypt',$id));
        if($event->delete()){
            $this->notice::success('data successfully saved');
            return redirect()->route('event.index');
        }
    }
}
