<?php

declare(strict_types=1);

namespace Gtk3\Gtk;

use Gtk3\Gtk;

/**
 * GtkWidget is the base class all widgets in GTK+ derive from. It manages the widget lifecycle, states and style.
 */
class Widget
{
    /**
     * @var
     */
    public $widget;

    /**
     * @param $width
     * @param $height
     */
    public function setSizeRequest(int $width, int $height): void
    {
        Gtk::getInstance()->gtk_widget_set_size_request($this->widget, $width, $height);
    }

    /**
     *
     */
    public function show(): void
    {
        Gtk::getInstance()->gtk_widget_show($this->widget);
    }

    /**
     *
     */
    public function showAll(): void
    {
        Gtk::getInstance()->gtk_widget_show_all($this->widget);
    }
}
