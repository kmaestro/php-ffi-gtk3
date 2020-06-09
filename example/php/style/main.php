<?php

require __DIR__ . '/../../../vendor/autoload.php';

$gtk = \Gtk3\Gtk::getInstance();

$app = $gtk->gtk_application_new('org.gtk3.style', null);

$gtk->g_signal_connect_data($app, 'activate', 'cb_application_activate', null, null, null);
$status = $gtk::getInstance()->info->ffi->g_application_run($gtk->cast('GApplication*',$app), 0, null);
$gtk->g_object_ref_sink($app);

function cb_application_activate(): void
{
    global $app;
    $gtk = \Gtk3\Gtk::getInstance();
    $builder = $gtk->gtk_builder_new();
    $error = $gtk->new('GError*');
    $gtk->gtk_builder_add_from_file($builder, './main.glade', \Gtk3\Gtk::addr($error));
    $window = $gtk->gtk_builder_get_object($builder, 'application_window');
    $gtk->g_object_set($window, "application", $app, NULL);
    $gtk->gtk_widget_set_size_request($gtk->cast('GtkWidget*',$window), 320, 240);
//    $gtk->gtk_window_set_position($gtk->cast('GtkWidget*',$window), 1);

    $provider = $gtk->gtk_css_provider_new();
    $gtk->gtk_css_provider_load_from_path ($provider, "./style.css", \Gtk3\Gtk::addr($error));

    $gtk->gtk_style_context_add_provider_for_screen(
        $gtk->gdk_screen_get_default(),
        $gtk->cast('GtkStyleProvider*',$provider),
        1
    );

    $button = $gtk->gtk_builder_get_object($builder, "button0");

    $context = $gtk->gtk_widget_get_style_context($gtk->cast('GtkWidget*', $button));
    $gtk->gtk_style_context_add_class($context, "button-ligt-gray");

    $textview = $gtk->gtk_builder_get_object($builder, "textview");
    $buffer = $gtk->gtk_text_view_get_buffer($gtk->cast('GtkTextView*',$textview));
    $gtk->gtk_text_buffer_set_text($buffer, "Просмотр текста", -1);

    $gtk->gtk_widget_show_all($gtk->cast('GtkWidget*', $window));
    $gtk->g_object_unref($builder);
}