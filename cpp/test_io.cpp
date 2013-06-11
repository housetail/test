#include <iostream>
using namespace std;

class Foo {
public:
   Foo(int value) : _value(value) {};
   friend ostream& operator<< (ostream& os, const Foo& foo) { os << foo._value;return os;}; 
private:
   int _value;
};

int main() {
   Foo foo(10);

   cout << foo << endl;

   return 0;
}
