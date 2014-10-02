<?php
class Foo
{
    public function currentClass()
    {
        echo get_class($this);
    }

    public function declaredClass()
    {
        echo __CLASS__;
    }
}

class Bar extends Foo {}

$bar = new Bar();
$bar->declaredClass();
$bar->currentClass();
