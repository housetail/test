#include <iostream>
using namespace std;
int main() {
	enum flag {x = 1, y = 2, z =4, e = 8};
	cout << (z|e) << endl;
	return 0;
}

