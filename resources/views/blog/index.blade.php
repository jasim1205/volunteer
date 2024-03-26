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
                <h3>Blog List</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('dashboard')}}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Blog
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th>#</th>
                            <th>Volunteer Name</th>
                            <th>Title</th>
                            <th>Details</th>
                            <th>Image</th>
                            {{-- <th>Action</th> --}}
                        </tr>
                        @foreach($data as $b)
                        <tr>
                            <td>{{++$loop->index}}</td>
                            <td>{{$b->volunteer->name}}</td>
                            <td>{{$b->title}}</td>
                            <td>{{$b->blog_details}}</td>
                            <td> <img width="50px" class="rounde" src="{{asset('public/uploads/blog/'.$b->blog_image)}}" alt=""> </td>
                            {{-- <td>
                                <div class="d-flex">
                                    <a href="{{route('blog.edit',encryptor('encrypt',$b->id))}}" class=""><i class="fa fa-edit text-primary"></i>
                                    </a>
                                    <form action="{{ route('blog.destroy', encryptor('encrypt',$b->id))}}" method="post" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="border:none;background:none;">
                                            <span class=""><i class="fa fa-trash text-danger"></i></span>
                                        </button>
                                    </form>
                                </div>
                            </td> --}}
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection