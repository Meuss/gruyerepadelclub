<?php

// Exit if accessed directly
if (!defined('ABSPATH'))
    exit;

/*
 * VITE & Tailwind JIT development
 * Inspired by https://github.com/andrefelipe/vite-php-setup
 *
 */

// dist subfolder - defined in vite.config.json
define('DIST_DEF', 'dist');

// defining some base urls and paths
define('DIST_URI', get_template_directory_uri() . '/' . DIST_DEF);
define('DIST_PATH', get_template_directory() . '/' . DIST_DEF);

// js enqueue settings
define('JS_DEPENDENCY', array()); // array('jquery') as example
define('JS_LOAD_IN_FOOTER', true); // load scripts in footer?

// deafult server address, port and entry point can be customized in vite.config.json
define('VITE_SERVER', 'http://localhost:3000');
define('VITE_ENTRY_POINT', '/main.js');

add_action('wp_enqueue_scripts', function () {
    if (defined('IS_VITE_DEVELOPMENT') && IS_VITE_DEVELOPMENT === true) {
        // insert hmr into head for live reload
        function vite_head_module_hook()
        {
            echo '<script type="module" crossorigin src="' . VITE_SERVER . VITE_ENTRY_POINT . '"></script>';
        }
        add_action('wp_head', 'vite_head_module_hook');
    } else {
        // PROD, 'npm run build' must be executed in order to generate assets
        // ----------
        $manifestPath = DIST_PATH . '/.vite/manifest.json';

        if (file_exists($manifestPath)) {
            // write to wordpress log
            $manifest = json_decode(file_get_contents($manifestPath), true);
            if (is_array($manifest)) {
                error_log('Manifest file exists: ' . $manifestPath);
                // Loop through the manifest to find and enqueue assets
                foreach ($manifest as $entry => $details) {
                    if (isset($details['file'])) {
                        $path = DIST_URI . '/' . $details['file'];
                        // Enqueue JS
                        if (strpos($entry, '.js') !== false) {
                            wp_enqueue_script($entry, $path, JS_DEPENDENCY, '', JS_LOAD_IN_FOOTER);
                        }
                        // Enqueue CSS linked with JS entry
                        if (isset($details['css']) && is_array($details['css'])) {
                            foreach ($details['css'] as $css_file) {
                                wp_enqueue_style($entry . '_css', DIST_URI . '/' . $css_file);
                            }
                        }
                    }
                }
            }
        }
    }
});
