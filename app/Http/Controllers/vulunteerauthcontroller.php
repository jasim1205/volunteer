<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\volunteer;
use App\Http\Requests\volunteer\SignupRequest;
use App\Http\Requests\volunteer\SigninRequest;
use Illuminate\Support\Facades\Hash;
use Exception;

class vulunteerauthcontroller extends Controller
{
    public function signUpForm(){
        return view('authvolunteer.register');
    }

    public function signUpStore(SignupRequest $request){
        try{
            $volunteer=new volunteer;
            $volunteer->name=$request->FullName;
            $volunteer->phone=$request->phone;
            $volunteer->email=$request->email;
            $volunteer->password=Hash::make($request->password);
            if($volunteer->save())
                return redirect()->route('userlogin')->with('success','Successfully Registred');
            else
                return redirect()->route('userlogin')->with('danger','Please try again');
        }catch(Exception $e){
            dd($e);
            return redirect()->route('userlogin')->with('danger','Please try again');
        }

    }
    public function signInForm(){
        return view('authvolunteer.login');
    }
    public function signInCheck(SigninRequest $request){
        try{
            // dd($request->all());
            $volunteer=volunteer::where('phone',$request->username)
                        ->orWhere('email',$request->username)->first();
            if($volunteer){
                if($volunteer->status==1){
                    if(Hash::check($request->password , $volunteer->password)){
                        $this->setSession($volunteer);
                        $this->notice::success('Successfully login');
                        return redirect()->route('userdashboard');
                    }else
                        $this->notice::error('phone number or password is wrong!');
                        return redirect()->route('userlogin');
                }else
                    $this->notice::error('You are not active user. Please contact to authority!');
                    return redirect()->route('userlogin');
        }else
                $this->notice::error('phone number or password is wrong!');
                return redirect()->route('userlogin');
        }catch(Exception $e){
            dd($e);
            $this->notice::error('phone number or password is wrong!');
            return redirect()->route('userlogin');
        }
    }

    public function setSession($volunteer){
        return request()->session()->put([
                'userId'=>encryptor('encrypt',$volunteer->id),
                'userName'=>encryptor('encrypt',$volunteer->name),
                'email'=>encryptor('encrypt',$volunteer->email),
                'language'=>encryptor('encrypt',$volunteer->language),
                'Contact'=>encryptor('encrypt',$volunteer->phone),
                'image'=>$volunteer->image ?? 'no-image.png',
            ]
        );
    }

    public function signOut(){
        request()->session()->flush();
        return redirect()->route('userlogin')->with('danger','Succfully Logged Out');
    }
    public function show(User $data)
    {
        return view('backend.user.profile', compact('data'));
    }
}
