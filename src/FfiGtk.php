<?php


namespace Kmaestro\Gtk3;

use FFI;

/**
 * Class FfiGtk
 * @package Kmaestro
 */
class FfiGtk
{
    /**
     * @var
     */
    private static $instance;

    /**
     * @var FFI
     */
    protected FFI $ffi;

    private function __clone() {}
    private function __wakeup() {}

    /**
     * FfiGtk constructor.
     */
    private function __construct()
    {
        $final_header = __DIR__ . "/../gtk.h";
        $this->ffi = FFI::load($final_header);
    }

    /**
     * @return FFI
     */
    public static function getFFI(): FFI
    {
        $instance = self::getInstance();

        return $instance->ffi;
    }

    /**
     * @return static
     */
    public static function getInstance(): self
    {
        if(self::$instance === NULL) {
            self::$instance = new self;
        }
        return self::$instance;
    }
}
