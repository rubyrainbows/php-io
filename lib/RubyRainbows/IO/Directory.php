<?php

/**
 * Directory.php
 *
 * @author    Thomas Muntaner thomas.muntaner@gmail.com
 * @copyright 2014 Thomas Muntaner
 * @version   1.0.0
 */

namespace RubyRainbows\IO;

/**
 * Class Directory
 *
 * This lists files in directory
 *
 * @package RubyRainbows\IO
 *
 */
class Directory
{
    /**
     * @var string
     */
    private $path;

    /**
     * Constructs the directory instance
     *
     * @param string $path The path to the directory
     */
    public function __construct ( $path )
    {
        $this->path = $path;
    }

    /**
     * Returns an array of all the files
     *
     * @return File[]
     */
    public function getFiles ()
    {
        $dirty = scandir($this->path);
        $clean = [];

        foreach ( $dirty as $file )
        {
            if ( $file != '.' and $file != '..' )
            {
                $clean[] = new File($this, $file);
            }
        }

        return $clean;
    }

    /**
     * Returns the path for the directory
     *
     * @return string
     */
    public function getPath ()
    {
        return $this->path;
    }
}
