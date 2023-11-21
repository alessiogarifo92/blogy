@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="comment-form-wrap pt-5">
            <h3 class="mb-5">Update Post</h3>
            <form action="{{ route('posts.update', $post->id) }}" method="POST" class="p-5 bg-light"
                enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" placeholder="title" name="title" value="{{ $post->title }}" class="form-control"
                        id="title">
                    @error('title')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <select name="category" class="form-select" aria-label="Default select example">
                        <option selected disabled>Categories</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->name }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="hidden" placeholder="{{ Auth::user()->id }}" name="user_id" class="form-control"
                        id="user_id" disabled>
                </div>

                <div class="form-group">
                    <input type="hidden" placeholder="{{ Auth::user()->name }}" name="user_name" class="form-control"
                        id="user_name" disabled>
                </div>

                <div class="form-group mt-3">
                    <label for="description">Description</label>
                    <textarea placeholder="description" name="description" id="description" cols="30" rows="10"
                        class="form-control">{{ $post->description }}</textarea>
                    @error('description')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="Update Post" class="btn btn-primary">
                </div>

            </form>
        </div>
    </div>
@endsection
