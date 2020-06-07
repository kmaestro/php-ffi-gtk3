<?php
require __DIR__ . '/vendor/autoload.php';

$gtk = \Gtk3\Gtk::getInstance();

$gtk->init();
$w = new \Gtk3\Gtk\Window();
$w->setTitle('test');
$w->setSize(500, 100);
$s = new \Gtk3\Gtk\Signal();
$s->connect($w->instance, 'destroy', [$gtk, 'mainQuit'], null);
$button = new \Gtk3\Gtk\Button('test');
$c = new \Gtk3\Gtk\Container();
$c->add($w, $button);
\Gtk3\Gtk\Widget::showAll($w);
$gtk->main();


