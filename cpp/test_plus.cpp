#include <algorithm>
#include <functional>

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

int main() {
    plus<int> intAdd;
    
    int i1 = 10;
    int i2 = 20;
    cout << intAdd(i1, i2) << endl;
    

    return 0;
}
