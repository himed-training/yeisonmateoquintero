<?php
final class Consulta{
    /*ATRIBUTOS*/
    private $paciente;
    private $fecha;
    private $ms;//Mesajes personalizados


    public function __construct($paciente,$fecha){
        if($this->validPaciente($paciente)){
            $this->paciente=$paciente;
        }
        if($this->validFecha($fecha)){
            $this->fecha=$fecha;
        }
    }
    public function getPaciente(){
        return $this->paciente;
    }
    public function getFecha(){
        return $this->fecha;
    }
    public function isClassFecha($fecha){
        return is_a($fecha, 'Fecha');
    }
    public function isClassPaciente($paciente){
        return is_a($paciente, 'Paciente');
    }
    public function No_Vacio($valor){
        return !empty($valor);
    }
    public function validDataPaciente($paciente){
        return $paciente->isValid();
    }
    public function validDataFecha($fecha){
        return $fecha->isValid();
    }
    public function validPaciente($paciente){
        return $this->No_Vacio($paciente)&&$this->isClassPaciente($paciente)&&$this->validDataPaciente($paciente);
    }
    public function validFecha($fecha){
       return $this->No_Vacio($fecha)&&$this->isClassFecha($fecha)&&$this->validDataFecha($fecha);
    }
    public function isValid($fecha,$Paciente){
        return $this->validFecha($fecha) && $this->validPaciente($Paciente);
    }


}