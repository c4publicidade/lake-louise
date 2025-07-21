<?php

/////////////////// POST TYPE Projetos ///////////////////

// Register Custom Post Type

function custom_post_type() {



	$labels = array(

		'name'                  => _x( 'Arquivos', 'Post Type General Name', 'text_domain' ),

		'singular_name'         => _x( 'Arquivos', 'Post Type Singular Name', 'text_domain' ),

		'menu_name'             => __( 'Arquivos', 'text_domain' ),

		'name_admin_bar'        => __( 'Arquivos', 'text_domain' ),

		'archives'              => __( 'Item Archives', 'text_domain' ),

		'attributes'            => __( 'Item Attributes', 'text_domain' ),

		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),

		'all_items'             => __( 'Todos', 'text_domain' ),

		'add_new_item'          => __( 'Novo', 'text_domain' ),

		'add_new'               => __( 'Novo', 'text_domain' ),

		'new_item'              => __( 'New Item', 'text_domain' ),

		'edit_item'             => __( 'Edit Item', 'text_domain' ),

		'update_item'           => __( 'Update Item', 'text_domain' ),

		'view_item'             => __( 'View Item', 'text_domain' ),

		'view_items'            => __( 'View Items', 'text_domain' ),

		'search_items'          => __( 'Search Item', 'text_domain' ),

		'not_found'             => __( 'Not found', 'text_domain' ),

		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),

		'featured_image'        => __( 'Featured Image', 'text_domain' ),

		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),

		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),

		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),

		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),

		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),

		'items_list'            => __( 'Items list', 'text_domain' ),

		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),

		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),

	);

	$args = array(

		'label'                 => __( 'Post Type', 'text_domain' ),

		'description'           => __( 'Post Type Description', 'text_domain' ),

		'labels'                => $labels,

		'supports'              => array('title',),

		'hierarchical'          => true,

		'public'                => true,

		'show_ui'               => true,

		'show_in_menu'          => true,

		'menu_position'         => 5,

		'show_in_admin_bar'     => true,

		'show_in_nav_menus'     => true,

		'can_export'            => true,

		'has_archive'           => true,

		'exclude_from_search'   => false,

		'publicly_queryable'    => true,

		'capability_type'       => 'page',

	);

	register_post_type( 'arquivo', $args );



}

add_action( 'init', 'custom_post_type', 0 );

/////////////////// POST TYPE Projetos ///////////////////

add_action( 'cmb2_admin_init', 'post_type_sites_infos' );

function post_type_sites_infos() {

// CBM2 padrão documentos

	$cmb = new_cmb2_box( array(

		'id'            => 'projeto_gerais',

		'title'         => 'Documentos, fotos e textos',

		'object_types'  => array( 'arquivo' ), // Post type

		// 'show_on_cb' => 'yourprefix_show_if_front_page', // function should return a bool value

		// 'context'    => 'normal',

		// 'priority'   => 'high',

		// 'show_names' => true, // Show field names on the left

		// 'cmb_styles' => false, // false to disable the CMB stylesheet

		'closed'     => false, // true to keep the metabox closed by default

		// 'classes'    => 'extra-class', // Extra cmb2-wrap classes

		// 'classes_cb' => 'yourprefix_add_some_classes', // Add classes through a callback.

	) );

    $cmb->add_field( array(

        'name'    => 'Capa do case',

        'desc'    => 'Insira a capa do seu case',

        'id'      => 'capa_post',

        'type'    => 'file',

        // Optional:

        'options' => array(

            'url' => true, // Hide the text input for the url

        ),

        'text'    => array(

            'add_upload_file_text' => 'Adicionar capa ao case' // Change upload button text. Default: "Add or Upload File"

        ),

        // query_args are passed to wp.media's library query.

        'query_args' => array(

            // Or only allow gif, jpg, or png images

            'type' => array(

            	'image/gif',

            	'image/jpg',

            	'image/png',

            ),

        ),

        'preview_size' => 'medium', // Image size to use when previewing in the admin.

    ) );

    $group_field_id = $cmb->add_field( array(

        'id'          => 'grupo_posts',

        'type'        => 'group',

        'description' => __( 'Generates reusable form entries', 'cmb2' ),

        // 'repeatable'  => false, // use false if you want non-repeatable group

        'options'     => array(

            'group_title'       => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number

            'add_button'        => __( 'Add Another Entry', 'cmb2' ),

            'remove_button'     => __( 'Remove Entry', 'cmb2' ),

            'sortable'          => true,

            // 'closed'         => true, // true to have the groups closed by default

            'remove_confirm' => esc_html__( 'Se você remover esse grupo, os dados neles serão perdidos, você tem certeza disso ?', 'cmb2' ), // Performs confirmation before removing group.

        ),

    ) );

    $cmb->add_group_field( $group_field_id, array(

        'name' => 'Titulo ou qualquer outra palavra',

        'id'   => 'titulo_grupo_posts',

        'type' => 'text',

        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)

    ) );

    $cmb->add_group_field( $group_field_id, array(

        'name'    => 'Texto do case',

        'desc'    => 'Insira aqui o texto que deseja exibir no case',

        'id'      => 'text_case',

        'type'    => 'wysiwyg',

        'options' => array(),

    ) );

    $cmb->add_group_field( $group_field_id, array(

        'name' => 'URL',

        'desc' => 'Cole aqui alguma url',

        'id' => 'link_url',

        'type' => 'text_url',

        // 'protocols' => array( 'http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet' ), // Array of allowed protocols

    ) );

    $cmb->add_group_field( $group_field_id, array(

        'name' => 'Galeria',

        'desc' => 'Insira aqui fotos',

        'id'   => 'lista_galeria',

        'type' => 'file_list',

        'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )

        // 'query_args' => array( 'type' => 'image' ), // Only images attachment

        // Optional, override default text strings

        'text' => array(

            'add_upload_files_text' => 'Adicionar', // default: "Add or Upload Files"

            'remove_image_text' => 'Remover', // default: "Remove Image"

            'file_text' => 'Replacement', // default: "File:"

            'file_download_text' => 'Download', // default: "Download"

            'remove_text' => 'Remover texto', // default: "Remove"

        ),

    ) );



}

