<?php
class Produtos{
    private $array;
    private $output;
    public function getLista(){
        $this->array = array(array("nome"=>"Douglas","id"=>1),array("nome"=>"Fulano", "id"=>2));
    }
    public function setOutput(OutputInterface $outputType){
        $this->output = $outputType;
    }
    public function getOutput(){
        return $this->output->load($this->array);
    }
}
interface OutputInterface{
    public function load($array);
}
class JsonOutput implements OutputInterface{
    public function load($array){
        return json_encode($array);
    }
}
class ArrayOutput implements OutputInterface{
    public function load($array){
        return $array;
    }
}