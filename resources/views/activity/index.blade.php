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
                <h3>Activity List</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
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
    <section class="section">
        <div class="card">
            <div class="card-header d-flex">
                <a class="btn btn-primary" href="{{route('activity.create')}}"><i class="fa fa-plus"></i>Add New</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="table1">
                        <thead>
                            <tr>
                                <th scope="col">{{__('#SL')}}</th>
                                <th scope="col">{{__('Organization')}}</th>
                                <th scope="col">{{__('Activity Name')}}</th>
                                <th scope="col">{{__('Activity type')}}</th>
                                <th scope="col">{{__('Place')}}</th>
                                <th scope="col">{{__('Start Date')}}</th>
                                <th scope="col">{{__('Start Date')}}</th>
                                <th class="white-space-nowrap">{{__('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($activity as $p)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td>{{$p->organization?->name}}</td>
                                <td>{{$p->name}}</td>
                                <td>{{$p->activity_type}}</td>
                                <td>{{$p->place}}</td>
                                <td>{{$p->start_date}}</td>
                                <td>{{$p->end_date}}</td>
                                <td class="white-space-nowrap">
                                    <a href="{{route('activity.edit',encryptor('encrypt',$p->id))}}" class="text-warning">
                                        <i class="fa fa-edit">Edit</i>
                                    </a>
                                     <form action="{{ route('activity.destroy', encryptor('encrypt',$p->id))}}" method="post" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="border:none;background:none;">
                                        <span class=""><i class="fa fa-trash text-danger">Delete</i></span>
                                    </button>
                                </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <th colspan="14" class="text-center">No Data Found</th>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection