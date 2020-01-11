CC := clang

CFLAGS = `pkg-config --cflags gtk+-3.0`
LIBS = `pkg-config --libs gtk+-3.0`

targets = custom_widget
obj = custom_widget
src = custom_widget.c GtkListBoxItem.c resources.c

all: $(targets)

custom_widget: $(src)
	$(CC) -o $(obj) $(src) $(CFLAGS) $(LIBS)

clean:
	rm -f $(targets) *.o *.*~
