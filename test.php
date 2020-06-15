<?php
require __DIR__ . '/vendor/autoload.php';

$gtk = \Gtk3\Gtk::getInstance();

function label_countup() {

}
$gtk->init();
$widget = new \Gtk3\Gtk\Widget();
$w = new \Gtk3\Gtk\Window();
//$w->fullscreen();
$w->setTitle('test');
$w->setSize(500, 100);
$s = new \Gtk3\Gtk\Signal();
$button = new \Gtk3\Gtk\Button('dsfg');
$button->setSizeRequest(100 ,200);
$s->connect($w, 'destroy', [$gtk, 'mainQuit'], null);
$c = new \Gtk3\Gtk\Container();
$label = new \Gtk3\Gtk\Label(date('H:i:s'));
$label2 = new \Gtk3\Gtk\Label('');

$b = new \Gtk3\Gtk\Grid();
$b->attach($label2, 0, 1,1,1);
$b->attach($label, 0, 2,1,1);

$c->add($w, $b);
$w->showAll();
$gtk->g_timeout_add(2000, function () use ($label, $label2) {
    $label2->setText('CPU=' . (int)shell_exec('cat /sys/class/thermal/thermal_zone0/temp')/1000);
    $label->setText(date('H:i:s'));
    return true;
}, null);
$gtk->main();


