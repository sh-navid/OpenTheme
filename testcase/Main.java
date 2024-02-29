/**
 * [comment]
 * [punctuation.definition.comment]
 */

// [comment]
// [punctuation.definition.comment]

 // [storage.modifier] > public
 // [storage.modifier] > class
public class Main {
    // [storage.modifier] > public static
    // [storage.type] > void, int
    public static void main(String[] args) {
        // [variable] > number
        // [storage.type] > int
        int number = 12;

        // [constant.other.placeholder]
        System.out.println(String.format("Test placeholder %s", number));

        // [keyword] > for, =, <, ++
        for (int i = 0; i < 10; i++) {
            System.out.println(i);
        }
    }
}