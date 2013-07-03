#include <iostream>
using namespace std;

class MyInt {
private:
    int _value;
public:
    MyInt(int value = 0):_value(value){};
    ~MyInt(){};
    MyInt(const MyInt& item):_value(item._value){};

public:
    int value(){ return _value;}
    void value(int value) {_value = value;}

public:
    friend MyInt operator+ (const MyInt& item1, const MyInt& item2) { return item1._value + item2._value;};
    friend MyInt operator- (const MyInt& item1, const MyInt& item2) { return item1._value - item2._value;};
    friend MyInt operator* (const MyInt& item1, const MyInt& item2) { return item1._value * item2._value;};
    friend MyInt operator/ (const MyInt& item1, const MyInt& item2) { return item1._value / item2._value;};
    friend MyInt operator% (const MyInt& item1, const MyInt& item2) { return item1._value % item2._value;};
    friend MyInt operator- (const MyInt& item1) { return -item1._value;};
    
    MyInt& operator++ () {_value++;return *this;};
};

int main() {
    MyInt item1(5);
    MyInt item2(7);
    
    ++item1;

    MyInt sum = item1 + item2;
    cout << sum.value() << endl;

    return 0;
}
