var $fileInput = $('.js-file-input');
var $droparea = $('.js-file-drop-area');
var $dropareaMsg = $('.js-file-msg');

// highlight drag area
$fileInput.on('dragenter focus click', function () {
    $droparea.addClass('is-active');
});

// back to normal state
$fileInput.on('dragleave blur drop', function () {
    $droparea.removeClass('is-active');
});

// change inner text
$fileInput.on('change', function () {
    var filesCount = $(this)[0].files.length;
    var $textContainer = $dropareaMsg;

    if (filesCount === 1) {
        // if single file is selected, show file name
        var fileName = $(this).val().split('\\').pop();
        $textContainer.text(fileName);
    } else {
        // otherwise show number of files
        $textContainer.text(filesCount + ' files selected');
    }
});


function modal(el) {

    //$(".document").toggleClass("no-scroll", true);
    $(".popup.active").removeClass("active");
    $(el).toggleClass("active", true).scrollTop(0);
    return;

}

$(".js-modal-close").click(function (e) {
    e.preventDefault();
    //$(".document").toggleClass("no-scroll", false);
    $(".js-modal").toggleClass("active", false);

    return;
});

$("[data-modal]").click(function (e) {
    e.preventDefault();
    var el = $(this).data("modal");
    modal(el);
    return;
});

$(".js-banks-carousel").slick({
    slidesToShow: 1,
    infinite: false,
    arrows: false,
    dots: true,
    responsive: [
        {
            breakpoint: 768,
            settings: {
                dots: false
            }
            }
        ]
});

$(".js-flags-carousel").slick({
    infinite: false,
    arrows: false,
    dots: false,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1
            }
            }
        ]
}).on('beforeChange', function (event, slick, currentSlide, nextSlide) {
    //slick.slideCount
    $(".js-flags-current").text(nextSlide + 1);
});

$(".js-flags-prev").click(function (e) {
    $(".js-flags-carousel").slick('slickPrev');
});
$(".js-flags-next").click(function (e) {
    $(".js-flags-carousel").slick('slickNext');
});

$(".js-reviews-carousel").slick({
    infinite: false,
    arrows: false,
    dots: true,
    //adaptiveHeight: true,
    draggable: false,
    autoplay: true
});

$("html").click(function () {
    $(".js-select-list").removeClass("active");
});

$(".js-select").each(function (i) {
    var select = $(this),
        dd = select.find(".js-select-list"),
        holder = select.find(".js-select-holder");

    $(".document").prepend(dd);

    select.click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        pos = select.offset(),
            pl = pos.left,
            pt = pos.top + select.outerHeight();
        dd.css({
            left: pl,
            top: pt,
            "max-width": select.outerWidth()
        }).toggleClass("active");
    });

    dd.find(".js-select-option").click(function (e) {
        e.stopPropagation();
        var v = $(this).text();
        holder.text(v); // val
        $(this).addClass("active").siblings().removeClass("active");
        dd.removeClass("active");
        select.removeClass("active");
        return;
    });

});

$(".js-expand").each(function (i) {

    var expand = $(this),
        trigger = expand.find(".js-expand-button"),
        content = expand.find(".js-expand-data");
    
    trigger.click(function(e){
        e.preventDefault();
        expand.toggleClass("active");
        content.slideToggle();
        return;
    });
    
});

$(".js-runner").each(function (i) {

    var runner = $(this),
        content = runner.find(".js-runner-content"),
        mw = runner.width(),
        rw = content.width(),
        els = content.children(),
        stop = 0;

    if (mw > rw) {
        
        
        while (stop != 1) {

            els.each(function (el) {

                $(this).clone().appendTo(content);

            });

            rw = content.width();

            if (mw < rw) {

                stop = 1;

            }

        }
    }
    
    runner.append(content.clone());



});

$(".js-marquee").each(function (i) {

    var runner = $(this),
        content = runner.find(".js-marquee-content"),
        mw = runner.width() * 2,
        rw = content.width(),
        els = content.children(),
        stop = 0;



    if (mw > rw) {
        
        n = 0;
        
        while (stop != 1) {

            els.each(function (el) {

                $(this).clone().appendTo(content);

            });

            rw = content.width();

            if (mw < rw || n > 10) {

                stop = 1;

            }
            
            n++;

        }
    }



});

// Autorun
$(function () {

    var scrollBox = $(".scrollbox");
    $.each(scrollBox, function (i) {

        new MiniBar(this, {

            barType: "default",
            minBarSize: 10,
            alwaysShowBars: true,
            scrollX: false,
            scrollY: true,
            navButtons: false

        });

    });


    if ($("[data-scroll]").length) {

        smartScroll.init({
            speed: 500,
            addActive: false,
            activeClass: "active",
            offset: 90
        }, function () {});

    }



});
