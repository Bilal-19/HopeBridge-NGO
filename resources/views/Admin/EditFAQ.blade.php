@extends('adminDashboard')
@section('main-section')
    <div class="container-fluid">
        <div class="row mt-5">
            <h3 class="text-center">Edit <span class="text-dark-green fw-bold">FAQs</span></h3>
        </div>

        <div class="row mt-3">
            <div class="col-md-6 mx-auto">
                <form action="{{route('Update.FAQ', ['id'=>$findFAQrecord->id])}}" method="post">
                    @csrf
                    <input type="text" name="question" class="form-control mb-3" placeholder="Enter question" value="{{$findFAQrecord->question}}">
                    <input type="text" name="answer" class="form-control mb-3" placeholder="Enter answer" value="{{$findFAQrecord->answer}}">
                    <button class="brand-btn">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
