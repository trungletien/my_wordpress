let homepage_time_scroll = 3000;
$(document).ready(function () {
    $('.banner-homepage-carousel').flickity({
        // options
        cellAlign: 'center',
        contain: true,
        draggable: true,
        prevNextButtons: false,
        pauseAutoPlayOnHover: false,
        pageDots: true,
        // autoPlay: homepage_time_scroll,
        fullscreen: true,
        on: {
            ready: function () {
                let svg = $("#circle-svg").find("svg");
                jQuery(".banner-homepage-carousel").find(".flickity-page-dot").append(svg);
                jQuery(".banner-homepage-carousel").find(".flickity-page-dot svg .progress-circle").css({ transition: "stroke-dashoffset " + (homepage_time_scroll/1000) + "s linear" });
                jQuery(jQuery(".banner-homepage-carousel .flickity-page-dot")[0]).removeClass('is-selected')
                setTimeout(function () {
                    jQuery(jQuery(".banner-homepage-carousel .flickity-page-dot")[0]).addClass('is-selected')
                }, 10);
            },
            // To avoid slide show will be stopped working
            change: function () {
                this.playPlayer();
            },
            scroll: function () {
                this.playPlayer();
            },
            staticClick: function () {
                this.playPlayer();
            }
        }
    });

    $('.banner-homepage-carousel .flickity-page-dot svg .progress-circle').on('click', function () {
        $(this).closest('button').click();
    })
});