
$('.tab').change(function(){
    $('div.tabcontent').slideUp();
    $('#sort_'+$(this).val()).slideDown();
});
