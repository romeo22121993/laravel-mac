@extends('admin.admin_master')

@section('title')
    Articles Page
@endsection

@section('admin_content')

    <div class="content-wrapper">

        @include('admin.body.banner')

        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Articles Page  ( {{ $articles->total() }} )</h4>
                        <div class="template-demo">
                            <a href="{{ route('wpadmin.articles.add') }}">
                                <button type="button" class="btn btn-primary btn-fw">Add New Article</button>
                            </a>
                            <a href="{{ route('wpadmin.articles.original') }}">Original Articles</a>
                            <a href="{{ route('wpadmin.articles.cloned') }}">Cloned Articles</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered sortable searchable">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th>{{ __('Article Title') }}</th>
                                        <th>{{ __('Article Id') }}</th>
                                        <th>{{ __('Categories') }}</th>
                                        <th>{{ __('Featured Image') }}</th>
                                        <th>{{ __('Time') }}</th>
                                        <th>{{ __('Original/Cloned') }}</th>
                                        <th>{{ __('View Article') }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php($i = 1)
                                    @foreach( $articles as $article )
                                        <tr>
                                            <td> {{ $i++ }} </td>
                                            <td> {{ $article->title }}</td>
                                            <td> {{ $article->id }}</td>
                                            <td> {{ implode(', ', ( $article->categories->pluck('title')->toArray() ) ) }} </td>
                                            <td>
                                                <img style="width: 50px; height: auto;"
                                                    src="@if( !empty( $article->img ) ) {{ "/".$article->img }} @else {{ asset('/img/none.jpg') }} @endif">
                                            </td>
                                            <td>{{ $article->updated_at->diffForHumans() }}</td>
                                            <td>{{ $article->original_type }}
                                                @if ($article->original_type == 'cloned')
                                                , Parent: {{ \App\Models\Article::find($article->parent_id)->title }}, Author: {{ \App\Models\User::find($article->author_id)->name }}
                                                @endif
                                            </td>
                                            <td><a href="{{ route( 'single.article', $article->slug ) }}">View Article</a></td>
                                            <td>
                                                <a href="{{ route('wpadmin.articles.edit',  $article->id) }}" class="btn btn-info">Edit</a>
                                                <a href="{{ route('wpadmin.articles.delete', $article->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $articles->links('pagination-links') }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

