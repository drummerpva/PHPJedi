<?php
namespace Controllers;
use \Core\Controller;
class GaleriaController extends Controller {

    public function index() {
        $dados = array(
            'qt' => 129
        );
        
        $this->loadTemplate('galeria',$dados);
    }

}
