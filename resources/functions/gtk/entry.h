extern GtkWidget* gtk_entry_new(void);
extern void gtk_entry_set_max_length(GtkEntry *entry, gint max);
extern const gchar* gtk_entry_get_text(GtkEntry *entry);
extern void gtk_entry_set_text(GtkEntry *entry, const gchar *text);
extern void gtk_entry_set_visibility(GtkEntry *entry, gboolean visible);
extern void gtk_entry_set_invisible_char(GtkEntry *entry, gunichar ch);