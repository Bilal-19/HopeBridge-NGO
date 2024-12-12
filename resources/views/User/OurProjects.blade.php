@extends('layout.main')


@section('main-section')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 mt-5 mb-5 mx-auto shadow rounded">
                <h2 class="text-center mt-5">Explore Our <span class="text-dark-green fw-bold">Featured Projects</span></h2>
                <p>We believe that local actions can create global impact. Our projects focus on conservation, sustainable
                    agriculture, eco-friendly initiatives, and education.</p>

                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <form action="{{route('Our.Projects')}}" class="form input-group mb-5">
                            <select name="projectCategory" class="form-select">
                                <option value="All">All</option>
                                <option value="Ongoing">Ongoing</option>
                                <option value="Completed">Completed</option>
                            </select>
                            <button class="brand-btn">Search</button>
                        </form>
                    </div>
                </div>

                <div class="row d-flex justify-content-around">
                    @foreach ($allProjects as $project)
                        <div class="col-md-5 pb-4">
                            <img src="{{ asset('projects/thumbnail/' . $project->thumbnail_image) }}" alt=""
                                class="img-fluid rounded shadow">
                            <h4 class="mb-0 text-uppercase text-dark-green">{{ $project->title }}</h4>
                            <p class="mb-0">
                                <i class="fa-solid fa-bullseye"></i>
                                {{ $project->objective }}
                            </p>
                            <div class="d-flex justify-content-between">
                                <p><i class="fa-solid fa-calendar"></i> {{ $project->duration }} Months</p>
                                <p><i class="fa-solid fa-tag"></i> ${{ $project->budget }}</p>
                            </div>
                            {{-- <button class="brand-golden-button">View More</button> --}}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
