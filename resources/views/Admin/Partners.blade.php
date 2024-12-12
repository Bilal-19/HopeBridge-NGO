@extends('adminDashboard')
@section('main-section')
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-3">
                <a href="{{ route('Add.Partner.Form') }}" class="brand-btn">Add New Partner</a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6 mx-auto">
                <form action="">
                    <div class="input-group">
                        <input type="search" class="form-control" placeholder="Search partner by name">
                        <button type="search" class="brand-btn">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-3">
            <p>{{ count($partners) }} records found</p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th class="text-center">Partner Logo</th>
                        <th class="text-center">Partner Name</th>
                        <th class="text-center">Action</th>
                    </tr>

                    @foreach ($partners as $partner)
                        <tr>
                            <td>
                                <img src="{{ asset('partners/' . $partner->partner_logo) }}"
                                    alt="{{ $partner->partner_name }}" class="img-fluid object-fit-cover" height="150px"
                                    width="150px">
                            </td>
                            <td>
                                {{ $partner->partner_name }}
                            </td>
                            <td class="d-flex justify-content-evenly">
                                <a href="{{ route('View.Partner', ['id' => $partner->id]) }}" class="text-dark-green">
                                    <i class="fa-solid fa-eye"></i>
                                </a>

                                <a href="{{ route('Edit.Partner', ['id' => $partner->id]) }}" class="text-primary">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>

                                <a href="{{ route('Delete.Partner.Info', ['id' => $partner->id]) }}" class="text-danger">
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
