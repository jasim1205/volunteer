<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function user_list(){
        $data = volunteer::get();
        return view('user.index',compact('data'));
    }
    public function user_edit($id){
        $data = volunteer::findOrFail(encryptor('decrypt',$id));
        return view('user.edit',compact('data'));
    }
    public function user_update(Request $request,$id){
        $data = volunteer::findOrFail(encryptor('decrypt',$id));
        $data->status = $request->status;
        if($data->save()){
            $this->notice::success('data successfully update');
            return redirect()->route('user.list');
        }
    }
}
