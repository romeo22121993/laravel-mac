$(document).ready(function() {

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    })

    /**
     * Contact page logic
     */
    $('#contact_form').on('submit', function( e ){

        e.preventDefault();
        $("#loader").show();

        let info = $(this).serialize();
        console.log( 'info', info  );

        $.ajax({
            url: "/ajax/contactForm",
            type: "POST",
            data: info,
            success: function( response ) {
                console.log( 'response', response );
            }
        });

    });

    /*    This is for District
    $('select[name="district_id"]').on('change', function(){
        let district_id = $(this).val();
        if(district_id) {
            $.ajax({
                url: "/get/subdistrict/"+district_id,
                type:"GET",
                dataType:"json",
                success:function(data) {
                    $("#subdistrict_id").empty();
                    $.each( data,function( key,value ) {
                        $("#subdistrict_id").append('<option value="'+value.id+'">'+value.subdistrict_en+'</option>');
                    });
                },
            });
        } else {
            console.log('danger');
        }
    });
    */

});
