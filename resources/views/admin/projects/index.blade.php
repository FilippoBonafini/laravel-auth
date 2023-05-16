@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="pt-5 row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header h4">{{ __('My projects:') }}</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <th scope="col">id</th>
                                <th scope="col">Title</th>
                                <th scope="col"></th>
                            </thead>
                            <tbody>
                                @foreach ($projects as $project)
                                    <tr>
                                        <th class="align-middle" scope="row">{{ $project->id }}</th>
                                        <td class="align-middle">{{ $project->title }}</td>
                                        <td class="align-middle  d-flex justify-content-end align-items-center gap-3">
                                            @include('partials.editZone')
                                            <a href="/">
                                                @include('partials.svg.show')
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection