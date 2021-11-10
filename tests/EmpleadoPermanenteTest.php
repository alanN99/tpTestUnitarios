<?php	
require_once 'EmpleadoTest.php';
class EmpleadoPermanenteTest extends EmpleadoTest
{    
    protected function crear($n = "Fulano", $ap = "de Tal", $d = 30123456, $s = 10000, $f = null)    
    {
        $ep = new \App\EmpleadoPermanente($n, $ap, $d, $s, $f);
        return $ep;
    }    
   
}
?>