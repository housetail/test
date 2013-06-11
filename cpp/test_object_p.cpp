#include <iostream>

class Foo {
public:
   Foo(int i){ pi = new int(i);};
public:
   int* pi;
};

int main() {
   Foo* foo = new Foo(10);
   
   std::cout << *(foo->pi) << std::endl;

   return 0;
}

