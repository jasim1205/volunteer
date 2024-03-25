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
                <h3>Volunteer List</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
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
    <section class="section">
        <div class="card">
            
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="table1">
                        <thead>
                            <tr>
                                <th scope="col">{{__('#SL')}}</th>
                                <th scope="col">{{__('Name')}}</th>
                                <th scope="col">{{__('Email')}}</th>
                                <th scope="col">{{__('Phone')}}</th>
                                <th scope="col">{{__('Gender')}}</th>
                                <th scope="col">{{__('Image')}}</th>
                                <th scope="col">{{__('Status')}}</th>
                                <th class="white-space-nowrap">{{__('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $p)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td>{{$p->name}}</td>
                                <td>{{$p->email}}</td>
                                <td>{{$p->phone}}</td>
                                <td>
                                    @if($p->gender==1){{ 'Male' }}@else{{ 'Female' }}@endif
                                </td>
                                <td>
                                    <img src="{{ asset('public/uploads/user/'.$p->image) }}" width="100px" alt="">
                                </td>
                                <td>
                                    @if($p->status==1){{ 'Active' }}@else{{ 'Inactive' }}@endif
                                </td>
                                <td class="white-space-nowrap">
                                    <a href="{{route('user.edit',encryptor('encrypt',$p->id))}}" class="text-warning">
                                        <i class="fa fa-edit">Edit</i>
                                    </a>
                                     <form action="{{ route('organization.destroy', encryptor('encrypt',$p->id))}}" method="post" onsubmit="return confirm('Are you sure you want to delete this item?');">
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