@extends('layouts.app')
@section('content')
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
    <i class="bi bi-justify fs-3"></i>
    </a>
</header>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Event</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
            <nav
                aria-label="breadcrumb"
                class="breadcrumb-header float-start float-lg-end"
            >
                <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('dashboard')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Event
                </li>
                </ol>
            </nav>
            </div>
        </div>
    </div>
    <div class="page-content">
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add New Event</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('event.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                             <div class="col-md-10">
                                <div class="form-group">
                                    <label for="basicInput">Organization</label>
                                    <select name="organization_id" id="" class="form-control">
                                        <option value="">Select Organization</option>
                                        @foreach($org as $value)
                                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Title</label>
                                    <input type="text" name="title" class="form-control" id="basicInput" />
                                </div>
                                 <div class="form-group">
                                    <label for="basicInput">Description</label>
                                    <textarea name="description" id="" class="form-control"></textarea>
                                </div>
                                 <div class="form-group">
                                    <label for="basicInput">Address</label>
                                    <input type="text" name="address" class="form-control"
                                    id="basicInput"/>
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Start date</label>
                                    <input type="date" name="start_date" class="form-control" id="basicInput"/>
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">End date</label>
                                    <input type="date" name="end_date" class="form-control" id="basicInput"/>
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">image</label>
                                    <input type="file" name="image" id="" class="form-control">
                                </div>
                                  <button type="submit" class="btn btn-primary px-5 py-2 my-3">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection