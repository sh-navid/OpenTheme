"""
    [comment]
    [punctuation.definition.comment]
"""
# [comment]
# [punctuation.definition.comment]

# [storage.type] > class
class Main:
    @staticmethod
    # [storage.type] > def
    def main():
        # [variable] > number
        number = 12

        # [constant.other.placeholder]
        print("Test placeholder {number}".format(number=number))
        print(f"Test placeholder {number}")

        # [keyword]> for, in
        for i in range(1, 10):
            print(i)


if __name__ == "__main__":
    Main.main()
