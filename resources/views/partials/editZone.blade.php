{{-- <div class="d-flex gap-2 align-items-center">
    <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm">
            @include('partials.svg.delete')
        </button>
    </form>
    <a href="{{ route('projects.edit', $project->id) }}"
        class="btn btn-warning btn-sm d-inline-block">@include('partials.svg.edit')</a>
</div> --}}

<div class="d-flex gap-2 align-items-center">
    <form>
        <button type="submit" class="btn btn-danger btn-sm">
            @include('partials.svg.delete')
        </button>
    </form>
    <a class="btn btn-warning btn-sm d-inline-block">@include('partials.svg.edit')</a>
</div>
