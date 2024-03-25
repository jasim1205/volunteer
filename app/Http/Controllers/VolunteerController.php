<?php

namespace App\Http\Controllers;

use App\Models\volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = volunteer::find(currentUserId());
        return view('volunteer.dashboard',compact('user'));
    }
    public function myProfile()
    {
        $user = volunteer::find(currentUserId());
        return view('volunteer.user.profile', compact('user'));
    }
    public function profile_edit(){
        $user = volunteer::find(currentUserId());
        return view('volunteer.user.edit', compact('user'));
    }
    public function save_profile(Request $request)
    {
        try {
            $user=volunteer::find(currentUserId());
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->gender = $request->gender;
            if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/user'), $imageName);
                $user->image = $imageName;
            }
            if ($user->save()){
                $this->notice::success('Profile Successfully Updated');
                return redirect()->route('myProfile');
            }
        } catch (Exception $e) {
            // dd($e);
            return redirect()->back()->withInput()->with('error', 'Please try again');
        }
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
    public function show(volunteer $volunteer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(volunteer $volunteer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, volunteer $volunteer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(volunteer $volunteer)
    {
        //
    }
}
