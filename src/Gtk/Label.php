<?php

namespace Gtk3\Gtk;

use Gtk3\Gtk;

class Label extends Widget
{
    public $instance;

    public function __construct(string $text)
    {
        $this->instance = Gtk::getInstance()->gtk_label_new($text);
    }

    public function setText(string $text)
    {
        Gtk::getInstance()->gtk_label_set_text(
            Gtk::getInstance()->cast('GtkLabel*', $this->instance),
            $text
        );
    }
}