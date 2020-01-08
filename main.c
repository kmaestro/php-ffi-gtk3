# include <gtk/gtk.h>

void welcome (GtkButton *button, gpointer data)
{
        GtkWidget *dialog;
        GtkWidget *label;
        GtkWidget *content_area;

        dialog = gtk_dialog_new_with_buttons("Ошибка LOL!!!111",
                                             NULL,
                                             GTK_DIALOG_MODAL | GTK_DIALOG_DESTROY_WITH_PARENT,
                                             GTK_STOCK_OK,
                                             GTK_RESPONSE_ACCEPT,
                                             NULL);

        content_area = gtk_dialog_get_content_area(GTK_DIALOG(dialog));

        label = gtk_label_new("\n\nИ тебе привет, %username!%");
        gtk_container_add(GTK_CONTAINER(content_area), label);
        gtk_widget_show(label);

        gtk_dialog_run(GTK_DIALOG(dialog));
        gtk_widget_destroy(dialog);
}

int main( int argc, char *argv[])
{
        GtkWidget *button;
        GtkWidget *window;

        gtk_init(&argc, &argv);

        window = gtk_window_new(GTK_WINDOW_TOPLEVEL);
        gtk_window_set_title(GTK_WINDOW(window), "Введение в GTK");

        button = gtk_button_new_with_label("Привет, ХабраХабр!");
        gtk_container_add(GTK_CONTAINER(window), button);

        gtk_widget_show_all(window);

        g_signal_connect(G_OBJECT(window), "destroy", G_CALLBACK(gtk_main_quit), NULL);
        g_signal_connect(GTK_BUTTON(button), "clicked", G_CALLBACK(welcome), NULL);

        gtk_main();
        return 0;
}
