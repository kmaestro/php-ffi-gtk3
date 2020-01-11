CC := clang

CFLAGS = `pkg-config --cflags gtk+-3.0`
LIBS = `pkg-config --libs gtk+-3.0`

targets = hello_world_old hello_world

all: $(targets)

hello_world_old: hello_world_old.c 
	$(CC) -o hello_world_old hello_world_old.c $(CFLAGS) $(LIBS)

hello_world: hello_world.c 
	$(CC) -o hello_world hello_world.c $(CFLAGS) $(LIBS)	

clean:
	rm -f $(targets) *.o
