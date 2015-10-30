<?php

/**
 * File.php
 *
 * @author    Thomas Muntaner thomas.muntaner@gmail.com
 * @copyright 2014 Thomas Muntaner
 * @version   1.0.0
 */

namespace RubyRainbows\IO;

/**
 * Class File
 *
 * This class interfaces with a file
 *
 * @package Rubyrainbows\IO
 *
 */
class File
{
    /**
     * @var Directory
     */
    private $directory;

    /**
     * @var string
     */
    private $name;

    /**
     * Constructs the instance of the File
     *
     * @param Directory $directory
     * @param string $name
     */
    public function __construct ( $directory, $name )
    {
        $this->directory = $directory;
        $this->name = $name;
    }

    /**
     * Reads a files contents
     *
     * @return string
     */
    public function readFile ()
    {
        return file_get_contents($this->getPath());
    }

    /**
     * Returns the path of the file
     *
     * @return string
     */
    public function getPath ()
    {
        return $this->directory->getPath() . '/' . $this->name;
    }

    /**
     * Returns the file's name
     *
     * @return string
     */
    public function getName ()
    {
        return $this->name;
    }
}
