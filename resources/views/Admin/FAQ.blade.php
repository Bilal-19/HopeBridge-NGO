@extends('adminDashboard')
@section('main-section')
    <div class="container-fluid">
        <div class="row mt-5">
            <h3>Freqeuntly Asked <span class="text-dark-green fw-bold">Questions</span></h3>
        </div>

        <div class="row mt-3">
            <div class="col-md-4">
                <a href="{{ route('FAQ.Form') }}" class="brand-btn">Add New FAQs</a>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-12">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Question</th>
                        <th>Answer</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($faqRecords as $record)
                        <tr>
                            <td>{{$record->question}}</td>
                            <td>{{ Str::limit($record->answer, 100)}}</td>
                            <td>
                                <a href="{{route('Edit.FAQ', ['id' => $record->id])}}" class="text-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{route('Delete.FAQ', ['id' => $record->id])}}" class="text-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
