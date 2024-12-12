@extends('adminDashboard')
@section('main-section')
    <div class="container-fluid">
        <div class="row mt-5">
            <h3 class="text-center">Add New <span class="text-dark-green fw-bold">Team Member</span></h3>
        </div>

        <div class="row">
            <div class="col-md-5 mx-auto">
                <form action="{{ route('Add.Team') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <input type="text" name="name" placeholder="Enter your name" class="form-control">
                        <small class="text-danger mb-3">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>

                    <div class="mb-3">
                        <input type="text" name="position" placeholder="Enter your position" class="form-control">
                        <small class="text-danger mb-3">
                            @error('position')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>

                    <div class="mb-3">
                        <input type="email" name="email" placeholder="Enter your email" class="form-control">
                        <small class="text-danger mb-3">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>

                    <div class="mb-3">
                        <input type="text" name="phone" placeholder="Enter your phone number" class="form-control">
                        <small class="text-danger mb-3">
                            @error('phone')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>


                    <div class="mb-3">
                        <label class="form-label mb-0 d-block">Upload your profile picture: </label>
                        <input type="file" name="profile" class="form-control">
                        <small class="text-danger mb-3">
                            @error('profile')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>

                    <div class="mb-3">
                        <select name="gender" class="form-select">
                            <option value="" selected>Select your Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <small class="text-danger mb-3">
                            @error('gender')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>

                    @php
                        $departments = [
                            'Administraion',
                            'Human Resource',
                            'Finance',
                            'Fundraising',
                            'Marketing',
                            'Legal & Compliance',
                            'Research & Development',
                        ];
                    @endphp
                    <div class="mb-3">
                        <select name="department" class="form-select">
                            <option value="" selected>Select your Department</option>
                            @foreach ($departments as $dept)
                                <option value="{{$dept}}">{{ $dept }}</option>
                            @endforeach
                        </select>
                        <small class="text-danger mb-3">
                            @error('department')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>

                    <button class="brand-btn">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
