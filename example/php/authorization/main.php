<?php

require __DIR__ . '/../../../vendor/autoload.php';

use Gtk3\Gtk;
use Gtk3\Gtk\Window;

$password = 'secret';

function closeApp($window, $data)
{
    Gtk::getInstance()->mainQuit();
}

$gtk = Gtk::getInstance();

$gtk->init();

$window = new Window();
$window->setTitle('GtkEntryBox');
$window->setPosition(0);
$window->setDefaultSize(200, 200);

$signal = new Gtk\Signal();
$window->connect('destroy', 'closeApp', null);


$usernameLabel = new Gtk\Label('Login: ');
$usernameLabel->setWidthChars(12);

$passwordLabel = new Gtk\Label('Password: ');
$passwordLabel->setWidthChars(12);

$usernameEntry = new Gtk\Entry();
$passwordEntry = new Gtk\Entry();
$passwordEntry->setVisibility(false);

$okButton = new Gtk\Button('OK');

$signal->connect($okButton, 'clicked', function () use ($passwordEntry){
    global $password;
    $passwordText = $passwordEntry->getText(100);

    if ($passwordText === $password) {
       echo 'Access granted!' . PHP_EOL;
    } else {
        echo 'Access denied' . PHP_EOL;
    }

}, $passwordEntry->widget);

$hbox1 = new Gtk\Box(Gtk\Box::GTK_ORIENTATION_HORIZONTAL, 5);
$hbox2 = new Gtk\Box(Gtk\Box::GTK_ORIENTATION_HORIZONTAL, 5);

$vbox = new Gtk\Box(Gtk\Box::GTK_ORIENTATION_VERTICAL, 10);

$hbox1->packStart($usernameLabel, true, false, 5);
$hbox1->packStart($usernameEntry, true, false, 5);

$hbox2->packStart($passwordLabel, true, true, 5);
$hbox2->packStart($passwordEntry, true, false, 5);

$vbox->packStart($hbox1, false, false, 5);
$vbox->packStart($hbox2, false, false, 5);
$vbox->packStart($okButton, false, false, 5);

$container = new Gtk\Container();
$container->add($window, $vbox);
$window->showAll();

$gtk->main();

return 0;