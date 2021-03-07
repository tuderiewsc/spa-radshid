<?php defined( 'ABSPATH' ) or die( 'No script kiddies please!' ); ?>


<?php
$fullUrl = urlencode(get_permalink());
?>

<div class="share_btns">
	<div class="row w-100">
		<ul>
			<li class="title">اشتراک گذاری: </li>
			<li class="icons ln"><a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $fullUrl; ?>" rel="nofollow" target="_blank"><i class="ic-linkedin"></i></a></li>
			<li class="icons wa"><a href="https://wa.me/?text=<?php echo $fullUrl; ?>" rel="nofollow" target="_blank"><i class="ic-whatsapp"></i></a></li>
			<li class="icons tl"><a href="https://telegram.me/share/url?url=<?php echo $fullUrl; ?>" rel="nofollow" target="_blank"><i class="ic-telegram"></i></a></li>
			<li class="icons tw"><a href="https://twitter.com/share?url=<?php echo $fullUrl; ?>" rel="nofollow" target="_blank"><i class="ic-twitter"></i></a></li>
			<li class="icons fb"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $fullUrl; ?>" rel="nofollow" target="_blank"><i class="ic-facebook"></i></a></li>
		</ul>
	</div>
</div>