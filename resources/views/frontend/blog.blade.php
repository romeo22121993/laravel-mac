@extends('frontend.master')

@section('title')
    Blog Page
@endsection

@section('content')

    <div class="inner_container services_block platform_block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Our Blog</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="small-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h1 class="d-none">Blog</h1>
                    <h2>Posts</h2>
                </div>
                <div class="col-lg-8">
                    <ul class="navbar topics-nav d-flex justify-content-start align-items-center all_posts_categories">
                        <li>
                            <a href="#" data-id="all" data-href="all" class="nav-link cat active" data-cat="ALL TOPICS">ALL TOPICS</a>
                        </li>
                        @foreach( $categories as $category )
                            <li>
                                <a href="#" data-id="{{ $category->id }}" data-href="{{ $category->slug }}" class="cat nav-link" data-cat="{{ strtoupper( $category->title ) }}">
                                    {{ strtoupper( $category->title ) }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="default-padding case-studies">
        <div class="container">
            <div class="row d-flex justify-content-between all_posts" data-all="48" data-getcat="all" data-cpt="post">

                @foreach ( $posts as $post )
                    <div class="sv-blog-post col-lg-6 col-sm-12 col-xs-12">
                        <div class="one-card">
                            <div class="blog-top-card">
                                <a href="{{ $post->slug }}">
                                    <img src="@if( $post->img == 'none') {{ asset('img/none.jpg')  }} @else {{ asset( 'uploads/posts/'.$post->img) }} @endif" alt="">
                                </a>
                            </div>
                            <div class="card-content blog_list">
                                <h3>
                                    <a href="{{ $post->slug }}">
                                        {{ $post->title }}
                                    </a>
                                </h3>

                                <a href="{{ $post->slug }}">Read article</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="#" id="load_more_posts_button" class="btn btn-primary btn-load">Load More</a>
                </div>
            </div>
        </div>
    </div>


@endsection
