<?php

require __DIR__ . '/../../../vendor/autoload.php';

$gtk = \Gtk3\Gtk::getInstance();
$gtk->init();

$window = new \Gtk3\Gtk\Window();
$window->setTitle('Hello world');

$signal = new \Gtk3\Gtk\Signal();
$signal->connect($window->instance, 'destroy', [$gtk, 'mainQuit'], null);

$window->setSizeRequest(640, 480);
$window->setPosition(1);

$label = new \Gtk3\Gtk\Label('Hello world');
$container = new \Gtk3\Gtk\Container();
$container->add($window, $label);

\Gtk3\Gtk\Widget::showAll($window);


$gtk->main();