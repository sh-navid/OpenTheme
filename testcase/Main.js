/**
 * [comment]
 * [punctuation.definition.comment]
 */

// [comment]
// [punctuation.definition.comment]

// [storage.type]> class
class Main {
  main() {
    // [variable]> number
    // [storage.type]> var
    var number = 12;

    // [constant.other.placeholder]
    console.log(`Test placeholder ${number}`);

    // [keyword]> for, =, <, ++
    for (let i = 0; i < 10; i++) {
      console.log(i);
    }
  }
}

new Main().main();
