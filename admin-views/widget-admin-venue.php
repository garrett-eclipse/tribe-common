<?php
/**
* Widget admin for the related events widget.
*/

// Don't load directly
if ( !defined('ABSPATH') ) { die('-1'); }
?>
<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:','tribe-events-calendar-pro'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr(strip_tags($instance['title'])); ?>" /></p>
<p><label for="<?php echo $this->get_field_id( 'count' ); ?>"><?php _e('Venue:','tribe-events-calendar-pro');?>
<select class="chosen" id="<?php echo $this->get_field_id('venue_ID'); ?>" name="<?php echo $this->get_field_name('venue_ID'); ?>" value="<?php echo $instance['venue_ID']; ?>" >
<?php 
foreach ($venues as $venue )
	{ ?>
	<option value="<?php echo $venue->ID; ?>" <?php if ( $venue->ID == $instance['venue_ID'] ) {echo 'selected="selected"';}?> > <?php echo tribe_get_venue($venue->ID); ?> </option>
<?php } ?>
</select>
</p>
<p><label for="<?php echo $this->get_field_id( 'count' ); ?>"><?php _e('Number of events to show:','tribe-events-calendar-pro');?>
<select class="widefat" id="<?php echo $this->get_field_id('count'); ?>" name="<?php echo $this->get_field_name('count'); ?>" value="<?php echo $instance['count']; ?>" >
<?php for ($i=1; $i<=10; $i++)
	{ ?>
	<option <?php if ( $i == $instance['count'] ) {echo 'selected="selected"';}?> > <?php echo $i;?> </option>
<?php } ?>
</select>
</p>
<p><label for="<?php echo $this->get_field_id('show_if_empty'); ?>"><?php _e('Show if no events?','tribe-events-calendar-pro'); ?></label>
<input class="checkbox" type="checkbox" value="1" <?php checked( $instance['show_if_empty'], true ); ?> id="<?php echo $this->get_field_id( 'show_if_empty' ); ?>" name="<?php echo $this->get_field_name('show_if_empty'); ?>" />
</p>
<?php
?>