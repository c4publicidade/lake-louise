<?php
// Options page

// Primeira galeria

add_action( 'cmb2_admin_init', 'yourprefix_register_theme_options_metabox' );

function yourprefix_register_theme_options_metabox() {

    $cmb = new_cmb2_box( array(

        'id'           => 'grupo_entradas',
        'title'        => esc_html__( 'Banner', 'cmb2' ),
        'object_types' => array( 'options-page' ),
        'option_key'      => 'grupo_entradas_options', // The option key and admin menu page slug.
        'icon_url' => get_template_directory_uri() . '/img/icon_desktop.png', // Menu icon. Only applicable if 'parent_slug' is left empty.
        // 'menu_title'      => esc_html__( 'Options', 'cmb2' ), // Falls back to 'title' (above).
        // 'parent_slug'     => 'themes.php', // Make options page a submenu item of the themes menu.
        // 'capability'      => 'manage_options', // Cap required to view options-page.
        'position'        => 1, // Menu position. Only applicable if 'parent_slug' is left empty.
        // 'admin_menu_hook' => 'network_admin_menu', // 'network_admin_menu' to add network-level options page.
        // 'display_cb'      => false, // Override the options-page form output (CMB2_Hookup::options_page_output()).
        // 'save_button'     => esc_html__( 'Save Theme Options', 'cmb2' ), // The text for the options-page save button. Defaults to 'Save'.
        // 'disable_settings_errors' => true, // On settings pages (not options-general.php sub-pages), allows disabling.
        // 'message_cb'      => 'yourprefix_options_page_message_callback',
    ) );
	$cmb->add_field( array(
        'name'    => 'Capa do case',
        'desc'    => 'Insira a capa do seu case',
        'id'      => 'banner',
        'type'    => 'file_list',
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
				'image/webp',
            ),
        ),
        'preview_size' => 'medium', // Image size to use when previewing in the admin.
    ) );

}


// Primeira galeria mobile
add_action( 'cmb2_admin_init', 'yourprefix_register_theme_options_metabox_mob' );
function yourprefix_register_theme_options_metabox_mob() {
    $cmb = new_cmb2_box( array(
        'id'           => 'grupo_entradas_mob',
        'title'        => esc_html__( 'Banner_mob', 'cmb2' ),
        'object_types' => array( 'options-page' ),
        'option_key'      => 'grupo_entradas_options_mob', // The option key and admin menu page slug.
        'icon_url' => get_template_directory_uri() . '/img/icon_phone.png', // Menu icon. Only applicable if 'parent_slug' is left empty.
        // 'menu_title'      => esc_html__( 'Options', 'cmb2' ), // Falls back to 'title' (above).
        // 'parent_slug'     => 'themes.php', // Make options page a submenu item of the themes menu.
        // 'capability'      => 'manage_options', // Cap required to view options-page.
        'position'        => 1, // Menu position. Only applicable if 'parent_slug' is left empty.
        // 'admin_menu_hook' => 'network_admin_menu', // 'network_admin_menu' to add network-level options page.
        // 'display_cb'      => false, // Override the options-page form output (CMB2_Hookup::options_page_output()).
        // 'save_button'     => esc_html__( 'Save Theme Options', 'cmb2' ), // The text for the options-page save button. Defaults to 'Save'.
        // 'disable_settings_errors' => true, // On settings pages (not options-general.php sub-pages), allows disabling.
        // 'message_cb'      => 'yourprefix_options_page_message_callback',
    ) );

	$cmb->add_field( array(
        'name'    => 'Capa do case',
        'desc'    => 'Insira a capa do seu case',
        'id'      => 'banner_mob',
        'type'    => 'file_list',
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
				'image/webp',
            ),
        ),
        'preview_size' => 'medium', // Image size to use when previewing in the admin.
    ) );
}

/* ####################### INICIO CMB2 ####################### */

///////////// ############### AVISO IMPORTANTE ############### /////////////
/* Essas linhas abaixo sao necessárias para puxar os arquivos para fazer os campos funcionarem corretamente e iniciar o CMB2 */ 
if (file_exists(dirname(__FILE__) . '/cmb2/init.php')) {
	require_once dirname(__FILE__) . '/cmb2/init.php';
} elseif (file_exists(dirname(__FILE__) . '/CMB2/init.php')) {
	require_once dirname(__FILE__) . '/CMB2/init.php';
}
// FIM AVISO


