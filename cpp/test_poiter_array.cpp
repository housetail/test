#include <iostream>
#include <string>
using namespace std;

int main() {
   typedef int intArr[10];
   int* pInt = new intArr;
   
   for(int i = 0; i < 10; i++) {
      pInt[i] = i * i * i;
      cout << *(pInt + i) << endl;
   }

   delete[] pInt;

   return 0;
}
