<?php

declare(strict_types=1);

namespace Gtk3\Gtk;

use Gtk3\Gtk;
use Gtk3\Gtk\Window;

/**
 * Class Container
 */
class Container
{
    /**
     * @param \Gtk3\Gtk\Window $window
     * @param Widget           $widget
     *
     * @throws \Exception
     */
    public function add(Window $window, Widget $widget)
    {
        Gtk::getInstance()->info->ffi->gtk_container_add(
            Gtk::getInstance()->cast("GtkContainer *", $window->window),
            Gtk::getInstance()->cast("GtkWidget *", $widget->widget)
        );
    }
}
