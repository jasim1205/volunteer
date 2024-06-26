@extends('volunteer.layout.app')
@section('title',trans('Profile'))
@section('page',trans('Profile'))
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="card w-100 p-3">
                <h4>Update your profile</h4>
                <form action="{{ route('save_profile') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">name</label>
                        <input type="text" name="name" value="{{ $user->name }}" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">E-mail</label>
                        <input type="text" name="email" value="{{ $user->email }}" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Contact Number</label>
                        <input type="text" name="phone" value="{{ $user->phone }}"  id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="image" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Gender</label>
                        {{-- <option value="1" @if(old('status',$data->status)==1) selected @endif>Active</option>
                                        <option value="2" @if(old('status',$data->status)==2) selected @endif>Inactive</option> --}}
                        <select name="gender" id="" class="form-control">
                            <option value="1"@if(old('gender',$user->gender)==1) selected @endif>Male</option>
                            <option value="2"@if(old('gender',$user->gender)==2) selected @endif>Female</option>
                            <option value="3"@if(old('gender',$user->gender)==3) selected @endif>Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection