#include <iostream>
#include <string>
#include <vector>

using namespace std;

int main() {
   vector<string> vs(10);
   cout << "vs.size()=" << vs.size() << endl;
   cout << "vs.capacity()=" << vs.capacity() << endl;

   for (int i = 0; i < 10; i++) {
      vs.push_back("aa" + i);
      cout << "vs.capacity()=" << vs.capacity() << endl;
      cout << "vs.size()=" << vs.size() << endl;
   }

   return 0;
}
