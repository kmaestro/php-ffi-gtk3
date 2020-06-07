<?php

declare(strict_types=1);

namespace Gtk3;

use FFI;
use Gtk3\Library;
use Gtk3\Support\ProxyTrait;
use Gtk3\Support\SingletonTrait;
use Serafim\FFILoader\LibraryInformation;
use Serafim\FFILoader\LibraryInterface;
use Serafim\FFILoader\Loader;

/**
 * Class Gtk3
 */
class Gtk
{
    use ProxyTrait;
    use SingletonTrait;

    public LibraryInformation $info;

    public Loader $loader;

    /**
     * Gtk constructor.
     */
    public function __construct()
    {
        $this->loader = $this->loader();

        $this->info = $this->loadLibrary(new Library());

        self::setInstance($this);
    }

    /**
     * @return Loader
     */
    private function loader(): Loader
    {
        $loader = new Loader();

        $pre = $loader->preprocessor();
        $pre->keepComments = false;
        $pre->minify = false;
        $pre->tolerant = false;

        return $loader;
    }

    /**
     * @param LibraryInterface $library
     * @return LibraryInformation
     */
    public function loadLibrary(LibraryInterface $library): LibraryInformation
    {
        return $this->loader->load($library);
    }

    /**
     * @param int $argc
     * @param array $argv
     * @throws \Exception
     */
    public function init(int $argc = 0, array $argv = [])
    {
        $argcPtr = $this->new('int');
        $argcPtr->cdata = $argc;
        $argvPtr = FFI::new('char**');
        $argcPtr->cdata = $argc;

        $this->gtk_init(FFI::addr($argcPtr), FFI::addr($argvPtr));
    }

    /**
     *
     */
    public function main(): void
    {
        $this->gtk_main();
    }

    /**
     *
     */
    public function mainQuit(): void
    {
        $this->gtk_main_quit();
    }
}
