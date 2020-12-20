<?php defined('ABSPATH') || exit; ?>


<div class="container-fluid">
	<?php //$random_posts_args = array( 'post_type' => 'post', 'post_status' => 'publish', 'nopaging' => true, 'order' => 'ASC', 'orderby' => 'rand', 'cat' => $Grid_catID, 'cache_results' => true ) ?>
	<?php //$random_post = new WP_Query( $random_posts_args ); ?>
	<?php
	$args1 = array(
		'numberposts' => 25,
		'offset' => 0,
		'category' => [16,322], // put 0 for all cats
		'orderby' => 'post_date',
		'order' => 'DESC',
		'post_type' => 'post',
		'post_status' => 'publish',
		'suppress_filters' => true );
	$recent_posts1 = wp_get_recent_posts($args1);
	$ids1 = [];
	$random_ids1 = [];
	$i = 0;
	while ($i < count($recent_posts1))
	{
		array_push($ids1, $recent_posts1[$i]['ID']);
		$i++;
	}
	$random_ids1 = array_rand($ids1 , 3);

	$args2 = array(
		'numberposts' => 6,
		'offset' => 0,
		'category' => 322, // put 0 for all cats
		'orderby' => 'post_date',
		'order' => 'DESC',
		'post_type' => 'post',
		'post_status' => 'publish',
		'suppress_filters' => true );
	$recent_posts2 = wp_get_recent_posts($args2);
	$ids2 = [];
	$random_ids2 = [];
	$i = 0;
	while ($i < count($recent_posts2))
	{
		array_push($ids2, $recent_posts2[$i]['ID']);
		$i++;
	}
	$random_ids2 = array_rand($ids2 , 3);
	?>

	<?php //if ( $random_post->have_posts() ) : ?>

		<?php //$posts_number = 0; ?>
		<?php //while ( $random_post->have_posts() && $posts_number++ < 6 ) : $random_post->the_post(); ?>
		<?php //endwhile; ?>
		<?php //wp_reset_postdata(); ?>

<!-- 		<div class="grid_container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 rightSide">
					<div style="display: flex;flex-flow: row wrap;justify-content: center;">
						<div class="block big col-lg-6 col-md-6 col-sm-12">
							<figure class="bigImage">
								<?php echo get_the_post_thumbnail( $ids[0], '' , '' ); ?>
							</figure>
							<a href="<?php echo get_the_permalink( $ids[0], false ); ?>" class="post_link" target="_blank">
								<h4 class="post_title"><?php echo get_the_title( $ids[0] ); ?></h4>
							</a>
						</div>
						<div class="block big col-lg-6 col-md-6 col-sm-12">
							<figure class="bigImage">
								<?php echo get_the_post_thumbnail( $ids[1], '' , '' ); ?>
							</figure>
							<a href="<?php echo get_the_permalink( $ids[1], false ); ?>" class="post_link" target="_blank">
								<h4 class="post_title"><?php echo get_the_title( $ids[1] ); ?></h4>
							</a>
						</div>
						<div class="block small col-lg-3 col-md-3 col-sm-12">
							<figure class="smallImage">
								<?php echo get_the_post_thumbnail( $ids[2], array(384,170) , '' ); ?>
							</figure>
							<a href="<?php echo get_the_permalink( $ids[2], false ); ?>" class="post_link" target="_blank">
								<h4 class="post_title"><?php echo get_the_title( $ids[2] ); ?></h4>
							</a>
						</div>
						<div class="block small col-lg-3 col-md-3 col-sm-12">
							<figure class="smallImage">
								<?php echo get_the_post_thumbnail( $ids[3], array(384,170) , '' ); ?>
							</figure>
							<a href="<?php echo get_the_permalink( $ids[3], false ); ?>" class="post_link" target="_blank">
								<h4 class="post_title"><?php echo get_the_title( $ids[3] ); ?></h4>
							</a>
						</div>
						<div class="block small col-lg-3 col-md-3 col-sm-12">
							<figure class="smallImage">
								<?php echo get_the_post_thumbnail( $ids[4], array(384,170) , '' ); ?>
							</figure>
							<a href="<?php echo get_the_permalink( $ids[4], false ); ?>" class="post_link" target="_blank">
								<h4 class="post_title"><?php echo get_the_title( $ids[4] ); ?></h4>
							</a>
						</div>
						<div class="block small col-lg-3 col-md-3 col-sm-12">
							<figure class="smallImage">
								<?php echo get_the_post_thumbnail( $ids[5], array(384,170) , '' ); ?>
							</figure>
							<a href="<?php echo get_the_permalink( $ids[5], false ); ?>" class="post_link" target="_blank">
								<h4 class="post_title"><?php echo get_the_title( $ids[5] ); ?></h4>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	-->

		<div class="card-deck">
            <h3 class="card-deck-title" data-hover="65">مقالات</h3>
<!--            <a href="https://radshid.com/?p=3809" class="more_link">بیشتر</a>-->
            <div class="card wow bounceInRight" data-wow-duration="1s">
				<a href="<?php echo get_the_permalink( $ids1[$random_ids1[0]], false ); ?>" target="_blank">
					<figure class="card-img-top">
						<?php echo get_the_post_thumbnail( $ids1[$random_ids1[0]], '' , '' ); ?>
					</figure>
				</a>
				<div class="card-body">
					<a href="<?php echo get_the_permalink( $ids1[$random_ids1[0]], false ); ?>" target="_blank">
						<h5 class="card-title"><?php echo get_the_title( $ids1[$random_ids1[0]] ); ?></h5>
					</a>
					<?php
					$postContent = wp_trim_words(get_post($ids1[$random_ids1[0]])->post_excerpt)
					?>
				</div>
			</div>
			<div class="card wow zoomIn" data-wow-duration="1s">
				<a href="<?php echo get_the_permalink( $ids1[$random_ids1[1]], false ); ?>" target="_blank">
					<figure class="card-img-top">
						<?php echo get_the_post_thumbnail( $ids1[$random_ids1[1]], '' , '' ); ?>
					</figure>
				</a>
				<div class="card-body">
					<a href="<?php echo get_the_permalink( $ids1[$random_ids1[1]], false ); ?>" target="_blank">
						<h5 class="card-title"><?php echo get_the_title( $ids1[$random_ids1[1]] ); ?></h5>
					</a>
					<?php
					$postContent = wp_trim_words(get_post($ids1[$random_ids1[1]])->post_content)
					?>
				</div>
			</div>
			<div class="card wow bounceInLeft" data-wow-duration="1s">
				<a href="<?php echo get_the_permalink( $ids1[$random_ids1[2]], false ); ?>" target="_blank">
					<figure class="card-img-top">
						<?php echo get_the_post_thumbnail( $ids1[$random_ids1[2]], '' , '' ); ?>
					</figure>
				</a>
				<div class="card-body">
					<a href="<?php echo get_the_permalink( $ids1[$random_ids1[2]], false ); ?>" target="_blank">
						<h5 class="card-title"><?php echo get_the_title( $ids1[$random_ids1[2]] ); ?></h5>
					</a>
					<?php
					$postContent = wp_trim_words(get_post($ids1[$random_ids1[2]])->post_content)
					?>
<!--					<p class="card-text">--><?php //echo $postContent; ?><!--</p>-->
				</div>
			</div>
		</div>


    <?php //else : ?>
<!--		<p class="alert alert-danger text-center my-4 w-100">متاسفانه مطلبي براي نمايش وجود ندارد</p>-->
	<?php //endif; ?>
</div>