<?php
require __DIR__ . '/vendor/autoload.php';

$gtk = \Gtk3\Gtk::getInstance();

function label_countup() {

}
$gtk->init();
$w = new \Gtk3\Gtk\Window();
$w->fullscreen();
$w->setTitle('test');
$w->setSize(500, 100);
$s = new \Gtk3\Gtk\Signal();
$s->connect($w->instance, 'destroy', [$gtk, 'mainQuit'], null);
$c = new \Gtk3\Gtk\Container();
$label = new \Gtk3\Gtk\Label(date(DATE_ATOM));
$c->add($w, $label);
\Gtk3\Gtk\Widget::showAll($w);
$gtk->g_timeout_add(100, function () use ($label){
    $label->setText(date(DATE_ATOM));
    return true;
}, null);
$gtk->main();


