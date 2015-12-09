<?php
/**
 * Translatable Theme Trait
 *
 * @author Whizark <devaloka@whizark.com>
 * @see http://whizark.com
 * @copyright Copyright (C) 2015 Whizark.
 * @license MIT
 * @license GPL-2.0
 * @license GPL-3.0
 */

namespace Devaloka\Theme;

use Devaloka\Translation\TranslatableTrait;

/**
 * Trait TranslatableThemeTrait
 *
 * @package Devaloka\Plugin
 *
 * @codeCoverageIgnore
 */
trait TranslatableThemeTrait
{
    use TranslatableTrait;

    public function loadTextDomain($domain = null, $path = null)
    {
        /** @var ThemeInterface $this */

        $parent = $this->getParent();
        $domain = ($domain !== null) ? $domain : $this->getTextDomain();
        $path   = ($path !== null) ? $path : $this->getDomainPath();

        // Merges the parent translations into the child theme's text domain, if the parent theme exists.
        if ($parent instanceof TranslatableThemeInterface) {
            load_theme_textdomain($domain, $parent->getDirectory() . $path);
        }

        return load_theme_textdomain($domain, $this->getDirectory() . $path);
    }

    public function loadLocaleFile($locale = null, $path = null)
    {
        /** @var ThemeInterface $this */

        $locale = ($locale !== null) ? $locale : $this->getLocale();
        $path   = ($path !== null) ? $path : $this->getDomainPath();

        $localeFile = $path . '/' . $locale . '.php';

        if (validate_file($localeFile) === 0 && is_readable($localeFile)) {
            require_once $localeFile;
        }
    }
}
