<?php
/**
 * Theme Trait
 *
 * @author Whizark <devaloka@whizark.com>
 * @see http://whizark.com
 * @copyright Copyright (C) 2015 Whizark.
 * @license MIT
 */

namespace Devaloka\Theme;

/**
 * Trait ThemeTrait
 *
 * @package Devaloka\Theme
 *
 * @codeCoverageIgnore
 */
trait ThemeTrait
{
    protected $directory;

    protected $directoryUri;

    protected $file;

    protected $fileUri;

    protected $parent;

    /**
     * @return string
     */
    public function getDirectory()
    {
        return $this->directory;
    }

    /**
     * @return string
     */
    public function getDirectoryUri()
    {
        return $this->directoryUri;
    }

    /**
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @return string
     */
    public function getFileUri()
    {
        return $this->fileUri;
    }

    /**
     * @return string
     */
    public function getTextDomain()
    {
        if (WP_DEBUG && apply_filters('deprecated_function_trigger_error', true)) {
            trigger_error(
                sprintf(
                    '%1$s is <strong>deprecated</strong> since version %2$s! Use %3$s instead.',
                    __METHOD__,
                    '0.6.0',
                    '\Devaloka\Translation\TranslatableTrait::getTextDomain()'
                )
            );
        }
    }

    /**
     * @return string
     */
    public function getDomainPath()
    {
        if (WP_DEBUG && apply_filters('deprecated_function_trigger_error', true)) {
            trigger_error(
                sprintf(
                    '%1$s is <strong>deprecated</strong> since version %2$s! Use %3$s instead.',
                    __METHOD__,
                    '0.6.0',
                    '\Devaloka\Translation\TranslatableTrait::getDomainPath()'
                )
            );
        }
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        if (WP_DEBUG && apply_filters('deprecated_function_trigger_error', true)) {
            trigger_error(
                sprintf(
                    '%1$s is <strong>deprecated</strong> since version %2$s! Use %3$s instead.',
                    __METHOD__,
                    '0.6.0',
                    '\Devaloka\Translation\TranslatableTrait::getLocale()'
                )
            );
        }
    }

    /**
     * @return ThemeInterface
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param ThemeInterface $parent
     */
    public function setParent(ThemeInterface $parent)
    {
        $this->parent = $parent;
    }
}
