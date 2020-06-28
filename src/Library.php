<?php

declare(strict_types=1);

namespace Gtk3;

use Serafim\FFILoader\BitDepth;
use Serafim\FFILoader\Library as BaseLibrary;
use Serafim\FFILoader\OperatingSystem;

/**
 * Rdf
 */
class Library extends BaseLibrary
{
    private const LIBRARY_LINUX = 'libgtk-3.so.0';

    /**
     * Tsdf
     *
     * @var string|null
     */
    private ?string $version = null;

    public function getName(): string
    {
        return 'gtk3';
    }

    public function getVersion(string $library): string
    {
        return '0.0.3';
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
