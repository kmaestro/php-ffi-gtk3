#include <gtk/gtk.h>
#include <unistd.h>
#include <glib.h>

static GtkWidget *s_label = NULL;

static guint timer_id;
static volatile gboolean s_timer_request_quit = FALSE;

static gboolean label_countup (gpointer user_data)
{
    static gint s_label_count = 0;

    if (s_label != NULL && !s_timer_request_quit) {
        gchar label[256];
        memset (label, 0x0, 256);
        sprintf (label, "count = %d", s_label_count);
        gtk_label_set_text ( GTK_LABEL (s_label), label);
        s_label_count++;
    }
    return !s_timer_request_quit;
}

static gboolean cb_window_delete_event (GtkWidget *widget, GdkEventAny *event, gpointer user_data)
{
    s_timer_request_quit = TRUE;
    g_source_remove (timer_id);

    return FALSE;
}

static void cb_application_activate (GtkApplication* app, gpointer user_data)
{
    GtkWidget *window;

    window = gtk_application_window_new (app);
    gtk_window_set_title (GTK_WINDOW (window), "Таймер образец");
    gtk_widget_set_size_request (window, 320, 240);
    gtk_window_set_position (GTK_WINDOW (window), GTK_WIN_POS_CENTER_ALWAYS);
    g_signal_connect (window, "delete_event", G_CALLBACK (cb_window_delete_event), NULL);

    s_label = gtk_label_new ("count = 0");
    gtk_container_add (GTK_CONTAINER (window), s_label);

    gtk_widget_show_all (window);

    timer_id = g_timeout_add (1000, (GSourceFunc)label_countup, NULL);
}

int main (int argc, char **argv)
{
    GtkApplication *app;
    int status;

    app = gtk_application_new ("org.gtk3.timer", G_APPLICATION_FLAGS_NONE);
    g_signal_connect (app, "activate", G_CALLBACK (cb_application_activate), NULL);
    status = g_application_run (G_APPLICATION (app), argc, argv);
    g_object_unref (app);

    return status;
}
