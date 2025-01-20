@extends('adminDashboard')
@section('main-section')
    <div class="container-fluid">
        <div class="row mt-3">
            <h3 class="text-center">All <span class="text-dark-green fw-bold">Published News</span></h3>
        </div>

        <div class="row mt-3">
            <div class="col-md-4">
                <a href="{{ route('Add.News.Form') }}" class="brand-btn">Publish News</a>
            </div>
        </div>

        <div class="row mt-4 mb-3">
            {{-- {{$newsRecords}} --}}

            @foreach ($newsRecords as $record)
                <div class="col-md-3 mt-3 mb-3">
                    <img src="{{ asset('News/' . $record->news_featured_image) }}" alt="" class="img-fluid rounded">
                    <div class="d-flex justify-content-end align-items-between">
                        <a href="{{route('Edit.News', ['id' => $record->id])}}" class="text-primary mx-2"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="{{route('Delete.News', ['id' => $record->id])}}" class="text-danger"><i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
