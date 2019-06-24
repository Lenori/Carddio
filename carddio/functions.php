<?php

add_theme_support( 'post-thumbnails' );

// SAVE THEME PATH IN VARIABLE

wp_register_script('wp-theme-js', get_bloginfo( "template_directory" ) . '/js/main.js');
wp_enqueue_script( 'wp-theme-js' );
$urlJS = get_bloginfo( "template_directory" );

wp_localize_script( 'wp-theme-js', 'urlWordpressJS', $urlJS );

//You can now use 'urlWordpressJS' to call the theme path inside JS files

///////////////////////////////////////////////////

function menu_equipe_carddio() {

    add_menu_page(
        'Equipe',                       // Tag da página
        'Equipe Cárddio',               // Título do menu
        'manage_options',               // Nível administrativo
        'Equipe',                       // Slug
        'equipe_carddio',               // Função
        'dashicons-admin-settings',     // Ícone do menu
        6                               // Posição
    );

}

function equipe_carddio() {

    include('admin/admin-equipe-carddio.php');

} add_action('admin_menu', 'menu_equipe_carddio');

function equipe_carddio_submenu() {

    add_submenu_page(
        'Equipe',                   // Slug pai
        'Editar membro',            // Título
        'Editar membro',            // Menu
        'manage_options',           // Nível administrativo
        'editar_equipe',            // Slug
        'editar_equipe_carddio'     // Função
    );

} add_action('admin_menu', 'equipe_carddio_submenu');

function editar_equipe_carddio() {

    include('admin/admin-editar-equipe-carddio.php');

}

///////////////////////////////////////////////////

function menu_depoimentos_carddio() {

    add_menu_page(
        'Depoimentos',                       // Tag da página
        'Depoimentos Cárddio',               // Título do menu
        'manage_options',                    // Nível administrativo
        'Depoimentos',                       // Slug
        'depoimentos_carddio',               // Função
        'dashicons-admin-settings',          // Ícone do menu
        6                                    // Posição
    );

}

function depoimentos_carddio() {

    include('admin/admin-depoimentos-carddio.php');

} add_action('admin_menu', 'menu_depoimentos_carddio');

function depoimentos_carddio_submenu() {

    add_submenu_page(
        'Depoimentos',                  // Slug pai
        'Editar depoimento',            // Título
        'Editar depoimento',            // Menu
        'manage_options',               // Nível administrativo
        'editar_depoimento',            // Slug
        'editar_depoimentos_carddio'    // Função
    );

} add_action('admin_menu', 'depoimentos_carddio_submenu');

function editar_depoimentos_carddio() {

    include('admin/admin-editar-depoimento-carddio.php');

}

///////////////////////////////////////////////////

function menu_exames_carddio() {

    add_menu_page(
        'Exames',                       // Tag da página
        'Exames Cárddio',               // Título do menu
        'manage_options',               // Nível administrativo
        'Exames',                       // Slug
        'exames_carddio',               // Função
        'dashicons-admin-settings',     // Ícone do menu
        6                               // Posição
    );

}

function exames_carddio() {

    include('admin/admin-exames-carddio.php');

} add_action('admin_menu', 'menu_exames_carddio');

function exames_carddio_submenu() {

    add_submenu_page(
        'Exames',                  // Slug pai
        'Editar exame',            // Título
        'Editar exame',            // Menu
        'manage_options',          // Nível administrativo
        'editar_exame',            // Slug
        'editar_exames_carddio'    // Função
    );

} add_action('admin_menu', 'exames_carddio_submenu');

function editar_exames_carddio() {

    include('admin/admin-editar-exame-carddio.php');

}

///////////////////////////////////////////////////

function menu_convenios_carddio() {

    add_menu_page(
        'Convenios',                       // Tag da página
        'Convênios Cárddio',               // Título do menu
        'manage_options',               // Nível administrativo
        'Convenios',                       // Slug
        'convenios_carddio',              // Função
        'dashicons-admin-settings',     // Ícone do menu
        6                               // Posição
    );

}

function convenios_carddio() {

    include('admin/admin-convenios-carddio.php');

} add_action('admin_menu', 'menu_convenios_carddio');

///////////////////////////////////////////////////

function menu_imagens_carddio() {

    add_menu_page(
        'Imagens',                      // Tag da página
        'Imagens Cárddio',              // Título do menu
        'manage_options',               // Nível administrativo
        'Imagens',                      // Slug
        'imagens_carddio',              // Função
        'dashicons-admin-settings',     // Ícone do menu
        6                               // Posição
    );

}

function imagens_carddio() {

    include('admin/admin-imagens-carddio.php');

} add_action('admin_menu', 'menu_imagens_carddio');

///////////////////////////////////////////////////