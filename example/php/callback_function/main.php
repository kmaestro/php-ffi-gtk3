<?php

require __DIR__ . '/../../../vendor/autoload.php';

use Gtk3\Gtk;

use Gtk3\Gtk\Window;
use Gtk3\Gtk\Button;
use Gtk3\Gtk\Container;
use Gtk3\Gtk\Signal;
$count = 0;
$gtk = Gtk::getInstance();

function button_clicked($button, $data)
{
    global $count;
    global $gtk;
    echo sprintf("%s pressed %d time(s) \n", \FFI::string($gtk->cast('char *',$data)), ++$count);
}

$gtk->init();
$window = new Window();
$button = new Button("Hello World!");
$signal = new Signal();

$container = new Container();
$container->add($window, $button);

$signal->connect($button, 'clicked', 'button_clicked', 'button 1');

$button->show();
$window->show();

$gtk->main();