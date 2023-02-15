@extends('userDashboard.master')

@section('title')
    Courses Page
@endsection

@section('content')

    <div class="container training">
        <div class="investor-holder">
            <div class="row">
                <div class="col-12 col-sm-4 col-lg-8 d-flex flex-row justify-content-start align-items-center">
                    <h4>Marketing Courses</h4>
                </div>
                <div class="col-12 col-sm-4 col-lg d-flex flex-row justify-content-start justify-content-sm-end align-items-center">
                    <h4>Courses ( <span class="count-articles">{{ $courses->total() }}</span>  )</h4>
                </div>
                <div class="col-12 col-sm-4 col-lg d-flex flex-row justify-content-start justify-content-sm-end align-items-center">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sort By:  All
                        </button>
                        <div class="dropdown-menu sorting-categories" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="all">All</a>
                            @foreach( $categories as $category )
                                <a class="dropdown-item" href="{{ $category->slug }}">{{ $category->title }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="table-responsive video">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Courses</th>
                                <th></th>
                                <th>Number of Courses</th>
                                <th>Status</th>
                                <th>Start Date</th>
                                <th>Topic</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="body-items" data-all="{{ $courses->total() }}" data-getcat="all" data-cpt="courses">
                            @foreach( $courses as $course )
                                @include('userDashboard.items.courseItem')
                            @endforeach
                        </tbody>
                    </table>

                    @if( $courses->total() >= 2 )
                        <a id="load_more_button">Load More</a>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
