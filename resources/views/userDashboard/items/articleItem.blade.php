<tr class="item">
    <td>
        <a href="{{ route('dashboard.single.article', $article->slug)}}">
            <img alt="img1" src="/{{$article->img}}">
        </a>
    </td>
    <td>
        <a href="{{ route('dashboard.single.article', $article->slug) }}">
            {{$article->title}}
        </a>
        <p class="grey"></p>
    </td>
    <td>{{ $article->created_at }}</td>
    <td colspan="1">{{ implode(', ', ( $article->categories->pluck('title')->toArray() ) ) }}</td>
    <td colspan="1"> {{ ucfirst($article->original_type) }} </td>
    <td>
        <p class="type-title type-title--no-margin title-icon title-icon--article">
            {{ ucfirst($article->article_type) }}
        </p>
    </td>
    <td>
        <a class="btn btn-line finra" disabled="">
            <span>FINRA: {{ $article->review_status }}</span>
        </a>
    </td>
    <td>
        <a class="btn btn-view read-article" data-post-id="{{ $article->id }}" href="{{ route('dashboard.single.article', $article->slug) }}">
            View
        </a>
    </td>
</tr>
