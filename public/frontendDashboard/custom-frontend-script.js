$(document).ready(function() {

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    })

    /**
     * Contact page logic
     */
    function contactPageFunction() {
        $('#contact_form').on('submit', function (e) {

            e.preventDefault();
            $("#loader").show();

            let info = $(this).serialize();

            $.ajax({
                url: "/ajax/contactForm",
                type: "POST",
                data: info,
                success: function (response) {
                    console.log('response', response);
                    $("#contact_form, .form_contact_box").hide();
                    $("#loader").hide();
                    $(".success_message_block").show();
                    $(".success_message_block h3").text("Sent.");
                }
            });

        });
    }


    /**
     * Function choosing category, loading first page of categorie's post
     *
     */
    function beforePostsLoadMoreFunction() {

        $(".all_posts_categories a.cat").on( "click", function (e) {
            e.preventDefault();
            $("#load_more_posts_button").show();

            let page = 1;
            let category   = $(this).attr('data-href');
            let categoryId = $(this).attr('data-id');
            let cptType   = $('.all_posts').attr('data-cpt');

            $('.all_posts').attr('data-getcat', category);
            $('.all_posts').attr('data-catid', categoryId);

            $(".all_posts_categories a.cat").removeClass('active');
            $(this).addClass('active');

            let data = {
                'totalCount': 0,
                'page':       page,
                'getCat':     category,
                'getCatId':   categoryId,
                'cptType':   cptType
            };

            $.ajax({
                url: '/ajax/loadPostsByAjax',
                type: "POST",
                data: data,
                success:function(response) {
                    if ( response ) {
                        $(".all_posts").html('');
                        $(".all_posts").append(response.html);
                        page++;
                        $('.all_posts').attr('data-all', response.all );
                        $('.all_posts').attr('data-page', 2 );

                        if ( response.count >= response.all ) {
                            $("#load_more_posts_button").hide();
                        }
                    }
                    else {
                        $("#load_more_posts_button").hide();
                    }
                }
            });

        });
    }

    /**
     * Function load more
     *
     */
    function postsLoadMoreFunction( ) {

        /**
         * Load more function for post
         *
         */
        $("#load_more_posts_button").on( "click", function (e) {
            e.preventDefault();
            console.log( '22')
            $(this).addClass('disabled_btn');

            let totalCount  = $('.all_posts').attr('data-all');
            let page        = $('.all_posts').attr('data-page');
            page            = ( page > 1 ) ?  page : 2

            let getCat      = $('.all_posts').attr('data-getcat');
            let categoryId  = $('.all_posts').attr('data-catid');
            let cptType     = $('.all_posts').attr('data-cpt');

            let data = {
                'totalCount': totalCount,
                'page':       page,
                'getCat':     getCat,
                'getCatId':   categoryId,
                'cptType':    cptType
            };

            $.ajax({
                url: '/ajax/loadPostsByAjax',
                type: "POST",
                data: data,
                success:function(response) {

                    if ( response ) {
                        $(".all_posts").append(response.html);
                        page++;
                        $('.all_posts').attr('data-page', page );
                        $('.all_posts').attr('data-all', response.all );
                        if ( response.count >= response.all ) {
                            $("#load_more_posts_button").hide().removeClass('disabled_btn');;
                        }
                        else  {
                            $("#load_more_posts_button").removeClass('disabled_btn');
                        }
                    }
                    else {
                        $("#load_more_posts_button").hide().removeClass('disabled_btn');
                    }

                }
            });
        });

    }

    contactPageFunction();
    beforePostsLoadMoreFunction();
    postsLoadMoreFunction();

});
