<?php
class Foo
{
    public function getClassThis()
    {
        echo get_class($this);
    }

    public function getClassNull()
    {
        echo get_class();
    }

    public function classConstant()
    {
        echo __CLASS__;
    }
}

class Bar extends Foo {}

$bar = new Bar();
$bar->classConstant();
$bar->getClassThis();
$bar->getClassNull();
