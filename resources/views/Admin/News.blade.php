@extends('adminDashboard')
@section('main-section')
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-4">
                <a href="{{ route('Add.News.Form') }}" class="brand-btn">Publish News</a>
            </div>
        </div>

        <div class="row mt-4 mb-3">
            {{-- {{$newsRecords}} --}}

            @foreach ($newsRecords as $record)
                <div class="col-md-3 mt-3 mb-3">
                    <img src="{{ asset('News/' . $record->news_featured_image) }}" alt="" class="img-fluid">
                    <div class="d-flex justify-content-between">
                        <a href="">Edit</a>
                    <a href="">Delete</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
