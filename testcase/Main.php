<?php

/**
 * This is a testcase for Kotlin
 * [comment, punctuation.definition.comment]
 */
// [storage.type]> function
function main()
{
    # [variable]> $number
    $number = 12;
    echo ($number);

    # [keyword]> for
    for ($i = 0; $i < 10; $i++) {
        echo ($i);
    }
}

main();