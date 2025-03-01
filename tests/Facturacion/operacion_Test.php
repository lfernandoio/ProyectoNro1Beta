<?php
declare (strict_types=1);
use PHPUnit\Framework\TestCase;
include "./src/operacion.php";
class operacion_Test extends TestCase{
    public function testFactorial():void{
        $objOpr= new operacion();
        $nFct= $objOpr->suma(20,30);
        $this->assertIsNumeric($nFct);
        $this->assertEquals($nFct,50);
    }
    public function testuno():void
    {
        $this->assertTrue(true);
    }
    public function testdos():void{
        $this->assertTrue(true);
    }

}
