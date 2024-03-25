@extends('volunteer.layout.app')
@section('title',trans('Update Blog'))
@section('page',trans('Update Blog'))
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="card">
            <form class="form" method="post"action="{{route('blog.update',encryptor('encrypt',$blog->id))}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger1">
                    <div class="row g-3">
                        <div class="col-12 col-lg-6">
                            <label class=" col-form-label"><strong>Blog Tilte </strong><i class="text-danger">*</i></label>
                            <input type="text" id="" class="form-control" value="{{ old('title',$blog->title)}}" name="title">
                        </div>
                        <div class="col-12 col-lg-6">
                            <label class=" col-form-label"><strong>Blog Details</strong></label>
                            <input type="text" id="blog_details" class="form-control " value="{{ old('blog_details',$blog->blog_details)}}" name="blog_details" >
                        </div>
                        <div class="col-12 col-lg-6">
                            <label class=" col-form-label"><strong>Blog Imgae</strong></label>
                            <input type="file" id="blog_image" class="form-control " name="blog_image"  value="{{ old('blog_image')}}">
                        </div>
                        <div class="col-12 col-lg-6">
                            <button class="btn btn-success px-4" style="margin-top: 35px" type="submit">Submit</button>
                        </div>
                    </div><!---end row-->
                </div>
            </form>
        </div>
    </div>
</div>
@endsection