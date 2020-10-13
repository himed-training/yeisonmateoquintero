<?php

use PHPUnit\Framework\TestCase;

class PacienteTest extends TestCase{

	public function testIDEmpty(){
		echo "\nProbando Paciente: ";
		echo "\n10. Probando ID (No vacio): ";
        $this->assertTrue(Paciente::No_Vacio("1036650967"));
        echo "ok\n";	
	}
	public function testIDLongitud(){
		echo "\n11. Probando longitud de ID: ";
        $this->assertTrue(Paciente::has10("1036650967"));
        echo "ok\n";
	}
	public function testNumID(){
		echo "\n12. Probando Solo alfanumerico de ID: ";
		$this->assertTrue(Paciente::AlphaNum("sdaf1356474"));
		 echo "ok\n";
	}
	public function testNameEmpty(){
		echo "\n13. Probando Nombre (No vacio): ";
        $this->assertTrue(Paciente::No_Vacio(" "));
        echo "ok\n";	
	}
	public function testNameAlpha(){
		echo "\n14. Probando Nombre (Solo letras): ";
        $this->assertTrue(Paciente::SoloAlpha("Ana Maria"));
        echo "ok\n";	
	}
	public function testLastNameEmpty(){
		echo "\n15. Probando Apellido (No vacio): ";
        $this->assertTrue(Paciente::No_Vacio("Vergara Posada"));
        echo "ok\n";	
	}
	public function testLastNameAlpha(){
		echo "\n16. Probando Apellido (Solo letras): ";
        $this->assertTrue(Paciente::SoloAlpha("Vergara Posada"));
        echo "ok\n";	
	}
	public function testName(){
		echo "\n17.  ¿Es valido el nombre?";
		$Paciente=new Paciente("Ana Maria","Vergara Posada","1036650967");
        $this->assertTrue($Paciente->isValidName("Ana Maria"));
        echo "ok\n";
	}
	public function testLastName(){
		echo "\n18.  ¿Es valido el Apellido?";
		$Paciente=new Paciente("Ana Maria","Vergara Posada","1036650967");
        $this->assertTrue($Paciente->isValidName("Vergara Posada"));
        echo "ok\n";
    }
    public function testID(){
    	echo "\n19.  ¿Es valido el Documento?";
    	$Paciente=new Paciente("Ana Maria","Vergara Posada","1036650967");
    	$this->assertTrue($Paciente->isValidDocument("1036650967"));
        echo "ok\n";
    }
    public function testPaciente(){
    	echo "\n20.  ¿Es valido el Paciente?";
    	$Paciente=new Paciente("Ana Maria","Vergara Posada","1036650967");
    	$this->assertTrue($Paciente->isValid());
        echo "ok\n";
    }
}