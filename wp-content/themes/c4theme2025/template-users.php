<?php

/*
Template Name: users
*/
?>

<?php
// Verificar se o usuário atual é um administrador
if (current_user_can('administrator')) {
    // Conteúdo exclusivo para administradores
    get_header();
    // Get the title of the current page
    $page_title = get_the_title();
?>

<!-- lista os usuários cadastrados e suas informações -->
    <section class="lista_usuarios">
        <article class="container">
            <h1 class="sub-title verde center-align"><?php echo esc_html($page_title); ?></h2>
            <!-- Display the page title -->
        </article>

        <article>

            <!-- Add a button for Excel download -->
            <form method="post" action="<?php echo admin_url('admin-post.php'); ?>">
                <input type="hidden" name="action" value="download_users_excel">
                <input class="btn-large" type="submit" value="Download lista">
            </form>
        </article>

        <?php

        echo '<article class="container">';
        $users = get_users(); // Retrieve all users
        $users_table = '<table border="1">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Login</th>
                                <th>Email</th>
                                <th>Date Created</th>
                                <th>Permission</th>
                                <th>Status</th>
                            </tr>';

        $counter = 1; // Inicializa o contador
        foreach ($users as $user) {
            $user_meta = get_user_meta($user->ID);
            $user_data = get_userdata($user->ID);
            $users_table .= '<tr>
                                <td>' . $counter . '</td>
                                <td>' . $user_meta['first_name'][0] . '</td>
                                <td>' . $user_data->user_login . '</td>
                                <td>' . $user_data->user_email . '</td>
                                <td>' . $user_data->user_registered . '</td>
                                <td>' . implode(', ', $user_data->roles) . '</td>
                                <td>' . ($user_data->user_status == 0 ? 'Active' : 'Inactive') . '</td>
                            </tr>';
            $counter++; // Incrementa o contador
        }

        $users_table .= '</table>';

        echo $users_table;
        echo '</article>';
        echo '</section>';
        get_footer();
        ?>
        <?php
        } else {
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