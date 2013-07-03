#include <algorithm>
#include <functional>
#include <iterator>
#include <exception>
#include <iostream>
#include <fstream>
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

vector<string> split_string(string delimiter, string inputString) {
    vector<string> result;
    size_t delimiterSize = delimiter.size();
    size_t start = 0;
    size_t pos = string::npos;
    string item;

    while (true) {
        pos = inputString.find(delimiter, start);
        if (pos == string::npos) {
            item = inputString.substr(start);
            result.push_back(item);
            break;
        } else {
            item = inputString.substr(start, pos - start);
            result.push_back(item);
            start = pos + delimiterSize;
        }
    }

    return result;
}

void sort_url(const char* log_file_name) {
    ifstream inFile(log_file_name);
    string wordString;
    map<string, int> urlMap;

    if (log_file_name == 0) {
        cerr << "file name empty";
    }
    if (!inFile.is_open()) {
        cerr << "open file fail" << endl;
    }
    while (inFile.good()) {
        getline(inFile, wordString);
        if (wordString.size()) {
            vector<string> pieces = split_string(" ", wordString);
            if (pieces.size() > 2) {
                urlMap[pieces[2]]++;
            }
        }
    }
    inFile.close();

    map<string,int>::iterator i;
    for (i = urlMap.begin(); i != urlMap.end(); i++) {
        cout << i->first << '\t' << i->second << endl;
    }

    return;
}

int main() {
    sort_url("/usr/home/shuwei/temp/url.log");

    return 0;
}
