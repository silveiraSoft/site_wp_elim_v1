<?php
/**
 * Month View Nav Template
 * This file loads the month view navigation.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/month/nav.php
 *
 * @package TribeEventsCalendar
 * @since  3.0
 * @author Modern Tribe Inc.
 *
 */

if ( !defined('ABSPATH') ) { die('-1'); } ?>

<?php do_action( 'tribe_events_before_nav' ) ?>

<h3 class="tribe-events-visuallyhidden"><?php esc_html_e( 'Calendar Month Navigation', 'tribe-events-calendar' ) ?></h3>

<div class="wp-pagenavi">
	<div class="tribe-events-sub-nav">
		<ul>
			<li class="tribe-events-nav-previous">
				<?php tribe_events_the_previous_month_link(); ?>
			</li><!-- .tribe-events-nav-previous -->
			<li class="tribe-events-nav-next">
				<?php tribe_events_the_next_month_link(); ?>
			</li><!-- .tribe-events-nav-next -->
		</ul><!-- .tribe-events-sub-nav -->
	</div>
</div>

<?php do_action( 'tribe_events_after_nav' ) ?>