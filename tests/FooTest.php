<?php
/**
 * Created by PhpStorm.
 * User: d.tomasi
 * Date: 27.03.15
 * Time: 12:00
 */

namespace BarNamespace\Tests;

class FooTest extends \PHPUnit_Framework_TestCase {

    public function testInstantiateFromFooNamespace() {

        $obj = new \FooNamespace\Foo();
        $this->assertInstanceOf('\BarNamespace\Foo',$obj);
    }
}
