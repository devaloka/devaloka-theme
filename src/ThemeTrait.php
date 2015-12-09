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

    protected $textDomain;

    protected $domainPath;

    protected $locale;

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
        return $this->textDomain;
    }

    /**
     * @return string
     */
    public function getDomainPath()
    {
        return $this->domainPath;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
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
