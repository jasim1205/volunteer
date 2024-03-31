@extends('frontend.layout.master')
@section('content')
    <div class="container">
        <h2>Upcoming Events</h2>
        @forelse($event as $value)
        <div class="organization">
            <h3>{{ $value->title }}</h3>
            <img src="{{ asset('public/uploads/event/'.$value->image) }}" alt="" width="100%" height="200px">
            <p>{{ $value->description }}</p>
            <p>{{ $value->address }}</p>
            <p>{{ $value->start_date }}</p>
            {{-- <a href="#">Visit Website</a> --}}
        </div>
        @empty
        <p>No Event Found</p>
        @endforelse
        {{-- <div class="event">
            <img src="event2.jpg" alt="Event 2">
            <div class="event-details">
                <h3>Event Title 2</h3>
                <p>Date: February 1, 2025</p>
                <p>Location:Chittagong</p>
                <p>Description:Read...</p>
                <a href="#">Learn More</a>
            </div>
        </div> --}}
        <!-- Add more events here -->
    </div>
@endsection