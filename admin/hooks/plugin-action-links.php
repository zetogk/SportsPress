<?php
function sportspress_plugin_action_links( $links ) { 
  $settings_link = '<a href="options-general.php?page=sportspress">' . __( 'Settings', 'sportspress' ) . '</a>';
  $themes_link = '<a href="http://themeboy.com/themes/?ref=sportspress" target="_blank">' . __( 'Themes', 'sportspress' ) . '</a>';

  array_unshift( $links, $settings_link, $themes_link );

  return $links;
}
 
$plugin = SPORTSPRESS_PLUGIN_BASENAME; 
add_filter( "plugin_action_links_$plugin", 'sportspress_plugin_action_links' );