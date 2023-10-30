<?php

abstract class test1 {
    abstract function test();
}

abstract class test2 {
    abstract function test2();
}


class class1 extends test1, test2  {
    function test(){

    }
}