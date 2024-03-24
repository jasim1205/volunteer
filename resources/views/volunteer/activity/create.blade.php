@extends('volunteer.layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="card p-3">
            <form class="form" method="post"action="{{route('volactivity.store')}}" enctype="multipart/form-data">
                @csrf
                <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger1">
                    <div class="row g-3">
                        <div class="col-12 col-lg-6">
                            <label class="col-form-label"><strong>Activity Name </strong><i class="text-danger">*</i></label>
                            <select name="activity_id" id="" class="form-control">
                                <option value="">select activity</option>
                                @foreach($activity as $value)
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 col-lg-6">
                            <label class="col-form-label"><strong>Join Status</strong></label>
                            <select name="participate" id="" class="form-control">
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
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