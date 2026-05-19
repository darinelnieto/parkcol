// JS for partial: header\n
$(()=>{
    var menu_active = false;
    if($(window).width() < 1266){
        $('.bar-menu').on('click', function(){
            if(menu_active == false){
                $('.nav-menu-contain').slideDown(300);
                $('.custom-logo-link').css('filter', 'contrast(.1)');
                $(this).addClass('active');
                menu_active = true;
            }else{
                $('.nav-menu-contain').slideUp(300);
                $('.custom-logo-link').css('filter', 'none');
                $(this).removeClass('active');
                menu_active = false;
            }
        });
        $('.nav-menu-contain').on('click', 'a', function(){
            $('.nav-menu-contain').slideUp(300);
            $('.custom-logo-link').css('filter', 'none');
            $('.bar-menu').removeClass('active');
            menu_active = false;
        });
    }
});