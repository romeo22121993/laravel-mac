@extends('frontend.master')

@section('title')
   Single Post Page
@endsection

@section('content')

    <div class="inner_container services_block platform_block" style="background-image:url( {{ asset('uploads/posts/'.$post->img) }} ) ">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-8">
                    <h4>Single Post Page</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="post_single_container">
        <div class="smaller-padding">
            <div class="container">
                <div class="row">
                    <div class="col-10">
                        <h1 class="d-none">Blog Detail</h1>

                        <img src="{{ asset('uploads/posts/'.$post->img) }}" />

                        <h2>{{ $post->title }}</h2>
                        <h4>by Advisor I/O</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="small-padding post-holder post_single_content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Post Content:</h3>
                        {!! $post->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="default-padding case-studies">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>More Articles</h2>
                </div>
                <div class="col-lg-6 d-flex flex-row justify-content-end align-items-start">
                    <a href="{{ route('blog') }}" class="read-more green-more">View All <span class="fa fa-angle-right"></span></a>
                </div>
            </div>

            <div class="row d-flex justify-content-between">

                @foreach( $relatedPosts as $post )
                    <div class="sv-blog-post col-lg-6 col-sm-12 col-xs-12">
                        <div class="one-card">
                            <div class="blog-top-card">
                                <a href="{{ route('single.post', $post->id) }}">
                                    <img src="@if( $post->img == 'none') {{ asset('img/none.jpg')  }} @else {{ asset( 'uploads/posts/'.$post->img) }} @endif" alt="">
                                </a>
                            </div>
                            <div class="card-content blog_list">
                                <h3>
                                    <a href="{{ route('single.post', $post->id) }}">
                                        {{ $post->title }}
                                    </a>
                                </h3>
                                <a href="{{ route('single.post', $post->id) }}">Read Article</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>


@endsection
