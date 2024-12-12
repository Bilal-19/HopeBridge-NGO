@extends('adminDashboard')
@section('main-section')
    <div class="container-fluid">
        <div class="row mt-5">
            <h3 class="text-center">Edit <span class="text-dark-green fw-bold">Partner</span> Information</h3>
        </div>

        <div class="row">
            <div class="col-md-6 mx-auto">
                <form action="{{ route('Update.Partner.Info', ['id' => $findPartner->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <p class="mb-0">Partner Company Logo Image Preview: </p>
                    <img src="{{asset('partners/' . $findPartner->partner_logo)}}" alt="" class="img-fluid" height="100px" width="100px">

                    <label class="d-block form-label mb-0 mt-3">Upload Updated Partner Logo: </label>
                    <input type="file" name="partner_logo" class="form-control">
                    <small class="d-block text-danger">
                        @error('partner_logo')
                            {{ 'Please upload logo of your partner' }}
                        @enderror
                    </small>

                    <label class="form-label mb-0 mt-3">Enter Updated Partner Name: </label>
                    <input type="text" name="partner_name" class="form-control" autocomplete="off" value="{{$findPartner->partner_name}}">
                    <small class="d-block text-danger">
                        @error('partner_name')
                            {{ 'Please enter your partner name' }}
                        @enderror
                    </small>

                    <button class="brand-btn mt-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
