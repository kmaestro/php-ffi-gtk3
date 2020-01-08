<?php


namespace Kmaestro\Gtk3\Gtk;


use Kmaestro\Gtk3\FfiGtk;

/**
 * Class Window
 * @package Kmaestro\Gtk
 */
class Window
{
    /**
     * @var
     */
    public $instance;

    /**
     * Window constructor.
     */
    public function __construct()
    {
        $this->instance = FfiGtk::getFFI()->gtk_window_new(0);
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title="")
    {
        FfiGtk::getFFI()->gtk_window_set_title(FfiGtk::getFFI()->cast("GtkWindow *", $this->instance), $title);
    }
}
