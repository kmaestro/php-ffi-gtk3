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
    public function setText(string $text)
    {
        Gtk::getInstance()->gtk_label_set_text(
            Gtk::getInstance()->cast('GtkLabel*', $this->widget),
            $text
        );
    }
}