add_action('cmb2_admin_init', 'obras_custom_option_page');
function obras_custom_option_page() {

	####################### INICIO 1º MODULO #######################
	$args = array(
		'id'           => 'obras_page', // Deve ser unico
		'title'        => 'Módulo 1',
		'object_types' => array('options-page'), // Onde os campos serão adicionados (No caso não é nem pra uma página nem post, é para uma nova aba no admin)
		'option_key'   => 'obras', // Deve ser unico
		'tab_group'    => 'obras', // Deve ser unico (em comparação com os outros)
		'tab_title'    => 'Módulo 1',
		'icon_url'        => 'dashicons-buddicons-buddypress-logo', // Menu icon. Only applicable if 'parent_slug' is left empty.
		'menu_title'      => 'Obras', // Falls back to 'title' (above).
		// 'parent_slug'     => 'themes.php', // Make options page a submenu item of the themes menu.
		// 'capability'      => 'manage_options', // Cap required to view options-page.
		'position'        => 2, // Menu position. Only applicable if 'parent_slug' is left empty.
	);

	// 'tab_group' property is supported in > 2.4.0.
	if (version_compare(CMB2_VERSION, '2.4.0')) {
		$args['display_cb'] = 'obras_options_display_with_tabs';
	}

	////////////// INICIA CAMPOS MODULO #1 //////////////

	// Cria uma variavel para criar um novo grupo de campos para um destino específico, e essa variavel puxa o $args acima...
	$modulo_1_options = new_cmb2_box($args);

	// Para então adicionar os novos campos linkando nele ($modulo_1_options)
	$modulo_1_options->add_field(array(
		'name'    => 'Descrição',
		'id'      => 'geral_obras_desc', // Deve ser unico
		'type'    => 'wysiwyg',
		'options' => array(
			'wpautop' => true,
			'media_buttons' => false,
			'textarea_rows' => get_option('default_post_edit_rows', 5),
		),
	));

	// Novo Campo
	$modulo_1_options->add_field(array(
		'name'    => 'Porcentagem',
		'id'      => 'geral_obras_porcentagem', // Deve ser unico
		'desc'	  => 'Ex: Utilize um @ para separar o nome da porcentagem. Ex: Fundação@20%, Infraestrutura@67%',
		'type'    => 'text',
		'classes'  => 'divisor-tab',
		'repeatable'  => true,
		'text' => array(
			'add_row_text' => 'Adicionar porcentagem',
		),
		'attributes' => array(
			'placeholder' => 'Terraplanagem@94%',
		),
	));


	// Novo Campo (Grupo de repetição)
	$group_field_id_modulo_1 = $modulo_1_options->add_field(array(
		'id'          => 'geral_obras_data_fotos', // Deve ser unico
		'type'        => 'group',
		'classes' => 'divisor-tab',
		'desc'	=> 'Adicione uma nova data e selecione as fotos para exibição no site',
		// 'repeatable'  => false, // use false if you want non-repeatable group
		'options'     => array(
			'group_title'       => __('Data #{#}', 'cmb2'), // since version 1.1.4, {#} gets replaced by row number
			'add_button'        => __('Adicionar nova data', 'cmb2'),
			'remove_button'     => __('Remover data', 'cmb2'),
			'sortable'          => true,
			'closed'         => true, // true to have the groups closed by default
			// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	));

	// Novo Campo
	$modulo_1_options->add_group_field($group_field_id_modulo_1, array(
		'name' => 'Data',
		'id'   => 'geral_obras_data', // Deve ser unico
		'type' => 'text_date',
		'date_format' => 'd-m-Y'
	));

	// Novo Campo
	$modulo_1_options->add_group_field($group_field_id_modulo_1, array(
		'name' => 'Fotos',
		'id'   => 'geral_obras_fotos',
		'type' => 'file_list',
		'preview_size' => array(100, 100), 
		'query_args' => array('type' => 'image'), 
		'text' => array(
			'add_upload_files_text' => 'Adicionar imagens',
			'remove_image_text' => 'Remover imagem',
			'file_text' => 'Imagem',
			'file_download_text' => 'Baixar',
			'remove_text' => 'Remover imagem',
		)
	));
	####################### FIM 1º MODULO #######################

	####################### INICIO 2º MODULO #######################
	$args = array(
		'id'           => 'obras_segundo_page', // Deve ser unico
		'title'        => 'Módulo 2',
		'menu_title'   => 'Módulo 2',
		'object_types' => array('options-page'), // Onde os campos serão adicionados (No caso não é nem pra uma página nem post, é para uma nova aba no admin)
		'option_key'   => 'obras_modulo_2',
		'parent_slug'  => 'obras',
		'tab_group'    => 'obras',
		'tab_title'    => 'Módulo 2',
	);

	if (version_compare(CMB2_VERSION, '2.4.0')) {
		$args['display_cb'] = 'obras_options_display_with_tabs';
	}

	////////////// INICIA CAMPOS MODULO #2 //////////////
	/* Segue o mesmo modelo de cima... */

	$modulo_2_options = new_cmb2_box($args);

	$modulo_2_options->add_field(array(
		'name'    => 'Descrição',
		'id'      => 'geral_obras_desc',
		'type'    => 'wysiwyg',
		'options' => array(
			'wpautop' => true, 
			'media_buttons' => false, 
			'textarea_rows' => get_option('default_post_edit_rows', 5),
		),
	));

	$modulo_2_options->add_field(array(
		'name'    => 'Porcentagem',
		'id'      => 'geral_obras_porcentagem',
		'desc'	  => 'Ex: Utilize um @ para separar o nome da porcentagem. Ex: Fundação@20%, Infraestrutura@67%',
		'type'    => 'text',
		'repeatable'  => true,
		'classes_cb' => 'divisor_tab',
		'text' => array(
			'add_row_text' => 'Adicionar porcentagem',
		),
		'attributes' => array(
			'placeholder' => 'Terraplanagem@94%',
		),
	));

	$group_field_id_modulo_2 = $modulo_2_options->add_field(array(
		'id'          => 'geral_obras_data_fotos_2',
		'type'        => 'group',
		'classes' => 'divisor-tab',
		'desc'	=> 'Adicione uma nova data e selecione as fotos para exibição no site',
		'options'     => array(
			'group_title'       => __('Data #{#}', 'cmb2'),
			'add_button'        => __('Adicionar nova data', 'cmb2'),
			'remove_button'     => __('Remover data', 'cmb2'),
			'sortable'          => true,
			'closed'         => true,
		),
		'classes_cb' => 'divisor_tab',
	));

	$modulo_2_options->add_group_field($group_field_id_modulo_2, array(
		'name' => 'Data',
		'id'   => 'geral_obras_data_2',
		'type' => 'text_date',
		// 'date_format' => 'l jS \of F Y',
	));

	$modulo_2_options->add_group_field($group_field_id_modulo_2, array(
		'name' => 'Fotos',
		'id'   => 'geral_obras_fotos_2',
		'type' => 'file_list',
		'preview_size' => array(100, 100), // Default: array( 50, 50 )
		'query_args' => array('type' => 'image'), // Only images attachment
		'text' => array(
			'add_upload_files_text' => 'Adicionar imagens', // default: "Add or Upload Files"
			'remove_image_text' => 'Remover imagem', // default: "Remove Image"
			'file_text' => 'Imagem', // default: "File:"
			'file_download_text' => 'Baixar', // default: "Download"
			'remove_text' => 'Remover imagem', // default: "Remove"
		)
	));
	####################### FIM 2º MODULO #######################
}

/*
O RESTANTE ABAIXO SERVE APENAS PARA CRIAR AS ABAS, NÃO PRECISA NECESSARIAMENTE ENTENDER, O MAIS IMPORTANTE É A INSERÇÃO DE CAMPOS
*/

/**
 * A CMB2 options-page display callback override which adds tab navigation among
 * CMB2 options pages which share this same display callback.
 *
 * @param CMB2_Options_Hookup $cmb_options The CMB2_Options_Hookup object.
 */

function obras_options_display_with_tabs($cmb_options)
{
	$tabs = obras_custom_tabs($cmb_options);
?>
	<div class="wrap cmb2-options-page option-<?php echo $cmb_options->option_key; ?>">
		<?php if (get_admin_page_title()) : ?>
			<h2><?php echo wp_kses_post(get_admin_page_title()); ?></h2>
		<?php endif; ?>
		<h2 class="nav-tab-wrapper">
			<?php foreach ($tabs as $option_key => $tab_title) : ?>
				<a class="nav-tab<?php if (isset($_GET['page']) && $option_key === $_GET['page']) : ?> nav-tab-active<?php endif; ?>" href="<?php menu_page_url($option_key); ?>"><?php echo wp_kses_post($tab_title); ?></a>
			<?php endforeach; ?>
		</h2>
		<form class="cmb-form" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST" id="<?php echo $cmb_options->cmb->cmb_id; ?>" enctype="multipart/form-data" encoding="multipart/form-data">
			<input type="hidden" name="action" value="<?php echo esc_attr($cmb_options->option_key); ?>">
			<?php $cmb_options->options_page_metabox(); ?>
			<?php submit_button(esc_attr($cmb_options->cmb->prop('save_button')), 'primary', 'submit-cmb'); ?>
		</form>
	</div>
<?php
}

/**
 * Gets navigation tabs array for CMB2 options pages which share the given
 * display_cb param.
 *
 * @param CMB2_Options_Hookup $cmb_options The CMB2_Options_Hookup object.
 *
 * @return array Array of tab information.
 */
function obras_custom_tabs($cmb_options)
{
	$tab_group = $cmb_options->cmb->prop('tab_group');
	$tabs      = array();

	foreach (CMB2_Boxes::get_all() as $cmb_id => $cmb) {
		if ($tab_group === $cmb->prop('tab_group')) {
			$tabs[$cmb->options_page_keys()[0]] = $cmb->prop('tab_title')
				? $cmb->prop('tab_title')
				: $cmb->prop('title');
		}
	}

	return $tabs;
}

/* ####################### FIM CMB2 ####################### */

/*********************************************************** */
