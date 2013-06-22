#include <iostream>
#include <string>
using namespace std;

int main() {
   int* pInt = new int(10);
   cout << "pInt" << pInt << endl;
   cout << "*pInt" << *pInt << endl;
   delete pInt;
   cout << "pInt" << pInt << endl;
   cout << "*pInt" << *pInt << endl;
   
   return 0;
}
