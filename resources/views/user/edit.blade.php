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
            <h3>Volunteer</h3>
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
                    Volunteer
                </li>
                </ol>
            </nav>
            </div>
        </div>
    </div>
    <div class="page-content">
        <section class="section">
            <div class="card">
                
                <div class="card-body">
                    <form action="{{route('user_update',encryptor('encrypt',$data->id))}}" method="post">
                        @csrf
                        @method('Post')
                        <div class="row">
                             <div class="col-md-10">
                                <div class="form-group">
                                    <label for="basicInput">Status</label>
                                    <select name="status" id="" class="form-control">
                                        <option value="1" @if(old('status',$data->status)==1) selected @endif>Active</option>
                                        <option value="2" @if(old('status',$data->status)==2) selected @endif>Inactive</option>
                                    </select>
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