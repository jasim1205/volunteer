@extends('volunteer.layout.app')
@section('title',trans('Blog'))
@section('page',trans('Blog'))
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div>
                <a href="{{route('blog.create')}}" class="btn btn-success mb-2"><i class="fa fa-plus">Add New</i></a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Details</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    @foreach($blog as $b)
                    <tr>
                        <td>{{++$loop->index}}</td>
                        <td>{{$b->title}}</td>
                        <td>{{$b->blog_details}}</td>
                        <td> <img width="50px" class="rounde" src="{{asset('public/uploads/blog/'.$b->blog_image)}}" alt=""> </td>
                        <td>
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
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
       
    </div>
</div>
@endsection