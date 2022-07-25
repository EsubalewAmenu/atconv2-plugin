<?php

/**
 * The admin-facing functionality of the plugin.
 *
 * @link       https://github.com/Abenezerkb
 * @since      1.0.0
 *
 * @package    MP_general
 * @subpackage MP_general/admin
 */

/**
 * The admin-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-facing stylesheet and JavaScript.
 *
 * @package    MP_general
 * @subpackage MP_general/admin
 * @author     Esubalew Amenu <esubalew.a2009@gmail.com>
 */
class Mp_gl_design_type_meta_box
{

	public function main()
	{

		add_action("admin_init", "mp_gl_design_type_custom_metabox");
		function mp_gl_design_type_custom_metabox()
		{
			add_meta_box("custom_metabox_mp_gl_design_type", "Design type", "mp_gl_design_type_custom_metabox_field", "post", "normal", "low");
		}
		function mp_gl_design_type_custom_metabox_field()
		{
			$design_type_post = get_post_meta(get_the_ID(), 'design_type_post', true);

?>
			<input type="radio" id="hero_design_type_post" name="design_type_post" value="hero" <?php if ($design_type_post == 'hero') echo 'checked="checked"' ?>>
			<label for="hero_design_type_post">Choose Hero type </label><br>

			<input type="radio" id="footer_design_type_post" name="design_type_post" value="footer" <?php if ($design_type_post == 'footer') echo 'checked="checked"' ?>>
			<label for="footer_design_type_post">Choose Footer type </label><br>
<?php
		}
		add_action('save_post', 'mp_gl_design_type_save_post_meta_box', 10, 1);


		function mp_gl_design_type_save_post_meta_box($post_id)
		{
			if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
			if ($parent_id = wp_is_post_revision($post_id)) {
				$post_id = $parent_id;
			}

			if (isset($_POST['design_type_post'])) {
				// update_option('design_type_post', get_the_ID());
				update_post_meta(get_the_ID(), 'design_type_post', $_POST['design_type_post']);
			}
		}
	}
}
