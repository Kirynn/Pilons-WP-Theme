jQuery(document).ready(function ($) {
    
    $('.navbar-toggle').click(function () {
        
        $("#main-site-nav").animate({height: 'toggle'}, 250);
    });
    
    $("#search-bar").focusin(function() {
        
        $(this).parent('label').addClass('active');
    });

    $("#search-bar").focusout(function () {
        
        if($(this).val().length == 0)
            
            $(this).parent('label').removeClass('active');    
    });
});