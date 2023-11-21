@extends('layouts.app')

@section('content')
    <div class="container">

        @if (Session::has('success'))
            <div class="alert alert-success">
                <p>{!! Session::get('success') !!}</p>
            </div>
        @endif

        <div class="comment-form-wrap pt-5">
            <h3 class="mb-5">Update Profile Info</h3>
            <form action="{{ route('users.update', $user->id) }}" method="POST" class="p-5 bg-light"
                enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" placeholder="email" name="email" value="{{ $user->email }}"
                        class="form-control" id="email">
                    @error('email')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" placeholder="name" name="name" value="{{ $user->name }}" class="form-control"
                        id="name">
                    @error('name')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="form-group mt-3">
                    <label for="description">Description</label>
                    <textarea placeholder="description" name="description" id="description" cols="30" rows="10"
                        class="form-control">{{ $user->description }}</textarea>
                    @error('description')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="Update Profile" class="btn btn-primary">
                </div>

            </form>
        </div>
    </div>
@endsection
