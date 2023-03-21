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
                            <span class="ribbon-target" style="background-color:{{$status['ribbon_background']}};">{{ $status['status'] }}</span>
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

                                            $campaignSchedule = $campaign->schedules->where('user_id', $currentUser->id)->where('email_subject', $campaign->details->$subjectKey)->first();
                                            $emailBody = !empty($campaignSchedule['email_body']) ? $campaignSchedule['email_body'] : $campaign->details->$bodyKey;
                                            $str_text  = mb_strimwidth( strip_tags( $emailBody ), 0, 33, '...' );

                                            $sendingDataFormat = '';

                                            if ( empty( $campaignSchedule ) ) {
                                                $sendingData = 'Not scheduled yet';
                                            }
                                            elseif ( $campaignSchedule['status'] == 'canceled' ) {
                                                $sendingData = 'Canceled';
                                            }
                                            elseif ( $campaignSchedule['status'] == 'draft' ) {
                                                $sendingData        = 'Draft';

                                                if ( $campaignSchedule['sending_time'] == '0000-00-00 00:00:00' ) {
                                                    $sendingData = 'Not scheduled yet';
                                                }
                                                else {
                                                    $old_date          = strtotime($campaignSchedule['sending_time']);
                                                    $sendingDataFormat = date('m-d-Y h:ia', $old_date );
                                                    $sendingData       .= ' - ' .  $sendingDataFormat;
                                                }
                                                $check_draft         = true;
                                            }
                                            else {
                                                $sendingData        = ( $campaignSchedule['status'] == 'sent' ) ? 'Sent' : 'Active';
                                                $old_date           = strtotime( $campaignSchedule['sending_time'] );
                                                $sendingDataFormat  = date('m-d-Y h:ia', $old_date );
                                                $sendingData       .= ' - ' .  $sendingDataFormat;
                                                $check = true;
                                            }

                                            $emailItemSubject = !empty($campaignSchedule['email_subject']) ? $campaignSchedule['email_subject'] : $campaign->details->$subjectKey;
                                            $emailItemSubject = !empty($campaignSchedule['email_subject_new']) ? $campaignSchedule['email_subject_new'] : $emailItemSubject;
                                            $emailSendingTime = ( empty($campaignSchedule) || $campaignSchedule['sending_time'] == '0000-00-00 00:00:00' ) ? '' : $campaignSchedule['sending_time'];
                                            $emailSendingTime = ( !empty($campaignSchedule) && $campaignSchedule['status'] == 'canceled' ) ? 'canceled' : $emailSendingTime;
                                        @endphp

                                        @if( !empty($campaign->details->$subjectKey) && !empty($campaign->details->$bodyKey))

                                            <tr data-scheduling-email-id="" data-scheduling-email-status="" class=""
                                                data-counter="{{$i}}" data-articleid="7671"
                                                data-article_title="Article Title" data-article_link=""
                                                data-user="{{$currentUser->id}}" data-shared-post="0">
                                                <td class="sv-email-campaign__subject" data-th="{{ $emailItemSubject }}"
                                                     data-subject="{{ $emailItemSubject }}">
                                                    <div style="height: 85.9297px;">{{ $emailItemSubject }}</div>
                                                </td>
                                                <td class="sv-email-campaign__body" data-th="Email Body">
                                                    <div style="height: 85.9297px;">{!! $str_text !!}</div>
                                                </td>
                                                <td class="sv-email-campaign__date" data-th="Sending date">
                                                    @if (empty($campaignSchedule))
                                                        <div>{{ $sendingData }}</div>
                                                    @elseif ( $campaignSchedule["status"] == 'draft' )
                                                        @php
                                                            $status_label = 'Draft';
                                                        @endphp
                                                        <div class="position-relative" data-prev-text="{{  $status_label }} - ">
                                                            @if ( $campaignSchedule["sending_time"] != '0000-00-00 00:00:00' )
                                                                <button type="button" class="js-sending-date-edit sv-edit-field"></button>
                                                                {{ $sendingData }}
                                                            @else
                                                                {{  $status_label }} :{{ $sendingData }}
                                                            @endif
                                                        </div>
                                                    @elseif ( $campaignSchedule["status"] == 'inprogress' )
                                                        @php
                                                        $status_label =  'Active';
                                                        @endphp
                                                        <div class="position-relative" data-prev-text="{{ $status_label }} - ">
                                                            {{ $sendingData }}
                                                            <button type="button" class="js-sending-date-edit sv-edit-field"></button>
                                                        </div>
                                                    @elseif ( ( $campaignSchedule["status"] == 'paused' ) || ( $campaignSchedule["status"] == 'stopped' ) )
                                                        @php
                                                        $status_label     = ucfirst( $campaignSchedule["status"] );
                                                        $send_data_format = date('m-d-Y h:ia', strtotime( $campaignSchedule["sending_time"] ) );
                                                        @endphp
                                                        <div class="position-relative" data-prev-text="{{ $status_label }} - ">
                                                            {{ $status_label . ' - ' .  $sendingDataFormat }}
                                                        </div>
                                                    @else
                                                        <div>{{ $sendingData }}</div>
                                                    @endif

                                                    <input type="hidden" name="date{{$i}}" class="js-sending-date" value="{{$emailSendingTime}}">
                                                    <input type="hidden" name="type{{$i}}" value="create">

                                                    @if ( !empty( $campaignSchedule["id"] ) )
                                                        <input type="hidden" name="edited_id{{$i}}" value="{{ $campaignSchedule["id"] }}">
                                                    @endif
                                                    @if ( !empty( $check_draft ) )
                                                        <input type="hidden" name="was_draft" value="was_draft" id="was_draft">
                                                    @endif

                                                </td>

                                                <td class="sv-email-campaign__view-button">
                                                    <button type="button" class="sv-button js-view-email" data-title="{{$campaign->title}}"
                                                            data-copy="{{$emailBody}}"
                                                            data-edited-content="{{ $emailBody }}"
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
                                                    @if(empty($campaignSchedule))
                                                        <button type="button" class="sv-button sv-button--blue-text js-campaign-button js-datePicker">Schedule</button>
                                                    @elseif( $campaignSchedule["status"] == 'sent')
                                                        <button type="button" class="sv-button sv-button--blue-text js-campaign-button" disabled>Scheduled</button>
                                                    @elseif( ( $campaignSchedule["status"] == 'inprogress' ) ||  ( $campaignSchedule["status"] == 'paused' ) ||  ( $campaignSchedule["status"] == 'stopped' ) )
                                                        <button type="button" class="sv-button sv-button--blue-text js-campaign-button selected disabled" >Scheduled</button>
                                                    @elseif( ( $campaignSchedule["status"] == 'draft' ) && ( !empty( $campaignSchedule["sending_time"] ) && ( $campaignSchedule["sending_time"] != '0000-00-00 00:00:00' ) ) )
                                                        <button type="button" class="sv-button sv-button--blue-text js-campaign-button selected disabled" >Scheduled</button>
                                                    @elseif( $campaignSchedule["status"] == 'canceled' )
                                                        <button type="button" class="sv-button sv-button--blue-text js-campaign-button js-datePicker" disabled>Scheduled</button>
                                                    @else
                                                        <button type="button" class="sv-button sv-button--blue-text js-campaign-button js-datePicker">Schedule</button>
                                                    @endif
                                                </td>

                                                <td class="sv-email-campaign__custom-link">
                                                    <div class="sv-custom-link js-custom-link  " data-status="">
                                                        <i class="fa fa-edit"></i>
                                                    </div>
                                                    <input type="hidden" class="email_subject_input" placeholder="Email Subject" name="email_subject{{$i}}" value="{{ $emailItemSubject }}">
                                                    <input type="hidden" class="custom_edited_content" placeholder="Edited Content" name="email_body{{$i}}" value='{{ $emailBody }}'>
                                                </td>
                                                <td class="sv-email-campaign__cancel">
                                                    <button type="button" class="sv-close-button js-cancel-email " data-id=""></button>
                                                </td>
                                            </tr>
                                        @endif
                                    @endfor
                                </tbody>
                                <input type="hidden" name="campaign_detail" value="{{$campaign->details->id}}">
                            </table>
                            <div class="sv-row">
                                <div class="sv-email-campaign__submit">
                                    <div class="sv-hr"></div>
                                    <button class="sv-button sv-button--green sv-button--small-padding js_pause_campaign disabled" type="button" data-id="{{ $campaign->id }}">
                                        Pause
                                    </button>
                                    <button class="sv-button sv-button--green sv-button--small-padding js_stop_campaign disabled" type="button" data-id="{{ $campaign->id }}">
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
