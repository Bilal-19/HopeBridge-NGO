@extends('layout.main')


@section('main-section')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 mx-auto rounded shadow mt-5 mb-5 bg-light">
                <h2 class="text-center mt-5">Support Us With <span class="text-dark-green fw-bold">Your Donations!</span></h2>
                <p class="text-center">
                    All donations you will make to our association will be used for projects can be carried out by our
                    association in accordance with our statutes and laws of the Republic of Pakistan.
                </p>
            </div>
        </div>

        <div class="row d-flex justify-content-around align-items-center mt-2 mb-5">
            <div class="col-md-3 rounded pt-3 pb-3 donation-card">
                <h4>Euro Account</h4>
                <p class="mb-0"><b>Name: </b>John Smith</p>
                <p class="mb-0"><b>IBAN: </b>FR76 3000 6000 0112 3456 7890 189</p>
                <p class="mb-0"><b>Bank Code: </b>01234</p>
            </div>

            <div class="col-md-3 donation-card rounded pt-3 pb-3">
                <h4>Dollar Account</h4>
                <p class="mb-0"><b>Name: </b>Emily Brown</p>
                <p class="mb-0"><b>IBAN: </b>US44 1234 5678 9012 3456 7890</p>
                <p class="mb-0"><b>Bank Code: </b>11045</p>
            </div>

            <div class="col-md-3 donation-card rounded pt-3 pb-3">
                <h4>Dirham Account</h4>
                <p class="mb-0"><b>Name: </b>Ahmed Al Mansoori</p>
                <p class="mb-0"><b>IBAN: </b>AE07 0331 2345 6789 0123 4567</p>
                <p class="mb-0"><b>Bank Code: </b>04321</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 mx-auto mb-5">
                <h2 class="text-center mt-5">Explore Our <span class="text-dark-green fw-bold">Featured Projects</span></h2>
            </div>
        </div>

        <div class="row">
            @foreach ($projectRecords as $record)
                {{-- {{ $record }} --}}
                <div class="col-md-3">
                    <img src="{{ asset('projects/thumbnail/' . $record->thumbnail_image) }}" alt=""
                        class="img-fluid rounded">
                        <p>{{$record->objective}}</p>
                </div>
            @endforeach
        </div>

        <div class="row d-flex justify-content-center mb-5">
            <a href="{{route('Our.Projects')}}" class="view-more-btn text-decoration-none">View Our Projects</a>
        </div>
    </div>
@endsection
