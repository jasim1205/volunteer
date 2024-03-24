@extends('volunteer.layout.app')
@section('title',trans('Blog'))
@section('page',trans('Blog'))
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div>
                <a href="{{route('skill.create')}}" class="btn btn-success mb-2"><i class="fa fa-plus">Add New</i></a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
                        <th>#</th>
                        <th>Skill Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    @foreach($skill as $b)
                    <tr>
                        <td>{{++$loop->index}}</td>
                        <td>{{$b->skill_name}}</td>
                        <td>{{$b->description}}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{route('skill.edit',encryptor('encrypt',$b->id))}}" class="px-2"><i class="fa fa-edit text-primary"></i>
                                </a>
                                <form action="{{ route('skill.destroy', encryptor('encrypt',$b->id))}}" method="post">
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