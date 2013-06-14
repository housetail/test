#include <iostream>
#include <string>
#include <vector>
using namespace std;

class Foo {
public :
   static int fooCount;
public:
   Foo() {std::cout << ++Foo::fooCount << "Foo created" << std::endl;};
   ~Foo() {std::cout << --Foo::fooCount << "Foo left" << std::endl;};

   void print() { cout << Foo::fooCount << endl;}; 
};
int Foo::fooCount = 0;

int main() {
   vector<Foo> fVec(5);
   vector<Foo>::iterator iter = fVec.begin();
   while (iter++ != fVec.end()) {
      iter->print();
   }

   return 0;
}
