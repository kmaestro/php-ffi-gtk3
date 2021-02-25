<?php

declare(strict_types=1);

namespace Gtk3\Gtk;

use Gtk3\Enum\WindowEnum;
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
class Window
{
    public $window;

    private $widget;

    /**
     * Window constructor.
     *
     * @param WindowEnum $type
     */
    public function __construct(WindowEnum $type = null)
    {
        if ($type === null)
            $type = WindowEnum::topLevel();
        $this->window = Gtk::getInstance()->gtk_window_new($type->value());
        $this->widget = new Widget($this->window);
    }

    public function widget(): Widget
    {
        return $this->widget;
    }

    public function __call(string $name, array $arguments)
    {
        $functionName = 'gtk_window_' . strtolower(preg_replace('~([A-Z])~', '_$1', $name));
        $cast = "GtkWindow *";

        return Gtk::getInstance()->$functionName(Gtk::getInstance()->cast($cast, $this->window), ...$arguments);
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
            $this->window,
            $detailed_signal,
            $c_handler,
            $data,
            null,
            null
        );
    }
}
