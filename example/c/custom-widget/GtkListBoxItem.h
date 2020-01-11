#ifndef __GTK_LISTBOX_ITEM_H__
#define __GTK_LISTBOX_ITEM_H__

#include <gtk/gtk.h>

#define GTK_TYPE_LISTBOX_ITEM\
    (gtk_listbox_item_get_type())
#define GTK_LISTBOX_ITEM(listbox_row)\
    (G_TYPE_CHECK_INSTANCE_CAST((listbox_row), GTK_TYPE_LISTBOX_ITEM, GtkListBoxItem))
#define GTK_LISTBOX_ITEM_CLASS(klass)\
    (G_TYPE_CHECK_CLASS_CAST((klass), GTK_TYPE_LISTBOX_ITEM, GtkListBoxItemClass))

GType gtk_listbox_item_get_type (void) G_GNUC_CONST;

typedef struct {
    GtkListBoxRowClass parent_class;
} GtkListBoxItemClass;

typedef struct {
    GtkLabel *label_no;
    GtkLabel *label_body;
} GtkListBoxItemPrivate;

typedef struct {
    GtkListBoxRow parent;
    GtkListBoxItemPrivate *priv;
} GtkListBoxItem;

extern GtkListBoxItem *gtk_listbox_item_new (gint index, const gchar *str);

#endif  // __GTK_LISTBOX_ITEM_H__
