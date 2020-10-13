<?php
final class Paciente{

    private $nombre;
    private $apellido;
    private $documento;
    private $ms;//Mesajes personalizados

    public function __construct($nombre,$apellido,$documento){
        if($this->isValidName($nombre)){
            $this->nombre=$nombre;
        }
        if($this->isValidName($apellido)){
            $this->apellido=$apellido;   
        }
        if($this->isValidDocument($documento)){
            $this->documento=$documento;
        }
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getDocumento(){
        return $this->documento;
    }
    /*Tests*/
    public function SoloAlpha($valor){
        return ctype_alpha(str_replace(' ','',$valor)); 
    }
    public function AlphaNum($valor){
        return ctype_alnum($valor);
    }
    public function No_Vacio($valor){
        return !empty($valor);
    }
    public function has10($valor){
       return strlen($valor)<=10;
    }
    public  function isValidName($valor){
        return $this->SoloAlpha($valor) && $this->No_Vacio($valor);
    }
    public  function isValidDocument($valor){
        return $this->No_Vacio($valor) && $this->has10($valor)&& $this->AlphaNum($valor);   
    }
    public  function isValid(){
        return $this->isValidName($this->nombre) && $this->isValidName($this->apellido)&& $this->isValidDocument($this->documento);   
    }
}