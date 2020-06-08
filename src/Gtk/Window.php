<?php

declare(strict_types=1);

namespace Gtk3\Gtk;

use Gtk3\Gtk;

/**
 * Class Window
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
        $this->instance = Gtk::getInstance()->gtk_window_new(0);
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        Gtk::getInstance()->gtk_window_set_title(Gtk::getInstance()->cast("GtkWindow *", $this->instance), $title);
    }

    /**
     * @param string $title
     */
    public function setSize(int $width, int $height)
    {
        Gtk::getInstance()->gtk_window_set_default_size(Gtk::getInstance()->cast("GtkWindow *", $this->instance), $width, $height);
    }

    /**
     * @throws \Exception
     */
    public function fullscreen()
    {
        Gtk::getInstance()->gtk_window_fullscreen(
            Gtk::getInstance()->cast("GtkWindow *", $this->instance)
        );
    }

    public function setSizeRequest($width, $height)
    {
        Gtk::getInstance()->gtk_widget_set_size_request (
            Gtk::getInstance()->cast("GtkWidget *", $this->instance),
            $width, $height
        );
    }

    public function setPosition($position)
    {
        Gtk::getInstance()->gtk_window_set_position(
            Gtk::getInstance()->cast("GtkWindow *", $this->instance),
            $position
        );
    }

    /**
     * @throws \Exception
     */
    public function unfullscreen()
    {
        Gtk::getInstance()->gtk_window_unfullscreen (
            Gtk::getInstance()->cast("GtkWindow *", $this->instance)
        );
    }
}
