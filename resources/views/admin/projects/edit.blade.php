@extends('layouts.app')

@section('content')
    <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" class="container">
        @csrf
        @method('PUT')
        <div class="pt-5 row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header d-flex gap-3 align-items-center justify-content-between">
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ old('title', $project->title) }}">
                        {{-- <button type="submit" class="btn btn-success btn-sm">
                            @include('partials.svg.save')
                        </button> --}}
                    </div>
                    <div class="card-body">
                        <h5>Description:</h5>
                        <p>
                            <textarea style="resize: none;" rows="5" class="form-control" id="description" name="description">{{ trim(old('description', $project->description)) }}</textarea>
                        </p>
                        <h5>Project link:</h5>
                        <a href="#">{{ $project->link }}</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
