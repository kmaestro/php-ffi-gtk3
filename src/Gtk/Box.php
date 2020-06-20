<?php

declare(strict_types=1);

namespace Gtk3\Gtk;

use Gtk3\Gtk;

/**
 * Class Box
 *
 * @package Gtk3\Gtk
 */
class Box extends Widget
{
    public const GTK_ORIENTATION_HORIZONTAL = 0;
    public const GTK_ORIENTATION_VERTICAL = 1;

    /**
     * Box constructor.
     *
     * @param int $orientation
     * @param int $spacing
     */
    public function __construct(int $orientation, int $spacing)
    {
        $this->widget = Gtk::getInstance()->gtk_box_new($orientation, $spacing);
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
