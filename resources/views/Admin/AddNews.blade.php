@extends('adminDashboard')
@section('main-section')
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-6 mx-auto">
                <h3 class="text-center">Add <span class="text-dark-green">News</span></h3>
                <form action="{{route('Add.News.To.DB')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" class="form-control" name="news_headline" max="150"
                        placeholder="Enter news headline">
                    <small class="text-danger">
                        @error('news_headline')
                            {{ $message }}
                        @enderror
                    </small>

                    <textarea name="news_description" cols="30" rows="3" class="form-control mt-3" minlength="50"
                        placeholder="Write news description here" style="resize: none"></textarea>
                        <small class="text-danger">
                            @error('news_description')
                                {{ $message }}
                            @enderror
                        </small>

                    @php
                        $newsCategories = [
                            'Campaigns and Fundraisers',
                            'Events and Workshops',
                            'Success Stories',
                            'Volunteer Spotlights',
                            'Press Releases',
                            'Community Impact Updates',
                            'Advocacy and Awareness',
                            'Partnerships and Collaborations',
                            'Emergency Alerts and Updates',
                            'Policy Changes and Announcements',
                        ];
                    @endphp

                    <select name="news_category" class="form-select mt-3">
                        <option value="">Select News Category</option>
                        @foreach ($newsCategories as $category)
                            <option value="{{ $category }}">{{ $category }}</option>
                        @endforeach
                    </select>
                    <small class="text-danger">
                        @error('news_category')
                            {{ $message }}
                        @enderror
                    </small>

                    <label class="form-label mt-3 mb-0 d-block">Upload Featured Image: </label>
                    <input type="file" name="featuredImg" class="form-control">
                    <small class="text-danger">
                        @error('featuredImg')
                            {{ $message }}
                        @enderror
                    </small>

                    <input type="date" name="publish_date" class="form-control mt-3">
                    <small class="text-danger">
                        @error('publish_date')
                            {{ $message }}
                        @enderror
                    </small>

                    <button class="d-block brand-btn mt-3">Publish News</button>
                </form>
            </div>
        </div>
    </div>
@endsection