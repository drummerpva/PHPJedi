<?php

class Database {

    protected $db;

    public function __construct() {
        try {
            $this->db = new PDO("mysql:dbname=jedi_dao;host=localhost;charset=utf8", "root", "");
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            die("Erro: " . $ex->getMessage());
        }
    }

}

class UsuarioDAO extends Database {

    public function __construct() {
        parent::__construct();
    }

    public function get($fields = array(), $where = array()) {
        $usuarios = array();
        $valores = array();
        if (count($fields) == 0) {
            $fields = array("*");
        }

        $sql = "SELECT " . implode(",", $fields) . " FROM usuario ";
        if (count($where) > 0) {
            $tabelas = array_keys($where);
            $valores = array_values($where);
            $comp = array();
            foreach ($tabelas as $tabela) {
                $comp[] = $tabela . " = ? ";
            }
            $sql .= implode(" AND ", $comp);
        }
        $sql = $this->db->prepare($sql);
        $sql->execute($valores);
        if ($sql->rowCount() > 0) {
            foreach ($sql->fetchAll() as $item){
                $usuarios[] = new Usuario($item);
            }
        }

        return $usuarios;
    }
    public function insert(Usuario $usuario){
        $fields = array(
            "name"=>$usuario->getName(),
            "email"=>$usuario->getEmail(),
            "pass"=>$usuario->getPass()
        );
        if(count($fields) > 0){
            $valores = array();
            for($q=0;$q<count(array_keys($fields));$q++){
                $valores[] = "?";
            }
            
            $sql = "INSERT INTO usuario (".
                    implode(",",array_keys($fields)).") "
                    . "VALUES(".implode(",",$valores).")";
            $sql = $this->db->prepare($sql);
            $sql->execute(array_values($fields));
        }
    }
    

}

class Usuario {

    private $name;
    private $email;
    private $pass;
    private $id;

    public function __construct($array) {
        $this->name = (isset($array['name'])) ? $array['name'] : "";
        $this->email = (isset($array['email'])) ? $array['email'] : "";
        $this->pass = (isset($array['pass'])) ? $array['pass'] : "";
        $this->id = (isset($array['id'])) ? $array['id'] : "";
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }
    public function getPass() {
        return $this->pass;
    }

    public function getId() {
        return $this->id;
    }

}
