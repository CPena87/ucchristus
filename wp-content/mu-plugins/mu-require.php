<?php
/**
 * Plugin Name: MU plugins subdirectory loader
 * Description: AutoLoader de MU-Plugins
 * Version: 1.0
 */

$wp_mu_loader = WPMU_PLUGIN_DIR . '/mu-loader/mu-loader.php';

if (is_file($wp_mu_loader)) {
    require_once $wp_mu_loader;
} else {
    add_action('admin_notices', function() use ($wp_mu_loader) {
        ?>
        <div class="error">
            <p><code><?php echo substr($wp_mu_loader, strlen(ABSPATH)) ?></code> is missing. Consider running <code>composer install</code>.</p>
        </div>
        <?php
    });
}

unset($wp_mu_loader);
