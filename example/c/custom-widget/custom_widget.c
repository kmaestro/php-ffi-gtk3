#include <gtk/gtk.h>
#include "GtkListBoxItem.h"

static gboolean cb_item_selected (GtkListBox *listbox, GtkListBoxItem *row, gpointer user_data)
{
    if (row != NULL) {
        const gint index = gtk_list_box_row_get_index (GTK_LIST_BOX_ROW (row));
        g_print ("item selected -> No.%d %s\n", index, gtk_label_get_text (row->priv->label_body));
    }

    return TRUE;
}

static void cb_app_activate (GtkApplication* app, gpointer user_data)
{
    GtkBuilder* builder = gtk_builder_new ();
    g_return_if_fail (builder != NULL);

    GError* error = NULL;
    if (!gtk_builder_add_from_file (builder, "./res/main.glade", &error)) {
        if (error) {
            g_error ("Failed to load: %s", error->message);
            g_error_free (error);
            return ;
        }
    }

    GtkApplicationWindow *window = GTK_APPLICATION_WINDOW (gtk_builder_get_object (builder, "application_window"));
    g_warn_if_fail (window != NULL);
    g_object_set (window, "application", app, NULL);

    GtkWidget *listbox = GTK_WIDGET (gtk_builder_get_object (builder, "listbox"));
    g_warn_if_fail (listbox != NULL);

    g_signal_connect (listbox, "row-selected", G_CALLBACK (cb_item_selected), NULL);

    for (int i = 0; i < 10; i++) {
        static const gchar items[][256] = {
            "суши",
            "стейк",
            "Карри и рис",
            "гамбургер",
            "Удон",
            "Жареная курица",
            "гречиха",
            "Жареный рис",
            "Жареный рис",
            "Миска с морепродуктами",
        };
        GtkListBoxItem *item = gtk_listbox_item_new (i, items[i]);
        gtk_container_add (GTK_CONTAINER (listbox), GTK_WIDGET (item));
    }

    gtk_widget_show_all (GTK_WIDGET (window));
    g_object_unref (builder);
}

int main (int argc, char **argv)
{
    GtkApplication *app;
    int status;

    app = gtk_application_new ("org.gtk3.custom-widget", G_APPLICATION_FLAGS_NONE);
    g_signal_connect (app, "activate", G_CALLBACK (cb_app_activate), NULL);
    status = g_application_run (G_APPLICATION (app), argc, argv);
    g_object_unref (app);

    return status;
}

