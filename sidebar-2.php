<?php
/**
 * The sidebar containing the bottom widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Crooked_Fall_Studios
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="sidebar" class="sidebar sidebar-2">
  <?php 
    dynamic_sidebar( 'sidebar-2' );
  ?>
</aside><!-- .sidebar-2 -->