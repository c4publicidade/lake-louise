<?php
function banner_post_type() {

	$labels = array(
		'name'                  => _x( 'Banner', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Banner', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Banner', 'text_domain' ),
		'name_admin_bar'        => __( 'Banner', 'text_domain' ),
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
        'menu_icon'           => 'https://bonfimdev.com.br/wp-content/uploads/2024/09/educacao.png',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'banner', $args );

}
add_action( 'init', 'banner_post_type', 0 );
/////////////////// POST TYPE Projetos ///////////////////
add_action( 'cmb2_admin_init', 'post_type_banner' );


function post_type_banner() {
// CBM2 padrão documentos
$cmb = new_cmb2_box( array(
    'id'            => 'infos_banners',
    'title'         => 'Imagens de banner para desktop',
    'object_types'  => array( 'banner' ),
    'closed'        => true,
) );

$cmb->add_field( array(
    'name' => '',
    'id'   => '_banner_fields',
    'type' => 'group',
    'description' => 'Adicione múltiplos banners.',
    'options' => array(
        'group_title'   => 'Banner {#}',
        'add_button'    => 'Adicionar Banner',
        'remove_button' => 'Remover Banner',
        'sortable'      => true,
    ),
    'fields' => array(
        array(
            'name' => 'Titulo h1',
            'id'   => 'titulo_grupo_posts',
            'type' => 'text',
        ),
        array(
            'name' => 'Imagem do Banner desktop',
            'desc' => 'Selecione ou envie a imagem do banner desktop',
            'id'   => 'banner_image',
            'type' => 'file',
            // Opcional: Para restringir o tipo de arquivo a imagens
            'options' => array(
                'url' => false, // Oculta a URL do arquivo
            ),
            'text' => array(
                'add_upload_file_text' => 'Adicionar Imagem' // Texto do botão de upload
            ),
            // Opcional: Para permitir apenas imagens
            'query_args' => array(
                'type' => array(
                    'image/gif',
                    'image/jpeg',
                    'image/png',
                ),
            ),
        ),
        array(
            'name' => 'Imagem do Banner mobile',
            'desc' => 'Selecione ou envie a imagem do banner mobile',
            'id'   => 'img_banner_mob',
            'type' => 'file',
            // Opcional: Para restringir o tipo de arquivo a imagens
            'options' => array(
                'url' => false, // Oculta a URL do arquivo
            ),
            'text' => array(
                'add_upload_file_text' => 'Adicionar Imagem' // Texto do botão de upload
            ),
            // Opcional: Para permitir apenas imagens
            'query_args' => array(
                'type' => array(
                    'image/gif',
                    'image/jpeg',
                    'image/png',
                ),
            ),
        ),
        
    ),
) );


    
}

//// Criando categoria para proejtos

add_action( 'init', 'custom_taxonomy_banner', 0 );
function custom_taxonomy_banner() { 
  $labels = array(
    'name' => 'Tipo',
    'singular_name' => 'Tipo',
    'search_items' => 'Buscar projeto',
    'all_items' => 'Todas as categorias',
    'edit_item' => 'Editar categoria', 
    'update_item' => 'Atualizar categoria',
    'add_new_item' => 'Adicionar categoria',
    'new_item_name' => 'Nova categoria',
    'menu_name' => 'Categorias',
  );    
 
// Now register the taxonomy
  register_taxonomy('categorias',array('banner'), array(
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

function meu_plugin_enviar_dados_para_js() {
    // Ajuste o caminho para o arquivo JS
    $script_url = plugin_dir_url(__FILE__) . '../js/meu-plugin.js';

    // Corrigir o caminho se o arquivo JS não for encontrado diretamente
    $script_url = str_replace('/inc/', '/', $script_url);  // Remover 'inc/' do caminho

    // Enfileirar o script JavaScript
    wp_enqueue_script('meu-plugin-script', $script_url, array('jquery'), null, true);

    // Dados a serem enviados para o JavaScript
    $meus_dados = array(
        'logo_url' => get_option('logo_url'),
        'whatsapp_number' => get_option('whatsapp_number'),
        'ajax_url' => admin_url('admin-ajax.php')
    );

    // Passar os dados para o JS
    wp_localize_script('meu-plugin-script', 'meuPluginDados', $meus_dados);
}
add_action('wp_enqueue_scripts', 'meu_plugin_enviar_dados_para_js');

?>