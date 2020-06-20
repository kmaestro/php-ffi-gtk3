<?php

declare(strict_types=1);

namespace Gtk3\Gtk;

use Gtk3\Gtk;

/**
 * Class Button
 */
class Button extends Widget
{
    /**
     * Button constructor.
     *
     * @param string $text
     */
    public function __construct(string $text)
    {
        $this->widget = Gtk::getInstance()->gtk_button_new_with_label($text);
    }
}
