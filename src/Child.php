<?php
namespace ChildComposer;

use TrueMe\MapArr;

class Child
{
    public static function process()
    {
        var_dump('This is ChildComposer Child and process');
    }

    public static function callMapping()
    {
        $mapping = new MapArr;

        var_dump("Child composer call mapping", $mapping);
    }
}
