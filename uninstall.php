<?php
if (!defined('WP_UNINSTALL_PLUGIN')) {
die;
}
require_once plugin_dir_path( __FILE__ ) . 'trustindex-plugin.class.php';
$trustindex_pm_foursquare = new TrustindexPlugin_foursquare("foursquare", __FILE__, "12.4.1", "Widgets for Foursquare Reviews", "Foursquare");
$trustindex_pm_foursquare->uninstall();
?>