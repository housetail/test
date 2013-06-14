#include <iostream>
#include <string>
#include <vector>
using namespace std;

int main() {
   string demo[] = {"aa", "bb", "cc", "dd"};
   vector<string> svec(demo, demo + 4);

   vector<string>::iterator iter = svec.begin();

   cout << *iter << endl;

   iter =  &svec[0];
   return 0;
}
