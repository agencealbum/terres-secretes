<?php
/**
 * HTML for Designer tab.
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
	
	<?php if (! is_plugin_active('wp-terms-popup-pro/index.php') && ! is_plugin_active('wp-terms-popup-designer/index.php')) : ?>
	<div id="col-container">
		<div id="col-right">
			<div class="col-wrap">
				<div class="inside">
					<h1><?php _e('Get More Control with WP Terms Popup Designer', $this->plugin_name); ?></h1>
					
					<p>
					<?php _e('Purchase the WP Terms Popup Designer plugin and adjust these parts of your popups without writing any code:', $this->plugin_name); ?>
					</p>
					
					<ul>
						<li><?php _e('Header Background Color', $this->plugin_name); ?></li>
						<li><?php _e('Header Text Color', $this->plugin_name); ?></li>
						<li><?php _e('Header Text Alignment', $this->plugin_name); ?></li>
						<li><?php _e('Main Background Color', $this->plugin_name); ?></li>
						<li><?php _e('Main Text Color', $this->plugin_name); ?></li>
						<li><?php _e('Button Background Color', $this->plugin_name); ?></li>
						<li><?php _e('Button Text Color', $this->plugin_name); ?></li>
						<li><?php _e('... and more.', $this->plugin_name); ?></li>
					</ul>
					
					<p>
					<?php _e('WP Terms Popup Designer integrates directly into the free plugin. After purchase and installation, this tab will be replaced with the Designer plugin.', $this->plugin_name); ?>
					</p>
					
					<p>
					<a class="wptp-button" target="_blank" href="https://termsplugin.com/designer">Learn About WP Terms Popup Designer</a>
					</p>
				</div>
			</div>
		</div>

		<div id="col-left">
			<div class="col-wrap">
				<div class="inside">
					<img src="<?php echo plugins_url('/img/designer.png', dirname(__FILE__)); ?>">
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
	
    <?php
        if (is_plugin_active('wp-terms-popup-designer/index.php')) {
            wptp_designer_settings();
        }

        if (is_plugin_active('wp-terms-popup-pro/index.php') && ! is_plugin_active('wp-terms-popup-designer/index.php')) {
            wtp_popupProSettingsPage();
        }
    ?>

    <?php include 'wp-terms-popup-admin-footer.php'; ?>
</div>