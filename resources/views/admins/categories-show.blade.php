@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    @if (session()->has('success'))
                        <p class="alert alert-success">{{ session('success') }}</p>
                    @endif
                    <h5 class="card-title mb-4 d-inline">Categories</h5>
                    <a href="{{ route('admins.category.create') }}"
                        class="btn btn-primary mb-4 text-center float-right">Create Categories</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">name</th>
                                <th scope="col">update</th>
                                <th scope="col">delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <th scope="row">{{ $category->id }}</th>
                                    <td>{{ $category->name }}</td>
                                    <td><a href="{{ route('admins.category.edit', $category->id) }}"
                                            class="btn btn-warning text-white text-center ">Update
                                            Categories</a></td>
                                    <td><a href="{{ route('admins.category.delete', $category->id) }}"
                                            class="btn btn-danger  text-center ">Delete
                                            Categories</a></td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
