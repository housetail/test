#include <stdio.h>
#include <iostream>
#include <cstring>

using namespace std;
int main() {
   const char* cstr = "jjj";
   cout << sizeof(cstr) << endl;//为什么永远都输出8呢？
    cout << sizeof("h");
   return 0;
}
