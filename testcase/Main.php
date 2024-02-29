<?php

/**
 * [comment]
 * [punctuation.definition.comment]
 */

# [comment]
# [punctuation.definition.comment]

// [comment]
// [punctuation.definition.comment]

# [storage.type] > class
class Main
{
    // [storage.type] > function
    function main()
    {
        # [variable] > $number
        $number = 12;

        # [constant.other.placeholder]
        sprintf("Test placeholder %s", $number);
        echo ("Test placeholder $number");

        # [keyword]> for, =, <, ++, new
        for ($i = 0; $i < 10; $i++) {
            echo ("\n$i");
        }
    }
}


(new Main())->main();