jQuery(function ($) {

    $(window).scroll(function (e) {
        e.stopPropagation();

        if ($(this).scrollTop() > 120) {
            $('.header-wrap, .headermedia').addClass("scrolled");
        }

        if ($(this).scrollTop() === 0) {
            $('.header-wrap, .headermedia').removeClass("scrolled slide");

        }
    });

    $(window).on('scroll', () => {
        var scrollTop = $(window).scrollTop()
        if (scrollTop > $('.headermedia').offset().top) {
            $('.scrollup').fadeIn(500);
        } else {
            $('.scrollup').fadeOut(100)
        }
        ;
    });
    $(".scrollup").click(function () {
        $("html, body").animate({scrollTop: 0}, "slow");
        return false;
    });


    $('.burger-wrap').click(function (e) {
        e.stopPropagation();

        $('.header-wrap').toggleClass('mobile');

        setTimeout(() => {
            $('.burger').toggleClass('active');
        }, 0);
        $('.header-menu-links').toggleClass('visible');
        setTimeout(() => {
            $('.header-menu-links').toggleClass('active');
        }, 0);
    });

    $('.burger-wrap').click(function (e) {
        $('.focusbackground').toggleClass('active')
    });

    $('.focusbackground, .popup-close, .closing, #home, #features, #faq, #whyus, #contacts').click(function (e) {
        $('.focusbackground').removeClass('active');
        $('.burger-wrap').removeClass('active');
        $('.burger-wrap').removeClass('visible');
        $('.header-menu-links').removeClass('visible');
        $('.header-menu-links').removeClass('active');
        $('.tariff-popup').removeClass('active');

    });

    $("#contacts").click(function () {
        $('html, body').animate({
            scrollTop: $(".footer-contacts").offset().top
        }, 'slow');

    });


    $("#whyus, #whyus-footer").click(function () {
        $('html, body').animate({
            scrollTop: $(".whyus").offset().top - $('.header-wrap').height()
        }, 'slow');

    });

    $("#features, #features-footer").click(function () {
        $('html, body').animate({
            scrollTop: $(".features").offset().top - $('.header-wrap').height()
        }, 'slow');

    });

    $("#faq, #faq-footer").click(function () {
        $('html, body').animate({
            scrollTop: $(".faq").offset().top - $('.header-wrap').height()
        }, 'slow');
    });

    $('.tariff-button').click(function (e) {
        $('.focusbackground').toggleClass('active')
        $('.tariff-popup').addClass('active')
    });

    // WOW ANIMATIONS
    //   new WOW().init();

    /*
    LAZY LOAD
    $(function() {
           $('.lazy').Lazy();
       });*/

    /*
    SLICK SLIDER
    if ($('.our-team__slider').length>0) {
          $('.our-team__slider').slick({
              dots: false,
              infinite: true,
              speed: 300,
              slidesToShow: 2,
          });
      }*/

    /*
    CUSTOM SELECT
    $('body').click(function(){
          $('.custom-select').removeClass('open');
      });

      $('.custom-select').click(function(e){
          e.stopPropagation();
      })
      $('.custom-select__select').click(function(){
         $(this).parent().toggleClass('open');
      });
      $('.custom-select__option').click(function(){
          let root = $(this).parents('.custom-select');
          if ($(this).hasClass('cancel'))
          {
              root.removeClass('selected');
              root.find('.custom-select__select')
                  .text(root.find('.custom-select__title')
                      .text())
          }
          else{
              root.find('.custom-select__select')
                  .text($(this).text())
              root.attr('data-value',$(this).data('value'))
              root.addClass('selected')
          }
          root.removeClass('open');
      });*/

    /*
    PHOTOSWIPE(LightBox gallery)
    $('.pswp-item').click(function(e) {
        e.preventDefault();

        let container = [];
        $(this).parents('.pswp-gallery').find('.pswp-item').each(function() {
                let item = {
                    src: $(this).data('url'),
                    w: $(this).data('width'),
                    h: $(this).data('height'),
                };
            container.push(item);
        });

        let attr = $(this).data('index');
        if ((attr===undefined)||(attr ===false))
        {
            attr = $(this).index();
        }
        let $pswp = $('.pswp')[0],
            options = {
                index:attr,
                bgOpacity: 0.85,
                showHideOpacity: true
            };
        let gallery = new PhotoSwipe($pswp, PhotoSwipeUI_Default, container, options);
        gallery.init();
    });

     */

    /*
       POPUPS ANIMATION
        const height_anim = 250;
        function openPopup(selector)
        {
            selector.show();
            selector.css('max-height',selector.outerHeight()+'px');
            selector.css('height','100%');
            if (selector.outerHeight()<$(window).height()){
                selector.css('top',($(window).height()-selector.outerHeight())/2-height_anim);
            }
            else
                selector.css('top',-height_anim);
            $('.popup-back').fadeIn(300);
            selector.animate(
                {
                    opacity:1,
                    top:"+="+height_anim,
                },500);
        }
        function closePopup(selector)
        {
            selector.each(function(){
                selector.css('max-height','none');
                selector.css('height','auto');
               $(this).animate(
                   {
                   opacity:0,
                   top:"-="+height_anim,
                   },500,()=>($(this).hide()));
            });
        }

     */
    /*
    WP CONTACT FORM
    $(document).on('wpcf7invalid  ',function(){
        $('.cf-row .wpcf7-not-valid-tip').removeClass('hidden');
        $('button.submitting').removeClass('submitting');
    });

    $(document).on('wpcf7mailsent  ',function(){
        $('button.submitting').removeClass('submitting');
        $('.popup:visible').fadeOut(300);
        $('.popup-back').fadeOut(500);
        $('.success-popup').fadeIn(500);
        setTimeout(()=>{
            $('.success-popup').fadeOut(3000,"linear" );
        },2000);
    });
    $('.success-popup').click(function(){
       $(this).hide();
    });
    $('.fake-button').click(function() {
        let parent = $(this).parents('.cf-wrapper');
        let opd = parent.find('.opd');
        if (!opd.is(':checked')){
           opd.siblings('.wpcf7-not-valid-tip').removeClass('hidden');
           return;
        }
        else
            opd.siblings('.wpcf7-not-valid-tip').addClass('hidden');
        $(this).addClass('submitting');
        parent.find('.wpcf7-submit').click();
    });

    $('.contact-form').on('click','.wpcf7-not-valid-tip',function(){
        $(this).addClass('hidden');
    });
*/

});
