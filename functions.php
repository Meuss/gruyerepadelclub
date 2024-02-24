<?php

if (!defined('ABSPATH')) {
    exit;
}

// define('IS_VITE_DEVELOPMENT', true); => wp-config

include "inc/inc.vite.php";
include "inc/wp-fixes.php";
include "inc/cpt-sponsors.php";
include "inc/cpt-tournoi.php";
include "inc/disable-comments.php";
include "inc/custom-blocks.php";
include "inc/duplicate-posts.php";
