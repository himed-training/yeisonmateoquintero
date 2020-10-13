<?php

use PHPUnit\Framework\TestCase;

class ConsultaTest extends TestCase{
	public function testPacienteNovacio(){
		echo "\nProbando Consulta: ";
		echo "\n21. Probando Paciente (No vacio): ";
		$paciente=new Paciente("Ana Maria","Vergara Posada","1036650967");
        $this->assertTrue(Consulta::No_Vacio($paciente));
        echo "ok\n";	
	}
	public function testFechaNoVacio(){
		echo "\n22. Probando Fecha (No vacio): ";
		$fecha=new Fecha("29/02/2020");
        $this->assertTrue(Consulta::No_Vacio($fecha));
        echo "ok\n";
	}
	public function testPacienteType(){
		echo "\n23. Probando Paciente (Clase): ";
		$paciente=new Paciente("Ana Maria","Vergara Posada","1036650967");
        $this->assertTrue(Consulta::isClassPaciente($paciente));
        echo "ok\n";	
	}
	public function testFechaType(){
		echo "\n24. Probando Fecha (Clase): ";
		$fecha=new Fecha("29/02/2020");
        //$fecha=date("dd/mm/yyyy");
        $this->assertTrue(Consulta::isClassFecha($fecha));
        echo "ok\n";
	}
	public function testValidPaciente(){
		echo "\n25. Probando Paciente (Atributos validos): ";
		$paciente=new Paciente("Ana Maria","Vergara Posada","1036650967");
        $this->assertTrue(Consulta::validDataPaciente($paciente));
        echo "ok\n";	
	}
	public function testValidFecha(){
		echo "\n26. Probando Fecha (Atributos Validos): ";
		$fecha=new Fecha("29/12/2020");
		$paciente=new Paciente("Ana Maria","Vergara Posada","1036650967");
		$consulta=new Consulta($paciente,$fecha);
        $this->assertTrue($consulta->validDataFecha($fecha));
        echo "ok\n";
	}
	public function testPaciente(){
		echo "\n27. ¿Es valido el paciente?: ";
		$fecha=new Fecha("29/02/2020");
		$paciente=new Paciente("Ana Maria","Vergara Posada","1036650967");
		$consulta=new Consulta($paciente,$fecha);
        $this->assertTrue($consulta->validPaciente($paciente));
        echo "ok\n";	
	}
	public function testFecha(){
		echo "\n28. ¿Es valida la fecha? ";
		$fecha=new Fecha("29/02/2020");
		$paciente=new Paciente("Ana Maria","Vergara Posada","1036650967");
		$consulta=new Consulta($paciente,$fecha);
        $this->assertTrue($consulta->validFecha($fecha));
        echo "ok\n";
	}
	public function testConsulta(){
		echo "\n29. ¿Es valida la consulta? ";
		$fecha=new Fecha("29/02/2020");
		$paciente=new Paciente("Ana Maria","Vergara Posada","1036650967");
		$consulta=new Consulta($paciente,$fecha);
        $this->assertTrue($consulta->isValid($fecha,$paciente));
        echo "ok\n";
	}
}