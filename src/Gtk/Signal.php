<?php

declare(strict_types=1);

namespace Gtk3\Gtk;

use Gtk3\Gtk;

/**
 * Class Signal
 */
class Signal
{
    public function connect($instance, $detailed_signal, $c_handler, $data = null)
    {
        return Gtk::getInstance()->g_signal_connect_data($instance, $detailed_signal, $c_handler, $data, null, null);
    }
}