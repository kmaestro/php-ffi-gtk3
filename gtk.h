#define FFI_LIB "/usr/lib/x86_64-linux-gnu/libgtk-3.so.0"
typedef char gchar;
void gtk_init(int *, char **[]);
void gtk_main();
void gtk_main_quit();
typedef struct _GtkWidget GtkWidget;
typedef struct _GtkWindow GtkWindow;
typedef struct _GtkContainer GtkContainer;
typedef enum
{
  GTK_WINDOW_TOPLEVEL,
  GTK_WINDOW_POPUP
} GtkWindowType;

GtkWidget * gtk_window_new (GtkWindowType type);
void gtk_widget_show (GtkWidget *);
void gtk_window_set_title (GtkWindow *window, gchar *title);
void gtk_container_add (GtkContainer *container, GtkWidget *widget);
GtkWidget *gtk_button_new_with_label (const gchar *label);
void gtk_widget_show_all (GtkWidget *);
