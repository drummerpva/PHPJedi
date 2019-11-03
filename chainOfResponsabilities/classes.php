<?php
class Carga{
    private $peso;
    public function __construct($p){
        $this->peso =$p;
    }
    public function getPeso(){
        return $this->peso;
    }
}
class Moto{
    private $sucessor;
    public function setSucessor($s){
        $this->sucessor = $s;
    }
    public function transporte(Carga $carga){
        if($carga->getPeso() <= 500){
            echo "Levou de MOTO";
        }else{
            $this->sucessor->transporte($carga);
        }
    }
}
class Carro{
    private $sucessor;
    public function setSucessor($s){
        $this->sucessor = $s;
    }
    public function transporte(Carga $carga){
        if($carga->getPeso() <= 5000){
            echo "Levou de CARRO";
        }else{
            $this->sucessor->transporte($carga);
        }
    }
}
class Caminhao{
    private $sucessor;
    public function setSucessor($s){
        $this->sucessor = $s;
    }
    public function transporte(Carga $carga){
        if($carga->getPeso() <= 30000){
            echo "Levou de CAMINHAO";
        }else{
            echo "Não foi possivel levar a carga!";
        }
    }
}
