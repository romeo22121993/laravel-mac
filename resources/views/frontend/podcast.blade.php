@extends('frontend.master')

@section('title')
    Podcast Page
@endsection

@section('content')

    <div class=" page-podcast">
        <div class="inner_container services_block platform_block">
            <div class="container">
                <!--			<div class="podcast_block-banner-title">Episodes</div>-->
                <div class="podcast_block-banner" style="background-image: url(http://seven.loc/wp-content/uploads/2021/05/Group_7-min.png)">
                    <div class="podcast_block-banner-left">
                        <img src="http://seven.loc/wp-content/uploads/2022/10/Advisor-Lab-by-Cion-white-and-teal-Logo2-e1666192251495.png" class="podcast_block-banner-left-image" alt="left image">				</div>
                    <div class="podcast_block-banner-center">
                        <h4>Advisor Lab by CION</h4>
                        <h1>Browse Through Our Episodes</h1>
                    </div>
                    <div class="podcast_block-banner-right">
                        <div class="podcast_block-banner-right-text">
                            <div class="podcast_block-banner-right-text1">Hosted by</div>
                            <div class="podcast_block-banner-right-text2">Derek Schwartz</div>
                            <div class="podcast_block-banner-right-text3">Managing Director</div>
                        </div>
                        <img src="http://seven.loc/wp-content/uploads/2022/10/Derek-headshot_rt-side4-e1665516710448.png" class="podcast_block-banner-right-image" alt="right image">				</div>
                </div>
                <div class="podcast_block-banner-bottom">
                    <a href="https://advisorlab.libsyn.com/" target="_blank"><img src="http://seven.loc/wp-content/uploads/2021/05/Bitmap-1.png" class="podcast_block-banner-bottom-image" alt="bottom image"></a>				<a href="https://advisorlab.libsyn.com/" target="_blank"><img src="http://seven.loc/wp-content/uploads/2021/05/Bitmap-2.png" class="podcast_block-banner-bottom-image" alt="bottom image"></a>			</div>
            </div>

        </div>

        <div class="podcast_block-list">
        <div class="container">
            <h2>The Advisor Lab by CION</h2>


            <div class="podcast_block-item" data-num="1">
                <div class="podcast_block-item-image">
                    <img src="https://ssl-static.libsyn.com/p/assets/8/5/2/2/85227af2863e1f38bafc7308ab683e82/Advisor_Lab_-_Logo.png " alt="podcast image">
                </div>
                <div class="podcast_block-item-text">
                    <div class="podcast_block-item-top-text">
                        Tue Jan 31 2023 | Episode 117 | CION Investments
                    </div>
                    <h4 class="podcast_block-item-title">
                        Evolving Your Practice and Selecting a Platform Partner
                    </h4>

                    <div class="podcast_block-item-desc">
                        <p>Amit Dogra is President and COO of tru Independence, a platform that helps financial advisors optimize their independence with guidance, expertise and support. In this episode, we go deep into the continually evolving financial advisory landscape, the trends Amit sees now, and some very good advice for what advisors should be thinking about, from asset growth to succession planning.</p>
                    </div>
                    <audio src="https://traffic.libsyn.com/secure/advisorlab/cioninvestments_Amit_Dogra_FINAL.mp3?dest-id=1706015" id="track"></audio>
                    <div class="player-container">
                        <div class="box">
                            <div class="next-prev">
                                <i title="Back 30 seconds" id="back30"></i>
                                <div class="play-pause">
                                    <i id="play"></i>
                                    <i id="pause"></i>
                                </div>
                                <i title="Forward 30 seconds" id="forward30"></i>
                            </div>
                            <div class="progress-bar">
                                <input type="range" id="progressBar" min="0" max="1335.915417" value="0">
                            </div>
                            <div class="track-time">
                                <div id="currentTime">0:00</div>
                                <div id="durationTime">22:15</div>
                            </div>
                            <div class="volume-container">
                                <div class="volume-button">
                                    <div class="volume icono-volumeMedium"></div>
                                </div>
                                <div class="volume-slider">
                                    <span class="slide" style="width: 100%;"><span class="slide-icon"></span></span>
                                    <input id="volumeslider" type="range" min="0" max="100" value="100" step="1">
                                </div>
                            </div>
                            <div class="audio-buttons">
                                <div class="audio-buttons-share">
                                    <div class="audio-buttons-share-container">
                                        <a href="http://www.facebook.com/sharer.php?u=https://traffic.libsyn.com/secure/advisorlab/cioninvestments_Amit_Dogra_FINAL.mp3?dest-id=1706015" title="facebook" target="_blank"></a>
                                        <a href="https://twitter.com/share?url=https://traffic.libsyn.com/secure/advisorlab/cioninvestments_Amit_Dogra_FINAL.mp3?dest-id=1706015" title="twitter" target="_blank"></a>
                                        <a href=" http://www.linkedin.com/shareArticle?mini=true&amp;url=https://traffic.libsyn.com/secure/advisorlab/cioninvestments_Amit_Dogra_FINAL.mp3?dest-id=1706015" title="linkedin" target="_blank"></a>
                                        <a href=" http://pinterest.com/pin/create/button/?url=https://traffic.libsyn.com/secure/advisorlab/cioninvestments_Amit_Dogra_FINAL.mp3?dest-id=1706015" title="pinterest" target="_blank"></a>
                                    </div>
                                </div>
                                <a class="audio-buttons-download" href="https://traffic.libsyn.com/secure/advisorlab/cioninvestments_Amit_Dogra_FINAL.mp3?dest-id=1706015" target="_blank">	</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="podcast_block-item" data-num="2">
                <div class="podcast_block-item-image">
                    <img src="https://ssl-static.libsyn.com/p/assets/8/5/2/2/85227af2863e1f38bafc7308ab683e82/Advisor_Lab_-_Logo.png " alt="podcast image">
                </div>
                <div class="podcast_block-item-text">
                    <div class="podcast_block-item-top-text">
                        Tue Jan 17 2023 | Episode 116 | CION Investments
                    </div>
                    <h4 class="podcast_block-item-title">
                        2023 Outlook - The Beginning of a New Recovery Cycle?
                    </h4>

                    <div class="podcast_block-item-desc">
                        <p>On this episode of Advisor Lab by CION, we welcome Brian Levitt, Global Market Strategist. We sat down with Brian to discuss his view on the volatility and uncertainty of last year, how things changed in the last few months, and what he thinks may be in store for the economy and the markets in 2023. Along the way, we hit the Fed’s terminal rate, the debt ceiling, the 60/40 portfolio, and got into alternatives. It’s a great listen to set you up for 2023.</p>
                    </div>
                    <audio src="https://traffic.libsyn.com/secure/advisorlab/REVISED_brianlevitt_FINAL.mp3?dest-id=1706015" id="track"></audio>
                    <div class="player-container">
                        <div class="box">
                            <div class="next-prev">
                                <i title="Back 30 seconds" id="back30"></i>
                                <div class="play-pause">
                                    <i id="play"></i>
                                    <i id="pause"></i>
                                </div>
                                <i title="Forward 30 seconds" id="forward30"></i>
                            </div>
                            <div class="progress-bar">
                                <input type="range" id="progressBar" min="0" max="1265.959917" value="0">
                            </div>
                            <div class="track-time">
                                <div id="currentTime">0:00</div>
                                <div id="durationTime">21:05</div>
                            </div>
                            <div class="volume-container">
                                <div class="volume-button">
                                    <div class="volume icono-volumeMedium"></div>
                                </div>
                                <div class="volume-slider">
                                    <span class="slide" style="width: 100%;"><span class="slide-icon"></span></span>
                                    <input id="volumeslider" type="range" min="0" max="100" value="100" step="1">
                                </div>
                            </div>
                            <div class="audio-buttons">
                                <div class="audio-buttons-share">
                                    <div class="audio-buttons-share-container">
                                        <a href="http://www.facebook.com/sharer.php?u=https://traffic.libsyn.com/secure/advisorlab/REVISED_brianlevitt_FINAL.mp3?dest-id=1706015" title="facebook" target="_blank"></a>
                                        <a href="https://twitter.com/share?url=https://traffic.libsyn.com/secure/advisorlab/REVISED_brianlevitt_FINAL.mp3?dest-id=1706015" title="twitter" target="_blank"></a>
                                        <a href=" http://www.linkedin.com/shareArticle?mini=true&amp;url=https://traffic.libsyn.com/secure/advisorlab/REVISED_brianlevitt_FINAL.mp3?dest-id=1706015" title="linkedin" target="_blank"></a>
                                        <a href=" http://pinterest.com/pin/create/button/?url=https://traffic.libsyn.com/secure/advisorlab/REVISED_brianlevitt_FINAL.mp3?dest-id=1706015" title="pinterest" target="_blank"></a>
                                    </div>
                                </div>
                                <a class="audio-buttons-download" href="https://traffic.libsyn.com/secure/advisorlab/REVISED_brianlevitt_FINAL.mp3?dest-id=1706015" target="_blank">	</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="podcast_block-item" data-num="3">
                <div class="podcast_block-item-image">
                    <img src="https://ssl-static.libsyn.com/p/assets/8/5/2/2/85227af2863e1f38bafc7308ab683e82/Advisor_Lab_-_Logo.png " alt="podcast image">
                </div>
                <div class="podcast_block-item-text">
                    <div class="podcast_block-item-top-text">
                        Wed Dec 07 2022 | Episode 115 | CION Investments
                    </div>
                    <h4 class="podcast_block-item-title">
                        Pathways to Growth - The Limits of Scale
                    </h4>

                    <div class="podcast_block-item-desc">
                        <p>On this episode of Advisor Lab by CION, we sit down with Josh Reidinger, CEO of Waverly Advisors. Waverly has grown organically and through acquisitions, backed with private equity. We get into how Waverly built a unique culture, what they see going forward in the independent advisor space, and how they develop niche-based offerings for clients. Waverly believes in scaling your business, but not your relationships.&nbsp;</p>
                    </div>
                    <audio src="https://traffic.libsyn.com/secure/advisorlab/REVISED_cioninvestments_mixdown_1.mp3?dest-id=1706015" id="track"></audio>
                    <div class="player-container">
                        <div class="box">
                            <div class="next-prev">
                                <i title="Back 30 seconds" id="back30"></i>
                                <div class="play-pause">
                                    <i id="play"></i>
                                    <i id="pause"></i>
                                </div>
                                <i title="Forward 30 seconds" id="forward30"></i>
                            </div>
                            <div class="progress-bar">
                                <input type="range" id="progressBar" min="0" max="1527.367083" value="0">
                            </div>
                            <div class="track-time">
                                <div id="currentTime">0:00</div>
                                <div id="durationTime">25:27</div>
                            </div>
                            <div class="volume-container">
                                <div class="volume-button">
                                    <div class="volume icono-volumeMedium"></div>
                                </div>
                                <div class="volume-slider">
                                    <span class="slide" style="width: 100%;"><span class="slide-icon"></span></span>
                                    <input id="volumeslider" type="range" min="0" max="100" value="100" step="1">
                                </div>
                            </div>
                            <div class="audio-buttons">
                                <div class="audio-buttons-share">
                                    <div class="audio-buttons-share-container">
                                        <a href="http://www.facebook.com/sharer.php?u=https://traffic.libsyn.com/secure/advisorlab/REVISED_cioninvestments_mixdown_1.mp3?dest-id=1706015" title="facebook" target="_blank"></a>
                                        <a href="https://twitter.com/share?url=https://traffic.libsyn.com/secure/advisorlab/REVISED_cioninvestments_mixdown_1.mp3?dest-id=1706015" title="twitter" target="_blank"></a>
                                        <a href=" http://www.linkedin.com/shareArticle?mini=true&amp;url=https://traffic.libsyn.com/secure/advisorlab/REVISED_cioninvestments_mixdown_1.mp3?dest-id=1706015" title="linkedin" target="_blank"></a>
                                        <a href=" http://pinterest.com/pin/create/button/?url=https://traffic.libsyn.com/secure/advisorlab/REVISED_cioninvestments_mixdown_1.mp3?dest-id=1706015" title="pinterest" target="_blank"></a>
                                    </div>
                                </div>
                                <a class="audio-buttons-download" href="https://traffic.libsyn.com/secure/advisorlab/REVISED_cioninvestments_mixdown_1.mp3?dest-id=1706015" target="_blank">	</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="podcast_block-item" data-num="4">
                <div class="podcast_block-item-image">
                    <img src="https://ssl-static.libsyn.com/p/assets/8/5/2/2/85227af2863e1f38bafc7308ab683e82/Advisor_Lab_-_Logo.png " alt="podcast image">
                </div>
                <div class="podcast_block-item-text">
                    <div class="podcast_block-item-top-text">
                        Tue Nov 15 2022 | Episode 114 | CION Investments
                    </div>
                    <h4 class="podcast_block-item-title">
                        Episode 114: Building Authenticity and Flexibility into Your Business Model
                    </h4>

                    <div class="podcast_block-item-desc">
                        <p>On this episode of Advisor Lab by CION, we welcome Anna N’Jie-Konte, the Founder of Dare-To-Dream Financial Planning. Anna N’Jie Konte has built a unique and successful business by looking at what attracted her, and adapting it to her own firm. She’s a firm believer in creating marketing rooted in the advisor’s personal story and value system to create client trust. We discuss Anna’s journey, and how her commitment to fitness and self-care was critical to her success.</p>
                    </div>
                    <audio src="https://traffic.libsyn.com/secure/advisorlab/cioninvestments_mixdown.mp3?dest-id=1706015" id="track"></audio>
                    <div class="player-container">
                        <div class="box">
                            <div class="next-prev">
                                <i title="Back 30 seconds" id="back30"></i>
                                <div class="play-pause">
                                    <i id="play"></i>
                                    <i id="pause"></i>
                                </div>
                                <i title="Forward 30 seconds" id="forward30"></i>
                            </div>
                            <div class="progress-bar">
                                <input type="range" id="progressBar" min="0" max="1577.551417" value="0">
                            </div>
                            <div class="track-time">
                                <div id="currentTime">0:00</div>
                                <div id="durationTime">26:17</div>
                            </div>
                            <div class="volume-container">
                                <div class="volume-button">
                                    <div class="volume icono-volumeMedium"></div>
                                </div>
                                <div class="volume-slider">
                                    <span class="slide" style="width: 100%;"><span class="slide-icon"></span></span>
                                    <input id="volumeslider" type="range" min="0" max="100" value="100" step="1">
                                </div>
                            </div>
                            <div class="audio-buttons">
                                <div class="audio-buttons-share">
                                    <div class="audio-buttons-share-container">
                                        <a href="http://www.facebook.com/sharer.php?u=https://traffic.libsyn.com/secure/advisorlab/cioninvestments_mixdown.mp3?dest-id=1706015" title="facebook" target="_blank"></a>
                                        <a href="https://twitter.com/share?url=https://traffic.libsyn.com/secure/advisorlab/cioninvestments_mixdown.mp3?dest-id=1706015" title="twitter" target="_blank"></a>
                                        <a href=" http://www.linkedin.com/shareArticle?mini=true&amp;url=https://traffic.libsyn.com/secure/advisorlab/cioninvestments_mixdown.mp3?dest-id=1706015" title="linkedin" target="_blank"></a>
                                        <a href=" http://pinterest.com/pin/create/button/?url=https://traffic.libsyn.com/secure/advisorlab/cioninvestments_mixdown.mp3?dest-id=1706015" title="pinterest" target="_blank"></a>
                                    </div>
                                </div>
                                <a class="audio-buttons-download" href="https://traffic.libsyn.com/secure/advisorlab/cioninvestments_mixdown.mp3?dest-id=1706015" target="_blank">	</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="podcast_block-item" data-num="5">
                <div class="podcast_block-item-image">
                    <img src="https://ssl-static.libsyn.com/p/assets/8/5/2/2/85227af2863e1f38bafc7308ab683e82/Advisor_Lab_-_Logo.png " alt="podcast image">
                </div>
                <div class="podcast_block-item-text">
                    <div class="podcast_block-item-top-text">
                        Tue Oct 25 2022 | Episode 113 | CION Investments
                    </div>
                    <h4 class="podcast_block-item-title">
                        Market Uncertainty: How to Define Your Outcome
                    </h4>

                    <div class="podcast_block-item-desc">
                        <p>In this episode, we welcome Jason Barsema, president and co-founder of Halo Investing. This fintech platform provides financial advisors with solutions for their clients that historically have only been available to ultra high net worth individuals. Be it bonds or equities, the 60/40 portfolios have had the worst first half of any year going back to 1932. Downside risk is on everyone's mind. Find out why Jason and Halo Investing are seeing such a huge demand for their platform and their business.</p>
                    </div>
                    <audio src="https://traffic.libsyn.com/secure/advisorlab/rev_cioninvestments_mixdown.mp3?dest-id=1706015" id="track"></audio>
                    <div class="player-container">
                        <div class="box">
                            <div class="next-prev">
                                <i title="Back 30 seconds" id="back30"></i>
                                <div class="play-pause">
                                    <i id="play"></i>
                                    <i id="pause"></i>
                                </div>
                                <i title="Forward 30 seconds" id="forward30"></i>
                            </div>
                            <div class="progress-bar">
                                <input type="range" id="progressBar" min="0" max="1598.079" value="0">
                            </div>
                            <div class="track-time">
                                <div id="currentTime">0:00</div>
                                <div id="durationTime">26:38</div>
                            </div>
                            <div class="volume-container">
                                <div class="volume-button">
                                    <div class="volume icono-volumeMedium"></div>
                                </div>
                                <div class="volume-slider">
                                    <span class="slide" style="width: 100%;"><span class="slide-icon"></span></span>
                                    <input id="volumeslider" type="range" min="0" max="100" value="100" step="1">
                                </div>
                            </div>
                            <div class="audio-buttons">
                                <div class="audio-buttons-share">
                                    <div class="audio-buttons-share-container">
                                        <a href="http://www.facebook.com/sharer.php?u=https://traffic.libsyn.com/secure/advisorlab/rev_cioninvestments_mixdown.mp3?dest-id=1706015" title="facebook" target="_blank"></a>
                                        <a href="https://twitter.com/share?url=https://traffic.libsyn.com/secure/advisorlab/rev_cioninvestments_mixdown.mp3?dest-id=1706015" title="twitter" target="_blank"></a>
                                        <a href=" http://www.linkedin.com/shareArticle?mini=true&amp;url=https://traffic.libsyn.com/secure/advisorlab/rev_cioninvestments_mixdown.mp3?dest-id=1706015" title="linkedin" target="_blank"></a>
                                        <a href=" http://pinterest.com/pin/create/button/?url=https://traffic.libsyn.com/secure/advisorlab/rev_cioninvestments_mixdown.mp3?dest-id=1706015" title="pinterest" target="_blank"></a>
                                    </div>
                                </div>
                                <a class="audio-buttons-download" href="https://traffic.libsyn.com/secure/advisorlab/rev_cioninvestments_mixdown.mp3?dest-id=1706015" target="_blank">	</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="podcast_block-item" data-num="6">
                <div class="podcast_block-item-image">
                    <img src="https://ssl-static.libsyn.com/p/assets/8/5/2/2/85227af2863e1f38bafc7308ab683e82/Advisor_Lab_-_Logo.png " alt="podcast image">
                </div>
                <div class="podcast_block-item-text">
                    <div class="podcast_block-item-top-text">
                        Wed Sep 21 2022 | Episode 112 | CION Investments
                    </div>
                    <h4 class="podcast_block-item-title">
                        Scaling Client and Prospect Engagement: A Guide to Launching an Educational Platform for Your Niche
                    </h4>

                    <div class="podcast_block-item-desc">
                        <p>In this episode, we welcome Ann Garcia, she’s owner of Independent Progressive Advisors, and the author of how to pay for college book and course. Ann has built a pretty incredible media portfolio around the topic of college, and in this episode, we dive into how she did it while running her practice. Let’s get into the conversation with Ann Garcia.</p> <p>Check out the course: https://howtopayforcollege.com</p>
                    </div>
                    <audio src="https://traffic.libsyn.com/secure/advisorlab/cioninvestments_mixdown_17.mp3?dest-id=1706015" id="track"></audio>
                    <div class="player-container">
                        <div class="box">
                            <div class="next-prev">
                                <i title="Back 30 seconds" id="back30"></i>
                                <div class="play-pause">
                                    <i id="play"></i>
                                    <i id="pause"></i>
                                </div>
                                <i title="Forward 30 seconds" id="forward30"></i>
                            </div>
                            <div class="progress-bar">
                                <input type="range" id="progressBar" min="0" max="2000.257917" value="0">
                            </div>
                            <div class="track-time">
                                <div id="currentTime">0:00</div>
                                <div id="durationTime">33:20</div>
                            </div>
                            <div class="volume-container">
                                <div class="volume-button">
                                    <div class="volume icono-volumeMedium"></div>
                                </div>
                                <div class="volume-slider">
                                    <span class="slide" style="width: 100%;"><span class="slide-icon"></span></span>
                                    <input id="volumeslider" type="range" min="0" max="100" value="100" step="1">
                                </div>
                            </div>
                            <div class="audio-buttons">
                                <div class="audio-buttons-share">
                                    <div class="audio-buttons-share-container">
                                        <a href="http://www.facebook.com/sharer.php?u=https://traffic.libsyn.com/secure/advisorlab/cioninvestments_mixdown_17.mp3?dest-id=1706015" title="facebook" target="_blank"></a>
                                        <a href="https://twitter.com/share?url=https://traffic.libsyn.com/secure/advisorlab/cioninvestments_mixdown_17.mp3?dest-id=1706015" title="twitter" target="_blank"></a>
                                        <a href=" http://www.linkedin.com/shareArticle?mini=true&amp;url=https://traffic.libsyn.com/secure/advisorlab/cioninvestments_mixdown_17.mp3?dest-id=1706015" title="linkedin" target="_blank"></a>
                                        <a href=" http://pinterest.com/pin/create/button/?url=https://traffic.libsyn.com/secure/advisorlab/cioninvestments_mixdown_17.mp3?dest-id=1706015" title="pinterest" target="_blank"></a>
                                    </div>
                                </div>
                                <a class="audio-buttons-download" href="https://traffic.libsyn.com/secure/advisorlab/cioninvestments_mixdown_17.mp3?dest-id=1706015" target="_blank">	</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="podcast_block-item" data-num="7">
                <div class="podcast_block-item-image">
                    <img src="https://ssl-static.libsyn.com/p/assets/8/5/2/2/85227af2863e1f38bafc7308ab683e82/Advisor_Lab_-_Logo.png " alt="podcast image">
                </div>
                <div class="podcast_block-item-text">
                    <div class="podcast_block-item-top-text">
                        Wed Sep 14 2022 | Episode 111 | CION Investments
                    </div>
                    <h4 class="podcast_block-item-title">
                        Creating More Self-Awareness to Drive Better Client Relationships
                    </h4>

                    <div class="podcast_block-item-desc">
                        <p>In this episode, we sit down with Joy Lere, Co-Founder of Shaping Wealth. Joy is a clinical psychologist, founder, consultant, educator, and writer - and she has an incredibly unique point of view on how advisors can create more self-awareness in their practice to improve their client relationships.&nbsp;</p> <p>Shaping Wealth just launched a new program, OCBO, your Outsourced Chief Behaviorial Office. You can learn more about it here: https://www.shapingwealth.com/ocbo</p>
                    </div>
                    <audio src="https://traffic.libsyn.com/secure/advisorlab/cioninvestments_mixdown_16.mp3?dest-id=1706015" id="track"></audio>
                    <div class="player-container">
                        <div class="box">
                            <div class="next-prev">
                                <i title="Back 30 seconds" id="back30"></i>
                                <div class="play-pause">
                                    <i id="play"></i>
                                    <i id="pause"></i>
                                </div>
                                <i title="Forward 30 seconds" id="forward30"></i>
                            </div>
                            <div class="progress-bar">
                                <input type="range" id="progressBar" min="0" max="2000.257917" value="0">
                            </div>
                            <div class="track-time">
                                <div id="currentTime">0:00</div>
                                <div id="durationTime">33:20</div>
                            </div>
                            <div class="volume-container">
                                <div class="volume-button">
                                    <div class="volume icono-volumeMedium"></div>
                                </div>
                                <div class="volume-slider">
                                    <span class="slide" style="width: 100%;"><span class="slide-icon"></span></span>
                                    <input id="volumeslider" type="range" min="0" max="100" value="100" step="1">
                                </div>
                            </div>
                            <div class="audio-buttons">
                                <div class="audio-buttons-share">
                                    <div class="audio-buttons-share-container">
                                        <a href="http://www.facebook.com/sharer.php?u=https://traffic.libsyn.com/secure/advisorlab/cioninvestments_mixdown_16.mp3?dest-id=1706015" title="facebook" target="_blank"></a>
                                        <a href="https://twitter.com/share?url=https://traffic.libsyn.com/secure/advisorlab/cioninvestments_mixdown_16.mp3?dest-id=1706015" title="twitter" target="_blank"></a>
                                        <a href=" http://www.linkedin.com/shareArticle?mini=true&amp;url=https://traffic.libsyn.com/secure/advisorlab/cioninvestments_mixdown_16.mp3?dest-id=1706015" title="linkedin" target="_blank"></a>
                                        <a href=" http://pinterest.com/pin/create/button/?url=https://traffic.libsyn.com/secure/advisorlab/cioninvestments_mixdown_16.mp3?dest-id=1706015" title="pinterest" target="_blank"></a>
                                    </div>
                                </div>
                                <a class="audio-buttons-download" href="https://traffic.libsyn.com/secure/advisorlab/cioninvestments_mixdown_16.mp3?dest-id=1706015" target="_blank">	</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="podcast_block-item" data-num="8">
                <div class="podcast_block-item-image">
                    <img src="https://ssl-static.libsyn.com/p/assets/8/5/2/2/85227af2863e1f38bafc7308ab683e82/Advisor_Lab_-_Logo.png " alt="podcast image">
                </div>
                <div class="podcast_block-item-text">
                    <div class="podcast_block-item-top-text">
                        Wed Aug 31 2022 | Episode 110 | CION Investments
                    </div>
                    <h4 class="podcast_block-item-title">
                        Introducing New Tech Into Your Practice, and Your Clients Lives
                    </h4>

                    <div class="podcast_block-item-desc">
                        <p>In this episode, we sit down with Scott Frank, founder of Stone Steps Financial, who has built a unique client experience for years leveraging new tech and different life planning approaches. We get into his experience introducing life planning into his practice and the latest tech he is using to improve his client experience and get back his time.&nbsp;</p> <p>Check out Stone Steps: <a href="https://www.stonestepsfinancial.com/">https://www.stonestepsfinancial.com/</a></p> <p>Check out Elements: <a href="https://getelements.com/">https://getelements.com/</a>&nbsp;</p>
                    </div>
                    <audio src="https://traffic.libsyn.com/secure/advisorlab/cioninvestments_mixdown_15.mp3?dest-id=1706015" id="track"></audio>
                    <div class="player-container">
                        <div class="box">
                            <div class="next-prev">
                                <i title="Back 30 seconds" id="back30"></i>
                                <div class="play-pause">
                                    <i id="play"></i>
                                    <i id="pause"></i>
                                </div>
                                <i title="Forward 30 seconds" id="forward30"></i>
                            </div>
                            <div class="progress-bar">
                                <input type="range" id="progressBar" min="0" max="1990.137583" value="0">
                            </div>
                            <div class="track-time">
                                <div id="currentTime">0:00</div>
                                <div id="durationTime">33:10</div>
                            </div>
                            <div class="volume-container">
                                <div class="volume-button">
                                    <div class="volume icono-volumeMedium"></div>
                                </div>
                                <div class="volume-slider">
                                    <span class="slide" style="width: 100%;"><span class="slide-icon"></span></span>
                                    <input id="volumeslider" type="range" min="0" max="100" value="100" step="1">
                                </div>
                            </div>
                            <div class="audio-buttons">
                                <div class="audio-buttons-share">
                                    <div class="audio-buttons-share-container">
                                        <a href="http://www.facebook.com/sharer.php?u=https://traffic.libsyn.com/secure/advisorlab/cioninvestments_mixdown_15.mp3?dest-id=1706015" title="facebook" target="_blank"></a>
                                        <a href="https://twitter.com/share?url=https://traffic.libsyn.com/secure/advisorlab/cioninvestments_mixdown_15.mp3?dest-id=1706015" title="twitter" target="_blank"></a>
                                        <a href=" http://www.linkedin.com/shareArticle?mini=true&amp;url=https://traffic.libsyn.com/secure/advisorlab/cioninvestments_mixdown_15.mp3?dest-id=1706015" title="linkedin" target="_blank"></a>
                                        <a href=" http://pinterest.com/pin/create/button/?url=https://traffic.libsyn.com/secure/advisorlab/cioninvestments_mixdown_15.mp3?dest-id=1706015" title="pinterest" target="_blank"></a>
                                    </div>
                                </div>
                                <a class="audio-buttons-download" href="https://traffic.libsyn.com/secure/advisorlab/cioninvestments_mixdown_15.mp3?dest-id=1706015" target="_blank">	</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="podcast_block-item" data-num="9">
                <div class="podcast_block-item-image">
                    <img src="https://ssl-static.libsyn.com/p/assets/8/5/2/2/85227af2863e1f38bafc7308ab683e82/Advisor_Lab_-_Logo.png " alt="podcast image">
                </div>
                <div class="podcast_block-item-text">
                    <div class="podcast_block-item-top-text">
                        Wed Aug 10 2022 | Episode 109 | Advisor I/O, A CION Investments Company
                    </div>
                    <h4 class="podcast_block-item-title">
                        Building an Engaged Audience on Social: How Callie Cox and eToro Do It
                    </h4>

                    <div class="podcast_block-item-desc">
                        <p>In this episode, we catch up with Callie Cox, an investment analyst at eToro who has built an incredibly engaged audience on Twitter talking all things macro and the market. Everything Callie puts out pulls and engages new readers, so we wanted to get into the details of her blueprint, personality, and thought process. We also discuss her take on what's happening in the macro economy.&nbsp;</p>
                    </div>
                    <audio src="https://traffic.libsyn.com/secure/advisorlab/cioninvestments_mixdown_14.mp3?dest-id=1706015" id="track"></audio>
                    <div class="player-container">
                        <div class="box">
                            <div class="next-prev">
                                <i title="Back 30 seconds" id="back30"></i>
                                <div class="play-pause">
                                    <i id="play"></i>
                                    <i id="pause"></i>
                                </div>
                                <i title="Forward 30 seconds" id="forward30"></i>
                            </div>
                            <div class="progress-bar">
                                <input type="range" id="progressBar" min="0" max="2425.72925" value="0">
                            </div>
                            <div class="track-time">
                                <div id="currentTime">0:00</div>
                                <div id="durationTime">40:25</div>
                            </div>
                            <div class="volume-container">
                                <div class="volume-button">
                                    <div class="volume icono-volumeMedium"></div>
                                </div>
                                <div class="volume-slider">
                                    <span class="slide" style="width: 100%;"><span class="slide-icon"></span></span>
                                    <input id="volumeslider" type="range" min="0" max="100" value="100" step="1">
                                </div>
                            </div>
                            <div class="audio-buttons">
                                <div class="audio-buttons-share">
                                    <div class="audio-buttons-share-container">
                                        <a href="http://www.facebook.com/sharer.php?u=https://traffic.libsyn.com/secure/advisorlab/cioninvestments_mixdown_14.mp3?dest-id=1706015" title="facebook" target="_blank"></a>
                                        <a href="https://twitter.com/share?url=https://traffic.libsyn.com/secure/advisorlab/cioninvestments_mixdown_14.mp3?dest-id=1706015" title="twitter" target="_blank"></a>
                                        <a href=" http://www.linkedin.com/shareArticle?mini=true&amp;url=https://traffic.libsyn.com/secure/advisorlab/cioninvestments_mixdown_14.mp3?dest-id=1706015" title="linkedin" target="_blank"></a>
                                        <a href=" http://pinterest.com/pin/create/button/?url=https://traffic.libsyn.com/secure/advisorlab/cioninvestments_mixdown_14.mp3?dest-id=1706015" title="pinterest" target="_blank"></a>
                                    </div>
                                </div>
                                <a class="audio-buttons-download" href="https://traffic.libsyn.com/secure/advisorlab/cioninvestments_mixdown_14.mp3?dest-id=1706015" target="_blank">	</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="podcast_block-item" data-num="10">
                <div class="podcast_block-item-image">
                    <img src="https://ssl-static.libsyn.com/p/assets/8/5/2/2/85227af2863e1f38bafc7308ab683e82/Advisor_Lab_-_Logo.png " alt="podcast image">
                </div>
                <div class="podcast_block-item-text">
                    <div class="podcast_block-item-top-text">
                        Wed Aug 03 2022 | Episode 108 | Advisor I/O, A CION Investments Company
                    </div>
                    <h4 class="podcast_block-item-title">
                        Shifting From Busy to Productive: A Conversation with SEI's Shauna Mace
                    </h4>

                    <div class="podcast_block-item-desc">
                        <p>In this episode, we sit down with SEI's Head of Practice Management, Shauna Mace. We get into her experience in working with advisors on how to go from busy to productive. We also dive into the launch of SEI's Growth Lab - a place where advisors can find resources and tools to help them build their practice.&nbsp;</p> <p>Learn more: <a href="https://info.seic.com/welcome-to-the-sei-growth-lab">https://info.seic.com/welcome-to-the-sei-growth-lab</a></p> <p>Learn more about us: advisorio.co</p>
                    </div>
                    <audio src="https://traffic.libsyn.com/secure/advisorlab/cioninvestments_mixdown_12.mp3?dest-id=1706015" id="track"></audio>
                    <div class="player-container">
                        <div class="box">
                            <div class="next-prev">
                                <i title="Back 30 seconds" id="back30"></i>
                                <div class="play-pause">
                                    <i id="play"></i>
                                    <i id="pause"></i>
                                </div>
                                <i title="Forward 30 seconds" id="forward30"></i>
                            </div>
                            <div class="progress-bar">
                                <input type="range" id="progressBar" min="0" max="1670.903667" value="0">
                            </div>
                            <div class="track-time">
                                <div id="currentTime">0:00</div>
                                <div id="durationTime">27:50</div>
                            </div>
                            <div class="volume-container">
                                <div class="volume-button">
                                    <div class="volume icono-volumeMedium"></div>
                                </div>
                                <div class="volume-slider">
                                    <span class="slide" style="width: 100%;"><span class="slide-icon"></span></span>
                                    <input id="volumeslider" type="range" min="0" max="100" value="100" step="1">
                                </div>
                            </div>
                            <div class="audio-buttons">
                                <div class="audio-buttons-share">
                                    <div class="audio-buttons-share-container">
                                        <a href="http://www.facebook.com/sharer.php?u=https://traffic.libsyn.com/secure/advisorlab/cioninvestments_mixdown_12.mp3?dest-id=1706015" title="facebook" target="_blank"></a>
                                        <a href="https://twitter.com/share?url=https://traffic.libsyn.com/secure/advisorlab/cioninvestments_mixdown_12.mp3?dest-id=1706015" title="twitter" target="_blank"></a>
                                        <a href=" http://www.linkedin.com/shareArticle?mini=true&amp;url=https://traffic.libsyn.com/secure/advisorlab/cioninvestments_mixdown_12.mp3?dest-id=1706015" title="linkedin" target="_blank"></a>
                                        <a href=" http://pinterest.com/pin/create/button/?url=https://traffic.libsyn.com/secure/advisorlab/cioninvestments_mixdown_12.mp3?dest-id=1706015" title="pinterest" target="_blank"></a>
                                    </div>
                                </div>
                                <a class="audio-buttons-download" href="https://traffic.libsyn.com/secure/advisorlab/cioninvestments_mixdown_12.mp3?dest-id=1706015" target="_blank">	</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div></div>
        <a href="#" class="podcast_loadmore">Load More Episodes</a>
    </div>
    </div>

@endsection

{{--@section('individual_scripts')--}}
{{--    <link rel="stylesheet" id="podcast-css" href="http://seven.loc/wp-content/plugins/seven-plugin/src/../assets/scss/blocks/podcast.css?ver=20.52" type="text/css" media="all">--}}
{{--    <script type="text/javascript" src="http://seven.loc/wp-content/plugins/seven-plugin/src/../assets/audio-podcast.js?ver=20.52" id="audio-podcast-js"></script>--}}
{{--@endsection--}}
