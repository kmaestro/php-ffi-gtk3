<?php

declare(strict_types=1);

namespace Gtk3\Gtk;

use Gtk3\Gtk;
use FFI\CData;

/**
 * Class Window
 *
 * @method setTitle(string $title): void
 * @method setPosition(int $position): void
 * @method setDefaultSize(int $width, int $height): void
 * @method fullscreen(): void
 * @method unfullscreen(): void
 * @method resize(int $width, int $height): void
 * @method setResizable(bool $resizable = true): void
 * @method present(): void
 * @method maximize(): void
 * @method unmaximize(): void
 *
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

    public function __call(string $name, array $arguments)
    {
        $functionName = 'gtk_window_' . strtolower(preg_replace('~([A-Z])~', '_$1', $name));
        $cast = "GtkWindow *";

        try {
            return Gtk::getInstance()->$functionName(Gtk::getInstance()->cast($cast, $this->widget), ...$arguments);
        } catch (\Throwable) {
            parent::__call($name, $arguments);
        }
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
