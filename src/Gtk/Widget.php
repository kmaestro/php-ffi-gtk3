<?php


namespace Kmaestro\Gtk3\Gtk;


use Kmaestro\Gtk3\FfiGtk;

/**
 * Class Widget
 * @package Kmaestro\Gtk
 */
class Widget
{
    /**
     * @param Window $window
     */
    public static function show(Window $window)
    {
        FfiGtk::getFFI()->gtk_widget_show(FfiGtk::getFFI()->cast("GtkWidget *", $window->instance));
    }
}
