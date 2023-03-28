@extends('userDashboard.master')

@section('title')
   Single Article Page
@endsection

@section('content')

    @php
        $popup_form_class = ($article->original_type == 'cloned') ? 'edit_cloned_article_form' : 'clone_article';
    @endphp

    <div class="right-content">
        <div class="container content content_popup sv-content-detail article_single_block">
            <div class="row">

                @if ($article->original_type == 'original')
                    <div class="col-12 col-md-7 col-lg-8">
                        <div class="row d-flex flex-row justify-content-end align-items-center">
                            <div class="col-12 col-md-4 col-lg-2">
                                <div class="small-white d-flex justify-content-center align-items-center edit-post-button">
                                    <a href="#" class=""><i class="fa fa-edit"></i> Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="col-12 col-lg-8">
                    <div class="investment-holder article_content_block">
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="sv-content__block">
                                    <h4 class="type-title type-title--no-margin title-icon title-icon--article">
                                        Article - {{ $article->original_type }}
                                    </h4>
                                    @if($article->original_type == 'cloned')
                                    <p>
                                        Edited By User {{ \App\Models\User::find($article->author_id)->name }} On: {{ $article->created_at }}
                                    </p>
                                    @endif
                                </div>
                            </div>

                            @if($article->original_type == 'cloned')
                                <div class="sv-content__block small-white d-flex justify-content-center align-items-center ">
                                    <a href="#" class="edit_article_button" style="margin: 0 20px;"><i class="fa fa-edit"></i>Edit Article</a>
                                    <a href="#" class="reset_article_button" style="margin: 0 20px;" data-id="{{ $article->id }}">Reset Article</a>
                                </div>
                            @endif

                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="sv-content__block article-block sv-content__block--pb-100">
                                    <div class="content_area">
                                        <div class="inv-img" style="background-image: url({{"/$article->img"}}); margin-bottom: 20px;"></div>
                                        <h2 class="title-subject">{{ $article->title }}</h2>
                                        <span class="sv-content__date">Feb 04</span>

                                        <div class="content">
                                            {!! $article->content  !!}
                                            <p>This content {{ $article->review_status }} by FINRA</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mt-3 mt-md-0 investment-right-holder single_article_sharing_block">
                    <div class="row">

                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="download_block " data-post="14271" data-link="">
                                <h3 class="download_text sv-tooltip-container">
                                    <span>Download for your marketing efforts.</span>
                                    <span class="sv-tooltip" data-tooltip="Download the piece to use for your own website, copy and paste the test, but don't forget the disclosure!"></span>
                                </h3>
                                <a class="word-pdf-button1 ">
                                    Word Document
                                </a>
                                <div class="download-document-popup-wrap ">
                                    <div class="download-overlay"></div>
                                    <div class="download-document-popup sv-contact-popup">
                                        <span class="close-popup">x</span>
                                        <div class="download-document-popup-text">
                                            <h4 style="text-align: center">Get Ready to Publish to Your Blog!</h4>
                                            <p>Step 1: Get up-to-speed on <a href="https://www.advisorio.co/wp-content/uploads/2021/11/Customizing-Content-Seven-Group-One-Pager-5.pdf">content syndication</a> and how to approach it</p>
                                            <p>Step 2: Ensure everything is good-to-go from a compliance standpoint</p>
                                            <p>Step 3: Ensure proper disclosures and footnotes are in place</p>
                                            <p>Step 4: Add your meta description &amp; tags</p>
                                            <p>Step 5: Ensure the footnote below is added to the bottom of the piece</p>
                                        </div>

                                        <div class="download-document-popup-text" id="popup-text">
                                            <p>This work is powered by Advisor I/O under the Terms of Service and may be a derivative of the original.</p>
                                            <div class="download-document-popup-copy-link" data-link="https://www.advisorio.co/articles/february-market-commentary-powells-not-done/">
                                            </div>
                                        </div>
                                        <span class="btn_link_copy_popup">Copy message<span class="message_popup">Copied</span></span>
                                        <div class="buttons-popup">
                                            <a class="cancel">
                                                Back
                                            </a>
                                            @php
                                            $docFile = ($article->original_type == 'cloned') ? \App\Models\Article::find($article->parent_id)->doc_file : $article->doc_file;
                                            @endphp
                                            <a class="word-pdf-button different download_article_file "
                                               data-post-id="{{ $article->id }}" href="/{{ $docFile }}" data-file-type="word">
                                                Proceed
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12">

                                <div class="sharing_block" data-post="14271" data-link="">
                                    <h3 class="download_text sv-tooltip-container">
                                        <span>Share from the Advisor I/O platform.</span>
                                        <span class="sv-tooltip" data-tooltip="If you want to share it directly from Advisor I/O, you have the ability to do so."></span>
                                    </h3>
                                    <div class="small-white small-white-right custom_url_block">
                                        <form class="sharing_form" data-hs-cf-bound="true">
                                            <div class="sharing_form__link-gen">
                                                <div class="d-flex flex-row block_custom_url">
                                                    <input type="checkbox" class="form-control" name="published" id="published" data-user="13" data-post="14271" data-shared-post="0" data-permalink="https://www.advisorio.co/articles/february-market-commentary-powells-not-done/">
                                                    <label for="published"> Create Custom Link </label>
                                                </div>
                                                <div class="d-flex flex-row justify-content-center align-items-center block_custom_url right">
                                                    <input type="url" id="input_url" class="input_url" name="share" value="">
                                                    <span class="btn_link_copy">copy link <span class="message">Copied</span></span>
                                                    <img src="{{ asset('frontendDashboard/pluginAssets/img/loader.gif') }}" id="loader1" alt="loader">
                                                </div>
                                            </div>
                                            <div class="block_custom_url third">
                                                <div class="addtoany_shortcode"><div class="a2a_kit a2a_kit_size_32 addtoany_list" data-a2a-url="https://www.advisorio.co/articles/february-market-commentary-powells-not-done/" data-a2a-title="February Market Commentary: Powell’s Not Done" style="line-height: 32px;"><a class="a2a_button_facebook social-link big disabled_hrefs share-button" href="/#facebook" title="Facebook" rel="nofollow noopener" target="_blank" data-post-id="14271"><span class="a2a_svg a2a_s__default a2a_s_facebook" style="background-color: rgb(24, 119, 242);"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="#FFF" d="M17.78 27.5V17.008h3.522l.527-4.09h-4.05v-2.61c0-1.182.33-1.99 2.023-1.99h2.166V4.66c-.375-.05-1.66-.16-3.155-.16-3.123 0-5.26 1.905-5.26 5.405v3.016h-3.53v4.09h3.53V27.5h4.223z"></path></svg></span><span class="a2a_label">Facebook</span></a><a class="a2a_button_twitter social-link big disabled_hrefs share-button" href="/#twitter" title="Twitter" rel="nofollow noopener" target="_blank" data-post-id="14271"><span class="a2a_svg a2a_s__default a2a_s_twitter" style="background-color: rgb(29, 155, 240);"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="#FFF" d="M28 8.557a9.913 9.913 0 0 1-2.828.775 4.93 4.93 0 0 0 2.166-2.725 9.738 9.738 0 0 1-3.13 1.194 4.92 4.92 0 0 0-3.593-1.55 4.924 4.924 0 0 0-4.794 6.049c-4.09-.21-7.72-2.17-10.15-5.15a4.942 4.942 0 0 0-.665 2.477c0 1.71.87 3.214 2.19 4.1a4.968 4.968 0 0 1-2.23-.616v.06c0 2.39 1.7 4.38 3.952 4.83-.414.115-.85.174-1.297.174-.318 0-.626-.03-.928-.086a4.935 4.935 0 0 0 4.6 3.42 9.893 9.893 0 0 1-6.114 2.107c-.398 0-.79-.023-1.175-.068a13.953 13.953 0 0 0 7.55 2.213c9.056 0 14.01-7.507 14.01-14.013 0-.213-.005-.426-.015-.637.96-.695 1.795-1.56 2.455-2.55z"></path></svg></span><span class="a2a_label">Twitter</span></a><a class="a2a_button_linkedin social-link big disabled_hrefs share-button" href="/#linkedin" title="LinkedIn" rel="nofollow noopener" target="_blank" data-post-id="14271"><span class="a2a_svg a2a_s__default a2a_s_linkedin" style="background-color: rgb(0, 123, 181);"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M6.227 12.61h4.19v13.48h-4.19V12.61zm2.095-6.7a2.43 2.43 0 0 1 0 4.86c-1.344 0-2.428-1.09-2.428-2.43s1.084-2.43 2.428-2.43m4.72 6.7h4.02v1.84h.058c.56-1.058 1.927-2.176 3.965-2.176 4.238 0 5.02 2.792 5.02 6.42v7.395h-4.183v-6.56c0-1.564-.03-3.574-2.178-3.574-2.18 0-2.514 1.7-2.514 3.46v6.668h-4.187V12.61z" fill="#FFF"></path></svg></span><span class="a2a_label">LinkedIn</span></a><a class="a2a_dd addtoany_share_save addtoany_share social-link big disabled_hrefs share-button" href="https://www.addtoany.com/share#url=https%3A%2F%2Fwww.advisorio.co%2Farticles%2Ffebruary-market-commentary-powells-not-done%2F&amp;title=February%20Market%20Commentary%3A%20Powell%E2%80%99s%20Not%20Done" data-post-id="14271"><span class="a2a_svg a2a_s__default a2a_s_a2a" style="background-color: rgb(1, 102, 255);"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><g fill="#FFF"><path d="M14 7h4v18h-4z"></path><path d="M7 14h18v4H7z"></path></g></svg></span><span class="a2a_label a2a_localize" data-a2a-localize="inner,Share">Share</span></a></div></div>                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="col-12">
                                <h5>View More</h5>
                            </div>
                            <div class="col-12">
                                @foreach($relatedArticles as $relatedArticle)
                                    <div class="useful-holder">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="user-img" style="background-image: url(/{{$relatedArticle->img}});"></div>
                                        </div>
                                        <div class="col-7 pl-0  flex-row justify-content-start align-items-center">
                                            <p>
                                                <a href="{{ route('dashboard.single.article', $relatedArticle->slug) }}" class="read-article"
                                                   data-post-id="{{ $relatedArticle->id }}">
                                                    {{ $relatedArticle->title }}
                                                </a>
                                            </p>
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>


                <div id="editparent" class="popup_form_edit">
                    <form class="{{ $popup_form_class }}" enctype="multipart/form-data" method="post" data-hs-cf-bound="true">
                        <p>Change Title of Article</p>
                        <p>
                            <input type="title" name="title" value="{{$article->title}}">
                        </p>
                        <input type="hidden" name="origin_post" value="{{ $article->id }}">

                        <p>Edit Content of Article</p>
                        <div id="editControls">
                            <div class="btn-group">
                                <a class="btn btn-xs btn-default" data-role="undo" href="#" title="Undo"><i class="fa fa-undo"></i></a>
                                <a class="btn btn-xs btn-default" data-role="redo" href="#" title="Redo"><i class="fa fa-repeat"></i></a>
                            </div>
                            <div class="btn-group">
                                <a class="btn btn-xs btn-default" data-role="bold" href="#" title="Bold"><i class="fa fa-bold"></i></a>
                                <a class="btn btn-xs btn-default" data-role="italic" href="#" title="Italic"><i class="fa fa-italic"></i></a>
                                <a class="btn btn-xs btn-default" data-role="underline" href="#" title="Underline"><i class="fa fa-underline"></i></a>
                                <a class="btn btn-xs btn-default" data-role="strikeThrough" href="#" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                            </div>
                            <div class="btn-group">
                                <a class="btn btn-xs btn-default" data-role="insertUnorderedList" href="#" title="Unordered List"><i class="fa fa-list-ul"></i></a>
                                <a class="btn btn-xs btn-default" data-role="insertOrderedList" href="#" title="Ordered List"><i class="fa fa-list-ol"></i></a>
                            </div>
                            <div class="btn-group">
                                <a class="btn  btn-xs btn-default" data-role="justifyleft" href="#" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                                <a class="btn  btn-xs btn-default" data-role="justifycenter" href="#" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                                <a class="btn btn-xs btn-default" data-role="justifyright" href="#" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                            </div>
                            <div class="btn-group">
                                <a class="btn btn-xs btn-default" data-role="h1" href="#" title="Heading 1"><i class="fa fa-header"></i><sup>1</sup></a>
                                <a class="btn btn-xs btn-default" data-role="h2" href="#" title="Heading 2"><i class="fa fa-header"></i><sup>2</sup></a>
                                <a class="btn btn-xs btn-default" data-role="h3" href="#" title="Heading 3"><i class="fa fa-header"></i><sup>3</sup></a>
                                <a class="btn btn-xs btn-default" data-role="p" href="#" title="Paragraph"><i class="fa fa-paragraph"></i></a>
                            </div>
                            <div class="btn-group">
                                <a class="btn btn-xs btn-default" data-command="createlink" href="#" title="Link"><i class="fa fa-link"></i></a>
                                <a class="btn btn-xs btn-default" data-command="unlink" href="#" title="Link"><i class="fa fa-unlink"></i></a>
                                <a class="btn btn-xs btn-default" data-command="unstyle" href="#" title="Remove Style"><i class="fa fa-pencil"></i></a>
                                <a class="btn btn-xs btn-default" data-command="img" href="#" title="Image Link"><i class="fa fa-image"></i></a>
                                <a class="btn btn-xs btn-default" data-command="img-url" href="#" title="Image Upload"><i class="fa fa-file-image-o"></i></a>
                            </div>
                        </div>
                        <div id="editor" contenteditable="">{!! $article->content !!}</div>
                        <p class="d-none"><textarea name="content" id="content_cloned_article" spellcheck="false"></textarea></p>
                        <p>Swap Hero Image for Article</p>
                        <p>
                            <label for="user_image" class="custom-file-upload">
                                <i class="fa fa-upload"></i> Upload New                        </label>
                            <input type="file" name="thumbnail" id="user_image" value="Upload New">
                        </p>
                        <p class="message">You’re now entering editing mode. Please ensure any edits are good-to-go from a compliance standpoint.</p>
                        <p>
                            <input type="submit" value="Save">
                        </p>
                    </form>
                    <span class="close_popup"><i class="fa fa-times"></i></span>
                </div>
                <img src="{{ asset('frontendDashboard/pluginAssets/img/loader.gif') }}" id="loader" alt="loader">
            </div>

        </div>
    </div>

@endsection

@section('individual_scripts')
    <script type='text/javascript' src='{{ asset('frontendDashboard/pluginAssets/articles.js') }}' id='articles-js'></script>
@endsection
