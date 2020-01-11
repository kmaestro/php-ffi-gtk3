#include <gtk/gtk.h>
#include "GtkListBoxItem.h"

/**
 *[refs]: https://developer.gnome.org/gtk3/stable/GtkWidget.html
 *        Building composite widgets from template XML
 */
G_DEFINE_TYPE_WITH_PRIVATE (GtkListBoxItem, gtk_listbox_item, GTK_TYPE_LIST_BOX_ROW);

static void gtk_listbox_item_class_init (GtkListBoxItemClass *klass)
{
    gtk_widget_class_set_template_from_resource (GTK_WIDGET_CLASS(klass),
                                                 "/gtk/examples/custom-widget/GtkListBoxItem.glade");

    gtk_widget_class_bind_template_child_private (GTK_WIDGET_CLASS(klass),
                                                  GtkListBoxItem, label_no);
    gtk_widget_class_bind_template_child_private (GTK_WIDGET_CLASS(klass),
                                                  GtkListBoxItem, label_body);
}

static void gtk_listbox_item_init (GtkListBoxItem *self)
{
    self->priv = (GtkListBoxItemPrivate *) gtk_listbox_item_get_instance_private (GTK_LISTBOX_ITEM (self));
    gtk_widget_init_template (GTK_WIDGET (self));
}

GtkListBoxItem *gtk_listbox_item_new (gint index, const gchar *str)
{
    GtkListBoxItem *row = 
        GTK_LISTBOX_ITEM (g_object_new (gtk_listbox_item_get_type (), NULL));

    g_warn_if_fail (row != NULL);
    g_warn_if_fail (row->priv != NULL);
    g_warn_if_fail (row->priv->label_body != NULL);

    {
        gchar idx[16];
        memset (idx, 0x0, 16);
        sprintf (idx, "%d", index);
        gtk_label_set_text (row->priv->label_no, idx);
    }

    gtk_label_set_text (row->priv->label_body, str);

    return row;
}
