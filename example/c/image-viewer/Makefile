CC := clang

CFLAGS = `pkg-config --cflags gtk+-3.0`
LIBS = `pkg-config --libs gtk+-3.0`

targets = image_viewer
obj =image_viewer
src = image_viewer.c 

all: $(targets)

image_viewer: $(src)
	$(CC) -o $(obj) $(src) $(CFLAGS) $(LIBS)

clean:
	rm -f $(targets) *.o *.*~
