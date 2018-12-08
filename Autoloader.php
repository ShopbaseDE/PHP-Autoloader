<?php
/**
 * Autoloader
 * Copyright (c) Shopbase, 2018
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 * @version 1.0.0.0
 */

class Autoloader
{
    /**
     * Contains the autoload directory
     *
     * @var string
     */
    protected $autoload_dir;

    /**
     * @param string $directory
     * @param array $excluded
     * @return void
     */
    public static function runAutoloader(string $directory = __DIR__)
    {
        $self = new self;
        $self->autoload_dir = $directory;
        $self->handle($self->autoload_dir);
    }

    /**
     * Handle the directory
     *
     * @param string $path
     */
    protected function handle(string $path)
    {
        $files = scandir($path);

        foreach($files as $file) {
            if($file !== '.' && $file !== '..') {
                $current_path = $path . '/' . $file;
                if(is_readable($current_path)) {
                    if(is_dir($current_path)) {
                        $this->handle($current_path);
                    }
                    if(is_file($current_path) && strtolower(pathinfo($current_path, PATHINFO_EXTENSION)) === 'php') {
                        addAutoloadFileToRuntime($current_path);
                    }
                }
            }
        }
    }
}

/**
 * Add file to autoload process
 *
 * @param string $file
 */
function addAutoloadFileToRuntime(string $file)
{
    require_once $file;
}
