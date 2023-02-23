jQuery(document).ready(function ($) {

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    })

    /**
     * Function of searching page
     *
     */
    function  search_function() {
        if ( $(".search_page").length > 0 ) {
            let count = 3;

            if ( $(".search_page .search-item.hidden").length < 1 ) {
                $("#search_load_more_button").hide();
            }

            $(".search_page").find("#search_load_more_button").on('click', function (e) {
                e.preventDefault();

                let i = 0;
                $(".search_page .search-item.hidden").each(function( index ) {
                    i++;
                    if ( i <= count  ) {
                        $( this ).fadeIn('slow').removeClass('hidden');
                    }
                });

                if ( $(".search_page .search-item.hidden").length < 1 ) {
                    $("#search_load_more_button").hide();
                }
            })
        }
    }

    search_function();

    $("#completed_recomendation_table").tablesorter();
    $(".addtoany_shortcode a").addClass('social-link big');
    $(".related-edited-articles-sharing .addtoany_shortcode a span").removeClass('').addClass('social-link big');

    /**
     * Function for cookies plugin
     *
     */
    function cookie_func() {
        if ( $("#cn-notice-buttons").length > 0 ) {
            $("#cn-notice-buttons").find(".cn-set-cookie").on( "click", function (e) {
                $("header").css('top', '0');
            });
        }
    }
    cookie_func();

    /**
     * Function for checking if site support canavas
     *
     */
    function isWebPSupported() {
        const elem = document.createElement('canvas');

        if(!(elem.toDataURL('image/webp').indexOf('data:image/webp') === 0)) {
            document.body.classList.add('no-webP-supported');
        }
    }

    /**
     * Function reading article ( in few page: dashboard home page, content page, single article page )
     *
     */
    function read_article() {
        $(".read-article").on( "click", function (e) {
            e.preventDefault();

            var href = $(this).attr('href');
            var info = {
                article_id: $(this).attr('data-post-id'),
                type: 'read',
                action: 'share_read_article'
            };
            $.post({
                url: get.ajaxurl,
                data: info,
                success: function ( data ) {
                    window.location.replace( href );
                },
                error: function ( data ) {
                    console.log('error');
                },
            });

        });
    }


    /**
     * Function editing user account info
     *
     */
    function account_info() {

        $("form#account-info").on('submit', function (e) {
            $("#loader").show();
            e.preventDefault();

            $.post({
                url: '/dashboard/ajax/change-userdata',
                data:  $(this).serialize(),
                success: function (data) {
                    $("#loader").hide();
                    // console.log(data);
                    if ( data.status == 'done' ) {
                        location.reload();
                    }
                },
                error: function (data) {
                    console.log('error');
                },
            });

        });
    }

    /**
     * Function changing image for user account
     *
     */
    function account_image() {

        $("form#user-image input#user_image").on('change', function (e) {
            e.preventDefault();
            $("form#user-image").trigger('submit');
        });

        $("form#user-image").on('submit', function (e) {
            e.preventDefault();
            $("#loader-image").show();
            var file_data = $('#user_image').prop('files')[0];

            var form_data = new FormData();
            form_data.append('file', file_data);
            form_data.append('action', 'user_image');

            $.post({
                url: "/dashboard/ajax/change-avatar",
                data: form_data,
                contentType: false,
                processData: false,
                success: function (data) {
                    console.log( 'data', data  )
                    console.log( 'data.message', data.message  )
                    $("#loader-image").hide();
                    if ( data.message == 'done' ) {
                        console.log('done', data );
                        setTimeout( location.reload(), 500 );
                    }
                },
                error: function (data) {
                    console.log('error');
                },
            });

        });
    }

    $(".edit-user-account").on( "click", function (e) {
        e.preventDefault();
        $("#account-info").find('input').first().focus();
    });

    /**
     * Function choosing category, loading first page of categorie's post
     *
     */
    function before_load_more_function() {

        $("div.sorting-categories").find("a.dropdown-item").on( "click", function (e) {
            e.preventDefault();
            console.log('from script1');
            var page = 1;
            var category = $(this).attr('href');
            var cat_name = $(this).text();
            var cpt_type = $('.body-items').attr('data-cpt');
            $('.body-items').attr('data-getcat', category);
            $(".dropdown-toggle").text("Sort By: " + cat_name);

            var data = {
                'action':      'load_posts_by_ajax',
                'total_count': 0,
                'page':        page,
                'get_cat':     category,
                'cpt_type':    cpt_type
            };

            $.ajax({
                url: '/dashboard/ajax/loadMoreCourses',
                type: "POST",
                data: data,
                success:function(response) {
                    if ( response ) {
                        $(".body-items").html('');
                        $(".body-items").append(response.html);
                        page++;
                        $('.body-items').attr('data-all', response.all );
                        $('.body-items').attr('data-page', 2 );

                        $("span.count-articles").text(response.all);

                        if ( response.count >= response.all ) {
                            $("#load_more_button").hide();
                        }
                        else  {
                            $("#load_more_button").show();
                        }
                    }
                    else {
                        $("#load_more_button").hide();
                    }
                }
            });

        });

    }

    /**
     * Function load more
     *
     */
    function load_more_function( ) {

        $("#load_more_button").on( "click", function (e) {
            e.preventDefault();

            console.log('from script2');
            $(this).addClass('disabled_btn');

            var total_count = $('.body-items').attr('data-all');
            var page  = $('.body-items').attr('data-page');
            page      = ( page > 1 ) ?  page : 2

            var get_cat  = $('.body-items').attr('data-getcat');
            var cpt_type = $('.body-items').attr('data-cpt');

            var data = {
                'action':     'load_posts_by_ajax',
                'total_count': total_count,
                'page':        page,
                'get_cat':     get_cat,
                'cpt_type':    cpt_type
            };

            $.ajax({
                url: '/dashboard/ajax/loadMoreCourses',
                type: "POST",
                data: data,
                success:function(response) {

                    if ( response ) {
                        $(".body-items").append(response.html);
                        page++;
                        $('.body-items').attr('data-page', page );
                        $('.body-items').attr('data-all', response.all );
                        $("span.count-articles").text( response.all );
                        if ( response.count >= response.all ) {
                            $("#load_more_button").hide().removeClass('disabled_btn');
                        }
                        else {
                            $("#load_more_button").removeClass('disabled_btn');
                        }
                    }
                    else {
                        $("#load_more_button").hide().removeClass('disabled_btn');
                    }
                }
            });
        });

    }

    /**
     * Trim textarea function
     *
     */
    function textarea_trim_values() {
        $('textarea').each(function(){
            $(this).val($(this).val().trim());
        });
    }

    $(document).on( "click",".close_popup, .overlay, .popup_form_edit input[type=submit]", function () {
        $(".popup_form_edit").hide();
        $(".overlay").remove();
        $('body').removeClass('no-scroll');
    });


    $(".edit-post-button").on( "click", function ( e ) {
        e.preventDefault();
        if ( !$(this).find("a").hasClass('disabled') ) {
            $(".popup_form_edit").show();
            const _body = $('body');
            const _overlay = $('<div class="overlay"></div>');
            _body.addClass('no-scroll');
            _body.prepend(_overlay);
            _overlay.css('display', 'block');
        }
    });



    /**
     * Function on js for upcoming webinars
     *
     */
    function upcoming_js() {

        $(".view_details").each(function () {
            if ( $(this).parents(".card").find(".collapse").hasClass('show') ) {
                $(this).text("Hide Details");
            }
            else{
                $(this).text("VIEW DETAILS");
            }
        });

        $(".view_details").on("click", function () {
            var text = $(this).text();
            if ( text == "Hide Details" ) {
                $(this).parents(".card-header").removeClass('active');
                $(this).text("VIEW DETAILS");
            }
            else if ( text == "VIEW DETAILS" ) {
                $(".card").find('.view_details').text("VIEW DETAILS");
                $(".card").find('.card-header').removeClass('active');
                $(".card").find('collapse').removeClass('show');

                $(this).parents(".card").find('.card-header').addClass('active');
                $(this).parents(".card").find('collapse').addClass('show');
                $(this).text("Hide Details");
            }
        });
    }

    /**
     * Function for main tabs
     *
     */
    function main_tabs() {
        if ( $('.container').hasClass('content') ) {
            $(".main_tabs .nav-item a.content_tab").addClass('active');
        }
        else if ( $('.container').hasClass('training') ) {
            $(".main_tabs .nav-item a.training_tab").addClass('active');
        }
        else if ( ( $('.container').hasClass('campaigns') ) || ( $('.container').hasClass('single-campaign') ) ) {
            $(".main_tabs .nav-item a.campaigns_tab").addClass('active');
        }
        else if ( ( $('.container').hasClass('template') )  ) {
            if (window.location.href.indexOf("admin-guides") > -1) {
                $(".main_tabs .nav-item a.campaigns_tab").removeClass('active');
                $(".main_tabs .nav-item a.guides_template_tab").addClass('active');
            } else {
                $(".main_tabs .nav-item a.template_tab").addClass('active');
            }
        }
        else if ( $('.container').hasClass('home-container') ) {
            $(".main_tabs .nav-item a.home_tab").addClass('active');
        }
        if (window.location.href.indexOf("all_leads") > -1) {
            $(".main_tabs .nav-item a.campaigns_tab").removeClass('active');
            $(".main_tabs .nav-item a.manage_tab").addClass('active');
        }

    }

    /**
     * Function for welcome block
     *
     */
    function welcome() {
        $(".close-welcome").on("click", function () {
            localStorage.setItem( 'closed_welcome_block', '1');
            $(".welcome_block").hide();
        });
        $(".logout_button").on("click", function () {
            localStorage.setItem( 'closed_welcome_block', '0');
        });
    }

    /**
     * Function for make active header links by page
     *
     */
    function header_custom_pages() {

        if ( $('.inner_container').hasClass('contact_block') ) {
            $(".header a.a_contact_block").parent('li').addClass('master');
            $('.above-footer').hide();
        }
        else if ( $('.inner_container').hasClass('about_block') ) {
            $(".header a.a_about_block").parent('li').addClass('current');
        }
        else if ( $('.inner_container').hasClass('services_block') ) {
            $(".header a.a_the_platform_block").parent('li').addClass('current');
            $('.above-footer').hide();
        }
        else if ( $('.inner_container').hasClass('blog_block') ) {
            $(".header a.a_blog_block").parent('li').addClass('current');
        }
    }

    /**
     * Function getting form from shortcode
     *
     */
    function login_page_form() {
        var form = $(".box pre").html();
        $(".login_box .form_shortcode").html(form);
        $(".login_box form input[type='checkbox']").parent("p").hide();
        $(".login_box form input[type='submit']").hide();
        $(".login_box form .rcp_lost_password").hide();
    }

    /**
     * Function for profile
     *
     */
    function profile_function() {
        var closed_welcome = localStorage.getItem( 'closed_welcome_block');
        if ( closed_welcome == '1' ) {
            $('.welcome_block').hide();
        }

        $(".dashboard-page .account-info .social-link").each(function () {
            if( $(this).attr('href') == '' ) {
                $(this).addClass('empty_link');
            }
        });

        $(document).mousedown(function (e) {
            var container = $(".account-info");
            if ( !container.is(e.target) && container.has(e.target).length === 0 && container.hasClass('active') ) {
                $(".account-info").removeClass('active');
            }

            let all_nots_seen = localStorage.getItem( 'all_notifications_seen' );
            if( all_nots_seen == 'yes' ) {
                let count_nots = $(".sv-notifications__alert .sv-notifications__counter").text().trim();

                /*
                let info = {
                    count_nots: count_nots,
                    action:     'seen_all_notifications'
                };

                $.post({
                    url: get.ajaxurl,
                    data: info,
                    success: function ( data ) {
                        $(".sv-notifications__alert .sv-notifications__counter").text('').hide();
                        localStorage.setItem( 'all_notifications_seen', 'no' );
                    },
                    error: function ( data ) {
                        console.log('error');
                    },
                });

                 */

            }
        });

    }

    /**
     * Function for admin panel - Companies and Listeners
     *
     */
    function admin_scripts_function() {
        custom_admin_function( 'need_companies', 'uncompanies_list' );
        custom_admin_function( 'need_listeners', 'unlisteners_list' );
    }

    /**
     * Custom function for companies-listeners
     *
     * @param input_name
     */
    function custom_admin_function( input_name, select_name ) {

        if ( $("input[name="+input_name+"]") ) {
            let checked_input = $("input[name="+input_name+"]:checked").val();
            custom_actions( checked_input, select_name );
        }

        $("input[name="+input_name+"]").on( "change", function () {
            let checked = $(this).val();
            custom_actions( checked, select_name )
        });
    }

    /**
     * Actions for companies values
     *
     * @param variable
     */
    function custom_actions( variable, select_name ) {
        if ( variable == "yes" ) {
            $( "select#" + select_name ).attr( "required", true );
            $( "select#" + select_name + " option:selected").attr('disabled', false );
            $( "select#" + select_name ).show();
        }
        else {
            $( "select#" + select_name ).hide();
            $( "select#" + select_name ).attr( "required", false );
            $( "select#" + select_name +" option:selected" ).attr('disabled', 'disabled');
        }
    }

    /**
     * Function scrolling bottom popup
     *
     */
    function scrollFunction() {
        let cookie_popup_closed = readCookie( 'b_popup_closes' );
        if ( ( $(".footer .footer_popup_block").length > 0 ) && ( cookie_popup_closed != 1 ) ) {
            $(".footer .footer_popup_block").fadeIn("slow");
        }
    }

    /**
     * Bottom popup event scroll
     */
    function scroll_function() {
        window.onscroll = scrollFunction;
    }

    /**
     * Function closing bottom popup
     *
     */
    function close_popup() {
        $(".exit_b_popup").on("click", function () {
            setCookie('b_popup_closes', 1, 24);
            $(".footer_popup_block").fadeOut("slow");
        });
        $(".exit_b_popup.exit_exit_popup").on("click", function () {
            setCookie('e_popup_closed', 1, 720 );
            $(".exit_popup_block").modal('hide');
        });
        $(".exit_e_popup").on("click", function () {
            let href = readCookie( 'a_link' )
            setCookie('e_popup_closed', 1, 720 );
            $(".exit_popup_block").fadeOut("slow");
        });
    }

    /**
     * Function for exit_popup
     *
     */
    function exit_popup_function() {
        var array1 = readCookie( 'visited_pages');
        var showed = readCookie( 'exit_popup_show');
        var res    = [];
        if ( typeof array1 == 'string' ) {
            var res = array1.split(",");
        }
        let href   = window.location.href;

        if ( ( array1 && ( array1.indexOf( href ) === -1 ) ) || ( !array1 ) ) {
            res.push( href );
        }

        if ( ( res.length >= 2 ) && ( !showed ||( showed != 'yes' ) ) ) {
            setCookie( 'exit_popup_show', 'yes', 360 )
        }
        setCookie( 'visited_pages', res, 24 )

    }

    /**
     * Event of leaving page
     *
     * @returns {*|jQuery|boolean}
     */
    function leaving_page_function() {

        let link_page  = window.location.href;

        $(document).on("mouseleave", function () {
            let exit_popup_show  = readCookie( 'exit_popup_show' );
            let e_popup_closed   = readCookie( 'e_popup_closed' );

            if (
                ( $(".footer .exit_popup_block").length > 0 ) && ( exit_popup_show == 'yes' ) && ( e_popup_closed != 1 )
                 && ( !link_page.includes('sign-up/business') )
                ) {
                showModal();
            }
        })
    }

    /**
     * Show modal window function
     *
     * @returns {*|jQuery}
     */
    function showModal() {
        $(".exit_popup_block").modal('show');
    }

    /**
     *
     * @param name
     * @returns {string|null}
     */
    function readCookie( name ) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for( var i=0;i < ca.length;i++ ) {
            var c = ca[i];
            while ( c.charAt(0)==' ' ) c = c.substring( 1,c.length );
            if ( c.indexOf( nameEQ) == 0 ) return c.substring( nameEQ.length,c.length );
        }
        return null;
    }

    /**
     * Function setting cookie on few hours
     *
     *
     * @param name
     * @param value
     * @param hours
     */
    function setCookie( name, value, hours ) {
        if ( hours ) {
            var date = new Date();
            date.setTime( date.getTime()+( hours*60*60*1000 ) );
            var expires = "; expires="+date.toGMTString();
        }
        else {
            var expires = "";
        }

        document.cookie = name+"="+value+expires+"; path=/";
    }

    /**
     * Header notifications function
     *
     */
    function notifications() {
        //bell
        const notifications = document.querySelector('.js-notifications');

        if (!notifications) return;

        //count of a new notification
        const count = notifications.firstElementChild.firstElementChild;
        //notifications list wrapper
        const listWrapper = notifications.lastElementChild;
        //notifications list
        const list = listWrapper.lastElementChild;
        //notifications
        const listItems = list.children;
        //state of the list
        let isActive = false;

        //set the equal width for count
        if(count.offsetHeight > 5) {
            count.style.width = count.offsetHeight + 'px';
        } else {
            count.style.border = 'none';
        }

        if(listItems.length > 6) {
            list.style.maxHeight = getListMaxHeight() + 'px';
            list.style.overflowY = 'scroll';
        }

        //open/close notification list
        document.addEventListener('click', function (e) {
            const target = e.target.closest('.js-notifications');
            if (target && !isActive) {
                localStorage.setItem( 'all_notifications_seen', 'yes' );
                listWrapper.classList.add('active');
                isActive = true;
            } else if (isActive) {
                listWrapper.classList.remove('active');
                isActive = false;
            }
        });

        function getListMaxHeight() {
            if(!listItems) return;

            let height = 0;
            const loopsCount = 6;

            for(let i = 0; i < loopsCount; i++) {
                height += listItems[i].offsetHeight;
            }

            return height;
        }
    }

    /*
     * Tooltip function
     *
     */
    function documentTooltip() {
        let tooltip;

        document.addEventListener('mouseover', function (e) {
            const message = e.target.dataset.tooltip;

            if(!message) return;

            const target = e.target;
            const targetCoordinates = target.getBoundingClientRect();
            tooltip = {
                elem: document.createElement('div'),
                left: 0,
                top: 0
            };

            tooltip.elem.className = "tooltip-popup";
            tooltip.elem.textContent = message;

            target.parentElement.append(tooltip.elem);

            setTimeout(function () {
                tooltip.elem.classList.add('visible');
            }, 100);

        });

        document.addEventListener('mouseout', function () {
            if(tooltip) {
                tooltip.elem.classList.remove('visible');
                new Promise(function (resolve) {
                    setTimeout(function () {
                        resolve();
                    }, 300)
                }).then(function () {
                    tooltip.elem.remove();
                    tooltip = null;
                });
            }
        });
    }

    /**
     * Function notifications li clicking - seen notification
     *
     */
    function notifications_li_function() {
        $("li.sv-notifications__item a.sv-notifications__link").on( "click", function(e){
            e.preventDefault();

            let data_id  = $(this).attr('data-id');
            let href     = $(this).attr('href');
            let redirect = true;
            let check    = false;
            if ( $(this).hasClass('empty_list') ) {
                check = true;
            }
            if ( $(this).hasClass('empty_list') ) {
                redirect = false;
            }

            let info = {
                data_id: data_id,
                action: 'notification_seen'
            };

            $.post({
                url: get.ajaxurl,
                data: info,
                success: function (data) {
                    if ( redirect ) {
                        window.location.replace( href );
                    }
                    else {
                        if ( !check ) {
                            $("li.sv-notifications__item."+data_id).hide();
                            let count = ( parseFloat( $(".sv-notifications__counter").text() ) ) - 1;
                            $(".sv-notifications__counter").text(count);
                        }
                    }
                },
                error: function (data) {
                    console.log('error');
                },
            });

        })
    }

    /**
     * Function contact popup
     *
     * @param button
     */
    function contactPopup({button = '.js-open-popup'} = {}) {

        const _button = $(button);

        if(!_button.length) return;

        const _body = $('body');
        const _overlay = $('<div class="overlay"></div>');
        let _template, _form, _closeButton;

        _button.on('click', function (e) {
            e.preventDefault();
            const formId  = $(this).data('form');

            openPopup(formId);
        });

        $(document).on('click', '.overlay', function () {
            closePopup();
        });

        function openPopup(id) {
            _template = $(`.js-contact-popup[data-id="${id}"]`);
            _form = _template.find('form');
            _closeButton = _template.find('.close-popup');

            _body.addClass('no-scroll');
            _body.prepend(_overlay);
            _template.fadeIn();
            _overlay.fadeIn();

            _form.on('submit', function (e) {
                e.preventDefault();

                submitForm();
            });

            _closeButton.on('click', function () {
                closePopup() ;
            });
        }

        function closePopup() {
            _body.removeClass('no-scroll');
            _overlay.fadeOut(400, function () {
                _overlay.detach();
            });
            _template.fadeOut(400);

            _form.off('submit');
            _closeButton.off('click');
        }

        function submitForm() {
            const info = {
                data: _form.serialize(),
                action: 'contact_page'
            };

            _form.append($('<img src="./dist/img/loader.gif" class="form-loader" />'));

            $.post({
                url: get.ajaxurl,
                data: info,
                success: function (data) {

                    _form.trigger('reset');
                    _form.before('<p>Thanks for reaching out! We’ll be in touch within 24 hours.</p>');
                    _form.remove();
                },
                error: function (data) {
                    console.log('error');
                },
            });
        }
    }

    /* ------------------------------------------- */
    /* 		IMG TO BACKGROUND 	*/
    /* ------------------------------------------- */
    function addImgBg(imgSelector, parentSelector) {
        var $parent,
            $neighbor,
            $imgDataHidden,
            $imgDataSibling,
            $this;

        if (!imgSelector) {
            return false;
        }

        $(imgSelector).each(function () {
            $this = $(this);
            $imgDataHidden = $this.data('s-hidden');
            $imgDataSibling = $this.data('s-sibling');
            $parent = $this.closest(parentSelector);
            $parent = $parent.length ? $parent : $this.parent();

            if ($imgDataSibling) {
                $parent.addClass('img-bg-sibling');
                $neighbor = $this.next();
                $neighbor = $neighbor.length ? $neighbor : $this.next();
                $neighbor.css('background-image', 'url(' + this.src + ')').addClass('img-bg-sibling__neighbor');
            } else {
                $parent.css('background-image', 'url(' + this.src + ')').addClass('img-bg-parent');
            }

            if ($imgDataHidden) {
                $this.css('visibility', 'hidden');
            } else {
                $this.hide();
            }
        });

        return false;
    }

    /**
     *  Move footer to bottom of the window when page height is too small
     */
    function moveFooterToTheBottom() {
        const isDashboard = !!document.querySelector('.dashboard-page');
        const content = document.querySelector('.main-content');
        const footer = document.querySelector('.footer');

        if(!isDashboard || !content || !footer) return;

        setContentMinHeight();

        window.addEventListener('resize', setContentMinHeight);
        window.addEventListener('orientationchange', setContentMinHeight);

        function setContentMinHeight() {
            content.style.minHeight = window.innerHeight - footer.getBoundingClientRect().height + 'px';
        }
    }

    /*
    * Function moves footer to bottom of the screen on FAQ page if window height > page content height
    */
    function moveFooterToTheBottomFAQ() {
        const isFAQ = !!document.querySelector('.page-faq');
        const footer = document.querySelector('.footer');

        if(!isFAQ) return;

        setFooterMargin();

        window.addEventListener('resize', setFooterMargin);
        window.addEventListener('orientationchange', setFooterMargin);

        // if window.innerHeight > page content add margin top to the footer
        function setFooterMargin() {
            if(window.innerHeight > footer.getBoundingClientRect().bottom) {
                footer.style.marginTop = window.innerHeight - footer.getBoundingClientRect().bottom;
            } else {
                footer.style.marginTop = null;
            }
        }
    }

    /**
     *
     */
    function scrollToIdSection() {
        const button = $('.js-scroll-to');

        if(!button.length) return;

        button.on('click', function (e) {
            e.preventDefault();

            $('html, body').animate({
                scrollTop: $($(this).data('scroll')).offset().top
            }, 800);
        });
    }

    /**
     *  the function makes structure changes for reset password page
     */
    function resetPassword() {
        const page = $('.login');

        if(!page.length) return;

        const login = $('#login');
        const navigation = $('#nav');
        const backToHome = $('#backtoblog');
        const privacyPolicy = $('.privacy-policy-page-link');
        const linksWrapper = $('<div class="login-links"></div>');

        navigation.remove();

        linksWrapper.append(backToHome);
        linksWrapper.append(privacyPolicy);
        linksWrapper.appendTo(login);
    }

    /**
     *
     */
    function fixedHeader() {
        const header = $('.header');

        if( $("body").hasClass('not-logged-in-articles') ) {
            $("header").addClass('scrolled');
        }

        if(!header.length || $("body").hasClass('not-logged-in-articles')) return;


        $(window).on('load scroll', function () {
            if ($(this).scrollTop() >= 20) {
                header.addClass('scrolled');
            }
            else {
                header.removeClass('scrolled');
            }
        });
    }

    /**
     * Copy to clipboard
     */
    $(document).ready(function () {
        if ( $('.sharing_form #published').length && $('.sharing_form #published').is(":checked") ) {
            $('.btn_link_copy').addClass('visible');
        }
        if ( $('.btn_link_copy_popup').length  ) {
            var href = $('.download-document-popup-copy-link').attr('data-link');
            $('.btn_link_copy_popup').append('<span class="message_popup">Copied</span>');
            $('.popup-article-link').attr('href', href);
        }
    })

    /**
     *
     */
    $('.btn_link_copy').on('click', function () {
        copyToClipboard(document.getElementById("input_url"));
        $('.message').fadeIn(0);
        setTimeout(function () {
            $('.message').fadeOut(1000);
        }, 700)
    });

    /**
     *
     */
    $(document).on('click', '.btn_link_copy_popup',function () {
        // copyToClipboard(document.getElementById("input_url_popup"));
        copyToClip(document.getElementById('popup-text').innerHTML);
        $('.message_popup').fadeIn(0);
        setTimeout(function () {
            $('.message_popup').fadeOut(1000);
        }, 700)
    });

    /**
     *
     * @param str
     */
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

    /**
     *
     */
    function cookieHeader(){
        if($('.cookies-not-set').length){
            var height = $('.cookie-notice-container').outerHeight();
            $('.header').css('top', height + 'px');
            $('.header.scrolled').css('top', height + 'px');
        }else{
            $('.header').css('top',  '0');
            $('.header.scrolled').css('top', '0');
        }
    }

    /**
     *
     */
    function cookieHeaderBtn(){
        if($('.cookies-not-set').length && !$('.btn-cookie-click').length){
            $('#cn-notice-buttons').prepend('<span class="btn-cookie-click"></span>');
        }
    }

    $(document).ready(function () {
        setTimeout(function () {
            cookieHeader();
            cookieHeaderBtn();
        }, 2000);
        setTimeout(function () {
            cookieHeader();
            cookieHeaderBtn();
        }, 4000);
    });

    $(window).on('resize  scroll orientationchange', function () {
        cookieHeader();
    });

    $(document).on('click', '.btn-cookie-click', function () {
        $('#cn-accept-cookie')[0].click();
        setTimeout(function () {
            cookieHeader();
        }, 100);
    });



    /**
     * Function for log in via facebook
     *
     */
    function facebook_function() {
        function getUserData() {
            // var FB = require('fb');
            // FB.api('/me', {fields: 'name,email'}, (response) => {
            // FB.api('/me', (response) =>  {
            //     console.log( 'response', response )
            //     document.getElementById('response').innerHTML = 'Hello ' + response.name;
            // });

            FB.api('/me', 'GET', {fields: 'first_name,last_name,name,id'}, function(response) {
                console.log( 'response', response);
                document.getElementById('status').innerHTML = response.id;
            });
        }

        window.fbAsyncInit = () => {
            // var FB = require('fb');
            console.log( '1' );
            //SDK loaded, initialize it
            FB.init({
                appId      : '304579244954466',
                xfbml      : true,
                version    : 'v12.0'
            });

            //check user session and refresh it
            FB.getLoginStatus((response) => {
                if (response.status === 'connected') {
                    //user is authorized
                    document.getElementById('loginBtn').style.display = 'none';
                    getUserData();
                } else {
                    //user is not authorized
                }
            });
        };

        if ( $('#loginBtn').length > 0 ) {
            //add event listener to login button
            document.getElementById('loginBtn').addEventListener('click', () => {
                var url = "https://finplaninfo.io/articles/company_name/your-holiday-wellness-plan-comes-down-to-avoiding-stress-and-taxes-8/";
                // url = encodeURIComponent(url);
                // window.open('http://facebook.com/sharer/sharer.php?u='+encodeURIComponent(url), '', 'left=0,top=0,width=650,height=420,personalbar=0,toolbar=0,scrollbars=0,resizable=0');
                // var FB = require('fb');

                FB.login((response) => {
                    if (response.authResponse) {
                        //user just authorized your app
                        document.getElementById('loginBtn').style.display = 'none';
                        getUserData();
                    }
                }, {scope: 'email,public_profile', return_scopes: true});

                FB.api('/me/feed', 'post', {source: url , message : "SHOWDOWN POST", link: url}, function(response) {
                    if (!response || response.error) {
                        console.log(JSON.stringify(response));
                        console.log("Error!");
                    } else {
                        console.log(JSON.stringify());
                    }
                });

                FB.ui({
                    method: 'post',
                    href: 'http://stackoverflow.com/questions/5363517',
                }, function(response){
                    console.log(response)
                });


               getUserData();
            }, false);
        }

        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

    }
    // facebook_function();


    /**
     * Function redirecting from not logged in admin dashboar poges
     *
     */
    function redirect_not_looged_in() {
        if ( $(".container.not_logged_admin_page").length > 0 ) {
            window.location.replace( '/advisorlogin' );
        }
    }

    /**
     * Function cloning campaigns from Home user dashboard page
     *
     */
    function clone_campaign() {

        $(document).on("click", ".home-container .clone_campaign_btn", function (e) {
            e.preventDefault();

            $(this).addClass('loader_campaign');

            var info = {
                campaign_id: $(this).attr('data-id'),
                action: 'clone_campaign'
            };

            $.post({
                url: get.ajaxurl,
                data: info,
                success: function ( data ) {

                    let popup = $('#add_lead_popup');

                    if ( data.alert_message == true ) {
                        // alert(data.message);
                        if(popup.length){
                            $('body').prepend('<div class=" modal-backdrop show"></div>').addClass('no-scroll');
                            popup.addClass('show').css('display', 'block');
                            if(data.message_duplicates.length){
                                popup.find('.top h3').text(data.message_duplicates);
                            }
                            if(data.list_duplicates.length){
                                popup.find('.bottom').html('<p class="mb-30">'+data.list_duplicates+'</p>');
                            }
                            if(data.message_unsubscribe.length){
                                popup.find('.exit-popup-wrap').append('<div class="top"><h3 class="unsubscribe">'+data.message_unsubscribe+'</h3></div>');
                            }
                            if(data.list_unsubscribe.length){
                                popup.find('.exit-popup-wrap').append('<div class="right block bottom text-center justify-content-center" style="margin: 0 auto"><p class="mb-30">'+data.list_unsubscribe+'</p></div>');
                            }
                            function closeUploadFilePopup() {
                                $('body').removeClass('no-scroll');
                                $('#add_lead_popup').removeClass('show').css('display', 'none');
                                $('.add_lead_popup_overlay').remove();
                            }
                            $(document).on('click', '#add_lead_popup', function (event) {
                                if(!$(event.target).closest('.exit-popup-wrap').length ){
                                    closeUploadFilePopup();
                                    window.location.replace( data.redirect_url );
                                }
                            });
                        }
                    } else {
                        window.location.replace( data.redirect_url );
                    }

                },
                error: function ( data ) {
                    console.log('error');
                    $(".clone_campaign_btn, .clone_campaign_single_page_btn").removeClass('loader_campaign');
                },
            });

        });
    }


    /**
     * Function for viewing campaigns in Admin home page
     *
     */
    function campaign_view_file_home() {
        // open modal with asset preview
        $(document).on( "click", ".page-admin-dashboard .all_campaigns_block .view_campaign_btn a, " +
            ".search_page .all_campaigns_block .view_campaign_btn a," +
            " .latest_cpts_section .campaign .view_campaign_btn, " +
            " .pairing_us_block .block-campaign .view_campaign_btn", function (e) {
            e.preventDefault();
            let content = $( this ).parents( '.campaign__info' ).find( '.wordiframe' ).html();
            let content1 = $( this ).parents( '.item' ).find( '.campaign__info .wordiframe' ).html();
            let btn = $( this ).parents( '.campaign__info' ).find( '.download_campaign_btn' ).html();
            let btn1 = $( this ).parents( '.item' ).find( '.campaign__info .download_campaign_btn' ).html();

            btn = ( btn ) ? btn : btn1;
            content = ( content ) ? content : content1;

            $( '.template-modal-close-wrap .btn' ).remove( );
            $( '.template-modal' ).addClass( 'active' );
            $( '.template-modal-container' ).html('').html( content  );
            $( '.template-modal-close-wrap' ).prepend( btn );

            return false;
        } );

        // close the modal
        $(document).on( "click", ".template-modal-close", function (e) {
            e.preventDefault();
            $( '.template-modal' ).removeClass( 'active' );
            $( '.template-modal-container' ).html( '' );
            $( '.template-modal-close-wrap .sv-button' ).remove();
        } );
    }

    /**
     * Function view of template
     */
    function template_view_function() {
        // open modal with asset preview
        $( '.template' ).on( 'click', '.btn-view', function ( e ) {
            $( '.template-modal-close-wrap .btn' ).remove( );
            var content = '';
            if ( $( this ).closest( '.item' ).find( '.item-image-ppt-pdf-word' ).length > 0 ) {
                content = $( this ).closest( '.item' ).find( '.item-image-ppt-pdf-word' ).html();
            }
            else {
                content = $( this ).closest( '.item' ).find( '.item-image' ).html();
            }

            var btn = $( this ).closest( '.item' ).find( '.item-btn-wrap' ).html();
            $( '.template-modal' ).addClass( 'active' );
            $( '.template-modal-container' ).html('').html( content  );
            $( '.template-modal-close-wrap' ).prepend( btn );
            $( '.template-modal-close-wrap .btn-view' ).remove();

            return false;
        } );
    }


    template_view_function();
    campaign_view_file_home();
    clone_campaign();
    redirect_not_looged_in();
    isWebPSupported();
    fixedHeader();
    scrollToIdSection();
    contactPopup();
    resetPassword();
    leaving_page_function();
    exit_popup_function();
    notifications();
    notifications_li_function();
    close_popup();
    read_article();
    account_info();
    account_image();
    before_load_more_function();
    load_more_function();
    textarea_trim_values();
    upcoming_js();
    main_tabs();
    welcome();
    header_custom_pages();
    login_page_form();
    profile_function();
    admin_scripts_function();
    scroll_function();
    documentTooltip();
    addImgBg('.js-img-bg');
    moveFooterToTheBottom();
    moveFooterToTheBottomFAQ();

});

/*
 * Function of preloading page
 *
 */
window.onload = function () {
    hide_preloader();
};

/**
 * Function of hiding preloader
 *
 */
function hide_preloader(){
    document.body.classList.add( 'loaded_hiding' );
    window.setTimeout( function () {
        document.body.classList.add( 'loaded' );
        document.body.classList.remove( 'loaded_hiding' );
    }, 1 );
}
