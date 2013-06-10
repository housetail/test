#include <iostream>
#include <vector>
#include <algorithm>

class IntArray{
	public:
		IntArray(int size);
		IntArray(int size, int value);
		IntArray(int size, int* arr);
		IntArray(const IntArray& arr);
		~IntArray();
		int size() {return _size;};
	private:
		int *ia;
		int _size;
		//void init();
};

IntArray::IntArray(int size) {
	ia = new int[size];
	for (int i = 0; i < size; i++) {
		ia[i] = 0;
	}
	_size = size;
}

IntArray::IntArray(int size, int value) {
	ia = new int[size];
	for (int i = 0; i < size; i++) {
		ia[i] = value;
	}
	_size = size;
}

IntArray::IntArray(int size, int* arr) {
	ia = new int[size];
	for (int i = 0; i < size; i++) {
		ia[i] = arr[i];
	}
	_size = size;
}

IntArray::IntArray(const IntArray& arr) {
	ia = new int[arr._size];
	for ( int i = 0; i < arr._size; ++i) {
		ia[i] = arr.ia[i];
	}
	_size = arr._size;
}

IntArray::~IntArray() {
	delete[] ia;
	_size = 0;
}

int main() {
	IntArray ia1(10, 0);
	std::cout << ia1.size() << std::endl;
	return 0;
}

