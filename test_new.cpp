/**
 * 不用循环语句也能输出数据的办法哦
 */
#include <iostream>
#include <string>
#include <vector>

class Foo {
public :
   static int fooCount;
public:
   Foo() {std::cout << ++Foo::fooCount << "Foo created" << std::endl;};
   ~Foo() {std::cout << --Foo::fooCount << "Foo left" << std::endl;};
};

int Foo::fooCount = 0;

int main() {
   using namespace std;
   vector<string> *pvec1 = new vector<string>(10);
   cout << pvec1->size() << endl;
   Foo* pF = new Foo[10];
   delete[] pF;
   return 0;
}
