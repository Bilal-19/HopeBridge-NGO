@extends('layout.main')


@section('main-section')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 mx-auto bg-light rounded mt-5 mb-5 shadow text-center">
                <h2 class="text-center mt-5">Building a Better <span class="text-dark-green fw-bold">Future Together</span>
                </h2>
                <p class="text-center">
                    We are proud to work alongside national and international organizations and programs.
                </p>

                <div class="row mt-3 mb-5 mx-auto d-flex justify-content-center align-items-center">
                    <div class="col-md-3">
                        <a href="{{route('Contact.Us')}}" class="brand-golden-button">Become Our Partner</a>
                    </div>
                    <div class="col-md-4">
                        <form action="" class="input-group">
                            <input type="search" name="search" class="form-control" placeholder="Search our partner name">
                            <button class="brand-golden-button">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 mx-auto rounded shadow pt-5 pb-5 mb-5 bg-light">
                <div class="row">
                    @foreach ($partnersRecord as $record)
                        <div class="col-md-3">
                            <img src="{{ asset('partners/' . $record->partner_logo) }}" class="img-fluid rounded object-fit-cover" style="height: 270px; width: 270px">
                            {{-- <h4 class="text-center text-dark-green">{{ $record->partner_name }}</h4> --}}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
