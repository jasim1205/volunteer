@extends('volunteer.layout.app')
@section('title',trans('Skill Add'))
@section('page',trans('Skill Add'))
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="card p-3">
            <form class="form" method="post"action="{{route('skill.update',encryptor('encrypt',$skill->id))}}" enctype="multipart/form-data">
                @csrf
                @method('Patch')
                <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger1">
                    <div class="row g-3">
                        <div class="col-12 col-lg-6">
                            <label class=" col-form-label"><strong>Skill Name <i class="text-danger">*</i></strong></label>
                            <input type="text" id="" class="form-control shadow" value="{{ old('skill_name',$skill->skill_name)}}" name="skill_name">
                        </div>
                        <div class="col-12 col-lg-6">
                            <label class=" col-form-label"><strong>Description</strong><i class="text-danger">*</i></label>
                            <input type="text" id="description" class="form-control shadow-lg" value="{{ old('description',$skill->description)}}" name="description" >
                        </div>
                        <div class="col-12 col-lg-6">
                            <button class="btn btn-success px-4" type="submit">Submit</button>
                        </div>
                    </div><!---end row-->
                </div>
            </form>
        </div>
    </div>
</div>
@endsection