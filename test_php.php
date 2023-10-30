<?php

$arr3 = ['name'=>"nitesh Pawar", 'name1'=>'yogesh','ab'=>'Rakesh'];






interface Interface1 {
    public function method1();
}

interface Interface2 {
    public function method2();
}

class MyClass implements Interface1, Interface2 {
    public function method1() {
        // Implementation for method1
    }

    public function method2() {
        // Implementation for method2
    }
}
