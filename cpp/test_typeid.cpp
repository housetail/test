#include <iostream>
#include <algorithm>
#include <typeinfo>
using namespace std;

int main() {
   int iValue = 10;
   int a[] = {1,2,3,4,5};

   cout << typeid(iValue).name() << endl;
   cout << typeid(*min_element(a, a + 2)).name() << endl;

   return 0;
}
