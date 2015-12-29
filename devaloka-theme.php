<?php
/*
Plugin Name: Devaloka Theme
Description: Provides Interfaces, Traits, and Classes for WordPress Theme
Version: 0.6.2
Author: Whizark
Author URI: http://whizark.com
License: GPL-2.0+
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: devaloka-theme
Domain Path: /languages
Network: true
*/

if (!defined('ABSPATH')) {
    exit;
}

/** @var Devaloka\Devaloka $devaloka */
call_user_func(
    function () use ($devaloka) {
        $container = $devaloka->getContainer();

        /** @var Composer\Autoload\ClassLoader $loader */
        $loader = $container->get('loader');

        $loader->addPsr4('Devaloka\\Theme\\', __DIR__ . '/src/', true);
    }
);
