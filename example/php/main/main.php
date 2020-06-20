<?php

require __DIR__ . '/../../../vendor/autoload.php';

use Gtk3\Gtk;
use Gtk3\Gtk\Window;

$gtk = Gtk::getInstance();

$gtk->init();

$window = new Window(Window::GTK_WINDOW_TOPLEVEL);
$window->show();

$gtk->main();

return 0;