#include <bitset>
#include <string>
#include <iostream>
using namespace std;

int main() {
    bitset<32> bs1;
    bitset<32> bs2;
    bitset<32> bs3;

    bs1 = bs2 ^ bs3;

    return 0;
}
