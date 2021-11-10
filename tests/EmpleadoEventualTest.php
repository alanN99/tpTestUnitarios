<?php 
require_once 'EmpleadoTest.php';
class EmpleadoEventualTest extends EmpleadoTest
{
    protected function crear($n = "Fulano", $ap = "de Tal", $d = 30123456, $s = 10000, $m = ([-100,200,300]))    
        {        
            $ee = new \App\EmpleadoEventual($n, $ap, $d, $s, $m);         
            return $ee;        
        }       
    
    public function testPruebaCalculoComision()
    {
        $this->expectException(\Exception::class);
        $e = $this->crear("Fulano","de Tal", 30123456, 10000, array([-100,200,300]));
        $this->assertEquals("Fulano","de Tal", 30123456, 10000, array([-100,200,300]), $e->calcularComision());
    }
}

?>