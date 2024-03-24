<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Organization;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activity = Activity::get();
        return view('activity.index',compact('activity'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $org = Organization::get();
        return view('activity.create',compact('org'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $activity = new Activity;
        $activity->organization_id = $request->organization_id;
        $activity->name = $request->name;
        $activity->activity_type = $request->activity_type;
        $activity->place = $request->place;
        $activity->start_date = $request->start_date;
        $activity->end_date = $request->end_date;
        if($activity->save()){
            $this->notice::success('data successfully saved');
            return redirect()->route('activity.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Activity $activity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $activity = Activity::findOrFail(encryptor('decrypt',$id));
        $org = Organization::get();
        return view('activity.edit',compact('activity','org'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $activity = Activity::findOrFail(encryptor('decrypt',$id));
        $activity->organization_id = $request->organization_id;
        $activity->name = $request->name;
        $activity->activity_type = $request->activity_type;
        $activity->place = $request->place;
        $activity->start_date = $request->start_date;
        $activity->end_date = $request->end_date;
        if($activity->save()){
            $this->notice::success('data successfully saved');
            return redirect()->route('activity.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $activity = Activity::findOrFail(encryptor('decrypt',$id));
        if($activity->delete()){
            $this->notice::success('data successfully saved');
            return redirect()->route('activity.index');
        }
    }
}
