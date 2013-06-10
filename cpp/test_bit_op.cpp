#include <iostream>
#include <string>
#include <cassert>
using namespace std;

class HT_Bit {
private:
   unsigned int value;
public:
   HT_Bit(unsigned int v):value(v){};
public:
   unsigned int turn_on(int n) const {assert(n >= 0); return value | (1 << n); };
   unsigned int turn_off(int n) const {assert(n >= 0); return value & ~(1 << n); };
   unsigned int flip(int n) const {assert(n >= 0); return value ^ (1 << n); };
   bool is_on(int n) const {assert(n >= 0); return value & (1 << n);};
   bool is_off(int n) const {assert(n >= 0); return !(value & (1 << n));};
};

int main() {
   HT_Bit bit(10);
   
   for ( int i = 7; i >= 0; i--) {
      cout << bit.is_on(i);
   }
   cout << endl;
   
   for ( int i = 7; i >= 0; i--) {
      cout << bit.is_off(i);
   }
   cout << endl;

   for ( int i = 7; i >= 0; i--) {
      cout << bit.turn_on(i) << '\t';
   }
   cout << endl;
   
   for ( int i = 7; i >= 0; i--) {
      cout << bit.turn_off(i) << '\t';
   }
   cout << endl;

   for ( int i = 7; i >= 0; i--) {
      cout << bit.flip(i) << '\t';
   }
   cout << endl;

   cout << bit.turn_on(2);
   
   return 0;
}
