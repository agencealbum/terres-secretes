<?php
/**
 * HTML for Collector tab.
 *
 * @link       https://linksoftwarellc.com
 * @since      2.0.0
 *
 * @package    Wp_Terms_Popup
 * @subpackage Wp_Terms_Popup/admin/partials
 */
?>

<div class="wrap wptp-wrap">
	<h2>WP Terms Popup</h2>
	
	<h2 class="nav-tab-wrapper">
        <?php do_action('wptp_settings_tabs'); ?>
	</h2>
	
	<?php if (! is_plugin_active('wp-terms-popup-collector/index.php')) : ?>
	<div id="col-container">
		<div id="col-right">
			<div class="col-wrap">
				<div class="inside">
					<h1><?php _e('Gather Information with WP Terms Popup Collector', $this->plugin_name); ?></h1>
					
					<p>
					<?php _e('Purchase the WP Terms Popup Collector plugin and gather details about the visitors accepting your popups.', $this->plugin_name); ?>
					</p>

					<p>
					<?php _e('Track views and conversions and collect the following pieces of useful information for each agreeing visitor:', $this->plugin_name); ?>
					</p>
					
					<ul>
						<li><?php _e('Agreement Date', $this->plugin_name); ?></li>
						<li><?php _e('IP Address', $this->plugin_name); ?></li>
						<li><?php _e('User Agent/Browser Details', $this->plugin_name); ?></li>
						<li><?php _e('Page the Popup was Seen', $this->plugin_name); ?></li>
						<li><?php _e('WordPress Username (if applicable)', $this->plugin_name); ?></li>
						<li><?php _e('Agreement Expiration Date', $this->plugin_name); ?></li>
					</ul>
					
					<p>
					<?php _e('You can search through your conversion results, copy them to your clipboard and export the data to a CSV file with the click of a button.', $this->plugin_name); ?>
					</p>
					
					<p>
					<?php _e('WP Terms Popup Collector integrates directly into the free plugin. After purchase and installation, this tab will be replaced with the Collector plugin.', $this->plugin_name); ?>
					</p>
					
					<p>
					<a class="wptp-button" target="_blank" href="https://termsplugin.com/collector">Learn About WP Terms Popup Collector</a>
					</p>
				</div>
			</div>
		</div>

		<div id="col-left">
			<div class="col-wrap">
				<div class="inside">
					<img src="<?php echo plugins_url('/img/collector.png', dirname(__FILE__)); ?>">
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
	
	<?php if (is_plugin_active('wp-terms-popup-collector/index.php')) {
    wptp_collector_settings();
} ?>

    <?php include 'wp-terms-popup-admin-footer.php'; ?>
</div>