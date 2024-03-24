@extends('volunteer.layout.app')
@section('title',trans('activity'))
@section('page',trans('activity'))
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div>
                <a href="{{route('volactivity.create')}}" class="btn btn-success mb-2"><i class="fa fa-plus">Add New</i></a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
                        <th>#</th>
                        <th>Activity Name</th>
                        <th>Join Status</th>
                        <th>Action</th>
                    </tr>
                    @foreach($data as $b)
                    <tr>
                        <td>{{++$loop->index}}</td>
                        <td>{{$b->activity->name}}</td>
                        <td>@if($b->participate==1){{__('Yes')}} @else{{__('No')}} @endif
                        </td>
                        <td>
                            <div class="d-flex">
                                <a href="{{route('volactivity.edit',encryptor('encrypt',$b->id))}}" class=""><i class="fa fa-edit text-primary"></i>
                                </a>
                                <form action="{{ route('volactivity.destroy', encryptor('encrypt',$b->id))}}" method="post" onsubmit="return confirm('Are you sure you want to delete this item?');">
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