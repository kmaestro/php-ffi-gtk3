extern GtkWidget * gtk_window_new (GtkWindowType type);
extern void gtk_window_set_default_size (GtkWindow *window,gint width,gint height);
extern void gtk_widget_show (GtkWidget *);
extern void gtk_window_set_title (GtkWindow *window, gchar *title);
extern void gtk_window_get_size (GtkWindow *window, gint *width, gint *height);
extern void gtk_window_fullscreen(GtkWindow *window);
extern void gtk_window_unfullscreen (GtkWindow *window);
extern void gtk_window_set_position (GtkWindow *window, GtkWindowPosition position);
