"""
    This is a testcase for Kotlin
    [comment, punctuation.definition.comment]> Seems not working for python cause multiline comment of python is a string !!!???
"""

# [storage.type]> def
def main():
    # [variable]> Seems not working in python !?
    number = 12
    print(number)

    # [keyword]> for
    for i in range(1, 10):
        print(i)

    # [keyword]> pass
    pass


if __name__ == "__main__":
    main()
