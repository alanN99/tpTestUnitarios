<?php 

abstract class EmpleadoTest extends \PHPUnit\Framework\TestCase
{
    public function testSePuedeCrearConNombreVacio()
    {
        $this->expectException(\Exception::class);
        $e = $this->crear(null);
        $this->assertEquals(null, $e->getNombreApellido());
        $p = $this->crear(null);
        $this->assertEquals(null, $p->getNombreApellido());
    }

    public function testSePuedeCrearConApellidoVacio()
    {
        $this->expectException(\Exception::class);
        $e = $this->crear("Fulano",null);
        $this->assertEquals("Fulano", null, $e->getNombreApellido());
        $p = $this->crear('Fulano',null);
        $this->assertEquals("Fulano", null, $p->getNombreApellido());
    }
    
    public function testSePuedeCrearConDNICeroOVacio()
    {
        $this->expectException(\Exception::class);
        $e = $this->crear("Fulano","de Tal",0);
        $this->assertEquals("Fulano","de Tal", 0, $e->getDNI());
        $e = $this->crear("Fulano","de Tal",null);
        $this->assertEquals("Fulano","de Tal", null, $e->getDNI());
        $p = $this->crear("Fulano","de Tal",0);
        $this->assertEquals("Fulano","de Tal", 0, $p->getDNI());
        $p = $this->crear("Fulano","de Tal",null);
        $this->assertEquals("Fulano","de Tal",null, $p->getDNI());
    }

    public function testSePuedeCearConSalarioVacio()
    {
        $this->expectException(\Exception::class);
        $e = $this->crear("Fulano","de Tal",30123456,null);
        $this->assertEquals("Fulano","de Tal", 30123456, null, $e->getSalario());
        $p = $this->crear("Fulano","de Tal",30123456,null);
        $this->assertEquals("Fulano","de Tal", 30123456, null, $p->getSalario());
    }

    public function testSePuedeCrearConDNIConLetras()
    {
        $this->expectException(\Exception::class);
        $e = $this->crear("Fulano","de Tal", '3012asd3456');
        $this->assertEquals("Fulano","de Tal", '3012asd3456', $e->getDNI());
        $p = $this->crear("Fulano","de Tal", '3012asd3456');
        $this->assertEquals("Fulano","de Tal", '3012asd3456', $p->getDNI());
    }
    
    // public function testSePuedeCrearConSectorVacio()
    // {
    //     $this->expectException(\Exception::class);
    //     $e = $this->crearEmpleadoEventual("Fulano","de Tal", 30123456, 10000, "No especificado");
    //     $this->assertEquals("Fulano","de Tal", 30123456, 10000, "No especificado", $e->getSector());
    // }
    
}

?>