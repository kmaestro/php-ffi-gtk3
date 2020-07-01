<?php

declare(strict_types=1);

namespace Gtk3\Gtk;

use Gtk3\Gtk;
use FFI\CData;

/**
 * Class Window
 */
class Window extends Widget
{
    public const GTK_WINDOW_TOPLEVEL = 0;

    public const GTK_WINDOW_POPUP = 1;

    /**
     * Window constructor.
     *
     * @param int $type
     */
    public function __construct(int $type = self::GTK_WINDOW_TOPLEVEL)
    {
        $window = Gtk::getInstance()->gtk_window_new($type);
        if ($window instanceof CData) {
            $this->widget = $window;
        } else {
            throw new \RuntimeException('Error.');
        }
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        Gtk::getInstance()->gtk_window_set_title(Gtk::getInstance()->cast("GtkWindow *", $this->widget), $title);
    }

    /**
     * @param string $title
     */
    public function setSize(int $width, int $height): void
    {
        Gtk::getInstance()
            ->gtk_window_set_default_size(
                Gtk::getInstance()->cast("GtkWindow *", $this->widget),
                $width,
                $height
            );
    }

    /**
     * @throws \Exception
     */
    public function fullscreen(): void
    {
        Gtk::getInstance()->gtk_window_fullscreen(
            Gtk::getInstance()->cast("GtkWindow *", $this->widget)
        );
    }

    /**
     * @param $position
     *
     * @throws \Exception
     */
    public function setPosition(int $position): void
    {
        Gtk::getInstance()->gtk_window_set_position(
            Gtk::getInstance()->cast("GtkWindow *", $this->widget),
            $position
        );
    }

    /**
     * @throws \Exception
     */
    public function unfullscreen(): void
    {
        Gtk::getInstance()->gtk_window_unfullscreen(
            Gtk::getInstance()->cast("GtkWindow *", $this->widget)
        );
    }

    /**
     * @param int $width
     * @param int $height
     *
     * @throws \Exception
     */
    public function resize(int $width, int $height): void
    {
        Gtk::getInstance()->gtk_window_resize(
            Gtk::getInstance()->cast("GtkWindow*", $this->widget),
            $width,
            $height
        );
    }

    /**
     * @param bool $resizable
     *
     * @throws \Exception
     */
    public function setResizable(bool $resizable = true): void
    {
        Gtk::getInstance()->gtk_window_set_resizable(
            Gtk::getInstance()->cast("GtkWindow*", $this->widget),
            $resizable
        );
    }

    /**
     * @throws \Exception
     */
    public function present(): void
    {
        Gtk::getInstance()->gtk_window_present(
            Gtk::getInstance()->cast("GtkWindow*", $this->widget)
        );
    }

    /**
     * @throws \Exception
     */
    public function maximize(): void
    {
        Gtk::getInstance()->gtk_window_maximize(
            Gtk::getInstance()->cast("GtkWindow*", $this->widget)
        );
    }

    /**
     * @throws \Exception
     */
    public function unmaximize(): void
    {
        Gtk::getInstance()->gtk_window_unmaximize(
            Gtk::getInstance()->cast("GtkWindow*", $this->widget)
        );
    }

    /**
     * @param string   $detailed_signal
     * @param callable $c_handler
     * @param null     $data
     *
     * @return int
     */
    public function connect(
        string $detailed_signal,
        callable $c_handler,
        $data = null
    ): int {
        return (int) Gtk::getInstance()->g_signal_connect_data(
            $this->widget,
            $detailed_signal,
            $c_handler,
            $data,
            null,
            null
        );
    }
}
