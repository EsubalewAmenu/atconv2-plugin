<?php foreach ($sections as $section) {

    $design_type_post = get_post_meta($section->ID, 'design_type_post', true);

    if ($design_type_post == 'footer')
        include ds_atconv2_PLAGIN_DIR . '/public/partials/sections/footer.php';
    else
        include ds_atconv2_PLAGIN_DIR . '/public/partials/sections/hero.php';
}
