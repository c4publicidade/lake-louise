<?php

function meu_plugin_adicionar_menu() {
    add_menu_page(
        'Configurações do Tema', // Título da página
        'Configurações do Tema', // Título do menu
        'manage_options', // Permissão
        'configuracoes-do-site', // Slug
        'meu_plugin_pagina_de_configuracoes', // Função para mostrar o conteúdo
        'dashicons-admin-generic', // Ícone
        5 // Posição
    );
}
add_action('admin_menu', 'meu_plugin_adicionar_menu');

// Carregar os scripts necessários
function meu_plugin_carregar_scripts() {
    wp_enqueue_media();
}
add_action('admin_enqueue_scripts', 'meu_plugin_carregar_scripts');

// Função para exibir a página de configurações
function meu_plugin_pagina_de_configuracoes() {
    ?>
    <div class="wrap">
        <h1>Configurações do Site</h1>

        <!-- Abas -->
        <h2 class="nav-tab-wrapper">
            <a href="#geral" class="nav-tab nav-tab-active">Geral</a>
            <a href="#redes-sociais" class="nav-tab">Redes Sociais</a>
            <a href="#outras-configuracoes" class="nav-tab">Outras Configurações</a>
        </h2>

        <form method="post" action="options.php">
            <?php
            settings_fields('configuracoes_do_site');
            do_settings_sections('configuracoes-do-site');
            ?>

            <!-- Conteúdo da aba Geral -->
            <div id="geral" class="tab-content">
                <table class="form-table">
                    <tr valign="top">
                        <th scope="row">Logo do Site</th>
                        <td>
                            <?php
                            // Campo de upload de logo
                            $logo_url = get_option('logo_url');
                            ?>
                            <input type="text" name="logo_url" value="<?php echo esc_attr($logo_url); ?>" id="logo_url" />
                            <button class="upload_image_button button">Upload da Logo</button>
                            <p>Faça o upload da logo do site ou insira a URL diretamente.</p>
                        </td>
                    </tr>

                    <tr valign="top">
                        <th scope="row">Número do WhatsApp</th>
                        <td>
                            <input id="whatsapp_number" type="text" name="whatsapp_number" value="<?php echo esc_attr(get_option('whatsapp_number')); ?>" />
                            <p>Insira o número de WhatsApp com o código do país (ex: +5511999999999).</p>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Texto do whatsapp</th>
                        <td>
                            <input id="whatsapp_text" type="text" name="whatsapp_text" value="<?php echo esc_attr(get_option('whatsapp_text')); ?>" />
                            <p>Insira o texto de WhatsApp (ex: Oi, visitei o site e gostaria de mais informações sobre o *Nome do site*).</p>
                        </td>
                    </tr>
                </table>
            </div>

            <!-- Conteúdo da aba Redes Sociais -->
            <div id="redes-sociais" class="tab-content" style="display:none;">
                <table class="form-table">
                    <tr valign="top">
                        <th scope="row">Facebook</th>
                        <td>
                            <input type="text" name="facebook_url" value="<?php echo esc_attr(get_option('facebook_url')); ?>" />
                            <p>Insira a URL do Facebook.</p>
                        </td>
                    </tr>

                    <tr valign="top">
                        <th scope="row">Instagram</th>
                        <td>
                            <input type="text" name="instagram_url" value="<?php echo esc_attr(get_option('instagram_url')); ?>" />
                            <p>Insira a URL do Instagram.</p>
                        </td>
                    </tr>
                </table>
            </div>

            <!-- Conteúdo da aba Outras Configurações -->
            <div id="outras-configuracoes" class="tab-content" style="display:none;">
                <table class="form-table">
                    <tr valign="top">
                        <th scope="row">Cor de Fundo</th>
                        <td>
                            <input type="color" name="background_color" value="<?php echo esc_attr(get_option('background_color')); ?>" />
                            <p>Escolha a cor de fundo do site.</p>
                        </td>
                    </tr>
                </table>
            </div>

            <?php submit_button(); ?>
        </form>
    </div>

    <!-- Script para alternar entre abas -->
    <script>

        document.addEventListener('DOMContentLoaded', function() {
            const telefoneInput = document.querySelector("input#whatsapp_number"); // Seleciona o input com a classe wpcf7-tel
            telefoneInput.addEventListener('input', handlePhone); // Adiciona o listener de input para chamar a função handlePhone
        });

        const handlePhone = (event) => {
            let input = event.target;
            input.value = phoneMask(input.value);
        }

        const phoneMask = (value) => {
            if (!value) return "";
            value = value.replace(/\D/g, '');
            value = value.replace(/(\d{2})(\d)/, "($1) $2");
            value = value.replace(/(\d)(\d{4})$/, "$1-$2");
            return value;
        }



        jQuery(document).ready(function($) {
            $('.nav-tab-wrapper a').click(function(e) {
                e.preventDefault();
                $('.nav-tab-wrapper a').removeClass('nav-tab-active');
                $(this).addClass('nav-tab-active');
                $('.tab-content').hide();
                $($(this).attr('href')).show();
            });

            // Mostrar a aba ativa ao carregar a página
            $('.nav-tab-wrapper a.nav-tab-active').click();

            // Abre a janela de upload de imagem
            var mediaUploader;
            $('.upload_image_button').click(function(e) {
                e.preventDefault();

                // Se o uploader já foi criado, apenas abre ele
                if (mediaUploader) {
                    mediaUploader.open();
                    return;
                }

                // Cria o uploader
                mediaUploader = wp.media.frames.file_frame = wp.media({
                    title: 'Escolher Logo',
                    button: {
                        text: 'Escolher Logo'
                    },
                    multiple: false // Apenas uma imagem
                });

                // Quando uma imagem é escolhida, coloca a URL no campo de texto
                mediaUploader.on('select', function() {
                    var attachment = mediaUploader.state().get('selection').first().toJSON();
                    $('#logo_url').val(attachment.url);
                });

                mediaUploader.open();
            });
        });
    </script>
    <?php
}

// Função para registrar as configurações
function meu_plugin_registrar_configuracoes() {
    register_setting('configuracoes_do_site', 'logo_url');
    register_setting('configuracoes_do_site', 'whatsapp_number');
    register_setting('configuracoes_do_site', 'whatsapp_text');
    register_setting('configuracoes_do_site', 'facebook_url');
    register_setting('configuracoes_do_site', 'instagram_url');
    register_setting('configuracoes_do_site', 'background_color');
}
add_action('admin_init', 'meu_plugin_registrar_configuracoes');
?>
