<?php
/*
Template Name: login1
*/
get_header();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $creds = array(
        'user_login'    => $_POST['user_login'],
        'user_password' => $_POST['user_pass'],
        'remember'      => isset($_POST['rememberme']) ? $_POST['rememberme'] : false,
    );
    $user = wp_signon($creds, false);
    if (is_wp_error($user)) {
        echo '<div class="error-message">Nome de usuário ou senha incorretos.</div>';
    } else {
        ?>
        <script type="text/javascript">
            window.location.href = '<?php echo home_url('/perfil-de-usuario/'); ?>';
        </script>
        <?php
    }
}

if (!is_user_logged_in()) {
    ?>
    <section class="forms">
        <article class="container">
            <h1 class="title">Entrar na área do corretor</h1>

            <form id="login-form" class="custom-login-form" action="<?php echo wp_login_url(); ?>" method="post">
                <p class="form-row">
                    <input type="text" name="log" id="user_login" class="input" value="<?php echo esc_attr($user_login); ?>" />
                </p>
                <p class="form-row">
                    <input type="password" name="pwd" id="user_pass" class="input" />
                </p>
                <p class="form-row">
                    <label for="rememberme">Lembrar-me</label>
                </p>
                <p class="form-row">
                    <input type="submit" name="wp-submit" id="wp-submit" class="button" value="Entrar" />
                    <input type="hidden" name="redirect_to" value="<?php echo esc_url($redirect_to); ?>" />
                </p>
            </form>
            <p>
                <a href="<?php echo wp_lostpassword_url(); ?>">Esqueceu sua senha?</a> |
                <a href="<?php echo wp_registration_url(); ?>">Registrar-se</a>
            </p>
        </article>
    </section>
    <?php
}



get_footer(); // Incluir o rodapé do tema

?>