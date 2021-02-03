<?php

require __DIR__ . '/../../../vendor/autoload.php';

use Gtk3\Gtk;
use Gtk3\Gtk\Window;

$gtk = Gtk::getInstance();

$gtk->init();

$window = new Window(\Gtk3\Enum\WindowEnum::popUp());
$window->show();

$gtk->main();

return 0;