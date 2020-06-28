extern gboolean gtk_css_provider_load_from_path(GtkCssProvider *css_provider, const gchar *path, GError **error);
extern GtkCssProvider* gtk_css_provider_new(void);
extern GtkCssProvider* gtk_css_provider_get_named(const gchar *name,const gchar *variant);
extern gboolean gtk_css_provider_load_from_data(GtkCssProvider *css_provider, const gchar *data, gssize length, GError **error);
extern gboolean gtk_css_provider_load_from_file(GtkCssProvider *css_provider, GFile *file, GError **error);
extern void gtk_css_provider_load_from_resource(GtkCssProvider *css_provider, const gchar *resource_path);
extern char* gtk_css_provider_to_string(GtkCssProvider *provider);