<?php defined( 'ABSPATH' ) or die( 'No script kiddies please!' ); ?>


<div class="top_slider">
	<div id="topCarousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
                <a>
                    <figure style="border-radius: 0">
                        <img class="d-block w-100" src="<?php echo RAD_ASSETS. '/images/sliders/radshid_banner.jpg'  ?>" alt="ردیاب رادشید">
                    </figure>
                </a>
			</div>
            <div class="carousel-item"><a href="https://radshid.com/shop"><figure style="border-radius: 0"><img class="d-block w-100" src="<?php echo RAD_ASSETS. '/images/sliders/car_tracker_banner.jpg' ?>" alt="ردیاب رادشید"></figure></a></div>
            <div class="carousel-item"><a href="https://radshid.com/shop"><figure style="border-radius: 0"><img class="d-block w-100" src="<?php echo RAD_ASSETS. '/images/sliders/personal_tracker_banner.jpg' ?>" alt="ردیاب رادشید"></figure></a></div>
            <div class="carousel-item"><a href="https://radshid.com/?p=12783"><figure style="border-radius: 0"><img class="d-block w-100" src="<?php echo RAD_ASSETS. '/images/sliders/tablet_banner.jpg' ?>" alt="ردیاب رادشید"></figure></a></div>
            <div class="carousel-item"><a href="https://radshid.com/?p=12775"><figure style="border-radius: 0"><img class="d-block w-100" src="<?php echo RAD_ASSETS. '/images/sliders/pda_banner.jpg' ?>" alt="ردیاب رادشید"></figure></a></div>
        </div>

        <a class="carousel-control-prev" role="button" data-slide="prev" style="cursor: pointer;">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" role="button" data-slide="next" style="cursor: pointer;">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
        <div class="loader-container">
            <div class="loader_circle"></div>
        </div>
	</div>
</div>


<script type="text/javascript">
    jQuery(document).ready(function($){
        $('#topCarousel').carousel({
            'interval': 5000,
            'keyboard': true,
            'touch': true,
            'ride': true
        });
        $('a.carousel-control-prev').on('click' , function (e) {
            e.preventDefault();
            $('#topCarousel').carousel('prev');
        });
        $('a.carousel-control-next').on('click' , function (e) {
            e.preventDefault();
            $('#topCarousel').carousel('next');
        });
        setTimeout(function () {
            $('.carousel-control-prev').css('visibility' , 'visible');
            $('.carousel-control-next').css('visibility' , 'visible');
        }, 1000)
    });
</script>



