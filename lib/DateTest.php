

<?php

use PHPUnit\Framework\TestCase;

class FechaTest extends TestCase{

   public function testFormat(){
       //Verifica el tamaño, solo numeros, distribucion de numeros, los slash, que los dias y los meses sean mayor a 0 y menor a 31 y 12 respectivamente
       $fecha = "30/05/2020";
       $formatoFecha = '/^(0[1-9]|[1-2][0-9]|3[0-1])(\/)(0[1-9]|1[0-2])\2(\d{4})$/';//regex fecha
       $isFine=true;
       $matchFecha=array();
       if ( !preg_match($formatoFecha, $fecha, $matchFecha) ) {
           $isFine=false;
           echo "\nFormato fecha: Incorrecto\n";
       }else{
           echo "\nFormato fecha: Correcto\n";
       }
       $this->assertTrue($isFine);
      return $fecha;  
   }
   /**
    * @depends testFormat
    */
   public function testDia($fecha){
       $datos=explode("/",$fecha);
       $isFine=true;
       if((int)$datos[2]%4!=0 && (int)$datos[1]==2 && (int)$datos[0]>28){
           $isFine=False;
           echo "\nAño bisiesto: Incorrecto\n";
       }elseif((int)$datos[2]%4==0 && (int)$datos[1]==2 && (int)$datos[0]>29){
            $isFine=False;
            echo "\nAño bisiesto días: Incorrecto\n";
       }elseif(((int)$datos[1]==4 || (int)$datos[1]==6 || (int)$datos[1]==9 || (int)$datos[1]==11) && (int)$datos[0]>30){
           $isFine=False;
            echo "\nMes 30 días: Incorrecto\n";
       }else{
            echo "\nLa fecha es correcta\n";
       }
       $this->assertTrue($isFine);
   }


}