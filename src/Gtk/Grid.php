<?php

declare(strict_types=1);

namespace Gtk3\Gtk;

use Gtk3\Gtk;

class Grid extends Widget
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
        $this->widget = Gtk::getInstance()->gtk_grid_new();
    }

    public function attach(Widget $widget, int $left, int $top, int $width, int $height)
    {
        Gtk::getInstance()->gtk_grid_attach(
            Gtk::getInstance()->cast('GtkGrid *', $this->widget),
            Gtk::getInstance()->cast('GtkWidget *', $widget->widget),
            $left, $top, $width, $height
        );
    }
}