@extends('adminDashboard')
@section('main-section')
    <div class="container-fluid">

        <div class="row mt-3">
            <h3 class="text-center">All <span class="text-dark-green fw-bold">Team Members</span></h3>
        </div>

        <div class="row mt-5">
            <div class="col-md-4">
                <a href="{{ route('Add.Team.Form') }}" class="brand-btn">Add New Team Member</a>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Designation</th>
                        <th>Contact Number</th>
                        <th>Department</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($teamData as $data)
                        <tr>
                            <td>{{ $data->fullname }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->designation }}</td>
                            <td>{{ $data->phone_number }}</td>
                            <td>{{ $data->department }}</td>
                            <td class="d-flex justify-content-evenly">

                                <a href="{{route('View.Team.Member', ['id'=>$data->member_id])}}" class="text-dark-green mx-2">
                                    <i class="fa-solid fa-eye"></i>
                                </a>


                                <a href="{{route('Edit.Team.Member', ['id'=>$data->member_id])}}" class="text-primary mx-2">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>

                                <a href="{{route('Delete.Team.Member', ['id'=>$data->member_id])}}" class="text-danger mx-2">
                                    <i class="fa-solid fa-trash"></i>
                                </a>

                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
@endsection
