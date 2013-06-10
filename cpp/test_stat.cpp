#include <stdlib.h>
#include <stdio.h>
#include <sys/sendfile.h>
#include <sys/types.h>
#include <sys/stat.h>
#include <fcntl.h>
#include <unistd.h>

int main(int argc, char** argv) {
	int rHandle = open("read.txt", O_RDONLY);
	printf("read: %d\n", rHandle);
	int wHandle = open("write.txt", O_WRONLY);
	printf("write: %d\n", wHandle);
	struct stat file_info;
	fstat(rHandle, &file_info);
	printf("filesize: %d\n", file_info.st_size);
	off_t offset = 0;
	ssize_t c = sendfile(wHandle, rHandle, &offset, file_info.st_size);
	close(rHandle);
	close(wHandle);
	printf("count: %d; offser: %d\n", c, offset);
	return 0;
}

