@extends('layout.main')


@section('main-section')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 mx-auto bg-light rounded shadow mt-5 mb-5">
                <h2 class="mt-5 text-center">About Hope Bridge <span class="text-dark-green fw-bold">Organization</span></h2>
                <div class="row">
                    <div class="col-md-11 mx-auto">
                        <p>
                            Hope Bridge is a non-governmental organization founded with the goal of protecting nature and
                            raising
                            awareness for a sustainable future. We work to make a difference in areas such as environmental
                            conservation, rural development, and gender equality by developing projects on both local and
                            global
                            scales. Our core priorites include preserving natural resources, restoring ecosystems, and
                            engaging all
                            segments of society in this process. Through partnerships and innovative approaches, we connect
                            people
                            with nature while continuing our efforts for a grenner and more sustainable world.
                        </p>
                    </div>
                </div>

                <div class="row d-flex justify-content-around align-items-center mt-5">
                    <div class="col-md-5">
                        <h4>Hope Bridge Vision</h4>
                        <p>Hope Bridge is commited to promoting sustainable living and environmental conservation. Through
                            partnerships, community projects, and educational initiatives, we strive to inspire positive
                            environmental change and safeguard natural ecosystems for future generations.</p>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('assets/images/team_work.jpeg') }}" alt=""
                            class="img-fluid rounded shadow">
                    </div>
                </div>

                <div class="row d-flex justify-content-around align-items-center mt-5 mb-5">
                    <div class="col-md-5">
                        <img src="{{ asset('assets/images/mission_team.jpg') }}" alt=""
                            class="img-fluid rounded shadow">
                    </div>
                    <div class="col-md-5">
                        <h4>Our Mission and Values</h4>
                        <p>
                            Our mission is to foster a deep connection with nature by promoting sustainable practices and
                            environmental awareness. We aim to create a greener, healthier world by empowering individuals
                            and communities to take active roles in environmental protection.
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-evenly align-items-center">
            <div class="col-md-4">
                <h2>Meet Our <br><span class="text-dark-green fw-bold">Dedicated Team</span></h2>
            </div>
            <div class="col-md-4">
                <p>Our talented team is made up of passionate individuals who bring expertise, creativity, and dedication to
                    every project. Together,
                    we work towards building a sustainable future, empowering communities, and protecting our planet's
                    natural resources.
                </p>
            </div>
        </div>

        <div class="row d-flex justify-content-center align-items-center mb-5">
            @foreach ($teamMembers as $data)
            <div class="col-md-2">
                <div class="card text-center p-3 bg-light">
                    <img src="{{asset('profile/'. $data->profile_picture)}}" alt="ceo" style="height: 50px; width:50px; object-fit:cover;border-radius:50%;border:1px solid black;" class="d-inline mx-auto">
                    <p class="mb-0">{{$data->fullname}}</p>
                    <p><i class="fa-solid fa-building"></i> {{$data->department}}</p>
                </div>
            </div>
            @endforeach



        </div>
    </div>
@endsection
