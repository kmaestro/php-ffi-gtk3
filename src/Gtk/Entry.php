<?php

declare(strict_types=1);

namespace Gtk3\Gtk;

use Gtk3\Gtk;

/**
 * A single line text entry field.
 */
class Entry extends Widget
{
    /**
     * Entry constructor.
     */
    public function __construct()
    {
        $this->widget = Gtk::getInstance()->gtk_entry_new();
    }

    /**
     * sdfsd
     *
     * @param int $max
     *
     * @throws \Exception
     */
    public function setMaxLength(int $max): void
    {
        Gtk::getInstance()->gtk_entry_set_max_length(
            Gtk::getInstance()->cast('GtkEntry *', $this->widget),
            $max
        );
    }

    /**
     * @param int $max
     *
     * @return string
     * @throws \Exception
     */
    public function getText(int $max): string
    {
        return (string) Gtk::getInstance()->gtk_entry_get_text(
            Gtk::getInstance()->cast('GtkEntry *', $this->widget),
        );
    }

    /**
     * @param string $text
     *
     * @throws \Exception
     */
    public function setText(string $text): void
    {
        Gtk::getInstance()->gtk_entry_set_text(
            Gtk::getInstance()->cast('GtkEntry *', $this->widget),
            $text
        );
    }

    /**
     * @param bool $visible
     *
     * @throws \Exception
     */
    public function setVisibility(bool $visible): void
    {
        Gtk::getInstance()->gtk_entry_set_visibility(
            Gtk::getInstance()->cast('GtkEntry *', $this->widget),
            $visible
        );
    }

    /**
     * @param string $ch
     *
     * @throws \Exception
     */
    public function setInvisibleChar(string $ch): void
    {
        Gtk::getInstance()->gtk_entry_set_invisible_char(
            Gtk::getInstance()->cast('GtkEntry *', $this->widget),
            $ch
        );
    }
}
