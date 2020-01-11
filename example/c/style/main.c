#include <gtk/gtk.h>

static void cb_application_activate (GtkApplication* app, gpointer user_data)
{
    GtkBuilder* builder = gtk_builder_new ();
    g_return_if_fail (builder != NULL);

    GError* error = NULL;
    if (!gtk_builder_add_from_file (builder, "./main.glade", &error)) {
        if (error) {
            g_error ("Failed to load: %s", error->message);
            g_error_free (error);
            return ;
        }
    }

    GtkApplicationWindow *window = GTK_APPLICATION_WINDOW (gtk_builder_get_object (builder, "application_window"));
    g_warn_if_fail (window != NULL);
    g_object_set (window, "application", app, NULL);

    gtk_widget_set_size_request (GTK_WIDGET (window), 320, 240);
    gtk_window_set_position (GTK_WINDOW (window), GTK_WIN_POS_CENTER_ALWAYS);

    GtkCssProvider* provider = gtk_css_provider_new ();
    gtk_css_provider_load_from_path (provider, "./style.css", &error);
    if (error != NULL) {
        g_print ("Error:\t%s\n", error->message);
        g_error_free (error);
        return ;
    }

    gtk_style_context_add_provider_for_screen (gdk_screen_get_default (), 
                                               GTK_STYLE_PROVIDER (provider),
                                               GTK_STYLE_PROVIDER_PRIORITY_USER);

    GtkWidget *button = GTK_WIDGET (gtk_builder_get_object (builder, "button0"));
    GtkStyleContext *context = gtk_widget_get_style_context (button);
    gtk_style_context_add_class (context, "button-ligt-gray");

    {
        GtkWidget *textview = GTK_WIDGET (gtk_builder_get_object (builder, "textview"));
        GtkTextBuffer *buffer;
        buffer = gtk_text_view_get_buffer (GTK_TEXT_VIEW (textview));
        gtk_text_buffer_set_text (buffer, "Просмотр текста", -1);
    }

    gtk_widget_show_all (GTK_WIDGET (window));
    g_object_unref (builder);
}

int main (int argc, char **argv)
{
    GtkApplication *app;
    int status;

    app = gtk_application_new ("org.gtk3.style", G_APPLICATION_FLAGS_NONE);
    g_signal_connect (app, "activate", G_CALLBACK (cb_application_activate), NULL);
    status = g_application_run (G_APPLICATION (app), argc, argv);
    g_object_unref (app);

    return status;
}
