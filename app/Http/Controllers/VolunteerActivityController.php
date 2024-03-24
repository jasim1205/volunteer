<?php

namespace App\Http\Controllers;

use App\Models\volunteerActivity;
use App\Models\volunteer;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(volunteerActivity $volunteerActivity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, volunteerActivity $volunteerActivity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(volunteerActivity $volunteerActivity)
    {
        //
    }
}
