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


class A {
public:
    void echo() { cout << "hello A" << endl;};
};

class B: public A {
public:
    void echo() { cout << "hello B" << endl;};
};

int main() {
    A *pA = new B();
    cout << "size of A:" << sizeof(A) << endl;
    cout << "size of B:" << sizeof(*pA) << endl;
    pA->echo();
   return 0;
}
