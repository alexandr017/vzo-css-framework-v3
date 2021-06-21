$('.tab').change(function(){
    $('div.tabcontent').slideUp();
    $('#menu_'+$(this).val()).slideDown();
});