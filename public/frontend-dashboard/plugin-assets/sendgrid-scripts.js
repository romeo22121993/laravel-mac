jQuery(document).ready(function ($) {

    /**
     * Function showing sendgrid block popup bu user data
     *
     */
    $(document).on('click', '.sendgrid_popup_btn', function (e) {
        e.preventDefault();

        let step   = $(this).attr('data-step');
        let domain = $(this).attr('data-domain-id');

        $('.sengdrid_block').show();
		$('.overlay').remove();
        $('body').addClass('no-scroll').prepend('<div class="overlay overlay_sendgrid" style="display: block;"></div>');
        if ( $('body').hasClass('top_email_user') ) {
            $(".sengdrid_block .senders_form_block").show();
            $(".sengdrid_block .not_top_emails_block").hide();
        }
        else {
            $(".sengdrid_block .senders_form_block").hide();

            if ( step == 2 ) {
                $(".sengdrid_block .not_top_emails_block").find(".domain_id_input").val(domain);
                $(".sengdrid_block .not_top_emails_block").find(".first_api_block").hide();
                $(".sengdrid_block .not_top_emails_block").find(".second_api_block").show();
            }
            else if ( step == 3 ) {
                $(".sengdrid_block .not_top_emails_block").find(".first_api_block, .second_api_block").hide();
                $('.sengdrid_block .senders_form_block').show();
            }
            else {
                $(".sengdrid_block .not_top_emails_block").find(".first_api_block").show();
                $(".sengdrid_block .not_top_emails_block").find(".second_api_block").hide();
            }

        }
    });

    /**
     * Function submitting first api form - domain authenticating
     *
     */
    $(".first_api_form").on("submit", function (e){
        e.preventDefault();

        $(".first_api_form").find(".submit_btn").prop('disabled', true);
		$(".first_api_form").find(".submit_btn").closest('span').addClass('loading');
		let info = {
            action: 'authentificate_domain',
            data: $(this).serialize()
        };

        $.post({
            url: get.ajaxurl,
            data: info,
            success: function (data) {
                console.log('data', data);
                $(".first_api_form").find(".submit_btn").prop('disabled', false);
				$(".first_api_form").find(".submit_btn").closest('span').removeClass('loading');
				if ( data.error ) {
                    $(".first_api_form .response_message").text(data.message);
                }
                else {
                    if ( data.skip_domain_step ) {
                        $(".sengdrid_block .not_top_emails_block").find(".domain_id_input").val(data.id);
                        $('.first_api_block, .second_api_block').hide();
                        $('.senders_form_block').show();
                        $(".sendgrid_popup_btn").attr('data-step', 3);
                    }
                    else {
                        if ( data.html ) {
                            $(".second_api_block .cnames_body").html(data.html);
                            $(".sengdrid_block .not_top_emails_block").find(".domain_id_input").val(data.id);
                            $('.first_api_block').hide();
                            $('.second_api_block').show();
                            $(".sendgrid_popup_btn").attr('data-step', 2);
                        }
                    }

                }
            },
            error: function (data) {
                $(".first_api_form").find(".submit_btn").prop('disabled', false);
				$(".first_api_form").find(".submit_btn").closest('span').removeClass('loading');
				$(".first_api_form .response_message").text("Something Wrong.");
                console.log('error');
            },
        });

    });


    /**
     * Function submitting second api form - domain verification
     *
     */
    $(".second_api_form").on("submit", function (e){
        e.preventDefault();
        $(".second_api_form").find(".submit_btn").prop('disabled', true);
        $(".second_api_form").find(".submit_btn").closest('span').addClass('loading');

        let info = {
            action: 'verify_domain',
            data: $(this).serialize()
        };

        $.post({
            url: get.ajaxurl,
            data: info,
            success: function (data) {
                $(".second_api_form").find(".submit_btn").prop('disabled', false);
                $(".second_api_form").find(".submit_btn").closest('span').removeClass('loading');
                if ( data.error ) {
                    $(".second_api_form .response_message").text(data.message);
                }
                else {
                    $('.first_api_block, .second_api_block').hide();
                    $('.senders_form_block').show();
                    $(".sendgrid_popup_btn").attr('data-step', 3);
                }
            },
            error: function (data) {
                $(".second_api_form").find(".submit_btn").prop('disabled', false);
				$(".second_api_form").find(".submit_btn").closest('span').removeClass('loading');

				$(".second_api_form .response_message").text("Something Wrong.");
                console.log('error');
            },
        });

    });


    /**
     * Function submitting sender api form - sender creation
     *
     */
    $(".sender_api_form").on("submit", function (e){
        e.preventDefault();

        $(".sender_api_form").find(".submit_btn").prop('disabled', true);
		$(".sender_api_form").find(".submit_btn").closest('span').addClass('loading');
		let info = {
            action: 'create_sender',
            data: $(this).serialize()
        };

        $.post({
            url: get.ajaxurl,
            data: info,
            success: function (data) {

				$(".sender_api_form").find(".submit_btn").closest('span').removeClass('loading');
				if ( data.error ) {
                    $(".sender_api_form").find(".submit_btn").prop('disabled', false);
                    $(".sender_api_form .response_message").text(data.message);
                }
                else {
                    $('.first_api_block, .second_api_block, .sender_api_form .submit_btn').hide();
                    $(".sender_api_form .response_message").text(data.message).css('color', 'green');
                    $(".sendgrid_popup_btn").attr('data-step', 4);
                    $(".sendgrid_popup_btn").addClass('disabled');
                }
            },
            error: function (data) {
                $(".sender_api_form").find(".submit_btn").prop('disabled', false);
				$(".sender_api_form").find(".submit_btn").closest('span').removeClass('loading');
				$(".sender_api_form .response_message").text("Something Wrong.");
                console.log('error');
            },
        });

    });

    /**
	 * Function hiding sendgrid block popup bu user data
	 *
	 */
	$(document).on('click', '.sendgrid_popup_btn_close, .overlay', function (e) {
		e.preventDefault();
		$('.sengdrid_block').hide();
		$('body').removeClass('no-scroll');
		$('.overlay').remove();
	});



	/**
	 * Function go to 2-nd step sendgrid block popup bu user data
	 *
	 */
	$(document).on('click', '.first_api_form input[type=submit]', function (e) {
		// e.preventDefault();
		// $('.first_api_block').hide();
		// $('.second_api_block').show();
	});

	/**
	 * Function go to 3-rd step sendgrid block popup bu user data
	 *
	 */
	$(document).on('click', '.second_api_block input[type=submit]', function (e) {
		// e.preventDefault();
		// $('.second_api_block').hide();
		// $('.senders_form_block').show();

	});



	$(document).on('click', '.sengdrid_block .copy',function () {
		copyToClip($(this).closest('.cname_td').find('p').html());
	});

	// Copy to Clipboard
	function copyToClip(str) {
		function listener(e) {
			e.clipboardData.setData("text/html", str);
			e.clipboardData.setData("text/plain", str);
			e.preventDefault();
		}
		document.addEventListener("copy", listener);
		document.execCommand("copy");
		document.removeEventListener("copy", listener);
	};

    /**
     *
     * @param elem
     * @returns {boolean}
     */
	function copyToClipboard(elem) {
		// create hidden text element, if it doesn't already exist
		var targetId = "_hiddenCopyText_";
		var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
		var origSelectionStart, origSelectionEnd;
		if (isInput) {
			// can just use the original source element for the selection and copy
			target = elem;
			origSelectionStart = elem.selectionStart;
			origSelectionEnd = elem.selectionEnd;
		} else {
			// must use a temporary form element for the selection and copy
			target = document.getElementById(targetId);
			if (!target) {
				var target = document.createElement("textarea");
				target.style.position = "absolute";
				target.style.left = "-9999px";
				target.style.top = "0";
				target.id = targetId;
				document.body.appendChild(target);
			}
			target.textContent = elem.textContent;
		}
		// select the content
		var currentFocus = document.activeElement;
		target.focus();
		target.setSelectionRange(0, target.value.length);

		// copy the selection
		var succeed;
		try {
			succeed = document.execCommand("copy");
		} catch (e) {
			succeed = false;
		}
		console.log(succeed);

		// restore original focus
		if (currentFocus && typeof currentFocus.focus === "function") {
			currentFocus.focus();
		}

		if (isInput) {
			// restore prior selection
			elem.setSelectionRange(origSelectionStart, origSelectionEnd);
		} else {
			// clear temporary content
			target.textContent = "";
		}
		return succeed;
	}

	//verify button activating
	$(document).on('click', '#before_verify + label',function () {
		if(!$('#before_verify').is(':checked')){
			console.log('re');
			$(this).closest('form').find('input[type=submit]').removeAttr('disabled');
		}else{
			$(this).closest('form').find('input[type=submit]').attr('disabled', 'disabled');
		}
	});
});