//adiciona thumbnaio ao post

add_action('cmb2_admin_init', 'cmb2_add_thumbnail_field');



function cmb2_add_thumbnail_field() {

    // Crie um novo box de metadados

    $cmb = new_cmb2_box(array(

        'id'            => 'imagem_principal', // ID do metabox

        'title'         => 'Thumbnail do arquivo', // Título

        'object_types'  => array('arquivo'), // Substitua pelo seu post type

        'context'       => 'side', // Mostra na lateral

        'priority'      => 'low', // Baixa prioridade, como o campo padrão de thumbnail

        'show_names'    => false, // Mostra o nome do campo

    ));



    // Adiciona um campo de imagem (thumbnail)

    $cmb->add_field(array(

        'name'    => 'Thumbnail',

        'desc'    => 'Carregue ou selecione uma imagem para usar como thumbnail.',

        'id'      => 'thumbnail_arquivo', // Certifique-se de usar um ID único

        'type'    => 'file', // Tipo de campo "file" para selecionar a imagem

        'options' => array(

            'url' => true, // Esconder o campo de URL

        ),



    ));

}

//// Criando categoria para proejtos



add_action( 'init', 'custom_taxonomy_arquivo', 0 );

function custom_taxonomy_arquivo() { 

  $labels = array(

    'name' => 'Categoria',

    'singular_name' => 'Categoria',

    'search_items' => 'Buscar arquivo',

    'all_items' => 'Todas as categorias',

    'edit_item' => 'Editar categoria', 

    'update_item' => 'Atualizar categoria',

    'add_new_item' => 'Adicionar categoria',

    'new_item_name' => 'Nova categoria',

    'menu_name' => 'Categorias',

  );    

 

// Now register the taxonomy

  register_taxonomy('categorias',array('arquivo'), array(

    'hierarchical' => true,

    'labels' => $labels,

    'show_ui' => true,

    'show_admin_column' => true,

    'query_var' => true,

    'rewrite' => array(

        'slug' => 'categorias', // This controls the base slug that will display before each term

        'with_front' => true, // Don't display the category base before "/locations/"

        'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"

      ),

  ));

}







//criar destaques => checkbox no painel admin para adicionar posts em um carrossel de destaques

// Registrar a taxonomia 'destaques' para o post type 'arquivo'

add_action( 'init', 'custom_taxonomy_projeto', 0 );

function custom_taxonomy_projeto() { 

    $labels = array(

        'name' => 'Destaques',

        'singular_name' => 'Destaque',

        'search_items' => 'Buscar Destaques',

        'all_items' => 'Todos os Destaques',

        'edit_item' => 'Editar Destaque',

        'update_item' => 'Atualizar Destaque',

        'add_new_item' => 'Adicionar Novo Destaque',

        'new_item_name' => 'Novo Destaque',

        'menu_name' => 'Destaques',

    );



    register_taxonomy('destaques', array('arquivo'), array(  // Alterado para 'arquivo'

        'hierarchical' => false,

        'labels' => $labels,

        'show_ui' => true,

        'show_admin_column' => false,

        'query_var' => true,

        'rewrite' => array('slug' => 'destaques'),

    ));

}



