<?php

function gruyerepadel_blocks()
{
    register_block_type(dirname(__DIR__) . '/blocks/image-text');
    register_block_type(dirname(__DIR__) . '/blocks/buttons');
    register_block_type(dirname(__DIR__) . '/blocks/buttons-pdf');
    register_block_type(dirname(__DIR__) . '/blocks/membre-comite');
    register_block_type(dirname(__DIR__) . '/blocks/sponsors');
}
add_action('init', 'gruyerepadel_blocks');
