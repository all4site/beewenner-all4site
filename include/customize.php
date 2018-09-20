<?php
function all4site_customize_register($wp_customize)
{
    require get_template_directory() . '/include/customize/customize-home-page.php';
    require get_template_directory() . '/include/customize/customize-home-page-justdoit.php';
    require get_template_directory() . '/include/customize/customize-home-page-gift.php';
    require get_template_directory() . '/include/customize/customize-home-page-course-one.php';
    require get_template_directory() . '/include/customize/customize-home-page-course-two.php';
    require get_template_directory() . '/include/customize/customize-home-page-course-three.php';
    require get_template_directory() . '/include/customize/customize-footer.php';
    require get_template_directory() . '/include/customize/customize-social.php';
    require get_template_directory() . '/include/customize/customize-logo.php';
    require get_template_directory() . '/include/customize/customize-about-me.php';

// add panels
    $wp_customize->add_panel('home_page', array(
        'priority' => 10,
        'title' => ('HOME'),
    ));
    $wp_customize->add_panel('aboutMe_page', array(
        'priority' => 20,
        'title' => ('ABOUT'),
    ));
    $wp_customize->add_panel('footer_page', array(
        'priority' => 11,
        'title' => ('FOOTER'),
    ));
//remove panels
    $wp_customize->remove_section(custom_css);
    $wp_customize->remove_section(title_tagline);
    $wp_customize->remove_section(static_front_page);
}
