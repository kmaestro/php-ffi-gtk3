<?php

namespace Gtk3\Gtk;

use Gtk3\Gtk;
use FFI\CData;

class CssProvider
{
    public CData $provider;

    public function __construct()
    {
        $this->provider = Gtk::getInstance()->gtk_css_provider_new();
    }

    /**
     * @param string $path
     *
     * @return mixed
     * @throws \Exception
     */
    public function loadFromPath(string $path)
    {
        $error = Gtk::getInstance()->new('GError*');
        return Gtk::getInstance()->gtk_css_provider_load_from_path(
            Gtk::getInstance()->cast('GtkCssProvider*', $this->provider),
            $path,
            Gtk::addr($error)
        );
    }
}
