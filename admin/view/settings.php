<?php defined( 'ABSPATH' ) or die( 'No script kiddies please!' ); ?>

<div class="wrap">
	<?php settings_errors();?>
	<form method="post" action="options.php">
		<?php
		settings_fields("RADtools_settings_options");
		do_settings_sections("RADtools_settings");
		submit_button();
		?>
	</form>
</div>