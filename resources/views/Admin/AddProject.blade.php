@extends('adminDashboard')
@section('main-section')
    <div class="container-fluid">
        <div class="row mt-3">
            <form action="{{ route('Store.Project') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6 mx-auto pb-5">
                    <h3 class="text-center">Add New <span class="text-dark-green fw-bold">Project</span></h3>

                    <input type="text" name="title" placeholder="Enter project title" class="form-control"
                        value="{{ old('title') }}">
                    <small class="text-danger">
                        @error('title')
                            {{ $message }}
                        @enderror
                    </small>


                    <textarea name="objective" cols="30" rows="3" class="form-control mt-3" placeholder="Enter project objective"
                        style="resize: none;" value="{{ old('objective') }}"></textarea>
                    <small class="text-danger">
                        @error('objective')
                            {{ $message }}
                        @enderror
                    </small>


                    <input type="text" name="owner" value="{{ old('owner') }}" placeholder="Enter owner name"
                        class="form-control mt-3" autocomplete="off">
                    <small class="text-danger">
                        @error('owner')
                            {{ $message }}
                        @enderror
                    </small>


                    <input type="text" name="partner" placeholder="Enter partner name" class="form-control mt-3"
                        value="{{ old('partner') }}" autocomplete="off">
                    <small class="text-danger">
                        @error('partner')
                            {{ $message }}
                        @enderror
                    </small>


                    <select name="duration" class="form-select mt-3" value="{{ old('duration') }}">
                        <option value="" selected>Select Project Duration</option>
                        @for ($i = 1; $i <= 12; $i++)
                            <option value={{ $i }}>{{ $i }}</option>
                        @endfor
                    </select>
                    <small class="text-danger">
                        @error('duration')
                            {{ $message }}
                        @enderror
                    </small>


                    <input type="number" name="budget" placeholder="Enter project budget" min="1"
                        class="form-control mt-3" value="{{ old('budget') }}">
                    <small class="text-danger">
                        @error('budget')
                            {{ $message }}
                        @enderror
                    </small>


                    <input type="text" name="code" placeholder="Enter project code" class="form-control mt-3"
                        value="{{ old('code') }}" autocomplete="off">
                    <small class="text-danger d-block">
                        @error('code')
                            {{ $message }}
                        @enderror
                    </small>

                    <label class="form-label mb-0 mt-3">Upload Thumbnail Image: </label>
                    <input type="file" name="thumbnailImage" class="form-control">
                    <small class="text-danger d-block">
                        @error('thumbnailImage')
                            {{ $message }}
                        @enderror
                    </small>

                    <label class="form-label mb-0 mt-3">Upload Multiple Images: </label>
                    <input type="file" name="images[]" multiple class="form-control">
                    <small class="text-danger">
                        @error('images')
                            {{ $message }}
                        @enderror
                    </small>

                    <button type="submit" class="brand-btn mt-3 d-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
