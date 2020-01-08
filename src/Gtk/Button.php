<?php


namespace Kmaestro\Gtk3\Gtk;


use Kmaestro\Gtk3\FfiGtk;

class Button extends Widget
{
    public $instance;

    public function __construct(string $text)
    {
        $this->instance = FfiGtk::getFFI()->gtk_button_new_with_label($text);
    }
}
