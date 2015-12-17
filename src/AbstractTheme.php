<?php
/**
 * Abstract Theme
 *
 * @author Whizark <devaloka@whizark.com>
 * @see http://whizark.com
 * @copyright Copyright (C) 2014 Whizark.
 * @license MIT
 * @license GPL-2.0
 * @license GPL-3.0
 */

namespace Devaloka\Theme;

use WP_Theme;

/**
 * Class AbstractTheme
 *
 * @package Devaloka\Theme
 */
abstract class AbstractTheme implements ThemeInterface
{
    use ThemeTrait;

    protected $wpTheme;

    /**
     * Constructor.
     *
     * @param string $file The absolute path to the stylesheet file.
     */
    public function __construct($file)
    {
        $this->wpTheme = new WP_Theme(basename(dirname($file)), dirname(dirname($file)));

        // /<path>/<wp-content>/<themes>/<theme>
        $this->directory = $this->wpTheme->get_stylesheet_directory();

        // http://<example.com>/<wp-content>/<themes>/<themes>
        $this->directoryUri = $this->wpTheme->get_stylesheet_directory_uri();

        // /<path>/<wp-content>/<themes>/<themes>/functions.php
        $this->file = $file;

        // http://<example.com>/<wp-content>/<themes>/<theme>/functions.php
        $this->fileUri = $this->directoryUri . '/' . basename($file);

        if ($this instanceof TranslatableThemeInterface) {
            // <theme>
            $textDomain = $this->wpTheme->get('TextDomain');

            // </languages>
            $domainPath = $this->wpTheme->get('DomainPath');

            // <locale>
            $locale = get_locale();

            $this->setTextDomain($textDomain);
            $this->setDomainPath($domainPath);
            $this->setLocale($locale);
        }
    }

    public function __call($name, array $arguments)
    {
        $method = [$this->parent, $name];

        if ($this->parent !== null && is_callable($method)) {
            return call_user_func_array($method, $arguments);
        }
    }

    /**
     * {@inheritDoc}
     */
    public function setup()
    {
    }
}
