jQuery(document).ready(function () {
    openMenu();
    CRcustom_sl();
    scroll_section();
    click_scroll();
    show_more_item();
    show_more_content();
    change_tabs();
    swiper();
    change_img();
    //
    AOS.init({
        // Global settings:
        disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
        startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
        initClassName: 'aos-init', // class applied after initialization
        animatedClassName: 'aos-animate', // class applied on animation
        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
        disableMutationObserver: false, // disables automatic mutations' detections (advanced)
        debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
        throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        once: false,
        offset: 150, // offset (in px) from the original trigger point
        delay: 300, // values from 0 to 3000, with step 50ms
        duration: 400, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
    });
    jQuery(document).on("submit", ".search-form", function(e) {
        if (!jQuery(this).find(".search-field").val()) {
            e.preventDefault();
        }
    })
    show_filters_mb();
});
function show_filters_mb(){
    jQuery(".show_filter_btn_fixed").click(function (e){
        e.preventDefault()
        jQuery(".projects_filters").toggleClass('show')
        jQuery(this).toggleClass('active')
    })
    jQuery(".show_filter_btn").click(function(e){
        e.preventDefault()
        jQuery(".show_filter_btn_fixed").toggleClass('active')
        jQuery(".projects_filters").toggleClass('show')
    })
}
function change_img(){
    jQuery(".home_2 .item").mouseenter(function(e){
        e.preventDefault();
        var url = jQuery(this).attr('data-image');

        jQuery(".box_project_home").css('background-image', 'url('+url+')');
        // jQuery(".box_project_home").attr('style', 'background-image: '+ url);
    })
}
function swiper(){
    var home_banner = new Swiper(".home_swiper", {
        speed: 1200,
        effect: 'fade',
        autoplay:{
            delay: 5000,
            disableOnInteraction: false,
        }
    })
    var banner_slide = new Swiper(".banner_slide", {
        speed: 1200,
        effect: 'fade',
        autoplay:{
            delay: 5000,
            disableOnInteraction: false,
        }
    })
}
function change_tabs(){
    if(screen.width > 991){
        var number = 9;
    }
    else{
        var number = 8;
    }
    jQuery(document).delegate(".tabs_title li","click", function(e) {
        e.preventDefault();
        var id = jQuery(this).attr('data-id');
        jQuery(".tabs_title li.active").removeClass("active");
        jQuery(".tabs_content .tab_content.active").removeClass("active");

        jQuery(this).addClass("active");
        jQuery("#tab_content"+id).addClass("active");

        jQuery("#tab_content"+id+ " .item").slice(0, number).show();
    });
}
function show_more_content(){
    jQuery(document).delegate(".single_project .col_4 .btn_view_more.view_more","click", function(e){
        e.preventDefault();
        jQuery(".single_project .col_4 .box_content .content.hide").slideDown();
        jQuery(".single_project .col_4 .btn_view_more").addClass('view_less');
        jQuery(".single_project .col_4 .btn_view_more").removeClass('view_more');

    });
    jQuery(document).delegate(".single_project .col_4 .btn_view_more.view_less","click", function(e){
        e.preventDefault();
        jQuery(".single_project .col_4 .box_content .content.hide").slideUp();
        jQuery(".single_project .col_4 .btn_view_more").removeClass('view_less');
        jQuery(".single_project .col_4 .btn_view_more").addClass('view_more');
    })
}
function show_more_item(){
    if(screen.width > 991){
        var number = 9;
    }
    else{
        var number = 8;
    }
    jQuery(".single_project .item").slice(0, number).show();
    jQuery(document).delegate(".single_project .col_8 .btn_view_more.view_more","click", function(e){
        e.preventDefault();
        jQuery(".single_project .tab_content.active .item:hidden").slideDown();
        jQuery(".single_project .col_8 .tab_content.active .btn_view_more").addClass('view_less');
        jQuery(".single_project .col_8 .tab_content.active .btn_view_more").removeClass('view_more');
    });
    jQuery(document).delegate(".single_project .col_8 .btn_view_more.view_less","click", function(e){
        e.preventDefault();
        jQuery(".single_project .tab_content.active .item").slice(number).slideUp();
        jQuery(".single_project .col_8 .tab_content.active .btn_view_more").removeClass('view_less');
        jQuery(".single_project .col_8 .tab_content.active .btn_view_more").addClass('view_more');
    })
}
function openMenu(){
    jQuery("#open_menu_btn").click(function(e){
        e.preventDefault();
        jQuery(".menu_custom").toggleClass('active');
        jQuery(this).toggleClass('active');
        jQuery("body").toggleClass('unscrollable');
    })
}
function CRcustom_sl(){
    jQuery('select.custom_sl').each(function () {
        var $this = jQuery(this), numberOfOptions = jQuery(this).children('option').length
        $this.addClass('select-hidden')
        var val = jQuery(this).val();
        $this.wrap('<div class="select"></div>')
        $this.after('<div class="select-styled"></div>')
        jQuery(this).hide();
        var $styledSelect = $this.next('div.select-styled')
        var $list = jQuery('<ul />', {'class': 'select-options'}).insertAfter($styledSelect)
        for (var i = 0; i < numberOfOptions; i++) {
            var active = (val == $this.children('option').eq(i).val()) ? 'active' : '';
            $styledSelect.text($this.children('option:selected').text());
            jQuery('<li />', {
                text: $this.children('option').eq(i).text(),
                rel: $this.children('option').eq(i).val(),
                crclass: $this.children('option').eq(i).attr('class'),
                'data-class-section': $this.children('option').eq(i).attr('data-class-section'),
                class: active,
            }).appendTo($list)
        }
        var $listItems = $list.children('li')
        $styledSelect.click(function (e) {
            e.stopPropagation()
            jQuery('div.select-styled.active').not(this).each(function () {
                jQuery(this).removeClass('active').next('ul.select-options').slideUp()
            })
            jQuery(this).toggleClass('active').next('ul.select-options').slideToggle()
        })
        $listItems.click(function (e) {
            $listItems.removeClass("active")
            jQuery(this).addClass("active")
            e.stopPropagation();
            $styledSelect.text(jQuery(this).text()).removeClass('active');
            $this.val(jQuery(this).attr('rel'));
            $this.trigger('change');
            $list.slideUp();
        })
        jQuery(document).click(function () {
            $styledSelect.removeClass('active')
            $list.slideUp()
        })
        jQuery("ul.select-options").slideUp();
    });
}
function click_scroll(){
    jQuery(".click_scroll").click(function(e){
        e.preventDefault();
        var target = jQuery(this).attr('href');
        jQuery('html, body').stop().animate({
            scrollTop: jQuery(target).offset().top - 150
        }, 1000);
        return false;
    })
    jQuery(".scroll_last").click(function(e){
        e.preventDefault();
        jQuery('html, body').stop().animate({
            scrollTop: jQuery("#footer").offset().top + jQuery("#footer").outerHeight(true)
        }, 1000);
    })
}
function scroll_section(){
    var str = window.location.href;
    section = str.split('#')[1];
    if(section != null && section != '' && section != undefined) {
        jQuery(document).ready(function () {
            jQuery('html, body').stop().animate({
                scrollTop: jQuery('#' + section).offset().top - 150
            },  500);
            return false;
        })
    }
}