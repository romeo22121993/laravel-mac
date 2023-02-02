$(document).ready(function() {
    <!--  This is for Category  -->
    $('select[name="category_id"]').on('change', function(){

        let category_id = $(this).val();
        console.log( 'category_id', category_id);
        if(category_id) {
            $.ajax({
                url: "/get/subcategory/"+category_id,
                type:"GET",
                dataType:"json",
                success:function(data) {
                    $("#subcategory_id").empty();
                    $.each( data, function( key,value ) {
                        $("#subcategory_id").append('<option value="'+value.id+'">'+value.subcategory_en+'</option>');
                    });
                },
            });
        } else {
            console.log('danger');
        }
    });

    <!--    This is for District  -->
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

    $('#summernote, #summernote1').summernote({
        height: 150
    });




});
