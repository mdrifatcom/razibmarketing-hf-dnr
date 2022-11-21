<?php /* Template Name: Dining Page */ ?>
<?php get_header(); ?>



<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<section class="m_section">
		<div class="wrapper clearfix">

			<div class="content-interior span_12 col">
				<div class="entry entry-center">

					<?php the_content(); ?>

				</div>
				</div>
		</div>

	</section>


	<?php if(get_field('tabbed_section')): ?>
	<section class="class="m_section"">
			<div class="wrapper clearfix fullwidth-wrapper alternate-bg">
		<div id="tabs">
			<ul class="tabs content-sections-tabs">

			<div class="tab-content-wrapper">
				<div class="tab-bottom-images">
				<div class="tb-left"></div>
				<div class="tb-right"></div>
				</div>
				<?php while(has_sub_field('tabbed_section')): ?>



				<div class="tab-image" id="<?php the_sub_field('tab_id'); ?>-image" style="background-image:url(<?php the_sub_field('image'); ?>)" ></div>


		<?php endwhile; ?>
		<?php endif; ?>


		<?php if(get_field('tabbed_section')): ?>
			<div class="tab-content">

				<div class="tab-content-interior"><br />
			<h2><?php the_field('callout_block_title'); ?></h2>
			<ul class="tabs-nav">
				<?php while(has_sub_field('tabbed_section')): ?>

					<li style="display:inline-block;padding: 10px 5px;"><a><?php the_sub_field('tab_title'); ?></a></li>

				<?php endwhile; ?>
			</ul>
		<?php endif; ?>




		<?php if(get_field('tabbed_section')): ?>

				<?php while(has_sub_field('tabbed_section')): ?>
				<div id="<?php the_sub_field('tab_id'); ?>" class="tabbed_section">

						<div class="tabbed_content">


							<?php the_sub_field('content'); ?>

						</div>
					<div class="clearfix"></div>
				</div>


			<?php endwhile; ?>
			</div>
			</div>
			</div>
			</ul>
		</div>
			</div>
	</section>

		<?php endif; ?>




		<section class="slider-container">
		<div class="dinning-slider first">
			<div id="slider">
				<a class="control_next">></a>
				<a class="control_prev"><</a>
				<ul>
					 <?php if( get_field('slider_images') ): ?>
							<?php while( the_repeater_field('slider_images') ): ?>
									<li style="background: url(<?php the_sub_field('slide_image'); ?>); background-repeat: no-repeat;
	background-size: cover; background-position: center center;"> </li>
							<?php endwhile; ?>
					 <?php endif; ?>

				</ul>
				<div class="dine-desc">
					<h4><?php the_field('slider_heading'); ?></h4>
					<div class="desc-btns">
					<a class="first-learn">Learn More</a>
					<a href="https://hotelfauchere.com/restaurants/the-delmonico-room/" class="first-link">Go to Page</a>
				</div>
				</div>
			</div>


		<div class="dine-details dine-details1">
			<p><?php the_field('slider_details'); ?></p>
		</div>

		</div>

		<div class="dinning-slider">
			<div id="slider2">
				<a class="control_next">></a>
				<a class="control_prev"><</a>
				<ul>
					<?php if( get_field('slider_images_second') ): ?>
						<?php while( the_repeater_field('slider_images_second') ): ?>
							<li style="background: url(<?php the_sub_field('slide_image_second'); ?>); background-repeat: no-repeat;
background-size: cover; background-position: center center;"> </li>
						<?php endwhile; ?>
				 <?php endif; ?>
				</ul>
				<div class="dine-desc">
					<h4><?php the_field('slider_heading_second'); ?></h4>
