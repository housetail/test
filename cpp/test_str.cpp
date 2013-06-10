#include <iostream>
using namespace std;

int main() {
	const char *season[] = {"spring", "summer", "fall", "winter"};
	for (int i = 0; i < 4; i++) {
		cout << season[i] << endl;
	}
	return 0;
}
