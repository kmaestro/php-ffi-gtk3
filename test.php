<?php
require __DIR__ . '/vendor/autoload.php';

\Kmaestro\Gtk3\Gtk::init();
$w = new \Kmaestro\Gtk3\Gtk\Window();
$w->setTitle('test');

$button = new \Kmaestro\Gtk3\Gtk\Button('test');
$c = new \Kmaestro\Gtk3\Gtk\Container();
$c->add($w, $button);
\Kmaestro\Gtk3\Gtk\Widget::showAll($w);
\Kmaestro\Gtk3\Gtk::main();


