<?php
function cpt_obras() {
    $labels = array(
        'name' => 'Obras',
        'singular_name' => 'Obra',
        'menu_name' => 'Obras',
        'name_admin_bar' => 'Obra',
        'add_new' => 'Adicionar nova',
        'add_new_item' => 'Adicionar nova obra',
        'edit_item' => 'Editar obra',
        'new_item' => 'Nova obra',
        'view_item' => 'Ver obra',
        'all_items' => 'Todas as obras',
        'search_items' => 'Buscar obras',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-building',
        'supports' => array('title'),
        'has_archive' => false,
        'show_in_rest' => true,
    );

    register_post_type('obras', $args);
}
add_action('init', 'cpt_obras');

add_action('cmb2_admin_init', 'cmb2_fields_obras');
function cmb2_fields_obras() {
    $obra_box = new_cmb2_box(array(
        'id' => 'obra_metabox',
        'title' => 'Detalhes da Obra',
        'object_types' => array('obras'),
    ));

    $obra_box->add_field(array(
        'name' => 'Porcentagem',
        'id' => 'obra_porcentagem',
        'type' => 'text_small',
        'attributes' => array(
            'type' => 'number',
            'min' => 0,
            'max' => 100,
            'step' => 1,
        ),
    ));
}