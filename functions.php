<?php

function maranata_adicionando_recursos()
{
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

}

add_action('after_setup_theme', 'maranata_adicionando_recursos');


function maranata_registrando_menu()
{
    register_nav_menu(
        'menu-navegacao',
        'Menu navegação'
    );
}

add_action('init', 'maranata_registrando_menu');

?>