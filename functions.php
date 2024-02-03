<?php

// Exit if accessed directly
if (!defined('ABSPATH'))
    exit;

// functions.php is empty so you can easily track what code is needed in order to Vite + Tailwind JIT run well

// Main switch to get frontend assets from a Vite dev server OR from production built folder
// it is recommended to move it into wp-config.php
// define('IS_VITE_DEVELOPMENT', true);


include "inc/wordpress_fixes.php";
include "inc/inc.vite.php";

function gruyerepadel_blocks()
{
    register_block_type(__DIR__ . '/blocks/image-text');
    register_block_type(__DIR__ . '/blocks/buttons');
    register_block_type(__DIR__ . '/blocks/buttons-pdf');
    register_block_type(__DIR__ . '/blocks/membre-comite');
}
add_action('init', 'gruyerepadel_blocks');

function gruyerepadel_menu()
{
    register_nav_menus(
        array(
            'primary' => "Menu principal",
        )
    );
}
add_action('init', 'gruyerepadel_menu');
