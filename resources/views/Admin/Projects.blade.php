@extends('adminDashboard')
@section('main-section')
    <div class="container-fluid">
        <div class="row mt-3">
            <h3 class="text-center">All <span class="text-dark-green fw-bold">Projects</span></h3>
        </div>

        <div class="row mt-5">
            <div class="col-md-4">
                <a href="{{ route('Add.Project') }}" type="button" class="brand-btn">Add New Project</a>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-6 mx-auto">
                <form action="{{route('Dashboard.Projects')}}" method="get">
                    @csrf
                    <div class="input-group">
                        <input type="search" class="form-control" placeholder="Search project by title" name="search">
                        <button type="search" class="brand-btn">Search</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row mt-3">
            <p>{{ count($projects) }} records found</p>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-hover table-striped">
                    <tr>
                        <th>Title</th>
                        <th>Duration</th>
                        <th>Budget</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{ $project->title }}</td>
                            <td>{{ $project->duration }}</td>
                            <td>{{ $project->budget }}</td>
                            <td class="text-center">
                                @if ($project->status == 'Ongoing')
                                    <a href="{{ route('Update.Project.Status', ['id' => $project->id]) }}"
                                        class="btn btn-success btn-sm">{{ $project->status }}</a>
                                @else
                                    <a class="btn btn-secondary disbaled" disbaled>{{ $project->status }}</a>
                                @endif
                            </td>
                            <td class="d-flex justify-content-evenly align-items-center">
                                <a href="{{ route('Edit.Project', ['id' => $project->id]) }}" class="text-primary">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a>

                                <a href="{{ route('Delete.Project', ['id' => $project->id]) }}" class="text-danger">
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
