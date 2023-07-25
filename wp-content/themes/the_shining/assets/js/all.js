let homepage_time_scroll = 3000;
let $ = jQuery;


$(document).ready(function () {
    if (window.acf) {
        window.acf.addAction('render_block_preview', homepage_block);
    } else {
        homepage_block();
    }
});

function homepage_block() {
    if ($('.homepage-carousel').length > 0) {

        $('.homepage-carousel').each(function (index, element) {
            $(element).flickity({
                // options
                cellAlign: 'center',
                contain: true,
                groupCells: true,
                draggable: true,
                prevNextButtons: false,
                pauseAutoPlayOnHover: false,
                pageDots: true,
                // autoPlay: homepage_time_scroll,
                fullscreen: true,
                on: {
                    ready: function () {
                        let svg = jQuery(element).closest('section').find(".circle-svg svg");
                        jQuery(element).find(".flickity-page-dot").append(svg);
                        jQuery(element).find(".flickity-page-dot svg .progress-circle").css({ transition: "stroke-dashoffset " + (homepage_time_scroll / 1000) + "s linear" });
                        jQuery(jQuery(element).find(".flickity-page-dot")[0]).removeClass('is-selected')
                        setTimeout(function () {
                            jQuery(jQuery(element).find(".flickity-page-dot")[0]).addClass('is-selected')
                        }, 10);
                    },
                    // To avoid slide show will be stopped working
                    change: function () {
                        // this.playPlayer();
                    },
                    scroll: function () {
                        // this.playPlayer();
                    },
                    staticClick: function () {
                        // this.playPlayer();
                    }
                }
            });

            // jQuery(element).find('.flickity-slider').css('transform', 'translateX(0%)')
        })

        $('.homepage-carousel .flickity-page-dot svg .progress-circle').on('click', function () {
            $(this).closest('button').click();
        })
    }
}