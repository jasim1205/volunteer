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
            <h3>Activity</h3>
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
                    Activity
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
                    <h4 class="card-title">Edit Activity</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('activity.update',encryptor('encrypt',$activity->id))}}" method="post">
                        @csrf
                        @method('Patch')
                        <div class="row">
                             <div class="col-md-10">
                                <div class="form-group">
                                    <label for="basicInput">Organization</label>
                                    <select name="organization_id" id="" class="form-control">
                                        <option value="">Select Organization</option>
                                        @foreach($org as $value)
                                            <option value="{{ $value->id }}" {{ old('organization_id',$activity->organization_id)==$value->id?"selected":""}}>{{ $value->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Name</label>
                                    <input type="text" name="name"  value="{{ old('name',$activity->name)}}"  class="form-control" id="basicInput" />
                                </div>
                                 <div class="form-group">
                                    <label for="basicInput">Activity Type</label>
                                    <input type="text" name="activity_type"  value="{{ old('activity_type',$activity->activity_type)}}" class="form-control" id="basicInput" />
                                </div>
                                 <div class="form-group">
                                    <label for="basicInput">Place</label>
                                    <input type="text" name="place"  value="{{ old('place',$activity->place)}}"  class="form-control"
                                    id="basicInput"/>
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Star Date</label>
                                    <input type="date" name="start_date"  value="{{ old('start_date',$activity->start_date)}}"   class="form-control" id="basicInput" placeholder="dd----yy"/>
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">End Date</label>
                                    <input type="date" name="end_date"  value="{{ old('end_date',$activity->end_date)}}"  class="form-control" id="basicInput" placeholder="dd----yy"/>
                                </div>
                                  <button type="submit" class="btn btn-primary px-5 py-2 mx-5 my-3">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection