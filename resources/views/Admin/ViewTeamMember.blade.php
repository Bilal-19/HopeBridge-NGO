@extends('adminDashboard')
@section('main-section')
    <div class="container-fluid">
        <div class="row">
            <h1>View Team Member</h1>
        </div>

        <div class="row">
            <div class="col-md-8">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Profile Picture</th>
                        <td>
                            <img src="{{ asset('profile/' . $findMember->profile_picture) }}" alt=""
                                class="img-fluid rounded-circle border border-secondary" style="height: 100px; width:100px;">
                        </td>
                    </tr>
                    <tr>
                        <th>Employee Name: </th>
                        <td>{{ $findMember->fullname }}</td>
                    </tr>

                    <tr>
                        <th>Designation: </th>
                        <td>{{ $findMember->designation }}</td>
                    </tr>

                    <tr>
                        <th>Email: </th>
                        <td>{{ $findMember->email }}</td>
                    </tr>

                    <tr>
                        <th>Contact No: </th>
                        <td>{{ $findMember->phone_number }}</td>
                    </tr>

                    <tr>
                        <th>Gender: </th>
                        <td>{{ $findMember->gender }}</td>
                    </tr>

                    <tr>
                        <th>Department: </th>
                        <td>{{ $findMember->department }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
