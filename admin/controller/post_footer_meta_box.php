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
class ds_at_post_footer_meta_box
{

    public function main()
    {

        add_action("admin_init", "ds_at_post_footer_custom_metabox");
        function ds_at_post_footer_custom_metabox()
        {
            add_meta_box("custom_metabox_ds_at_post_footer", "Footer text", "ds_at_post_footer_custom_metabox_field", "post", "normal", "low");
        }
        function ds_at_post_footer_custom_metabox_field()
        {

?>
            <textarea id="ds_at_post_footer" name="ds_at_post_footer" cols="30" style="width:100%" rows="10"> <?php echo get_post_meta(get_the_ID(), 'ds_at_post_footer', true) ?></textarea>

<?php
        }
        add_action('save_post', 'ds_at_post_footer_save_post_meta_box', 10, 1);


        function ds_at_post_footer_save_post_meta_box($post_id)
        {
            // die("test is " . $_POST['ds_at_post_footer']);

            if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
            if ($parent_id = wp_is_post_revision($post_id)) {
                $post_id = $parent_id;
            }
            $fields = [
                'ds_at_post_footer',
            ];
            foreach ($fields as $field) {
                if (array_key_exists($field, $_POST)) {
                    update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
                }
            }
        }
    }
}
