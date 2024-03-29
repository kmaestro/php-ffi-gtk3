<?php
require __DIR__ . '/../../../vendor/autoload.php';

use Gtk3\Gtk;
use Gtk3\Gtk\Window;
use Gtk3\Gtk\Container;
use Gtk3\Gtk\Label;
use Gtk3\Gtk\Box;

$gtk = Gtk::getInstance();

$gtk->init();

function my_close_app()
{
    Gtk::getInstance()->mainQuit();
}

function my_delete_event()
{
    print_r("In delete_event\n");
    return true;
}

$window = new Window();
$window->setTitle('The Window Title');
$window->setPosition(1);
$window->setDefaultSize( 300, 200);

$window->connect('destroy', 'my_close_app', null);
$window->connect( 'delete_event', 'my_delete_event', null);

$label1 = new Label('Label 1');
$label1->setText('sdf');
$label1->setWidthChars(1);
$label2 = new Label('Label 2');
$label3 = new Label('Label 3');

$hbox = new Box(\Gtk3\Enum\BoxEnum::horizontal, 5);
$vbox = new Box(\Gtk3\Enum\BoxEnum::vertical, 10);

$vbox->packStart($label1, true, false, 5);
$vbox->packStart($label2, true, false, 5);

$hbox->packStart($vbox, true, false, 5);
$hbox->packStart($label3, true, false, 5);

$container = new Container();
$container->add($window, $hbox);

$window->widget()->showAll();


$gtk->main();