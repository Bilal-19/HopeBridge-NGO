@extends('adminDashboard')
@section('main-section')
    <div class="container-fluid">
        <div class="row mt-5">
            <h3>Freqeuntly Asked <span class="text-dark-green">Questions</span></h3>
        </div>

        <div class="row mt-3">
            <div class="col-md-4">
                <a href="{{route('FAQ.Form')}}" class="brand-btn">Add New FAQs</a>
            </div>
        </div>
    </div>
@endsection
