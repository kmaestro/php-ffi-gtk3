<?php

declare(strict_types=1);

namespace Gtk3\Gtk;

use Gtk3\Gtk;

/**
 * Class Signal
 */
class Signal
{
    /**
     * @param Widget   $instance
     * @param string   $detailed_signal
     * @param callable $c_handler
     * @param null     $data
     *
     * @return int
     */
    public function connect(
        Widget $instance,
        string $detailed_signal,
        callable $c_handler,
        $data = null
    ): int {
        return (int) Gtk::getInstance()->g_signal_connect_data(
            $instance->widget,
            $detailed_signal,
            $c_handler,
            $data,
            null,
            null
        );
    }
}
