<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\volunteer;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skill = Skill::where('volunteer_id',currentUserId())->get();
        return view('volunteer.skill.index',compact('skill'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = volunteer::find(currentUserId());
        return view('volunteer.skill.create',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $skill = new Skill;
        $skill->skill_name = $request->skill_name;
        $skill->description = $request->description;
        $skill->volunteer_id= currentUserId();
        if($skill->save()){
            return redirect()->route('skill.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $skill = Skill::findOrFail(encryptor('decrypt',$id));
        return view('volunteer.skill.edit',compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $skill = Skill::findOrFail(encryptor('decrypt',$id));
        $skill->skill_name = $request->skill_name;
        $skill->description = $request->description;
        if($skill->save()){
            return redirect()->route('skill.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $skill = Skill::findOrFail(encryptor('decrypt',$id));
        if($skill->delete()){
            return redirect()->route('skill.index');
        }
    }
}
