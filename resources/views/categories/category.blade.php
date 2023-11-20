@extends('layouts.app')

@section('content')
    <div class="section search-result-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">Category: {{ $categoryName }}</div>
                </div>
            </div>
            <div class="row posts-entry">
                <div class="col-lg-8">
                    @foreach ($post as $cPost)
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

                <div class="col-lg-4 sidebar">


                    <!-- END sidebar-box -->
                    <div class="sidebar-box">
                        <h3 class="heading">Popular Posts</h3>
                        <div class="post-entry-sidebar">
                            <ul>
                                @foreach ($popularPosts as $post)
                                    
                                <li>
                                    <a href="">
                                        <img src="{{asset('assets/images/'. $post->image)}}" alt="Image placeholder" class="me-4 rounded">
                                        <div class="text">
                                            <h4>{{$post->title}}</h4>
                                            <div class="post-meta">
                                                <span class="mr-2">{{ \Carbon\Carbon::parse($cPost->created_at)->format('d/m/Y') }}</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <!-- END sidebar-box -->

                    <div class="sidebar-box">
                        <h3 class="heading">Categories</h3>
                        <ul class="categories">
                            @foreach ($categories as $category)
                                <li><a href="{{ route('category.single', $category->name) }}">{{ $category->name }}
                                        <span>({{ $category->total }})</span></a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- END sidebar-box -->




                </div>
            </div>
        </div>
    </div>
@endsection