<div class="desc-btns">
					<a class="second-learn">Learn More</a>
						<a href="https://hotelfauchere.com/restaurants/bar-louis-2-2/" class="second-link">Go to Page</a>
				</div></div>
			</div>

			<div class="dine-details dine-details2">
				<p><?php the_field('slider_details_second'); ?></p>
			</div>
			</div>

		<div class="dinning-slider">
			<div id="slider3">
				<a class="control_next">></a>
				<a class="control_prev"><</a>
				<ul>
					<?php if( get_field('slider_images_third') ): ?>
						<?php while( the_repeater_field('slider_images_third') ): ?>
							<li style="background: url(<?php the_sub_field('slide_image_third'); ?>); background-repeat: no-repeat;
background-size: cover; background-position: center center;"> </li>
						<?php endwhile; ?>
				 <?php endif; ?>
				</ul>
				<div class="dine-desc">
					<h4><?php the_field('slider_heading_third'); ?></h4>
					<div class="desc-btns">
					<a class="third-learn">Learn More</a>
						<a href="https://hotelfauchere.com/restaurants/bar-louis-on-the-porch-2/" class="third-link">Go to Page</a>
				</div></div>
			</div>

			<div class="dine-details dine-details3">
				<p><?php the_field('slider_details_third'); ?></p>
			</div>
			</div>
		</section>



				<?php if( get_field('review') ): ?>
					<section role="content">
					<div class="wrapper clearfix fullwidth-wrapper">
						<div class="review-wrapper">
						<div class="quote"><?php the_field('review'); ?></div>
						<div class="stars">

							<?php if(get_field('stars') == "five") { ?>
								<emphasize class="icon-star"></emphasize>
								<emphasize class="icon-star"></emphasize>
								<emphasize class="icon-star"></emphasize>
								<emphasize class="icon-star"></emphasize>
								<emphasize class="icon-star"></emphasize>
							<?php } ?>
							<?php if(get_field('stars') == "four") { ?>
								<emphasize class="icon-star"></emphasize>
								<emphasize class="icon-star"></emphasize>
								<emphasize class="icon-star"></emphasize>
								<emphasize class="icon-star"></emphasize>
							<?php } ?>
							<?php if(get_field('stars') == "three") { ?>
								<emphasize class="icon-star"></emphasize>
								<emphasize class="icon-star"></emphasize>
								<emphasize class="icon-star"></emphasize>
							<?php }


							else { ?>



							<?php } ?>





						</div>
						<div class="reviewer-name"><?php the_field('reviewer_name'); ?></div>
						<div class="read-more-reviews">Read more reviews <a href="https://www.tripadvisor.com/Hotel_Review-g53188-d622204-Reviews-Hotel_Fauchere-Milford_Pocono_Mountains_Region_Pennsylvania.html" target="_blank"><emphasize class="icon-tripadvisor"></emphasize><span style="display:none">Read more reviews</span></a></div>
						</div>
					</div>
					</section>
				<?php endif; ?>



					<?php if( get_field('relative_page_links') ): ?>
		<section class="class="m_section"">
			<div class="wrapper clearfix fullwidth-wrapper relative-links-footer">
							<?php while(has_sub_field('relative_page_links')): ?>


								<a href="<?php the_sub_field('link'); ?>" class="hvr-trim">

								<div class="image-callout" style="background-image:url('<?php the_sub_field("image"); ?>'); ">
									<div class="callout-title">
									<div class="callout-wrapper">

										<h2><?php the_sub_field('title'); ?></h2>
									</div>
									</div>
								</div>
								</a>

							<?php endwhile; ?>
							<div class="clearfix"></div>
							</div>
		</section>

						<?php endif; ?>



	<?php endwhile; ?>



  <style>
	.fullwidth-wrapper.alternate-bg {position: relative;}
