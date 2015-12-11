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

        if ($parent === null && is_child_theme()) {
            return false;
        }

        $domain   = ($domain !== null) ? $domain : $this->getTextDomain();
        $path     = ($path !== null) ? $path : $this->getDomainPath();
        $isLoaded = load_theme_textdomain($domain, $this->getDirectory() . $path);

        // Merge parent theme's translations into the child theme's text domain
        // if the parent theme is also translatable.
        if ($parent instanceof TranslatableThemeInterface) {
            load_theme_textdomain($domain, $parent->getDirectory() . $parent->getDomainPath());
        }

        return $isLoaded;
    }

    public function loadLocaleFile($locale = null, $path = null)
    {
        /** @var ThemeInterface $this */

        $locale = ($locale !== null) ? $locale : $this->getLocale();
        $path   = ($path !== null) ? $path : $this->getDomainPath();

        $localeFile = $this->getDirectory() . $path . '/' . $locale . '.php';

        if (is_readable($localeFile)) {
            require_once $localeFile;
        }
    }
}
