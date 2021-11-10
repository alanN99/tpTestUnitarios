<?php	
require_once 'EmpleadoTest.php';
class EmpleadoPermanenteTest extends EmpleadoTest
{    
    protected function crear($n = "Fulano", $ap = "de Tal", $d = 30123456, $s = 10000, $f = null)    
    {
        $ep = new \App\EmpleadoPermanente($n, $ap, $d, $s, $f);
        return $ep;
    }    

    public function testIngresoTotal()
    {
        $this->expectException(\Exception::class);
        $p = $this->crear("Fulano","de Tal",30123456,10000, new \DateTime('2021-12-01'));
        $this->assertEquals("Fulano","de Tal", 30123456, 10000, new \DateTime('2021-12-01'), $p->calcularIngresoTotal());
    }

    public function testFechaIngreso()
    {
        $this->expectException(\Exception::class);
        $p = $this->crear("Fulano","de Tal",30123456,10000, new \DateTime('2021-12-01'));
        $this->assertEquals("Fulano","de Tal", 30123456, 10000, new \DateTime('2021-12-01'), $p->getFechaIngreso());
    }

    public function testPruebaCalculoComision()
    {
        $this->expectException(\Exception::class);       
        $p = $this->crear("Fulano","de Tal",30123456, 10000, new \DateTime('2021-12-01'));
        $this->assertEquals("Fulano","de Tal", 30123456, 10000, new \DateTime('2021-12-01'), $p->calcularComision());
    }
    
    public function testCalcularAntigueadad()
    {
        $this->expectException(\Exception::class);       
        $p = $this->crear("Fulano","de Tal",30123456, 10000, new \DateTime('2021-12-01'));
        $this->assertEquals("Fulano","de Tal", 30123456, 10000, new \DateTime('2021-12-01'), $p->calcularAntiguedad());
    }
   
}
?>