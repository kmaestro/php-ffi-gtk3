CC := clang

CFLAGS = `pkg-config --cflags gtk+-3.0` -Wall
LIBS = `pkg-config --libs gtk+-3.0`

src = main.c
obj = timer_sample
targets = timer_sample

all: $(targets)

timer_sample: $(src)
	$(CC) -o $(obj) $(src) $(CFLAGS) $(LIBS) 

clean:
	rm -f $(targets) *.o *.*~
