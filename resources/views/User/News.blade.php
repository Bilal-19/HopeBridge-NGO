@extends('layout.main')


@section('main-section')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 mx-auto rounded shadow mt-5 mb-5 bg-light">
                <h2 class="text-center mt-5">Discover Our <span class="text-dark-green fw-bold">Latest News</span></h2>
                <p class="text-center">
                    Stay updated with our latest initiatives, stories, and insights on environmental projects and
                    sustainability efforts.
                </p>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-10 mx-auto bg-light rounded shadow">
                <div class="row">
                    @foreach ($newsRecords as $record)

                    @endforeach
                </div>
                <div class="row mt-5 mb-5">
                    @foreach ($newsRecords as $record)
                        <div class="col-md-4">
                            <img src="{{ asset('News/' . $record->news_featured_image) }}" alt=""
                                class="img-fluid rounded">
                            <p class="mb-0">{{ $record->news_content }}</p>
                            <p><i class="fa-solid fa-calendar"></i> {{ $record->publish_date }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
