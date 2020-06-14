extern GtkBuilder* gtk_builder_new(void);
extern guint gtk_builder_add_from_file(GtkBuilder *builder, const gchar *filename, GError **error);
extern guint gtk_builder_add_from_file (GtkBuilder *builder,const gchar *filename,GError **error);
extern GObject* gtk_builder_get_object(GtkBuilder *builder, const gchar *name);
