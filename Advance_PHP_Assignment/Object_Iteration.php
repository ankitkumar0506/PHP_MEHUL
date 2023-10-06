<?php
// In PHP, you can iterate through a list of items in an object using the foreach statement By default, 
// all visible properties of the object will be used for the iteration Here’s an example:

class MyClass 
{
    public $var1 = 'value 1';
    public $var2 = 'value 2';
    public $var3 = 'value 3';
    
    function iterateVisible() {
        echo "MyClass::iterateVisible:\n";
        foreach ($this as $key => $value) {
            print "$key => $value\n";
        }
    }
}

$class = new MyClass();

foreach ($class as $key => $value) {
    print "$key => $value\n";
}

echo "\n";

$class->iterateVisible();

?>