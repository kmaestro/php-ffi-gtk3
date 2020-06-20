<?php

declare(strict_types=1);

namespace Gtk3\Gtk;

use Gtk3\Gtk;

/**
 * Class Grid
 *
 * @package Gtk3\Gtk
 */
class Grid extends Widget
{
    /**
     * Window constructor.
     */
    public function __construct()
    {
        $this->widget = Gtk::getInstance()->gtk_grid_new();
    }

    /**
     * @param Widget $widget
     * @param int    $left
     * @param int    $top
     * @param int    $width
     * @param int    $height
     *
     * @throws \Exception
     */
    public function attach(Widget $widget, int $left, int $top, int $width, int $height)
    {
        Gtk::getInstance()->gtk_grid_attach(
            Gtk::getInstance()->cast('GtkGrid *', $this->widget),
            Gtk::getInstance()->cast('GtkWidget *', $widget->widget),
            $left, $top, $width, $height
        );
    }
}