<?php

trait Trait1 
{
    public function method1() {
        echo "Method 1 from Trait 1";
    }
}

trait Trait2 {
    public function method2() {
        echo "Method 2 from Trait 2";
    }
}

class MyClass {
    use Trait1, Trait2;
    
    public function myMethod() {
        $this->method1();
        $this->method2();
    }
}

$obj = new MyClass();
$obj->myMethod();

?> 
