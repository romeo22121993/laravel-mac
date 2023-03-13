@extends('userDashboard.master')

@section('title')
   Single Campaign Page
@endsection

@section('content')

    <div class="right-content">

        <div class="container single-campaign">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="buttons-line d-flex justify-content-start align-items-start">
                        <a href="{{ route('dashboard.campaigns') }}" class="sv-button sv-button--nav sv-button--grey-text">
                            Back To Campaigns
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="buttons-line d-flex flex-wrap justify-content-end align-items-start">
                        <a href="{{ route('single.campaign.report', $campaign->slug) }}" class="sv-button sv-button--nav">
                            View Report
                        </a>
                        <a href="#"  data-id="{{$campaign->id}}" class="sv-button sv-button--nav clone_campaign_single_page_btn">
                            Clone Campaign
                        </a>
                        <a href="{{ $campaign->pdf_file }}" target="_blank" class="sv-button sv-button--nav compilance_download_btn "
                           data-campaginid="{{$campaign->id}}">
                            Download PDF
                        </a>
                        <a href="{{ $campaign->doc_file }}" target="_blank" class="sv-button sv-button--nav compilance_download_btn " data-campaginid="{{$campaign->id}}">
                            Download Word
                        </a>

                        @if(($campaign->original_type=='cloned') && $campaign->author_id == $currentUser->id)
                            <a href="{{ $campaign->doc_file }}" target="_blank" class="sv-button sv-button--nav delete_cloned_campaign " data-id="{{$campaign->id}}">
                                Delete Cloned Campaign
                            </a>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="sv-section">
                        <div class="single_campaign_block">
                            <h2 class="sv-title">
                                Email Campaign
                            </h2>
                            <span class="ribbon-target" style="background-color: #c3cedd;">Not Active</span>
                        </div>

                        <form action="" class="sv-email-campaign scheduling_campaign_form" method="post">
                            <div class="sv-tales">
                                <div class="sv-tale">
                                    <h4 class="sv-tale__title">Name of Campaign</h4>
                                    <p class="sv-tale__copy">{{ $campaign->title }}</p>
                                    <img src="{{ asset('frontendDashboard/pluginAssets/img/loader.gif') }}" id="loader_campaign" alt="loader" style=" display: none; position: absolute; left: 50%; top: 50%;">
                                </div>

                                <div class="sv-tale">
                                    <h4 class="sv-tale__title">Number of Emails</h4>
                                    <p class="sv-tale__copy">2</p>
                                </div>

                                <div class="sv-tale">
                                    <h4 class="sv-tale__title">Send Group</h4>

                                    <div class="sv-tale__select">
                                        <select name="campaign_group" class="">
                                            <option value="8644">Success Group 1 4</option>
                                            <option value="6821">New Name</option>
                                            <option value="6227">New Name</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="sv-tale">
                                    <h4 class="sv-tale__title">BCC Emails</h4>
                                    <div class="sv-tale-emails"></div>
                                    <input type="text" name="bcc_emails" class="bcc_emails" placeholder="BCC Emails" value="">
                                    <input type="hidden" name="bcc_emails_list" class="bcc_emails_list" value="">
                                </div>
                            </div>
                            <input type="hidden" name="campaign_id" value="{{$campaign->id}}">
                            <div class="sv-tales">
                                <div class="sv-tale sv-campaign-description" style="width: 100%;">
                                    {!! $campaign->content !!}
                                </div>
                            </div>
                            <table class="sv-email-campaign__table js-campaign-table">
                                <thead>
                                    <tr>
                                        <th>Email Subject</th>
                                        <th><span>Email Body</span></th>
                                        <th><span>Sending date</span></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="js-equal-subject-body">
                                    @for($i=1; $i<=3;$i++)
                                        @php
                                            $subjectKey    = "email_subject$i";
                                            $bodyKey       = "email_body$i";
                                            $customLinkKey = "use_custom_link$i";
                                            $articleKey    = "article$i";
                                        @endphp
                                        @if( !empty($campaign->details->$subjectKey) && $campaign->details->$bodyKey)
                                            <tr data-scheduling-email-id="" data-scheduling-email-status="" class=""
                                                data-counter="{{$i}}" data-articleid="7671"
                                                data-article_title="Article Title" data-article_link=""
                                                data-user="{{$currentUser->id}}" data-shared-post="0">
                                            <td class="sv-email-campaign__subject" data-th="{{ $campaign->details->$subjectKey }}"
                                                 data-subject="{{ $campaign->details->$subjectKey }}">
                                                <div style="height: 85.9297px;">{{ $campaign->details->$subjectKey }}</div>
                                            </td>
                                            <td class="sv-email-campaign__body" data-th="Email Body">
                                                <div style="height: 85.9297px;">{!! $campaign->details->$bodyKey !!}</div>
                                            </td>
                                            <td class="sv-email-campaign__date" data-th="Sending date">
                                                <div style="height: 85.9297px;">Not scheduled yet</div>

                                                <input type="hidden" name="date1" class="js-sending-date" value="">
                                                <input type="hidden" name="type1" value="create">
                                                <input type="hidden" name="edited_id1" value="">

                                            </td>
                                            <td class="sv-email-campaign__view-button">
                                                <button type="button" class="sv-button js-view-email" data-title="{{$campaign->title}}"
                                                        data-copy="{{$campaign->details->$bodyKey}}"
                                                        data-edited-content="{{ $campaign->details->$bodyKey }}"
                                                        data-fullname="{{$currentUser->first_name . ' ' . $currentUser->last_name}}"
                                                        data-userimg="{{ asset($currentUser->avatar_img) }}"
                                                        data-email="{{$currentUser->email}}" data-phone="{{$currentUser->phone}}"
                                                        data-website="http://seven.loc/"
                                                        data-address="" data-company="{{$currentUser->company}}"
                                                        data-position="{{$currentUser->position}}" data-disclosure="">
                                                    View Email
                                                </button>
                                            </td>
                                            <td class="sv-email-campaign__schedule-button">
                                                <button type="button" class="sv-button sv-button--blue-text js-campaign-button js-datePicker">Schedule</button>
                                            </td>
                                            <td class="sv-email-campaign__custom-link">
                                                <div class="sv-custom-link js-custom-link  " data-status="">
                                                    <i class="fa fa-edit"></i>
                                                </div>
                                                <input type="hidden" class="custom_link_input" placeholder="Custom link" name="custom_link1" value="">
                                                <input type="hidden" class="email_subject_input" placeholder="Email Subject" name="email_subject1" value="A Retirement Tax Strategy Can Boost Your Income – But Start Early">
                                                <input type="hidden" class="custom_personal_token_input" placeholder="Custom personal token" name="custom_personal_token1" value="checked">
                                                <input type="hidden" class="custom_article_token_input" placeholder="Article on/off input" name="custom_article_token1" value="">
                                                <input type="hidden" class="custom_edited_content" placeholder="Edited Content" name="custom_edited_content1" value='{{ $campaign->details->$bodyKey }}'>
                                            </td>
                                            <td class="sv-email-campaign__cancel">
                                                <button type="button" class="sv-close-button js-cancel-email " data-id=""></button>
                                            </td>
                                        </tr>
                                        @endif
                                    @endfor
                                </tbody>
                            </table>
                            <div class="sv-row">
                                <div class="sv-email-campaign__submit">
                                    <div class="sv-hr"></div>
                                    <button class="sv-button sv-button--green sv-button--small-padding js_pause_campaign disabled" type="button" data-id="8137">
                                        Pause
                                    </button>
                                    <button class="sv-button sv-button--green sv-button--small-padding js_stop_campaign disabled" type="button" data-id="8137">
                                        Stop
                                    </button>
                                    <button class="sv-button sv-button--green sv-button--small-padding js-draft-submit-campaign" type="button">
                                        Save as Draft
                                    </button>
                                    <button class="sv-button sv-button--green sv-button--small-padding js-submit-campaign disabled" type="submit" disabled="">
                                        Start
                                    </button>
                                    <img src="{{ asset('frontendDashboard/pluginAssets/img/loader.gif') }}" id="loader" alt="loader">
                                </div>
                                <a href="#" class="js-link-popup-new">Can't Hit Send? Check These Items</a>
                                <div class="sv-link-popup sv-link-popup-new">
                                    <div class="sv-link-popup__header">
                                        <h5>Items to Check Before Sending a Campaign</h5>
                                        <span class="sv-link-popup__close sv-link-popup__close-new">
                                            <i class="fa fa-times"></i>
                                        </span>
                                    </div>
                                    <div class="sv-link-popup__body  ">
                                        <p>1. Check to see if you’ve connected your email address to our email sender in your profile settings.</p>
                                        <p>2. Double check to see if you’ve added a custom link to the email. Hit the edit button and add a link via your own custom URL or a Seven Group landing page by hitting the switch.</p>
                                        <p>3. Ensure your email is scheduled for a future send date.</p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('individual_scripts')
    <script type='text/javascript' src='{{ asset('frontendDashboard/pluginAssets/campaigns.js') }}' id='campaign-script-js'></script>
@endsection
