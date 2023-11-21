@extends('layouts.app')

@section('content')
    <div class="section search-result-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">Results for research: "{{ $search }}"</div>
                </div>
            </div>
            <div class="row posts-entry">
                <div class="col-lg-8">
                    @foreach ($results as $cPost)
                        <div class="blog-entry d-flex blog-entry-search-item">
                            <a href="{{ route('posts.single', $cPost->id) }}" class="img-link me-4">
                                <img src="{{ asset('assets/images/' . $cPost->image) }}" alt="Image" class="img-fluid">
                            </a>
                            <div>
                                <span class="date">{{ \Carbon\Carbon::parse($cPost->created_at)->format('d/m/Y') }}</span>
                                <h2><a href="{{ route('posts.single', $cPost->id) }}">{{ $cPost->title }}</a></h2>
                                <p>{{ substr($cPost->description, 0, 150) }}</p>
                                <p><a href="{{ route('posts.single', $cPost->id) }}"
                                        class="btn btn-sm btn-outline-primary">Read More</a></p>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>
@endsection
