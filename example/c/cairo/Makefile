CC := clang

CFLAGS = `pkg-config --cflags gtk+-3.0`
LIBS = `pkg-config --libs gtk+-3.0`

src = main.c
obj = cairo_paint
targets = cairo_paint

all: $(targets)

cairo_paint: $(src)
	$(CC) -o $(obj) $(src) $(CFLAGS) $(LIBS)

clean:
	rm -f $(targets) *.o *.*~
