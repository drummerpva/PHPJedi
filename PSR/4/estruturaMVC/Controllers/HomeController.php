<?php
namespace Controllers;
use \Core\Controller;
    class HomeController extends Controller{
        public function index(){
            $anuncios = new \Models\Anuncios();
            $usuarios = new \Models\Usuarios();
            $dados = array(
                'qtd' => $anuncios->getQuantidade(),
                'nome' => $usuarios->getNome(),
                'idade' => $usuarios->getIdade()
            );
            
            $this->loadTemplate('home',$dados);
        }
        
    }
