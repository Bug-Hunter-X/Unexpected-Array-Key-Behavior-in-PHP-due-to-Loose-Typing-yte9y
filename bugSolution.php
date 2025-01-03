To prevent these unexpected behaviors, always explicitly check if an array key exists before attempting to access its value, or use methods that handle missing keys gracefully.  For example:

```php
$myArray = [];
$myArray["foo"] = 1;
$myArray[1] = 2;

if (array_key_exists(0, $myArray)) {
  echo $myArray[0];
} else {
  echo "Key 0 not found";
}

// Or using isset():

if (isset($myArray[0])) {
    echo $myArray[0];
} else {
    echo "Key 0 not found";
}
```

For string keys, ensure consistent key usage (casing, whitespace) or use `trim()` to handle potential leading/trailing spaces before using them as keys.

By consistently checking for key existence, you make your code more robust and less prone to these subtle, yet potentially significant, errors.