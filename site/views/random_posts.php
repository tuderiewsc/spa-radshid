<?php defined( 'ABSPATH' ) or die( 'No script kiddies please!' ); ?>


<div class="container-fluid">
	<?php
	$args1 = array(
		'numberposts' => 10,
		'offset' => 0,
		'category' => get_option('RADtools_random_posts_cat' , ''), // put 0 for all cats
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
		'suppress_filters' => false );
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


		<div class="card-deck">
            <h3 class="card-deck-title" data-hover="65" id="articles"><?php echo __('Articles' , 'radshid_lan')?></h3>
            <div class="card" >
				<a href="<?php echo get_the_permalink( $ids1[$random_ids1[0]], false ); ?>" target="_blank">
					<figure class="card-img-top">
						<?php echo get_the_post_thumbnail( $ids1[$random_ids1[0]], '' , '' ); ?>
					</figure>
				</a>
				<div class="card-body">
					<a href="<?php echo get_the_permalink( $ids1[$random_ids1[0]], false ); ?>" target="_blank">
						<h5 class="card-title"><?php echo get_the_title( $ids1[$random_ids1[0]] ); ?></h5>
					</a>
					<?php $postContent = str_replace('"' , '' , wp_trim_words(get_post($ids1[$random_ids1[0]])->post_excerpt , 30)) ?>
                    <p class="card-text"><?php echo $postContent; ?></p>
                </div>
			</div>
			<div class="card" >
				<a href="<?php echo get_the_permalink( $ids1[$random_ids1[1]], false ); ?>" target="_blank">
					<figure class="card-img-top">
						<?php echo get_the_post_thumbnail( $ids1[$random_ids1[1]], '' , '' ); ?>
					</figure>
				</a>
				<div class="card-body">
					<a href="<?php echo get_the_permalink( $ids1[$random_ids1[1]], false ); ?>" target="_blank">
						<h5 class="card-title"><?php echo get_the_title( $ids1[$random_ids1[1]] ); ?></h5>
					</a>
					<?php $postContent = str_replace('"' , '' , wp_trim_words(get_post($ids1[$random_ids1[1]])->post_excerpt , 30)) ?>
                    <p class="card-text"><?php echo $postContent; ?></p>
                </div>
			</div>
			<div class="card" >
				<a href="<?php echo get_the_permalink( $ids1[$random_ids1[2]], false ); ?>" target="_blank">
					<figure class="card-img-top">
						<?php echo get_the_post_thumbnail( $ids1[$random_ids1[2]], '' , '' ); ?>
					</figure>
				</a>
				<div class="card-body">
					<a href="<?php echo get_the_permalink( $ids1[$random_ids1[2]], false ); ?>" target="_blank">
						<h5 class="card-title"><?php echo get_the_title( $ids1[$random_ids1[2]] ); ?></h5>
					</a>
					<?php $postContent = str_replace('"' , '' , wp_trim_words(get_post($ids1[$random_ids1[2]])->post_excerpt , 30)) ?>
					<p class="card-text"><?php echo $postContent; ?></p>
				</div>
			</div>
		</div>

</div>