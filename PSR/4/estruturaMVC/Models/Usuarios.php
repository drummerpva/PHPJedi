<?php
namespace Models;
use \Core\Model;
    class Usuarios extends Model{
        public function getNome(){
            return "Douglas Poma";
        }
        public function getIdade(){
            return 25;
        }
    }