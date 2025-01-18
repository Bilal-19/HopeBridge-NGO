@extends('adminDashboard')
@section('main-section')
    <div class="container-fluid">
        <div class="row mt-3">
            <h3 class="text-center">View <span class="text-dark-green">Customer Inquiries</span></h3>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Customer Name</th>
                        <th>Customer Contact Number</th>
                        <th>Customer Email</th>
                        <th>Customer Message</th>
                    </tr>
                    @foreach ($inquiryRecords as $record)
                        <tr>
                            <td>{{ $record->customer_first_name }} {{ $record->customer_last_name }}</td>
                            <td>{{ $record->customer_phone_no }}</td>
                            <td>{{ $record->customer_email }}</td>
                            <td>{{ $record->customer_message }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
