<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Organization::get();
        return view('organization.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('organization.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $organization = new Organization;
        $organization->name = $request->name;
        $organization->phone = $request->phone;
        $organization->representative = $request->representative;
        $organization->about = $request->about;
        $organization->address = $request->address;
        $organization->email = $request->email;
        if($organization->save()){
            $this->notice::success('data successfully saved');
            return redirect()->route('organization.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Organization $organization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $org = Organization::findOrFail(encryptor('decrypt',$id));
        return view('organization.edit',compact('org'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $org = Organization::findOrFail(encryptor('decrypt',$id));
        $org->name = $request->name;
        $org->phone = $request->phone;
        $org->representative = $request->representative;
        $org->about = $request->about;
        $org->address = $request->address;
        $org->email = $request->email;
        if($org->save()){
            $this->notice::success('data successfully Updated');
            return redirect()->route('organization.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $org = Organization::findOrFail(encryptor('decrypt',$id));
        if($org->delete()){
            $this->notice::warning('data successfully Deleted');
            return redirect()->route('organization.index');
        }
    }
}
