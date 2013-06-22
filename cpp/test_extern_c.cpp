//extern "C" {
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

const char *str = "hello"; 
//void *malloc( int ); 
char *strcpy( char *, const char * ); 
int printf( const char *, ... ); 
int strlen( const char * );
//}
//extern "C" int main() 
int main() 
{ /* C ”Ô—‘≥Ã–Ú*/ 
 char* s = (char*)malloc( strlen(str)+1 ); 
 strcpy( s, str ); 
 printf( "%s, world\n", s ); 
 exit( 0 ); 
}

