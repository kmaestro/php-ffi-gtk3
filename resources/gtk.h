#include "type/base.h"

typedef void* (*GCallback) (void*, void*);
typedef struct _GClosureNotify GClosureNotify;
typedef struct _GConnectFlags GConnectFlags;
typedef struct _GError GError;
typedef struct _GClosureNotifyData GClosureNotifyData;
typedef gboolean (*GSourceFunc) (gpointer user_data);
typedef struct _GtkWidget GtkWidget;
typedef struct _GtkGrid GtkGrid;
typedef struct _GtkBuilder GtkBuilder;
typedef struct _GtkWindow GtkWindow;
typedef struct _GtkContainer GtkContainer;
typedef struct _GtkLabel GtkLabel;
typedef struct _GtkApplication GtkApplication;
typedef struct _GApplication GApplication;
typedef struct _GtkCssProvider GtkCssProvider;
typedef struct _GdkScreen GdkScreen;
typedef struct _GtkStyleProvider GtkStyleProvider;
typedef struct _GObject GObject;
typedef struct _GtkStyleContext GtkStyleContext;
typedef struct _GtkTextBuffer GtkTextBuffer;
typedef struct _GtkTextView GtkTextView;

typedef enum
{
  GTK_WINDOW_TOPLEVEL,
  GTK_WINDOW_POPUP
} GtkWindowType;

typedef enum
{
  G_APPLICATION_FLAGS_NONE,
  G_APPLICATION_IS_SERVICE  =          (1 << 0),
  G_APPLICATION_IS_LAUNCHER =          (1 << 1),

  G_APPLICATION_HANDLES_OPEN =         (1 << 2),
  G_APPLICATION_HANDLES_COMMAND_LINE = (1 << 3),
  G_APPLICATION_SEND_ENVIRONMENT    =  (1 << 4),

  G_APPLICATION_NON_UNIQUE =           (1 << 5),

  G_APPLICATION_CAN_OVERRIDE_APP_ID =  (1 << 6),
  G_APPLICATION_ALLOW_REPLACEMENT   =  (1 << 7),
  G_APPLICATION_REPLACE             =  (1 << 8)
} GApplicationFlags;

typedef enum
{
  GTK_WIN_POS_NONE,
  GTK_WIN_POS_CENTER,
  GTK_WIN_POS_MOUSE,
  GTK_WIN_POS_CENTER_ALWAYS,
  GTK_WIN_POS_CENTER_ON_PARENT
} GtkWindowPosition;



GtkApplication* gtk_application_new(const gchar *application_id, GApplicationFlags flags);

GtkBuilder* gtk_builder_new(void);
GdkScreen* gdk_screen_get_default(void);

gboolean gtk_css_provider_load_from_path(GtkCssProvider *css_provider, const gchar *path, GError **error);
guint gtk_builder_add_from_file(GtkBuilder *builder, const gchar *filename, GError **error);

int g_application_run (GApplication *application, int argc, char **argv);
guint gtk_builder_add_from_file (GtkBuilder *builder,const gchar *filename,GError **error);
GObject* gtk_builder_get_object(GtkBuilder *builder, const gchar *name);

void g_object_set(gpointer object, const gchar *first_property_name, ...);
GtkTextBuffer* gtk_text_view_get_buffer(GtkTextView *text_view);
GtkCssProvider* gtk_css_provider_new(void);
void gtk_text_buffer_set_text(GtkTextBuffer *buffer,const gchar *text,gint len);
gpointer g_object_ref_sink(gpointer object);
void g_object_unref (gpointer object);
gulong g_signal_connect_data(
    gpointer instance,
    const gchar *detailed_signal,
    GCallback c_handler,
    void* data,
    GCallback destroy_data,
    int connect_flags
    );


#include "functions/gtk/main.h"
#include "functions/gtk/widget.h"
#include "functions/gtk/window.h"
#include "functions/gtk/button.h"
#include "functions/gtk/label.h"
#include "functions/gtk/container.h"
#include "functions/gtk/style.h"
#include "functions/g/main.h"
