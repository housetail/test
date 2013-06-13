#include <iostream>
#include <vector>
#include <string>
using namespace std;

int main() {
   int size = 1000 * 10000;
   vector<string> v;
   for (int i = 0; i < size; i++) {
      v.push_back("string");
   }

   return 0;
}
