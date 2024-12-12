@extends('adminDashboard')
@section('main-section')
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-6 mx-auto">
                <img src="{{ asset('partners/' . $findPartner->partner_logo) }}" alt="" class="img-fluid">
                <h4>{{$findPartner->partner_name}}</h4>
            </div>
        </div>
    </div>
@endsection
