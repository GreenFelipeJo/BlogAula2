<?php
class Posts extends Controller{
    public function __construct()
    {
        if(!Sessao::estaLogado()){
            Url::redirecionar('usuarios/logar');
        }//fim do if
        
    }//fim do funão contrutor

    public function index(){

        $this->view('posts/index');

    }//fim da função index
    public function cadastrar(){

        $this->view('posts/cadastrar');

    }//fim da função index
}//fim da classe Posts

?>