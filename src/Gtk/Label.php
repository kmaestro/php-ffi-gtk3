<?php

namespace Gtk3\Gtk;

use Gtk3\Gtk;

/**
 * Class Label
 *
 * @package Gtk3\Gtk
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

    /**
     * @param string $text
     *
     * @throws \Exception
     */
    public function setText(string $text): void
    {
        Gtk::getInstance()->gtk_label_set_text(
            Gtk::getInstance()->cast('GtkLabel*', $this->widget),
            $text
        );
    }

    /**
     * @param string $text
     *
     * @throws \Exception
     */
    public function setMarkup(string $text): void
    {
        Gtk::getInstance()->gtk_label_set_markup(
            Gtk::getInstance()->cast('GtkLabel*', $this->widget),
            $text
        );
    }

    /**
     * @param int $char
     *
     * @throws \Exception
     */
    public function setWidthChars(int $char): void
    {
        Gtk::getInstance()->gtk_label_set_width_chars(
            Gtk::getInstance()->cast('GtkLabel*', $this->widget),
            $char
        );
    }
}
