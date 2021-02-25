<?php

declare(strict_types=1);

namespace Gtk3\Gtk;

use Gtk3\Enum\BoxEnum;
use Gtk3\Gtk;

/**
 * Class Box
 *
 * @package Gtk3\Gtk
 */
class Box extends Widget
{
    /**
     * Box constructor.
     *
     * @param BoxEnum $orientation
     * @param int     $spacing
     */
    public function __construct(BoxEnum $orientation, int $spacing)
    {
        $this->widget = Gtk::getInstance()->gtk_box_new($orientation->value(), $spacing);
    }

    /**
     * @param Widget $child
     * @param bool   $expand
     * @param bool   $fill
     * @param int    $padding
     *
     * @throws \Exception
     */
    public function packStart(Widget $child, bool $expand, bool $fill, int $padding): void
    {
        Gtk::getInstance()->gtk_box_pack_start(
            Gtk::getInstance()->cast('GtkBox*', $this->widget),
            $child->widget,
            $expand,
            $fill,
            $padding
        );
    }
}
