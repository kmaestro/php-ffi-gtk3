#include <gtk/gtk.h>

int main (int argc, char** argv)
{
    GtkWidget *window;
    GtkWidget *label;

    gtk_init (&argc, &argv);

    window = gtk_window_new (GTK_WINDOW_TOPLEVEL);

    gtk_window_set_title (GTK_WINDOW (window), "Hello world");

    g_signal_connect (G_OBJECT (window), "destroy", G_CALLBACK (gtk_main_quit), NULL);

    gtk_widget_set_size_request (window, 640, 480);

    gtk_window_set_position (GTK_WINDOW (window), GTK_WIN_POS_CENTER_ALWAYS);

    label = gtk_label_new ("Hello world");
    gtk_container_add (GTK_CONTAINER (window), label);

    gtk_widget_show_all (window);

    gtk_main ();

    return 0;
}

