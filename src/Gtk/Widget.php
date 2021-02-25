<?php

declare(strict_types=1);

namespace Gtk3\Gtk;

use Gtk3\Gtk;
use FFI\CData;

/**
 * GtkWidget is the base class all widgets in GTK+ derive from. It manages the widget lifecycle, states and style.
 *
 * @method setSizeRequest(int $width, int $height): void
 * @method show(): void
 * @method showAll(): void
 */
class Widget
{
    public function __construct(private CData $widget) { }

    public function __call(string $name, array $arguments)
    {
        $functionName = 'gtk_widget_' . strtolower(preg_replace('~([A-Z])~', '_$1', $name));
        $cast = "GtkWidget *";

        Gtk::getInstance()->$functionName(Gtk::getInstance()->cast($cast, $this->widget), ...$arguments);
    }
}
