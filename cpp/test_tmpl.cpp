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

template<class T> void println(T item) {
   cout << item << endl;
}
typedef void (*pF)(int);

template<class T> void println(T item);

int main() {
   vector<int> iv(10);
   for (int i = 0; i < 10; i++) {
      iv[i] = i * i;
      cout << iv[i] << endl;
      pF println_int = println<int>;
      println_int(iv[i]);
      println<int>(iv[i]);
   }

   return 0;
}
