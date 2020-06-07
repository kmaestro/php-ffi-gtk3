<?php

declare(strict_types=1);

namespace Gtk3\Gtk;

use Gtk3\Gtk;
use Kmaestro\Gtk3\FfiGtk;

/**
 * Class Widget
 */
class Widget
{
    /**
     * @param Window $window
     */
    public static function show(Window $window)
    {
        Gtk::getInstance()->gtk_widget_show(Gtk::getInstance()->cast("GtkWidget *", $window->instance));
    }
    /**
     * @param Window $window
     */
    public static function showAll(Window $window)
    {
        Gtk::getInstance()->gtk_widget_show_all(Gtk::getInstance()->cast("GtkWidget *", $window->instance));
    }
}
