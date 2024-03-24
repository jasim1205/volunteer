<?php

namespace App\Http\Controllers;

use App\Models\volunteerActivity;
use App\Models\volunteer;
use App\Models\Activity;
use Illuminate\Http\Request;

class VolunteerActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = volunteerActivity::where('volunteer_id',currentUserId());
        return view('volunteer.activity.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $activity = Activity::get();
        return view('volunteer.activity.create',compact('activity'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new volunteerActivity;
        $data->volunteer_id = currentUserId();
        $data->activity_id = $request->activity_id;
        $data->participate = $request->participate;
        if($data->save()){
            $this->notice::success('data successfully saved');
            return redirect()->route('volactivity.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(volunteerActivity $volunteerActivity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $volactivity = volunteerActivity::findOrFail(encryptor('decrypt',$id));
        $activity = Activity::get();
        return view('volunteer.activity.edit',compact('volactivity','activity'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $volactivity = volunteerActivity::findOrFail(encryptor('decrypt',$id));
        $data->activity_id = $request->activity_id;
        $data->participate = $request->participate;
        if($data->save()){
            $this->notice::success('data successfully Updated');
            return redirect()->route('volactivity.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $volactivity = volunteerActivity::findOrFail(encryptor('decrypt',$id));
        if($volactivity->delete()){
            return redirect()->route('volactivity.index');
        }
    }
}
