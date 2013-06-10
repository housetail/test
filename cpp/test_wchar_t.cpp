#include <iostream>
int main() {
	int wlen = sizeof(wchar_t);
	std::cout << wlen << std::endl;
	std::cout << sizeof("abc") << std::endl;
	std::cout << sizeof(L"abc") << std::endl;
	return 0;
}

