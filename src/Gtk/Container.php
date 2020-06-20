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
        Gtk::getInstance()->gtk_container_add(
            Gtk::getInstance()->cast("GtkContainer *", $window->widget),
            Gtk::getInstance()->cast("GtkWidget *", $widget->widget)
        );
    }
}
