#include <iostream>
#include <string>
#include <vector>
using namespace std;
class DataItem {
   public:
      DataItem(const string& name):columnName(name){};
   private:
      string columnName;
};

int main() {
   cout << "init......" << endl;
   int timer = 1000000;
   char inChar;
   vector<DataItem*> vect;
   /*for (int i = 0; i < timer; i++) {
      DataItem* cd = new DataItem("cth");
      vect.push_back(cd);
   }
   cin >> inChar;
   cout << "delete......." << endl;
   for (int i = 0; i < timer; i++) {
      delete vect[i];
   }
   vect.clear();
   vector<DataItem*> emptyVect;
   vect.swap(emptyVect);
   cout << "vect.size" << vect.size() << endl;
   cout << "emptyVect.size" << emptyVect.size() << endl;
   cout << "finish" << endl;*/

   cin >> inChar;
   return 0;
}
