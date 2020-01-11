#include <gtk/gtk.h>

static void cb_application_activate (GtkApplication* app, gpointer user_data)
{
    GtkWidget *window;
    GtkWidget *label;

    window = gtk_application_window_new (app);

    gtk_window_set_title (GTK_WINDOW (window), "Hello world");

    gtk_widget_set_size_request (window, 640, 480);

    gtk_window_set_position (GTK_WINDOW (window), GTK_WIN_POS_CENTER_ALWAYS);

    label = gtk_label_new ("Hello world");
    gtk_container_add (GTK_CONTAINER (window), label);

    gtk_widget_show_all (window);
}

int main (int argc, char **argv)
{
    GtkApplication *app;
    int status;

    app = gtk_application_new ("org.gtk3.helloworld", G_APPLICATION_FLAGS_NONE);

    g_signal_connect (app, "activate", G_CALLBACK (cb_application_activate), NULL);

    status = g_application_run (G_APPLICATION (app), argc, argv);

    g_object_unref (app);

    return status;
}

