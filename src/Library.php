<?php

namespace Gtk3;

use Serafim\FFILoader\BitDepth;
use Serafim\FFILoader\Library as BaseLibrary;
use Serafim\FFILoader\OperatingSystem;

class Library extends BaseLibrary
{
    private const LIBRARY_LINUX = 'libgtk-3.so.0';

    private ?string $version = null;

    public function getName(): string
    {
        return 'gtk';
    }

    public function getVersion(string $library): string
    {
        return 1;
    }

    public function getHeaders(): string
    {
        return __DIR__ . '/../resources/gtk.h';
    }

    /**
     * {@inheritDoc}
     */
    public function getOutputDirectory(): string
    {
        return __DIR__ . '/../out';
    }

    public function getLibrary(OperatingSystem $os, BitDepth $bits): ?string
    {
        switch (true) {
            case $os->isLinux():
                return self::LIBRARY_LINUX;
            default:
                return null;
        }
    }
}