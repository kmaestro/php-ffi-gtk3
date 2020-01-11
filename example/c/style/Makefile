CC := clang

CFLAGS = `pkg-config --cflags gtk+-3.0` -Wall
LIBS = `pkg-config --libs gtk+-3.0`

src = main.c
obj = style_sample
targets = style_sample

all: $(targets)

style_sample: $(src)
	$(CC) -o $(obj) $(src) $(CFLAGS) $(LIBS) 

clean:
	rm -f $(targets) *.o *.*~
