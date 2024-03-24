@extends('volunteer.layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="card">
        <form class="form" method="post"action="{{route('blog.store')}}">
                                @csrf
                    <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger1">

                        <div class="row g-3">
                            <div class="col-12 col-lg-6">
                                 <label class="col-sm-3 col-form-label"><strong>Blog Tilte  </strong><i class="text-danger">*</i></label>
                                
                                <input type="text" id="" class="form-control shadow-lg" value="{{ old('title')}}" name="title">

                                
                            </div>
                            <div class="col-12 col-lg-6">
                                <label class="col-sm-3 col-form-label"><strong>Blog Details</strong></label>
                                
                                <input type="text" id="blog_details" class="form-control shadow-lg" value="{{ old('blog_details')}}" name="blog_details" >
                                
                            </div>
                            <div class="col-12 col-lg-6">
                                <label class="col-sm-3 col-form-label"><strong>Blog Imgae</strong></label>
                                
                                <input type="file" id="blog_image" class="form-control shadow-lg" value="{{ old('blog_image')}}" name="blog_image" >
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