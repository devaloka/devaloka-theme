<?php
/**
 * Theme Interface
 *
 * @author Whizark <devaloka@whizark.com>
 * @see http://whizark.com
 * @copyright Copyright (C) 2014 Whizark.
 * @license MIT
j*/

namespace Devaloka\Theme;

/**
 * Interface ThemeInterface
 *
 * @package Devaloka\Theme
 *
 * @codeCoverageIgnore
 */
interface ThemeInterface
{
    /**
     * Sets up the theme.
     */
    public function setup();

    /**
     * @return string
     */
    public function getDirectory();

    /**
     * @return string
     */
    public function getDirectoryUri();

    /**
     * @return string
     */
    public function getFile();

    /**
     * @return string
     */
    public function getFileUri();

    /**
     * @deprecated 0.6.0 Moved to TranslatableInterface.
     * @see \Devaloka\Translation\TranslatableInterface
     *
     * @return string
     */
    public function getTextDomain();

    /**
     * @deprecated 0.6.0 Moved to TranslatableInterface.
     * @see \Devaloka\Translation\TranslatableInterface
     *
     * @return string
     */
    public function getDomainPath();

    /**
     * @deprecated 0.6.0 Moved to TranslatableInterface.
     * @see \Devaloka\Translation\TranslatableInterface
     *
     * @return string
     */
    public function getLocale();

    /**
     * @param ThemeInterface $parent
     */
    public function setParent(ThemeInterface $parent);

    /**
     * @return ThemeInterface
     */
    public function getParent();
}
