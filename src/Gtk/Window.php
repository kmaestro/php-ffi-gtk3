<?php

declare(strict_types=1);

namespace Gtk3\Gtk;

use Gtk3\Gtk;

/**
 * Class Window
 */
class Window extends Widget
{
    public const GTK_WINDOW_TOPLEVEL = 0;

    public const GTK_WINDOW_POPUP = 1;

    /**
     * @var
     */
    public $window;

    /**
     * Window constructor.
     */
    public function __construct(int $type = self::GTK_WINDOW_TOPLEVEL)
    {
        $this->widget = Gtk::getInstance()->gtk_window_new($type);
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        Gtk::getInstance()->gtk_window_set_title(Gtk::getInstance()->cast("GtkWindow *", $this->widget), $title);
    }

    /**
     * @param string $title
     */
    public function setSize(int $width, int $height)
    {
        Gtk::getInstance()->gtk_window_set_default_size(Gtk::getInstance()->cast("GtkWindow *", $this->widget), $width, $height);
    }

    /**
     * @throws \Exception
     */
    public function fullscreen()
    {
        Gtk::getInstance()->gtk_window_fullscreen(
            Gtk::getInstance()->cast("GtkWindow *", $this->widget)
        );
    }

    public function setPosition($position)
    {
        Gtk::getInstance()->gtk_window_set_position(
            Gtk::getInstance()->cast("GtkWindow *", $this->widget),
            $position
        );
    }

    /**
     * @throws \Exception
     */
    public function unfullscreen()
    {
        Gtk::getInstance()->gtk_window_unfullscreen (
            Gtk::getInstance()->cast("GtkWindow *", $this->widget)
        );
    }
}
