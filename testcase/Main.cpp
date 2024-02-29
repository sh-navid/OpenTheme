/**
 * This is a testcase for C++
 * [comment, punctuation.definition.comment]
 */
#include <iostream>
int main()
{
    // [variable]> number
    // [storage.type]> int
    int number = 12;
    std::cout << number;

    // [constant.other.placeholder]
    printf("%d\n", number);

    // [keyword]> for, return, <<, =, ...
    for (int i = 0; i < 10; i++)
    {
        std::cout << i;
    }

    return 0;
}