typedef char gchar;
typedef int gint;
typedef int guint;
typedef bool gboolean;
typedef unsigned long gulong;
typedef void* gpointer;
typedef void* (*GCallback) (void*, void*);
typedef struct _GClosureNotify GClosureNotify;
typedef struct _GConnectFlags GConnectFlags;
typedef struct _GClosureNotifyData GClosureNotifyData;
typedef gboolean (*GSourceFunc) (gpointer user_data);
extern void gtk_init(int *, char **[]);
void gtk_main();
void gtk_main_quit();
typedef struct _GtkWidget GtkWidget;
typedef struct _GtkWindow GtkWindow;
typedef struct _GtkContainer GtkContainer;
typedef struct _GtkLabel GtkLabel;
typedef enum
{
  GTK_WINDOW_TOPLEVEL,
  GTK_WINDOW_POPUP
} GtkWindowType;

GtkWidget * gtk_window_new (GtkWindowType type);
void gtk_window_set_default_size (GtkWindow *window,gint width,gint height);
void gtk_widget_show (GtkWidget *);
void gtk_window_set_title (GtkWindow *window, gchar *title);
void gtk_window_get_size (GtkWindow *window, gint *width, gint *height);
void gtk_container_add (GtkContainer *container, GtkWidget *widget);
GtkWidget *gtk_button_new_with_label (const gchar *label);
void gtk_widget_show_all (GtkWidget *);
guint g_timeout_add (guint interval, GSourceFunc function, gpointer data);
GtkWidget * gtk_label_new (const gchar *str);
void gtk_window_fullscreen(GtkWindow *window);
void gtk_window_unfullscreen (GtkWindow *window);
void gtk_label_set_text (GtkLabel *label,const gchar *str);
gulong g_signal_connect_data(
    gpointer instance,
    const gchar *detailed_signal,
    GCallback c_handler,
    void* data,
    GCallback destroy_data,
    int connect_flags
    );
