#include <algorithm>
#include <functional>
#include <iterator>
#include <exception>
#include <fstream>

#include <iostream>
#include <bitset>
#include <string>
#include <utility>
#include <vector>
#include <list>
#include <deque>
#include <queue>
#include <map>
#include <set>
using namespace std;

class Foo {
public:
    void dump() {cout << _var1 << endl;cout << _var2 << endl;};
public:
    Foo() {_var1 = "aaa"; _var2 = 10;};
public:
    string _var1;
    int _var2;
};

int main() {
    Foo foo1;
    foo1._var1 = "bbb";
    foo1.dump();
    Foo foo2 = foo1;
    foo2.dump();

   return 0;
}
