$('.click-dropdown').click(function() {
        $(this).parent('.add').toggleClass('hover-active');
	$(this).children('.fa').toggleClass('fa-plus').toggleClass('fa-minus');
    });
$('.sidebar-btn').click(function(){
	$(this).children('.fa').toggleClass('fa-plus').toggleClass('fa-minus');
});


jQuery(document).ready(function(){
    $('.plus').click(function(e){
        e.preventDefault();
        fieldName = $(this).attr('field');
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        if (!isNaN(currentVal)) {
            $('input[name='+fieldName+']').val(currentVal + 1);
        } else {
            $('input[name='+fieldName+']').val(0);
        }
    });
    $(".minus").click(function(e) {
        e.preventDefault();
        fieldName = $(this).attr('field');
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        if (!isNaN(currentVal) && currentVal > 0) {
            $('input[name='+fieldName+']').val(currentVal - 1);
        } else {
            $('input[name='+fieldName+']').val(0);
        }
    });
});


