@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-end mb-2">
        <a href="{{ route('tags.create') }}" class="btn btn-success">Add tags</a>
    </div>
    <div class="card card-default">
        <div class="card-header">
            tags
        </div>
        <div class="card-body">
            @if ($tags->count() > 0)
            <table class="table">
                <thead>
                    <th>Name</th>
                    <th>Post Count</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>
                                {{$tag->name}}
                            </td>
                            <td>
                                {{$tag->posts->count()}}
                            </td>
                            <td>
                                <a href="{{route('tags.edit', $tag->id)}}" class="btn btn-info float-end">Edit</a>
                                <button type="button" class="btn btn-danger float-end mx-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Delete
                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
                <!-- Modal -->
                    <form action="{{ route('tags.destroy', $tag->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete tag</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center text-bold">
                            Are you sure want to delete this tag?
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Go, Back</button>
                        <button type="submit" class="btn btn-danger">Yes, Delete</button>
                    </div>
                    </div>
                </div>
                </div>
                </form>
                @else 
                <h3 class="text-center">No tags Yet</h3>
                @endif
        </div>
    </div>
@endsection