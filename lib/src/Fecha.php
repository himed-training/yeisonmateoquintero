<?php
final class Fecha{

    private $fecha;
    private $ms;
    public function __construct($fecha){
        if($this->isDateValid($fecha)){
             $this->fecha = $fecha;
        }        
    }
    
    public function getFecha(){
        return $this->fecha;
    }
    
    public function getms(){
        return $this->ms;
    }
    public function getMonth(){
         $datos= explode("/", $this->fecha);
         return (int) $datos[1];
    }
    
    public function getYear(){
         $datos= explode("/", $this->fecha);
         return (int) $datos[2];
    }

    public function getDay(){
         $datos= explode("/", $this->fecha);
         return (int) $datos[0];
    }
    /*FUNCIONES DE VALIDACIÓN*/
    public function has10($fecha){
        return strlen($fecha)==10;
    }
    
    public function hasSlash($fecha){
        return substr_count($fecha, '/')==2;
    }
    
    public function hasFormat($fecha){
        $formatoFecha= '/^([0-9][0-9])(\/)([0-9][0-9])\2(\d{4})$/';//Expresión regular de fecha
        if ( !preg_match($formatoFecha, $fecha, $matchFecha) ) {
            return false;
        }
        return true;
    }

    public function isGreaterThan0($in,$fecha){
         $datos= explode("/", $fecha);
         return (int) $datos[$in]>0;
    }
    
    public function isLessEqualsThanN($in,$n,$fecha){
         $datos= explode("/", $fecha);
         return (int) $datos[$in]<=$n;
    }
    
    public function isDayok($fecha){
        $datos= explode("/", $fecha);
        $cdias=31;
        if((int)$datos[2]%4==0 && (int)$datos[1]==2){
            $this->ms= "Febrero(Año bisiesto): ";
            $cdias=29;
        }elseif((int)$datos[1]==2){
            $this->ms= "Febrero: ";
            $cdias=28;
        }elseif((int)$datos[1]==4 ||(int)$datos[1]==6 || (int)$datos[1]==9 || (int)$datos[1]==11){
            $this->ms= "30 dias: ";
            $cdias=30;
        }else{
            $this->ms= "31 dias: ";
        }
       return (int)$datos[0]<=$cdias;
    }
    public function isDateValid($fecha){
        return $this->has10($fecha) && $this->hasSlash($fecha)&& $this->hasFormat($fecha) && $this->isGreaterThan0(2,$fecha)&& $this->isGreaterThan0(1,$fecha)&& $this->isGreaterThan0(0,$fecha) && $this->isLessEqualsThanN(1,12,$fecha)&& $this->isDayok($fecha);
    }
    public function isValid(){
        return $this->has10($this->fecha) && $this->hasSlash($this->fecha)&& $this->hasFormat($this->fecha) && $this->isGreaterThan0(2,$this->fecha)&& $this->isGreaterThan0(1,$this->fecha)&& $this->isGreaterThan0(0,$this->fecha) && $this->isLessEqualsThanN(1,12,$this->fecha)&& $this->isDayok($this->fecha);
    }
}