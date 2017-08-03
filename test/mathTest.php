<?php
/**
 * Created by PhpStorm.
 * User: koshpaevsv
 * Date: 02.08.17
 * Time: 18:11
 */

require __DIR__ . "/../Math.php";

use PHPUnit\Framework\TestCase;

class TestMath extends TestCase
{
    public function testWhat() {
        $class = new Math();
        $this->assertTrue($class->ent());
        $this->assertNotNull($class->plus(12));
        $this->assertLessThan(200,$class->getNum(),"Не удовлетвоярет условиям");
    }

}
