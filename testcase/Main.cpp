/**
 * [comment]
 * [punctuation.definition.comment]
 */
#include <iostream>

class Main{

};

// [storage.type]> int
int main()
{
    // [variable]> number
    // [storage.type]> int
    int number = 12;

    // [constant.other.placeholder]
    printf("%d\n", number);

    // [keyword] > for, =, <, ++
    for (int i = 0; i < 10; i++)
    {
        std::cout << i;
    }

    return 0;
}