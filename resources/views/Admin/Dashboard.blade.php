@extends('adminDashboard')
@push('style')
    <style>
        .analytical-card {
            text-align: center;
            background-color: #f8f9fa;
            color: #17422e;
            border-radius: 8px;
            border-top: 2px solid #17422e;
            border-left: 2px solid #17422e;
            border-right: 1px solid grey;
            border-bottom: 1px solid grey;
            padding: 10px 12px;
            width: fit-content;
        }

        .flex-container{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
@endpush
@section('main-section')
    <div class="container-fluid">
        <div class="row mt-5 flex-container">
            <div class="col-md-2 analytical-card">
                <h3>400</h3>
                <i class="fas fa-clipboard-list"></i>
                Total Projects
            </div>

            <div class="col-md-2 analytical-card">
                <h3>200+</h3>
                <i class="fas fa-check-circle"></i>
                Completed Projects
            </div>

            <div class="col-md-2 analytical-card">
                <h3>200+</h3> <i class="fas fa-spinner"></i> Ongoing Projects
            </div>

            <div class="col-md-2 analytical-card">
                <h3>20+</h3> <i class="fas fa-users"></i> Team Members
            </div>
        </div>
    </div>
@endsection
