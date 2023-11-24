
<h2><?php _e( "WCABE Settings", "woocommerce-advbulkedit" ); ?></h2>

<a href="<?php echo admin_url( 'edit.php?post_type=product&page=advanced_bulk_edit' ); ?>"><?php _e( "< back to WCABE", "woocommerce-advbulkedit" ); ?></a>

<?php
if (!wcabe_is_current_user_admin()) {
?>
	<p><?php _e( "Only admins can access this page.", "woocommerce-advbulkedit" ); ?></p>
<?php
	return;
}

$settings = get_option('w3exabe_settings');
$wcabe_license_key = $settings['license_key'] ?? '';
?>

<div class="wrap">
	<form method="post" action="<?php echo admin_url( 'edit.php' ); ?>">
		<table class="form-table">
			<tr>
				<th scope="row"><label for="wcabe_license_key"><?php _e( "License Key (Purchase Code)", "woocommerce-advbulkedit" ); ?></label></th>
				<td>
					<input type="text" id="wcabe_license_key" name="wcabe_license_key" value="<?php echo $wcabe_license_key; ?>" class="regular-text" />
				</td>
			</tr>
		</table>
		<input type="submit" name="wcabe-submit-settings" id="wcabe-submit-settings" class="button button-primary" value="Save">
	</form>
</div>
