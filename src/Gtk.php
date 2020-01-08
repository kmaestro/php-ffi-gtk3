<?php

namespace Kmaestro\Gtk3;

use FFI;

/**
 * Class Gtk3
 * @package Kmaestro
 */
class Gtk
{
    private function __clone() {}
    private function __wakeup() {}
    private function __construct() {}

    public static function init()
    {
        $argc = FFI::new('int');
        $argv = FFI::new('char[0]');
        $pargv = FFI::addr($argv);

        FfiGtk::getFFI()->gtk_init(FFI::addr($argc), FFI::addr($pargv));
    }

    /**
     *
     */
    public static function main(): void
    {
        FfiGtk::getFFI()->gtk_main();
    }

    /**
     *
     */
    public static function mainQuit(): void
    {
        FfiGtk::getFFI()->gtk_main_quit();
    }
}
