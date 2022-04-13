@extends('layouts.app')

@section('content')
    <div class="card card-default">
        <div class="card-header">
            Create Post
        </div>

        <div class="card-body">
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="4" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" cols="5" rows="4" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="published_at">Published At</label>
                    <input type="text" class="form-control" name="published_at" id="published_at">
                </div>
                <div class="form-group">
                    <label for="iamge">Image</label>
                    <input type="file" class="form-control" name="image" id="iamge">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success mt-2">Create Post</button>
                </div>
            </form>
        </div>
    </div>
@endsection