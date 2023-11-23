@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                @if (session()->has('success'))
                    <p class="alert alert-success">{{ session('success') }}</p>
                @endif
                <div class="card-body">
                    <h5 class="card-title mb-4 d-inline">Posts</h5>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">title</th>
                                <th scope="col">category</th>
                                <th scope="col">username owner</th>
                                <th scope="col">delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <th scope="row">{{ $post->id }}</th>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->category }}</td>
                                    <td>{{ $post->user_name }}</td>
                                    <td><a href="{{ route('admins.post.delete', $post->id) }}"
                                            class="btn btn-danger  text-center ">delete</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
