#include <iostream>
#include <string>
using namespace std;

int sum(int a, int b) {
   return a + b;
}

int sub(int a, int b) {
   return a - b;
}

int (*pSum)(int, int) = &sum;


int main() {
   pSum = &sub;
   cout << (*pSum)(1, 2) << endl;
   return 0;
}

