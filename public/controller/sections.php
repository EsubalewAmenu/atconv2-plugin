<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/EsubalewAmenu
 * @since      1.0.0
 *
 * @package    Ds_sections
 * @subpackage Ds_sections/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Ds_sections
 * @subpackage Ds_sections/admin
 * @author     Esubalew Amenu <esubalew.steps009@gmail.com>
 */
class DS_sections
{

	public function __construct()
	{
	}

	public function ds_sections_hero_code()
	{

        $args = array(
            'post_type'      => 'post',
            'post_status'    => 'publish',
            // 'posts_per_page' => 3,
        );
        $sectionss = get_posts($args);

	include_once ds_atcon_PLAGIN_DIR . '/public/partials/sections/hero.php';
	}

}