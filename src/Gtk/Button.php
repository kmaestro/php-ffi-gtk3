<?php

declare(strict_types=1);

namespace Gtk3\Gtk;

use Gtk3\Gtk;
use Kmaestro\Gtk3\FfiGtk;

/**
 * Class Button
 */
class Button extends Widget
{
    public $instance;

    public function __construct(string $text)
    {
        $this->instance = Gtk::getInstance()->gtk_button_new_with_label($text);
    }
}
