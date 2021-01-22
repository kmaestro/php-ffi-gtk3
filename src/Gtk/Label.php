<?php

namespace Gtk3\Gtk;

use Gtk3\Gtk;

/**
 * Class Label
 *
 * @method setWidthChars(int $char): void
 * @method setText(string $text): void
 * @method setMarkup(string $text): void
 *
 */
class Label extends Widget
{
    /**
     * Label constructor.
     *
     * @param string $text
     */
    public function __construct(string $text)
    {
        $this->widget = Gtk::getInstance()->gtk_label_new($text);
    }

    public function __call(string $name, array $arguments)
    {
        $functionName = 'gtk_label_' . strtolower(preg_replace('~([A-Z])~', '_$1', $name));
        $cast = "GtkLabel *";

        try {
            return Gtk::getInstance()->$functionName(Gtk::getInstance()->cast($cast, $this->widget), ...$arguments);
        } catch (\Throwable) {
            return parent::__call($name, $arguments);
        }
    }
}
