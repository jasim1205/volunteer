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
            <h3>Organization</h3>
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
                    Organization
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
                    <h4 class="card-title">Add New Organization</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('organization.update',encryptor('encrypt',$org->id))}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('Patch')
                        <div class="row">
                             <div class="col-md-10">
                                <div class="form-group">
                                    <label for="basicInput">Name</label>
                                    <input type="text" name="name" value="{{ old('name',$org->name)}}" class="form-control" id="basicInput" />
                                </div>
                                 <div class="form-group">
                                    <label for="basicInput">E-mail</label>
                                    <input type="text" name="email" value="{{ old('email',$org->email)}}" class="form-control" id="basicInput" />
                                </div>
                                 <div class="form-group">
                                    <label for="basicInput">Contact</label>
                                    <input type="text" name="phone"  value="{{ old('phone',$org->phone)}}" class="form-control"
                                    id="basicInput"/>
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Representative</label>
                                    <input type="text" name="representative"  value="{{ old('representative',$org->representative)}}" class="form-control" id="basicInput"/>
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">About</label>
                                    <input type="text" name="about"  value="{{ old('about',$org->about)}}" class="form-control" id="basicInput"/>
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Address</label>
                                    <textarea name="address" id="" class="form-control"> {{($org->address)}}"</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Image</label>
                                    <input type="file" name="image" class="form-control" id="basicInput"/>
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