@extends('volunteer.layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        
        <div class="col-sm-12">
            <a href="{{route('blog.create')}}" class="btn btn-primary"><i class="fa fa-plus">ADD NEW</i></a>
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
                        <td> <img width="50px" height="100px" class="rounde" src="{{asset('public/uploads/blog/'.$b->blog_image)}}" alt=""> </td>
                        <td>
                            <a href="{{route('blog.edit',encryptor('encrypt',$b->id))}}" class=""><i class="fa fa-edit text-primary">Edit</i>
                                        </a>
                                        <form action="{{ route('blog.destroy', encryptor('encrypt',$b->id))}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" style="border:none;background:none;">
                                                <span class=""><i class="fa fa-trash text-danger">Delete</i></span>
                                            </button>
                                        </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
       
    </div>
</div>
@endsection