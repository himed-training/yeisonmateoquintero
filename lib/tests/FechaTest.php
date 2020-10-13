
<?php


use PHPUnit\Framework\TestCase;

class FechaTest extends TestCase{
    

    public function testLongitud(){
        echo "\n1. Probando Fecha\n";
        $fe="01/09/0000";
        echo "\nProbando longitud de la fecha: ";
        $this->assertTrue(Fecha::has10($fe));
        echo "ok\n";
    }    
    
    public function testslash(){
        //Verifica que contenga slash
        $fe="01/09/0000";
        echo "\n2. Probando slash:";
        $this->assertTrue(Fecha::hasSlash($fe));
        echo "ok\n";
    }

    
    public function testFormat(){
        //Verifica solo numeros, distribucion de numeros, los slash
        echo "\n3. Validando formato de la fecha (DD/MM/AAAA)(NN/NN/NNNN):";
        $fe="01/09/0000";
        $fecha=new Fecha($fe);
        $this->assertTrue(Fecha::hasFormat($fe));
        echo "ok\n";
    }
    
    public function testNumerosM0(){
        //Verifica que los numeros sean mayores a cero
       $fe= "00/00/2020";
       echo "\n4. Probando  Año > 0: ";
       $this->assertTrue(Fecha::isGreaterThan0(2,$fe));
       echo "ok\n";   
    }
    public function testNumerosMM0(){
        //Verifica que los numeros sean mayores a cero
        $fe="00/01/0000";
        echo "\n5. Probando mes > 0: ";
        $this->assertTrue(Fecha::isGreaterThan0(1,$fe));
        echo "ok\n";
    }
    public function testNumerosMD0(){
        //Verifica que los numeros sean mayores a cero
        $fe="01/00/0000";
        echo "\n6. Probando dia > 0: ";
        $this->assertTrue(Fecha::isGreaterThan0(0,$fe));
        echo "ok\n";
    }
    
    public function testMes(){
        $fe="01/12/2020";
        echo "\n7. Probando mes <=12: ";
        $this->assertTrue(Fecha::isLessEqualsThanN(1,12,$fe));
        echo "ok\n";
    }
    
    public function testDia(){
        echo "\n8. Probando dias del mes ";
        $fe="29/02/2020";
        $fecha=new Fecha($fe);
       $this->assertTrue($fecha->isDayok($fe));
        echo "ok\n";
    }
    
    public function testDate(){
        echo "\n9. ¿Es valida la fecha? ";
        $fe="29/02/2020";
        $fecha=new Fecha($fe);
       $this->assertTrue($fecha->isDateValid($fe));
        echo "Si\n";
    }
    
}