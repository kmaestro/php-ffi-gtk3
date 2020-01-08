<?php
require __DIR__ . '/vendor/autoload.php';

\Kmaestro\Gtk3\Gtk::init();
$w = new \Kmaestro\Gtk3\Gtk\Window();
$w->setTitle('test');
\Kmaestro\Gtk3\Gtk\Widget::show($w);
//\Kmaestro\Gtk3::getFFI()->gtk_widget_show($w);
\Kmaestro\Gtk3\Gtk::main();


