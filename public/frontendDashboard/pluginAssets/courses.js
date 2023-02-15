jQuery(document).ready(function ($) {

    console.log('courses!!');

    /**
     * Function completing course for single course page
     *
     */
    function complete_course_function() {

        $(".complete_task_button").on("click", function (e) {
            e.preventDefault();

            var info = {
                course_id: $(this).attr('data-course-id'),
                action: 'complete_course'
            };
            $.post({
                url: '/dashboard/ajax/complete-course',
                data: info,
                success: function ( data ) {
                    alert('task is Completed!');
                    console.log('success');
                    $(".complete_task_button").removeClass("complete_task_button").text('Already completed.');
                },
                error: function ( data ) {
                    console.log('error');
                },
            });

        });

    }


    /**
     * Function reading course
     *
     */
    function read_course() {
        $(".read-course").on( "click", function (e) {
            e.preventDefault();

            var href = $(this).attr('href');
            var info = {
                course_id: $(this).attr('data-course-id'),
                action: 'read_course'
            };
            $.post({
                url: '/dashboard/ajax/read-course',
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
     * Function of video player for single course page
     *
     */
    function video_player() {

        if ( !$(".container").hasClass('video-player') ) {
            return false;
        }
        var first      =  $(".video-player li.lesson").first();
        first.addClass('active');

        var video_link = first.find("a.video-link").attr("data-link");
        var videoId    = getId(video_link);
        var src        = "//www.youtube.com/embed/" + videoId;
        $("#player").attr( 'data-vimeo-url', video_link );

        $(".video-player li.lesson").each( function () {
            if ( $(this).hasClass("checked") ) {
                var video_link = $(this).find("a.video-link").attr("data-link");
                var videoId    = getId(video_link);
                var src        = "//www.youtube.com/embed/" + videoId;

                $(".video-player li.lesson").removeClass('active');
                $(this).addClass('active');
            }
        });

        $(".video-player li.lesson_parent").on("click", function (e) {
            e.preventDefault();
        });

        $(".video-player li.lesson").on("click", function (e) {
            e.preventDefault();

            var video_link = $(this).find("a.video-link").attr("data-link");
            var videoId    = getId(video_link);
            var src        = "//www.youtube.com/embed/" + videoId;

            // $(".video-player").find(".main-video").attr('src', src);
            $(".video-player ul").find("li.lesson").removeClass('active');
            $(this).addClass('active');

            var course_id      = $(this).parents(".single_course_list").attr('data-course');
            var lesson_seconds = $(this).attr('data-seconds');
            var parent_lesson  = ( $(this).parent("ul").hasClass('parent') ) ?  $(this).parent("ul.parent").find("li.lesson_parent").attr('data-index') : 0;
            var info = {
                course_id:      course_id,
                parent_lesson:  parent_lesson,
                lesson_seconds: lesson_seconds,
                lesson_name:    $(this).find("span.video-name").text(),
                lesson_id:      $(this).attr('data-index'),
                lesson_video:   $(this).attr('data-video-id'),
                lesson_link:    $(this).find('a.video-link').attr('data-link'),
            };

            $.post({
                url: '/dashboard/ajax/lastiteraction',
                data: info,
                success: function (data) {
                    if ( data.done == 1) {
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
     * Function converting yutube link to embed video link
     *
     */
    function getId( url ) {
        if ( !url ) {
            return false;
        }
        var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
        var match = url.match(regExp);

        if (match && match[2].length == 11) {
            return match[2];
        } else {
            return 'error';
        }
    }

    video_player();
    read_course();
    complete_course_function();

})
