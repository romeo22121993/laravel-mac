@extends('admin.admin_master')

@section('title')
    Edit  Campaign
@endsection

@section('admin_content')

    <div class="content-wrapper">
        @include('admin.body.banner')

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Campaign Data</h4>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="forms-sample" action="{{ route('wpadmin.campaigns.update', $campaign->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Campaign Title</label>
                                <input type="text" class="form-control" required id="exampleInputName1" name="title" value="{{ $campaign->title }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Campaign Slug</label>
                                <input type="text" class="form-control"  id="exampleInputName1" name="slug" value="{{ $campaign->slug }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Categories</label>
                                <select class="form-control" id="exampleSelectGender" required name="categories[]" multiple="">
                                    @foreach( $categories as $category )
                                        <option value="{{ $category->id }}"
                                            @if (in_array($category->id, $campaignCategories)) selected @endif
                                        >{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Topics</label>
                                <select class="form-control" id="exampleSelectGender" required name="topics[]" multiple="">
                                    @foreach( $topics as $topic )
                                        <option value="{{ $topic->id }}"
                                            @if (in_array($topic->id, $campaignTopics)) selected @endif
                                        >{{ $topic->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="exampleFormControlFile1">Feature Image </label>
                                <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
                                <img src="/{{$campaign->img}}" style="width: 70px; height: auto;">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="exampleFormControlFile1">Word File </label>
                                <input type="file" name="doc_file"  class="form-control-file" id="exampleFormControlFile1">

                                <span>{{ $campaign->doc_file }}</span>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="exampleFormControlFile1">Pdf File </label>
                                <input type="file" name="pdf_file"  class="form-control-file" id="exampleFormControlFile1">
                                <span>{{ $campaign->pdf_file }}</span>
                            </div>

                        </div>

                        <br/>
                        <h4>Extra Information: Campaign Emails</h4>
                        <hr/>
                        <input type="hidden" name="detail_id" value="{{ $campaign->details->id }}" >
                        @for($i=1; $i<=3;$i++)
                            @php
                                $subjectKey    = "email_subject$i";
                                $bodyKey       = "email_body$i";
                                $customLinkKey = "use_custom_link$i";
                                $articleKey    = "article$i";
                            @endphp
                            <h4>Email Block {{$i}}: </h4>
                            <hr/>
                            <div class="row">

                                <div class="form-group col-md-4">
                                    <label for="exampleTextarea1">Email Subject </label>
                                    <textarea class="form-control" required name="email_subject{{$i}}">{{ $campaign->details->$subjectKey }}</textarea>
                                </div>

                                <div class="form-group col-md-8">
                                    <label for="exampleTextarea1">Email Body</label>
                                    <textarea class="form-control" required name="email_body{{$i}}" id="summernote">{{ $campaign->details->$bodyKey }}</textarea>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="exampleCheckbox{{$i}}">Use Custom Link</label>
                                    <input class="form-group"  id="exampleCheckbox{{$i}}"
                                       @if ($campaign->details->$customLinkKey == 'on') checked @endif
                                       name="use_custom_link{{$i}}" type="checkbox" />
                                </div>

                                <div class="form-group col-md-8">
                                    <label for="exampleArticle{{$i}}">Article</label>
                                    <select class="form-control" id="exampleArticle{{$i}}" name="article{{$i}}">
                                        @foreach( $articles as $article )
                                            <option value="{{ $article->id }}"
                                            @if ( $article->id== $campaign->details->$articleKey)) selected @endif
                                            >{{ $article->title }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <hr/>
                        @endfor

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
