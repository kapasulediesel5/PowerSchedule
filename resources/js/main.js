$(document).ready(function(){
    $('#search-input').on('keyup',function(){
        var query = $(this).val();
        $.ajax({
            url:"{{ route('/search') }}",
            type:"GET",
            data:{'query':query},
            success:function (data) {
                if (data) {
                    $('#product-list').empty();
                    $.each(data, function(key,value){
                        $('#product-list').append('<li>'+value.name+'</li>');
                    });
                }
            }
        })
    });
});
