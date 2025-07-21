<?php
/*
Template Name: Profile
*/
?>

<?php
// Verificar se o usuário atual é um administrador
if (is_user_logged_in()) {
    get_header();
    $page_title = get_the_title();

    $current_user = wp_get_current_user(); //Obtem os dados//referencia: https://bruno.art.br/wordpress/6-maneiras-de-obter-o-id-do-usuario-no-wordpress/
    $current_user_id = $current_user->ID; //Obterm o ID
    $the_user = get_userdata( $current_user_id);
    $foto = get_avatar($the_user->ID);
    echo $foto;
    echo $the_user->user_login.'<br>';
    echo $the_user->user_email;
    ?> 
    <br>
    <a href="<?php echo wp_logout_url(home_url()); ?>">Logout</a>
<?php
get_footer();
?>
<?php
} elseif(!current_user_can('administrator')) {
?>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #319B41;
            color: #333;
            text-align: center;
            padding: 50px;
        }
        .maintenance-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .maintenance-container img {
            border-radius: 20px;
        }
        h1 {
            color: #319B41;
        }
    </style>
    </head>
    <body>
        <div class="maintenance-container">
            <img loading="lazy" src="" alt="" />
            <h1>Conteúdo disponível apenas para administradores!</h1>
            <p>Apenas usuários autorizados têm acesso a este conteúdo.</p>
        </div>
    </body>
<?php
}
?>

