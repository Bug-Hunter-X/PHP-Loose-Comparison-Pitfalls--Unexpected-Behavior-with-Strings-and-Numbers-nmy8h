In PHP, a common yet subtle error arises when dealing with string comparisons involving loosely typed variables.  Consider this scenario:

```php
$value = "10";
$number = 10;
if ($value == $number) {
    echo "Values are equal";
} else {
    echo "Values are not equal";
}
```

This code will output "Values are equal" because PHP's loose comparison (`==`) performs type juggling. It converts the string "10" to an integer 10 before comparing, leading to unexpected results if strict type checking is needed.

Another situation occurs with array keys. If you try to access an array element using a non-string key that PHP can't implicitly convert, you will encounter a warning rather than an error: 
```php
$arr = [10 => 'ten'];
echo $arr[10]; // Works fine
echo $arr[10.0]; //Warning: Undefined array key "10.0"
```