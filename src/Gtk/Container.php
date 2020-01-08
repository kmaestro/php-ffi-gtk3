<?php


namespace Kmaestro\Gtk3\Gtk;


use Kmaestro\Gtk3\FfiGtk;

class Container
{

    public function add(Window $window, Widget $widget)
    {
        FfiGtk::getFFI()->gtk_container_add(FfiGtk::getFFI()->cast("GtkContainer *", $window->instance), FfiGtk::getFFI()->cast("GtkWidget *", $widget->instance));
    }
}
