@extends('layouts.app')

@section('content')
    <div class="card card-default">
        <div class="card-header">
            Create Categories
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-group">
                        @foreach ($errors->all() as $error)
                            {{$error}}
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-success mt-2">Add Category</button>
                </div>
            </form>
        </div>
    </div>
@endsection