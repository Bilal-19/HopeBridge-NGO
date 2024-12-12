@extends('adminDashboard')
@section('main-section')
    <div class="container-fluid">
        <div class="row mt-3">
            <form action="{{route('Update.Project.DB', ['id' => $findProject->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6 mx-auto pb-5">
                    <h3 class="text-center text-dark-green fw-bold">Edit Project</h3>

                    <input type="text" name="title" placeholder="Enter project title" class="form-control"
                        value="{{ $findProject->title }}">
                    <small class="text-danger">
                        @error('title')
                            {{ $message }}
                        @enderror
                    </small>


                    <textarea name="objective" cols="30" rows="3" class="form-control mt-3" placeholder="Enter project objective"
                        style="resize: none;">{{ $findProject->objective }}</textarea>
                    <small class="text-danger">
                        @error('objective')
                            {{ $message }}
                        @enderror
                    </small>


                    <input type="text" name="owner" value="{{ $findProject->owner }}" placeholder="Enter owner name"
                        class="form-control mt-3">
                    <small class="text-danger">
                        @error('owner')
                            {{ $message }}
                        @enderror
                    </small>


                    <input type="text" name="partner" placeholder="Enter partner name" class="form-control mt-3"
                        value="{{ $findProject->partner }}">
                    <small class="text-danger">
                        @error('partner')
                            {{ $message }}
                        @enderror
                    </small>


                    <select name="duration" class="form-select mt-3" value="{{ $findProject->duration }}">
                        @for ($i = 1; $i <= 12; $i++)
                            <option value={{ $i }} {{ $findProject->duration == $i ? 'selected' : '' }}>
                                {{ $i }}</option>
                        @endfor
                    </select>
                    <small class="text-danger">
                        @error('duration')
                            {{ $message }}
                        @enderror
                    </small>


                    <input type="number" name="budget" placeholder="Enter project budget" min="1"
                        class="form-control mt-3" value="{{ $findProject->budget }}">
                    <small class="text-danger">
                        @error('budget')
                            {{ $message }}
                        @enderror
                    </small>


                    <input type="text" name="code" placeholder="Enter project code" class="form-control mt-3"
                        value="{{ $findProject->code }}">
                    <small class="text-danger">
                        @error('code')
                            {{ $message }}
                        @enderror
                    </small>
                    {{-- <p>Preview Thumbnail Image</p>
                    <img src="{{ asset('projects/thumbnail/' . $findProject->thumbnail_image) }}" alt=""
                        style="height: 100px">
                    <p>Preview Images</p>

                    @foreach ($imageArr as $img)
                        <img src="{{ URL::to($img) }}" alt="{{ $img }}" style="height: 100px">
                    @endforeach

                    <input type="file" name="images[]" multiple class="form-control mt-3">
                    <small class="text-danger">
                        @error('images')
                            {{ $message }}
                        @enderror
                    </small> --}}

                    <button type="submit" class="brand-btn mt-3 d-block">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
