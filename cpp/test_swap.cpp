#include <algorithm>
#include <functional>
#include <iterator>
#include <exception>
#include <fstream>

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
    int a = -111;
    int b = 1888;
    
    cout << "a:" << a << endl;
    cout << "b:" << b << endl;

    b = a ^ b;
    a = a ^ b;
    b = a ^ b;
    
    cout << "a:" << a << endl;
    cout << "b:" << b << endl;
    
    return 0;
}
