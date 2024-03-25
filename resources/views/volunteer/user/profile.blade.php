@extends('volunteer.layout.app')
@section('title',trans('Profile'))
@section('page',trans('Profile'))
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card w-100">
                <img src="{{ asset('public/uploads/user/'.$user->image) }}" class="w-100" alt="Profile Image" width="100%">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card p-4">
                <div class="d-flex">
                    <label for="" class="me-2"><strong>Name</strong></label>:
                    <span>{{ $user->name }}</span>
                </div>
                <div class="d-flex">
                    <label for="" class="me-2"><strong>Email</strong></label>:
                    <span>{{ $user->email }}</span>
                </div>
                <div class="d-flex">
                    <label for="" class="me-2"><strong>Contact</strong></label>:
                    <span>{{ $user->phone }}</span>
                </div>
                <div class="d-flex">
                    <label for="" class="me-2"><strong>Gender</strong></label>:
                    <span> @if($user->gender==1){{ 'Male' }}@else{{ 'Female' }}@endif</span>
                </div>
                <div class="d-flex">
                    <label for="" class="me-2"><strong>Status</strong></label>:
                    <span>@if($user->status==1){{ 'Active' }}@else{{ 'Inactive' }}@endif</span>
                </div>
            </div>
            <a href="{{ route('profile_edit') }}" class="btn btn-primary">Edit Profile</a>
        </div>
    </div>
</div>
@endsection