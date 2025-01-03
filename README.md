# PHP Unexpected Array Key Behavior

This repository demonstrates a common, yet subtle, error in PHP related to how the language handles array keys.  PHP's loose typing system allows for automatic type juggling of array keys. This can result in unexpected values being accessed when elements are not explicitly defined.

The `bug.php` file showcases this problem with examples using numeric and string keys. The `bugSolution.php` file illustrates how to avoid these issues by using explicit checks and better array handling techniques.

## How to Reproduce

1. Clone the repository.
2. Run `bug.php` using a PHP interpreter. Observe the output.
3. Examine `bugSolution.php` to understand how to avoid this error.
