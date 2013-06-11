#include <iostream>
#include <algorithm>
#include <map>
#include <string>
using namespace std;

bool cmCompare(pair<string, int> i, pair<string, int> j) {
   return i.second < j.second;
}

int main() {
   map<string, int> stringMap;
   map<string, int>::iterator it;

   string ch;
   while (cin >> ch) {
      stringMap[ch]++;
   }

   pair<string, int> maxPair = *max_element(stringMap.begin(), stringMap.end(), cmCompare);

   cout << maxPair.first << '\t' << maxPair.second;
   return 0;
}
