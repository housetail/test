#include <iostream>
#include <string>

class FooA {
	public:
		virtual void show() {std::cout << "show FooA" << std::endl;};
};

class FooB : public FooA{
	public:
		void show() { std::cout << "show FooB" << std::endl;};
};

int main() {
	FooA foo1;
	foo1.show();
	FooB foo2;
	foo2.show();

	return 0;
}
