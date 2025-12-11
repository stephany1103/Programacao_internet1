<?php


require_once __DIR__ . '/../models/usuario.php';


class LoginController {


    private $usuarioModel;


    public function __construct() {
        $this->usuarioModel = new Usuario();
    }


    public function index() {
        include __DIR__ . '/../views/login.php';
    }


    public function login() {


        if(isset($_POST['email']) && isset($_POST['senha'])) {


            if(!empty(trim($_POST['email'])) && !empty(trim($_POST['senha']))) {


                $usuario = $this->usuarioModel->login($_POST['email'], $_POST['senha']);


                if($usuario) {


                    if(!isset($_SESSION)) {
                        session_start();
                    }


                    $_SESSION['id'] = $usuario['id'];
                    $_SESSION['nome'] = $usuario['nome'];


                    include __DIR__ . '/../views/painel.php';
                    return;


                } else {
                    include __DIR__ . '/../views/erro.php';
                    return;
                }


            } else {
                include __DIR__ . '/../views/erro.php';
                return;
            }
        }
    }


    public function logout() {
        if(!isset($_SESSION)) {
            session_start();
        }
        session_destroy();
        include __DIR__ . '/../views/login.php';        
    }
}
?>  
