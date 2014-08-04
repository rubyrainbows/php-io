[![Latest Stable Version](https://poser.pugx.org/rubyrainbows/io/version.svg)](https://packagist.org/packages/rubyrainbows/io)
[![Total Downloads](https://poser.pugx.org/rubyrainbows/io/downloads.svg)](https://packagist.org/packages/rubyrainbows/io)
[![Build Status](https://travis-ci.org/rubyrainbows/php-io.svg?branch=master)](https://travis-ci.org/rubyrainbows/php-io)

# PHP IO

PHP IO is a small library built to work with directories and folders.

## Usage

```php
<?php

use RubyRainbows\IO\Directory as Directory;
use RubyRainbows\IO\File      as File;

$dir = new Directory( '/path/to/directory' );

$files = $dir->getFiles(); // returns an array of files

foreach ( $files as $file )
{
    $file->readFile();  // returns the file contents as a string
    $file->getPath();   // returns the file path
    $file->getName();   // returns the file name
}
