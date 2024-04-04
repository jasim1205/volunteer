@extends('frontend.layout.master')
@section('content')
     <div class="container">
        <h2>Organizations</h2>
        <!-- Organization profiles -->
        @foreach($org as $value)
        <div class="organization">
            
            <h3>{{ $value->name }}</h3>
            <img src="{{ asset('public/uploads/organization/'.$value->image) }}" alt="" width="100%" height="200px">
            <p>{{ $value->about }}</p>
            <p>{{ $value->address }}</p>
            {{-- <a href="#">Visit Website</a> --}}
        </div>
        {{-- <div class="organization">
            <img src="organization2.jpg" alt="Organization 2">
            <h3>Organization Name</h3>
            <p>Description of the organization goes here.</p>
            <a href="#">Visit Website</a>
        </div> --}}
        @endforeach
        <!-- Add more organization profiles as needed -->
    </div>
@endsection