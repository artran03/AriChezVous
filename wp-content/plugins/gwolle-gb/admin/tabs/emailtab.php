<?php
/*
 * Settings page for the guestbook
 */

// No direct calls to this script
if ( strpos($_SERVER['PHP_SELF'], basename(__FILE__) )) {
	die('No direct calls allowed!');
}


function gwolle_gb_page_settingstab_email() {

	if ( function_exists('current_user_can') && !current_user_can('manage_options') ) {
		die(__('Cheatin&#8217; uh?', 'gwolle-gb'));
	} ?>

	<input type="hidden" id="gwolle_gb_tab" name="gwolle_gb_tab" value="gwolle_gb_mail" />
	<?php
	settings_fields( 'gwolle_gb_options' );
	do_settings_sections( 'gwolle_gb_options' ); ?>
	<table class="form-table">
		<tbody>

		<tr valign="top">
			<th scope="row"><label for="admin_mail_from"><?php _e('Admin mail from address', 'gwolle-gb'); ?></label></th>
			<td>
				<input type="email" name="admin_mail_from" id="admin_mail_from" class="regular-text" value="<?php echo gwolle_gb_sanitize_output( get_option('gwolle_gb-mail-from', false) ); ?>" placeholder="info@example.com" />
				<br />
				<span class="setting-description">
					<?php
					_e('You can set the email address that is used for the From header of the mail that a notification subscriber gets on new entries.', 'gwolle-gb');
					echo '<br />';
					_e('By default the main admin address is used from General >> Settings.', 'gwolle-gb');
					?>
				</span>
			</td>
		</tr>

		<tr valign="top">
			<th scope="row"><label for="unsubscribe"><?php _e('Unsubscribe moderators', 'gwolle-gb'); ?></label></th>
			<td>
				<?php
				// Check if function mail() exists. If not, display a hint to the user.
				if (!function_exists('mail')) {
					echo '<p class="setting-description">' .
						__('Sorry, but the function <code>mail()</code> required to notify you by mail is not enabled in your PHP configuration. You might want to install a WordPress plugin that uses SMTP instead of <code>mail()</code>. Or you can contact your hosting provider to change this.','gwolle-gb')
						. '</p>';
				} ?>
				<select name="unsubscribe" id="unsubscribe">
					<option value="0"><?php _e('Unsubscribe User', 'gwolle-gb'); ?></option>
					<?php
					$user_ids = get_option('gwolle_gb-notifyByMail' );
					if ( strlen($user_ids) > 0 ) {
						$user_ids = explode( ",", $user_ids );
						if ( is_array($user_ids) && !empty($user_ids) ) {
							foreach ( $user_ids as $user_id ) {

								$user_info = get_userdata($user_id);
								if ($user_info === FALSE) {
									// Invalid $user_id
									continue;
								}
								$username = $user_info->first_name . ' ' . $user_info->last_name . ' (' . $user_info->user_email . ')';
								if ( $user_info->ID == get_current_user_id() ) {
									$username .= ' ' . __('You', 'gwolle-gb');
								}
								echo '<option value="' . $user_id . '">' . $username . '</option>';
							}
						}
					} ?>
				</select><br />
				<label for="unsubscribe"><?php _e('These users have subscribed to the notification emails.', 'gwolle-gb'); ?><br />
				<?php _e('Select a user if you want that user to unsubscribe from the notification emails.', 'gwolle-gb'); ?></label>
			</td>
		</tr>

		<tr valign="top">
			<th scope="row"><label for="subscribe"><?php _e('Subscribe moderators', 'gwolle-gb'); ?></label></th>
			<td>
				<select name="subscribe" id="subscribe">
					<option value="0"><?php _e('Subscribe User', 'gwolle-gb'); ?></option>
					<?php
					$users = gwolle_gb_get_moderators();

					if ( is_array($users) && !empty($users) ) {
						foreach ( $users as $user_info ) {

							// Test if already subscribed
							if ( is_array($user_ids) && !empty($user_ids) ) {
								if ( in_array($user_info->ID, $user_ids) ) {
									continue;
								}
							}

							$username = $user_info->first_name . ' ' . $user_info->last_name . ' (' . $user_info->user_email . ')';
							if ( $user_info->ID == get_current_user_id() ) {
								$username .= ' ' . __('You', 'gwolle-gb');
							}
							echo '<option value="' . $user_info->ID . '">' . $username . '</option>';
						}
					} ?>
				</select><br />
				<label for="subscribe"><?php _e('You can subscribe a moderator to the notification emails.', 'gwolle-gb'); ?><br />
				<?php _e('Select a user that you want subscribed to the notification emails.', 'gwolle-gb'); ?>
				<?php _e("You will only see users with the roles of Administrator, Editor and Author, who have the capability 'moderate_comments' .", 'gwolle-gb'); ?>
				</label>
			</td>
		</tr>

		<tr valign="top">
			<th scope="row"><label for="adminMailContent"><?php _e('Admin mail content', 'gwolle-gb'); ?></label></th>
			<td>
				<?php
				$mailText = gwolle_gb_sanitize_output( get_option('gwolle_gb-adminMailContent', false) );
				if (!$mailText) { // No text set by the user. Use the default text.
					$mailText = __("
Hello,

There is a new guestbook entry at '%blog_name%'.
You can check it at %entry_management_url%.

Have a nice day.
Your Gwolle-GB-Mailer


Website address: %blog_url%
User name: %user_name%
User email: %user_email%
Entry status: %status%
Entry content:
%entry_content%
"
, 'gwolle-gb');
							} ?>
				<textarea name="adminMailContent" id="adminMailContent" style="width:400px;height:300px;" class="regular-text"><?php echo $mailText; ?></textarea>
				<br />
				<span class="setting-description">
					<?php _e('You can set the content of the mail that a notification subscriber gets on new entries. The following tags are supported:', 'gwolle-gb');
					echo '<br />';
					$mailTags = array( 'user_email', 'user_name', 'entry_management_url', 'blog_name', 'blog_url', 'wp_admin_url', 'entry_content', 'status', 'author_ip', 'author_origin' );
					for ($i = 0; $i < count($mailTags); $i++) {
						if ($i != 0) {
							echo ', ';
						}
						echo '%' . $mailTags[$i] . '%';
					}
					echo "."; ?>
				</span>
			</td>
		</tr>

		<tr valign="top">
			<th scope="row"><label for="mail_author"><?php _e('Mail Author', 'gwolle-gb'); ?></label></th>
			<td>
				<input <?php
					if (get_option( 'gwolle_gb-mail_author', 'false') == 'true') {
						echo 'checked="checked"';
					} ?>
					type="checkbox" name="mail_author" id="mail_author">
				<label for="mail_author">
					<?php _e('Mail the author with a confirmation email.', 'gwolle-gb'); ?>
				</label>
				<br />
				<span class="setting-description">
					<?php _e("The author of the guestbook entry will receive an email after posting. It will have a copy of the entry.", 'gwolle-gb'); ?>
				</span>
			</td>
		</tr>

		<tr valign="top">
			<th scope="row"><label for="authorMailContent"><?php _e('Author mail content', 'gwolle-gb'); ?></label></th>
			<td>
				<?php
				$mailText = gwolle_gb_sanitize_output( get_option('gwolle_gb-authorMailContent', false) );
				if (!$mailText) { // No text set by the user. Use the default text.
					$mailText = __("
Hello,

You have just posted a new guestbook entry at '%blog_name%'.

Have a nice day.
The editors at %blog_name%.


Website address: %blog_url%
User name: %user_name%
User email: %user_email%
Entry content:
%entry_content%
"
, 'gwolle-gb');
							} ?>
				<textarea name="authorMailContent" id="authorMailContent" style="width:400px;height:300px;" class="regular-text"><?php echo $mailText; ?></textarea>
				<br />
				<span class="setting-description">
					<?php _e('You can set the content of the mail that the author of the entry will receive. The following tags are supported:', 'gwolle-gb');
					echo '<br />';
					$mailTags = array('user_email', 'user_name', 'blog_name', 'blog_url', 'entry_content');
					for ($i = 0; $i < count($mailTags); $i++) {
						if ($i != 0) {
							echo ', ';
						}
						echo '%' . $mailTags[$i] . '%';
					}
					?>
				</span>
			</td>
		</tr>

		<tr valign="top">
			<th scope="row"><label for="gwolle_gb-mail_admin_replyContent"><?php _e('Admin Reply mail content', 'gwolle-gb'); ?></label></th>
			<td>
				<?php
				$mailText = gwolle_gb_sanitize_output( get_option('gwolle_gb-mail_admin_replyContent', false) );
				if (!$mailText) { // No text set by the user. Use the default text.
					$mailText = __("
Hello,

An admin has just added or changed a reply message to your guestbook entry at '%blog_name%'.

Have a nice day.
The editors at %blog_name%.


Website address: %blog_url%
Admin Reply:
%admin_reply%
"
, 'gwolle-gb');
				} ?>
				<textarea name="gwolle_gb-mail_admin_replyContent" id="gwolle_gb-mail_admin_replyContent" style="width:400px;height:300px;" class="regular-text"><?php echo $mailText; ?></textarea>
				<br />
				<span class="setting-description">
					<?php _e('You can set the content of the mail that the author of the entry will receive when an Admin Reply is added. The following tags are supported:', 'gwolle-gb');
					echo '<br />';
					$mailTags = array('user_email', 'user_name', 'blog_name', 'blog_url', 'admin_reply');
					for ($i = 0; $i < count($mailTags); $i++) {
						if ($i != 0) {
							echo ', ';
						}
						echo '%' . $mailTags[$i] . '%';
					}
					?>
				</span>
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<p class="submit">
					<input type="submit" name="gwolle_gb_settings_email" id="gwolle_gb_settings_email" class="button-primary" value="<?php esc_attr_e('Save settings', 'gwolle-gb'); ?>" />
				</p>
			</td>
		</tr>

		</tbody>
	</table>

	<?php
}