// Adicionar a coluna "Destaques" com checkbox na listagem de posts

add_filter( 'manage_arquivo_posts_columns', 'add_destaques_checkbox_column' );

function add_destaques_checkbox_column( $columns ) {

    $columns['destaques_checkbox'] = __( 'Destaques', 'text_domain' );

    return $columns;

}



// Preencher a coluna com checkboxes para cada post

add_action( 'manage_arquivo_posts_custom_column', 'populate_destaques_checkbox_column', 10, 2 );

function populate_destaques_checkbox_column( $column, $post_id ) {

    if ( 'destaques_checkbox' === $column ) {

        $is_destaque = has_term( 'Destaques', 'destaques', $post_id );

        $checked = $is_destaque ? 'checked' : '';

        echo '<input type="checkbox" class="destaques-checkbox" data-post-id="' . $post_id . '" ' . $checked . '>';

    }

}



// Adicionar o script AJAX para atualizar os checkboxes de "Destaques"

add_action( 'admin_footer', 'destaques_checkbox_script' );

function destaques_checkbox_script() {

    ?>

    <script type="text/javascript">

        jQuery(document).ready(function($) {

            $('.destaques-checkbox').on('change', function() {

                var post_id = $(this).data('post-id');

                var is_checked = $(this).is(':checked');

                var nonce = '<?php echo wp_create_nonce( 'destaques_nonce' ); ?>'; // nonce para segurança



                $.ajax({

                    url: ajaxurl,

                    type: 'POST',

                    data: {

                        action: 'toggle_destaques',

                        post_id: post_id,

                        is_checked: is_checked,

                        nonce: nonce // Passando o nonce

                    },

                    success: function(response) {

                        if (response.success) {

                            location.reload();

                        } else {

                            console.log(response.data);

                        }

                    },

                    error: function(xhr, status, error) {

                        console.log('Erro: ' + error);

                    }

                });

            });

        });

    </script>

    <?php

}



// Função AJAX para alternar o termo "Destaques"

add_action( 'wp_ajax_toggle_destaques', 'toggle_destaques' );

function toggle_destaques() {

    check_ajax_referer( 'destaques_nonce', 'nonce' ); // Verificação de segurança



    if ( isset( $_POST['post_id'] ) && isset( $_POST['is_checked'] ) ) {

        $post_id = intval( $_POST['post_id'] );

        $is_checked = filter_var( $_POST['is_checked'], FILTER_VALIDATE_BOOLEAN );



        if ( $is_checked ) {

            $term_exists = term_exists( 'Destaques', 'destaques' );

            if ( ! $term_exists ) {

                wp_insert_term( 'Destaques', 'destaques' );

            }

            $result = wp_set_post_terms( $post_id, array( 'Destaques' ), 'destaques' );

        } else {

            $result = wp_remove_object_terms( $post_id, 'Destaques', 'destaques' );

        }



        if ( is_wp_error( $result ) ) {

            wp_send_json_error( 'Erro ao atualizar destaque: ' . $result->get_error_message() );

        } else {

            wp_send_json_success( 'Destaque atualizado com sucesso.' );

        }

    }



    wp_send_json_error( 'Dados insuficientes para atualizar o destaque.' );

}











//nova taxonomia



add_action( 'init', 'custom_taxonomy_nome', 0 );

function custom_taxonomy_nome() { 

  $labels = array(

    'name' => 'Nomes',

    'singular_name' => 'Nomes',

    'search_items' => 'Buscar nomes',

    'all_items' => 'Todas as nomes',

    'edit_item' => 'Editar nomes', 

    'update_item' => 'Atualizar nomes',

    'add_new_item' => 'Adicionar nomes',

    'new_item_name' => 'Nova nomes',

    'menu_name' => 'Nomes',

  );    

 

// Now register the taxonomy

  register_taxonomy('nomes',array('arquivo'), array(

    'hierarchical' => true,

    'labels' => $labels,

    'show_ui' => true,

    'show_admin_column' => true,

    'query_var' => true,

    'rewrite' => array(

        'slug' => 'nomes',

        'with_front' => true,

        'hierarchical' => true

      ),

  ));

}
?>