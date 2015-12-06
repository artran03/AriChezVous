<?php
/*
 * Settings page for the guestbook
 */

// No direct calls to this script
if ( strpos($_SERVER['PHP_SELF'], basename(__FILE__) )) {
	die('No direct calls allowed!');
}


function gwolle_gb_page_settingstab_admin() {

	if ( function_exists('current_user_can') && !current_user_can('manage_options') ) {
		die(__('Cheatin&#8217; uh?', 'gwolle-gb'));
	} ?>

	<input type="hidden" id="gwolle_gb_tab" name="gwolle_gb_tab" value="gwolle_gb_admin" />
	<?php
	settings_fields( 'gwolle_gb_options' );
	do_settings_sections( 'gwolle_gb_options' ); ?>
	<table class="form-table">
		<tbody>

		<tr valign="top">
			<th scope="row"><label for="entries_per_page"><?php _e('Entries per page in the admin', 'gwolle-gb'); ?></label></th>
			<td>
				<select name="entries_per_page" id="entries_per_page">
					<?php $entries_per_page = get_option( 'gwolle_gb-entries_per_page', 20 );
					$presets = array(5, 10, 15, 20, 25, 30, 40, 50, 60, 70, 80, 90, 100, 120, 150, 200, 250);
					for ($i = 0; $i < count($presets); $i++) {
						echo '<option value="' . $presets[$i] . '"';
						if ($presets[$i] == $entries_per_page) {
							echo ' selected="selected"';
						}
						echo '>' . $presets[$i] . ' ' . __('Entries', 'gwolle-gb') . '</option>';
					}
					?>
				</select>
				<br />
				<span class="setting-description"><?php _e('Number of entries shown in the admin.', 'gwolle-gb'); ?></span>
			</td>
		</tr>

		<tr valign="top">
			<th scope="row"><label for="showEntryIcons"><?php _e('Entry icons', 'gwolle-gb'); ?></label></th>
			<td>
				<input type="checkbox" <?php
					if ( get_option( 'gwolle_gb-showEntryIcons', 'true' ) === 'true' ) {
						echo 'checked="checked"';
					}
					?> name="showEntryIcons" id="showEntryIcons" /><label for="showEntryIcons"><?php _e('Show entry icons', 'gwolle-gb'); ?></label>
				<br />
				<span class="setting-description"><?php _e('These icons are shown in every entry row of the admin list, so that you know its status (checked, spam and trash).', 'gwolle-gb'); ?></span>
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<p class="submit">
					<input type="submit" name="gwolle_gb_settings_admin" id="gwolle_gb_settings_admin" class="button-primary" value="<?php esc_attr_e('Save settings', 'gwolle-gb'); ?>" />
				</p>
			</td>
		</tr>

		</tbody>
	</table>

	<?php
}

