jQuery(document).ready(function(){
    jQuery('.app-menu').css({
        'display' : 'none'
    });
    jQuery('.menu-toggle span').click(function() {
        jQuery('.app-menu').fadeToggle('fast');
    });
    jQuery('.command-toggle').click(function(){
        var target = jQuery(this).data('target');
        if (jQuery(target).hasClass('d-none')){
            jQuery(target).removeClass('d-none');
        }else{
            jQuery(target).addClass('d-none');
        }
    });
    var grid = new Muuri('.muuri');
});