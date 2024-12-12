@extends('layout.main')


@section('main-section')
    <div class="container-fluid">
        <div class="row mt-2">
            <div class="col-md-8 mx-auto">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('assets/images/slider_img_1.png') }}" class="d-block w-100 rounded h-50"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/images/slider_img_2.png') }}" class="d-block w-100 rounded"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/images/slider_img_3.png') }}" class="d-block w-100 rounded"
                                alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6 mx-auto">
                <h3 class="text-dark-green">Who We Are?</h3>
                <p>We empower communities to protect the environment through education, collaboration and sustainable
                    practices.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 mx-auto text-center">
                <h2 class="text-dark-green mb-0">80+</h2>
                <p>Eco Projects</p>
            </div>

            <div class="col-md-3 mx-auto text-center">
                <h2 class="text-dark-green mb-0">2K+</h2>
                <p>Donations Raised</p>
            </div>

            <div class="col-md-3 mx-auto text-center">
                <h2 class="text-dark-green mb-0">100+</h2>
                <p>Volunteers</p>
            </div>
        </div>

        <div class="row d-flex justify-content-center align-items-center mt-5">
            <div class="col-md-4">
                <h3>Explore Our</h3>
                <h3 class="text-dark-green fw-bold">Featured Projects</h3>
            </div>
            <div class="col-md-6">
                <p>We believe that local actions can create global impact. Our projects focus on conservations, sustainable
                    agriculture, eco-friendly initiatives, and education. By collaborating with partners across various
                    sectors, we implemented meaningful, long-lasting changes in rural and urban communities.</p>
            </div>
        </div>


        {{-- This section contain 4 projects which will be retrieved from database --}}
        <div class="row">
            @foreach ($projects as $project)
                <div class="col-md-5 mx-auto mb-3">
                    <img src="{{ asset('projects/thumbnail/' . $project->thumbnail_image) }}" alt=""
                        class="img-fluid rounded">
                    <h4 class="mb-0">{{ $project->title }}</h4>
                    <p>{{ $project->objective }}</p>
                </div>
            @endforeach
        </div>

        <div class="row d-flex justify-content-center align-items-center">
            <a href="{{ route('Our.Projects') }}" class="view-more-btn text-decoration-none">More Projects</a>
        </div>

        <div class="row mt-5 mb-5">
            <div class="col-md-11 mx-auto bg-dark-green text-light rounded">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-md-6">
                        <h3 class="p-3">About Us</h3>
                        <p class="px-3">
                            Hope Bridge is commited to promoting sustainable living and environmental conservation.
                            Through partnerships, community projects, and educational initiatives, we strive to inspire
                            positive environmental change and safeguard nature ecosystem for future generations.
                        </p>
                        <p class="px-3">
                            Our mission is to foster a deep connection with nature by promoting sustainable practices and
                            environmental awareness. We aim to create a greener, healthier world by empowering individuals
                            and communities to take active roles in environmental protection.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('assets/images/team_work.jpeg') }}" alt="team work"
                            class="img-fluid p-3 rounded object-fit-cover">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 mx-auto d-flex justify-content-center align-items-center">
                <h3>Discover Our</h3>
                <h3 class="text-dark-green fw-bold mx-2">Latest News</h3>
            </div>
        </div>

        {{-- This sections contains news which will be showed from database. --}}

        <div class="row">
            @foreach ($newsRecords as $record)
                <div class="col-md-5 mx-auto">
                    <img src="{{ asset('News/' . $record->news_featured_image) }}" alt="" class="img-fluid rounded">
                    <p>{{ $record->news_content }}</p>
                </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-md-10 mx-auto d-flex justify-content-center align-items-center">
                <h3>Frequently Asked</h3>
                <h3 class="text-dark-green fw-bold mx-2">Questions</h3>
            </div>
        </div>

        {{-- This sections contains FAQs which will be showed from database. --}}

        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="accordion" id="accordionExample">
                    @foreach ($faqRecords as $record)
                        <div class="accordion-item mb-3 rounded">
                            <h2 class="accordion-header bg-light">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse${{ $record->id }}" aria-expanded="true"
                                    aria-controls="collapse${{ $record->id }}">
                                    {{ $record->question }}
                                </button>
                            </h2>
                            <div id="collapse${{ $record->id }}" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    {{ $record->answer }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
