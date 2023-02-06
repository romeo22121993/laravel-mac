<div class="sv-blog-post col-lg-6 col-sm-12 col-xs-12">
    <div class="one-card">
        <div class="blog-top-card">
            <a href="{{ route( 'single.post', $post->slug ) }}">
                <img src="@if( $post->img == 'none') {{ asset('img/none.jpg')  }} @else {{ asset( 'uploads/posts/'.$post->img) }} @endif" alt="">
            </a>
        </div>
        <div class="card-content blog_list">
            <h3>
                <a href="{{ route( 'single.post', $post->slug ) }}">
                    {{ $post->title }}
                </a>
            </h3>
            <a href="{{ route( 'single.post', $post->slug ) }}">Read article</a>
        </div>
    </div>
</div>