.tab-bottom-images {width: 50%; height: 330px; position: absolute; bottom: 0px;}
.tab-bottom-images .tb-left {width: 50%; float: left; background: #000; height: 100%; background: url(http://hotelfauchere.com/wp-content/uploads/2021/03/louis-bar1.jpg); background-size: cover;}
.tab-bottom-images .tb-right {width: 50%; float: left; background: #ccc; height: 100%; background: url(http://hotelfauchere.com/wp-content/uploads/2021/03/porch-1b.jpg); background-size: cover;}

  .slider-container {width: 90%; margin: 40px auto; margin-top: 0px; max-width: 1200px; padding-top: 110px; padding-bottom: 60px;}
  .dinning-slider {width: 100%; float: left; position: relative; margin-bottom: 20px;}
  .dinning-slider.detail-visible {margin-bottom: 0px;}
  .dine-slider {position: relative;}
  .dine-desc {position: absolute; z-index: 99; padding: 30px 0px; bottom: 0px; width: 100%; background: rgba(164, 138, 120, 0.9); padding-left: 30px; color: #fff;}
  .dine-desc h4 {color: #fff; font-size: 1.3em; padding-top: 12px; margin-bottom: 0px; float: left; width: 50%;}
  .dine-desc a {color: #fff; text-decoration: none; padding: 10px 40px; border: 1px solid #fff; cursor: pointer; text-transform: uppercase;}
	.dine-desc a:nth-child(2) {margin-left: 20px; margin-right: 30px;}
  .dine-desc a:hover {background: #fff; color:#a48a78;}
  .dinning-slider li img {  position: absolute; left: 0px;}
  .dine-details {width: 100%; clear: both; display: none; background: #ede8e4; padding: 0px 70px;}
  .dine-details.detail-show {display: block;}
  .dine-details p {padding-top: 70px; padding-bottom: 70px;}
.desc-btns {display: flex; justify-content: flex-end;}
.review-wrapper {padding: 60px 0px;}
  #slider, #slider2, #slider3 {
    position: relative;
    overflow: hidden;
    border-radius: 20px;
    max-width: 100%;
  }
.detail-visible #slider, .detail-visible #slider2, .detail-visible #slider3 {border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;}
  #slider ul, #slider2 ul, #slider3 ul {

    margin: 0;
    padding: 0;
    width: 100%;
    list-style: none;
  }

  #slider ul li, #slider2 ul li, #slider3 ul li {

    display: block;
    margin: 0;
    padding: 0;
    width: 100%;
    height: 600px;
    background: #ccc;
    text-align: center;
    line-height: 300px;
		position: absolute;
		right: 0px;
  }

  a.control_prev, a.control_next {
    position: absolute;
    top: 40%;
    z-index: 999;
    display: block;
    padding: 3% 2%;
    width: auto;
    height: auto;
    background: #a48a78;
    color: #fff;
    text-decoration: none;
    font-weight: 600;
    font-size: 21px;
    opacity: 0.8;
    cursor: pointer;
  }

  a.control_prev:hover, a.control_next:hover {
    opacity: 1;
    -webkit-transition: all 0.2s ease;
  }

  a.control_prev {
    border-radius: 0 2px 2px 0;
  }

  a.control_next {
    right: 0;
    border-radius: 2px 0 0 2px;
  }
  .content-interior {margin-bottom: 0px!important;}
@media screen and (max-width: 1024px) and (min-width: 781px) {
	.tab-image {width: 50%;}
	.tab-bottom-images {right: 0; bottom: 0; height: 800px;}
	.tab-bottom-images .tb-left, .tab-bottom-images .tb-right {width: 100%; height: 50%; float: none;}
}
	@media screen and (max-width: 780px) {
	.dine-desc h4 {width: 50%; font-size: 1.2em; }
	.dine-desc a {color: #fff; text-decoration: none; padding: 10px 20px;}
	.tab-bottom-images {display: none;}
		}
		@media screen and (max-width: 480px) {
			.dine-desc{padding-left: 0px; padding: 20px 0px;}
		.dine-desc h4 {width: 100%; font-size: 0.9em; padding-top: 0px; text-align: center;}
		.dine-desc a {color: #fff; text-decoration: none; padding: 5px 15px; font-size: 0.8em;}
		.desc-btns {clear: both; padding-top: 15px; padding-left: 30px; justify-content: center;}
		#slider ul li, #slider2 ul li, #slider3 ul li {height: 400px;}
.dine-details {padding: 0px 20px;}
.dine-details p {padding-tpo: 40px; padding-bottom: 40px;}
			}
  </style>

  <script>
  jQuery(document).ready(function ($) {

		setInterval(function () {
				moveRight();
			}, 6500);

				 setInterval(function () {
					 moveRight2();
				 }, 6800);

							setInterval(function () {
										 moveRight3();
									 }, 7100);


										 var slideCount = $('#slider ul li').length;
										 var slideWidth = $('#slider ul li').width();
										 var slideHeight = $('#slider ul li').height();
										 var sliderUlWidth = slideCount * slideWidth;
										 var slideCount2 = $('#slider2 ul li').length;
										 var slideWidth2 = $('#slider2 ul li').width();
										 var slideHeight2 = $('#slider2 ul li').height();
										 var sliderUlWidth2 = slideCount2 * slideWidth2;

										 var slideCount3 = $('#slider3 ul li').length;
										 var slideWidth3 = $('#slider3 ul li').width();
										 var slideHeight3 = $('#slider3 ul li').height();
										 var sliderUlWidth3 = slideCount3 * slideWidth3;

										 $('#slider').css({ width: slideWidth, height: slideHeight });

										 $('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });

											 $('#slider ul li:last-child').prependTo('#slider ul');

											 $('#slider2').css({ width: slideWidth2, height: slideHeight2 });

											 $('#slider2 ul').css({ width: sliderUlWidth2, marginLeft: - slideWidth2 });

												 $('#slider2 ul li:last-child').prependTo('#slider2 ul');

												 $('#slider3').css({ width: slideWidth3, height: slideHeight3 });

												 $('#slider3 ul').css({ width: sliderUlWidth3, marginLeft: - slideWidth3 });

													 $('#slider3 ul li:last-child').prependTo('#slider3 ul');






			function moveLeft() {
					$('#slider ul').animate({
							left: + slideWidth
					}, 200, function () {
							$('#slider ul li:last-child').prependTo('#slider ul');
							$('#slider ul').css('left', '');
					});
			};

			function moveRight() {
					$('#slider ul').animate({
							left: - slideWidth
					}, 200, function () {
							$('#slider ul li:first-child').appendTo('#slider ul');
							$('#slider ul').css('left', '');
					});
			};

			function moveLeft2() {
					$('#slider2 ul').animate({
							left: + slideWidth2
					}, 200, function () {
							$('#slider2 ul li:last-child').prependTo('#slider2 ul');
							$('#slider2 ul').css('left', '');
					});
			};

			function moveRight2() {
					$('#slider2 ul').animate({
							left: - slideWidth2
					}, 200, function () {
							$('#slider2 ul li:first-child').appendTo('#slider2 ul');
							$('#slider2 ul').css('left', '');
					});
			};

			function moveLeft3() {
					$('#slider3 ul').animate({
							left: + slideWidth3
					}, 200, function () {
							$('#slider3 ul li:last-child').prependTo('#slider3 ul');
							$('#slider3 ul').css('left', '');
					});
			};

			function moveRight3() {
					$('#slider3 ul').animate({
							left: - slideWidth
					}, 200, function () {
							$('#slider3 ul li:first-child').appendTo('#slider3 ul');
							$('#slider3 ul').css('left', '');
					});
			};


$( window ).resize(function() {

		setInterval(function () {
	      moveRight();
			}, 6500);

				 setInterval(function () {
					 moveRight2();
				 }, 6800);

							setInterval(function () {
										 moveRight3();
									 }, 7100);


										 var slideCount = $('#slider ul li').length;
									   var slideWidth = $('#slider ul li').width();
									   var slideHeight = $('#slider ul li').height();
									   var sliderUlWidth = slideCount * slideWidth;
									   var slideCount2 = $('#slider2 ul li').length;
									   var slideWidth2 = $('#slider2 ul li').width();
									   var slideHeight2 = $('#slider2 ul li').height();
									   var sliderUlWidth2 = slideCount2 * slideWidth2;

									   var slideCount3 = $('#slider3 ul li').length;
									   var slideWidth3 = $('#slider3 ul li').width();
									   var slideHeight3 = $('#slider3 ul li').height();
									   var sliderUlWidth3 = slideCount3 * slideWidth3;

									   $('#slider').css({ width: slideWidth, height: slideHeight });

									   $('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });

									     $('#slider ul li:last-child').prependTo('#slider ul');

									     $('#slider2').css({ width: slideWidth2, height: slideHeight2 });

									     $('#slider2 ul').css({ width: sliderUlWidth2, marginLeft: - slideWidth2 });

									       $('#slider2 ul li:last-child').prependTo('#slider2 ul');

									       $('#slider3').css({ width: slideWidth3, height: slideHeight3 });

									       $('#slider3 ul').css({ width: sliderUlWidth3, marginLeft: - slideWidth3 });

									         $('#slider3 ul li:last-child').prependTo('#slider3 ul');






      function moveLeft() {
          $('#slider ul').animate({
              left: + slideWidth
          }, 200, function () {
              $('#slider ul li:last-child').prependTo('#slider ul');
              $('#slider ul').css('left', '');
          });
      };

      function moveRight() {
          $('#slider ul').animate({
              left: - slideWidth
          }, 200, function () {
              $('#slider ul li:first-child').appendTo('#slider ul');
              $('#slider ul').css('left', '');
          });
      };

      function moveLeft2() {
          $('#slider2 ul').animate({
              left: + slideWidth2
          }, 200, function () {
              $('#slider2 ul li:last-child').prependTo('#slider2 ul');
              $('#slider2 ul').css('left', '');
          });
      };

      function moveRight2() {
          $('#slider2 ul').animate({
              left: - slideWidth2
          }, 200, function () {
              $('#slider2 ul li:first-child').appendTo('#slider2 ul');
              $('#slider2 ul').css('left', '');
          });
      };

      function moveLeft3() {
          $('#slider3 ul').animate({
              left: + slideWidth3
          }, 200, function () {
              $('#slider3 ul li:last-child').prependTo('#slider3 ul');
              $('#slider3 ul').css('left', '');
          });
      };

      function moveRight3() {
          $('#slider3 ul').animate({
              left: - slideWidth
          }, 200, function () {
              $('#slider3 ul li:first-child').appendTo('#slider3 ul');
              $('#slider3 ul').css('left', '');
          });
      };

	 });


      $('#slider a.control_prev').click(function () {
          moveLeft();
      });

      $('#slider a.control_next').click(function () {
          moveRight();
      });

      $('#slider2 a.control_prev').click(function () {
          moveLeft2();
      });

      $('#slider2 a.control_next').click(function () {
          moveRight2();
      });

      $('#slider3 a.control_prev').click(function () {
          moveLeft3();
      });

      $('#slider3 a.control_next').click(function () {
          moveRight3();
      });

      jQuery('.first-learn').click(function(){
        jQuery('.dine-details1').toggleClass('detail-show');
     	jQuery('.dinning-slider:nth-child(1)').toggleClass('detail-visible');
      });

      jQuery('.second-learn').click(function(){
        jQuery('.dine-details2').toggleClass('detail-show');
				jQuery('.dinning-slider:nth-child(2)').toggleClass('detail-visible');
      });

      jQuery('.third-learn').click(function(){
        jQuery('.dine-details3').toggleClass('detail-show');
				jQuery('.dinning-slider:nth-child(3)').toggleClass('detail-visible');
      });

jQuery('.tabs-nav li:first-child a').click(function(){
	jQuery('#menus').removeClass('menu-hour');
    jQuery('#hours').removeClass('menu-hour');
});

jQuery('.tabs-nav li:nth-child(2) a').click(function(){
	jQuery('#hours').addClass('menu-hour');
    jQuery('#menus').addClass('menu-hour');
});

  });

  </script>


<?php get_footer(); ?>
