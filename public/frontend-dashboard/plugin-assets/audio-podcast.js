jQuery(document).ready(function ($) {
	const RSS_URL = `https://advisorlab.libsyn.com/rss`;

	fetch(RSS_URL)
		.then(response => response.text())
		.then(str => new window.DOMParser().parseFromString(str, "text/xml"))
		.then(data => {
			const items = data.querySelectorAll("item");
			let html = '';
			let count = 0;
			items.forEach(el => {
				count++;
				if (count <= 10) {
					var date = new Date(el.querySelector("pubDate").innerHTML).toDateString();

					html += `
       		<div class="podcast_block-item" data-num="${count}">
						<div class="podcast_block-item-image">
							<img src="${$(el).find('itunes\\:image').eq(0).attr('href')} "
								 alt="podcast image"/>
						</div>
						<div class="podcast_block-item-text">
								<div class="podcast_block-item-top-text">
									${date} | Episode ${$(el).find('itunes\\:episode').eq(0).html()} | ${$(el).find('itunes\\:author').eq(0).html()} 
								</div>
								<h4 class="podcast_block-item-title">
									${$(el).find('itunes\\:title').eq(0).html()}
								</h4>
					
								<div class="podcast_block-item-desc">
								  ${$(el).find('content\\:encoded').eq(0).html().replace(']]>', '').replace('<![CDATA[', '')}
								</div>
								<audio src="${el.querySelector("enclosure ").getAttribute('url')}" id="track"></audio>
								<div class="player-container">
									<div class="box">
										<div class="next-prev">
											<i title="Back 30 seconds" id="back30"></i>
											<div class="play-pause">
												<i  id="play"></i>
												<i  id="pause"></i>
											</div>
											<i title="Forward 30 seconds" id="forward30"></i>
										</div>
										<div class="progress-bar">
											<input type="range" id="progressBar" min="0" max="" value="0"/>
										</div>
										<div class="track-time">
											<div id="currentTime"></div>
											<div id="durationTime"></div>
										</div>
										<div class="volume-container">
											<div class="volume-button">
												<div class="volume icono-volumeMedium"></div>
											</div>
											<div class="volume-slider">
												<span class="slide"><span class="slide-icon"></span></span>
												<input id="volumeslider" type="range" min="0" max="100" value="100" step="1">
											</div>
										</div>
										<div class="audio-buttons">
											<div class="audio-buttons-share">
											<div class="audio-buttons-share-container">
												<a href="http://www.facebook.com/sharer.php?u=${el.querySelector("enclosure ").getAttribute('url')}"
												   title="facebook" target="_blank"></a>
												<a href="https://twitter.com/share?url=${el.querySelector("enclosure ").getAttribute('url')}" title="twitter"
												   target="_blank"></a>
												<a href=" http://www.linkedin.com/shareArticle?mini=true&url=${el.querySelector("enclosure ").getAttribute('url')}"
												   title="linkedin" target="_blank"></a>
												<a href=" http://pinterest.com/pin/create/button/?url=${el.querySelector("enclosure ").getAttribute('url')}"
												   title="pinterest" target="_blank"></a>
											</div>
											</div>
											<a class="audio-buttons-download" href="${el.querySelector("enclosure ").getAttribute('url')}" target="_blank">	</a>
										</div>
									</div>
								</div>
						</div>
					</div>`;
				}
			});
			$('.podcast_block-list .container').append(html);
			audio();
		});


	$('.podcast_loadmore').on('click', function (e) {
		e.preventDefault();
		fetch(RSS_URL)
			.then(response => response.text())
			.then(str => new window.DOMParser().parseFromString(str, "text/xml"))
			.then(data => {
				const items = data.querySelectorAll("item");
				const length = data.querySelectorAll("item").length;
				let html = '';
				let count = 0;
				let num = 0;
				let last = parseInt($('.podcast_block-item:last-of-type').attr('data-num'));
				items.forEach(el => {
					count++;
					if (length - last <= 10) {
						$('.podcast_loadmore').hide();
					}
					if (last < count && num < 10) {
						num++;
						var date = new Date(el.querySelector("pubDate").innerHTML).toDateString();
						html += `
       		<div class="podcast_block-item" data-num="${count}">
						<div class="podcast_block-item-image">
							<img src="${$(el).find('itunes\\:image').eq(0).attr('href')} "
								 alt="podcast image"/>
						</div>
						<div class="podcast_block-item-text">
								<div class="podcast_block-item-top-text">
									${date} | Episode ${$(el).find('itunes\\:episode').eq(0).html()} | ${$(el).find('itunes\\:author').eq(0).html()} 
								</div>
								<h4 class="podcast_block-item-title">
									${$(el).find('itunes\\:title').eq(0).html()}
								</h4>
					
								<div class="podcast_block-item-desc">
								  ${$(el).find('content\\:encoded').eq(0).html().replace(']]>', '').replace('<![CDATA[', '')}
								</div>
								<audio src="${el.querySelector("enclosure ").getAttribute('url')}" id="track"></audio>
								<div class="player-container">
									<div class="box">
										<div class="next-prev">
											<i title="Back 30 seconds" id="back30"></i>
											<div class="play-pause">
												<i  id="play"></i>
												<i  id="pause"></i>
											</div>
											<i title="Forward 30 seconds" id="forward30"></i>
										</div>
										<div class="progress-bar">
											<input type="range" id="progressBar" min="0" max="" value="0"/>
										</div>
										<div class="track-time">
											<div id="currentTime"></div>
											<div id="durationTime"></div>
										</div>
										<div class="volume-container">
											<div class="volume-button">
												<div class="volume icono-volumeMedium"></div>
											</div>
											<div class="volume-slider">
												<span class="slide"><span class="slide-icon"></span></span>
												<input id="volumeslider" type="range" min="0" max="100" value="100" step="1">
											</div>
										</div>
										<div class="audio-buttons">
											<div class="audio-buttons-share">
											<div class="audio-buttons-share-container">
												<a href="http://www.facebook.com/sharer.php?u=${el.querySelector("enclosure ").getAttribute('url')}"
												   title="facebook" target="_blank"></a>
												<a href="https://twitter.com/share?url=${el.querySelector("enclosure ").getAttribute('url')}" title="twitter"
												   target="_blank"></a>
												<a href=" http://www.linkedin.com/shareArticle?mini=true&url=${el.querySelector("enclosure ").getAttribute('url')}"
												   title="linkedin" target="_blank"></a>
												<a href=" http://pinterest.com/pin/create/button/?url=${el.querySelector("enclosure ").getAttribute('url')}"
												   title="pinterest" target="_blank"></a>
											</div>
											</div>
											<a class="audio-buttons-download" href="${el.querySelector("enclosure ").getAttribute('url')}" target="_blank">	</a>
										</div>
									</div>
								</div>
						</div>
					</div>`;
					}
				});
				$('.podcast_block-list .container').append(html);
				audio();
			});
	})

	function audio() {
		$('.podcast_block-item').each(function () {
			const track = $(this).find("#track").get(0);
			const progressBar = $(this).find("#progressBar").get(0);
			const currentTime = $(this).find("#currentTime").get(0);
			const durationTime = $(this).find("#durationTime").get(0);
			let volumeslider = $(this).find("#volumeslider").get(0);
			let play = $(this).find("#play").get(0);
			let pause = $(this).find("#pause").get(0);
			let back = $(this).find("#back30").get(0);
			let forward = $(this).find("#forward30").get(0);

			let playing = true;

			function pausePlay() {
				if (playing) {
					play.style.display = "none";
					pause.style.display = "block";
					track.play();
					playing = false;
				} else {
					pause.style.display = "none";
					play.style.display = "block";
					track.pause();
					playing = true;
				}
			}

			play.addEventListener("click", pausePlay);
			pause.addEventListener("click", pausePlay);

			function back30() {
				track.currentTime = track.currentTime - 30;
			}

			back.addEventListener("click", back30);

			function forward30() {
				track.currentTime = track.currentTime + 30;
			}

			forward.addEventListener("click", forward30);

			function progressValue() {
				progressBar.max = track.duration;
				progressBar.value = track.currentTime;
				currentTime.textContent = formatTime(track.currentTime);
				if (Number.isNaN(track.duration)) {
					durationTime.textContent = "--:--";
				} else {
					durationTime.textContent = formatTime(track.duration);
				}
			}

			setInterval(progressValue, 500);

			function formatTime(sec) {
				let minutes = Math.floor(sec / 60);
				let seconds = Math.floor(sec - minutes * 60);
				if (seconds < 10) {
					seconds = `0${seconds}`;
				}
				return `${minutes}:${seconds}`;
			}

			function changeProgressBar() {
				track.currentTime = progressBar.value;
			}

			progressBar.addEventListener("click", changeProgressBar);


			volumeslider.addEventListener("mousemove", setvolume);

			function setvolume() {
				track.volume = volumeslider.value / 100;
			}

				$(".slide").css("width", "100%");
				$(document).on('input change', '#volumeslider', function () {
					var slideWidth = $(this).val();

					$(this).parent().find(".slide").css("width", 'calc(' + slideWidth + "% - 1px)");
				});
		});
	}

	$(document).on('click', '.audio-buttons-share', function () {
		$(this).find('.audio-buttons-share-container').addClass('active');
	})
	$(document).click(function (event) {
		if ($(".audio-buttons-share").length) {
			if (!$(event.target).closest(".audio-buttons-share").length) {
				$(this).find('.audio-buttons-share-container').removeClass('active');
			}
		}
	});
	audio();
	function cookiePodcast(){
		if($('.page-postcard').length || $('.page-podcast ').length) {
			if ($('.cookies-not-set').length) {
				var height = $('.cookie-notice-container').outerHeight() + 130;
				$('.podcast_block-banner-wrap').css('margin-top', height + 'px');
			} else {
				$('.podcast_block-banner-wrap').css('margin-top', '150px');
			}
		}
	}
	$(document).ready(function () {
		setTimeout(function () {
			cookiePodcast();
		}, 3700);
	});
	$(window).on('resize click scroll orientationchange', function () {
		cookiePodcast();
	});
	$(document).on('click', function () {
		cookiePodcast();
	});
});
