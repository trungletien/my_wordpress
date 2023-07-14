<?php
get_header();
?>

<body>
    <div class="container">
        <!-- Home carousel slider -->
        <section>
            <div id="circle-svg" class="circle-svg" style="display: none;">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="19px" height="19px" viewBox="0 0 80 80" xml:space="preserve">
                    <circle class="background-circle" cx="40" cy="40" r="36" fill="transparent" stroke="#595959" stroke-width="8" />
                    <circle transform="rotate(-90 40 40)" class="progress-circle" cx="40" cy="40" r="36" fill="transparent" stroke="white" stroke-width="8" />
                </svg>
            </div>
            <div class="banner-homepage-carousel w-screen height-50vh lg:h-screen">
                <div class="carousel-cell relative">
                    <img class="w-screen height-50vh lg:h-screen object-cover" src="<?php echo  get_template_directory_uri();?>/assets/images/banner1.jpg" alt="">
                    <div class="carousel-content-overlay">
                        <div>Collection</div>
                        <h2>Placerat orci nulla pellentesque dignissim enim sit amet.</h2>
                        <a class="bg-transparent hover:bg-white text-white-700 font-semibold hover:text-black py-2 px-4 border border-white-500 hover:border-transparent rounded">
                            Shop now </a>
                    </div>
                </div>
                <div class="carousel-cell">
                    <img class="w-screen height-50vh lg:h-screen object-cover" src="<?php echo  get_template_directory_uri();?>/assets/images/banner2.jpg" alt="">
                    <div class="carousel-content-overlay">
                        <div>Collection</div>
                        <h2>Placerat orci nulla pellentesque dignissim enim sit amet.</h2>
                        <a class="bg-transparent hover:bg-white-900 text-white-700 font-semibold hover:text-black py-2 px-4 border border-white-500 hover:border-transparent rounded">
                            Shop now </a>
                    </div>
                </div>
                <div class="carousel-cell">
                    <img class="w-screen height-50vh lg:h-screen object-cover" src="<?php echo  get_template_directory_uri();?>/assets/images/banner3.jpg" alt="">
                    <div class="carousel-content-overlay">
                        <div>Collection</div>
                        <h2>Placerat orci nulla pellentesque dignissim enim sit amet.</h2>
                        <a class="bg-transparent hover:bg-white text-white-700 font-semibold hover:text-black py-2 px-4 border border-white-500 hover:border-transparent rounded">
                            Shop now </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php
    get_footer();
    ?>