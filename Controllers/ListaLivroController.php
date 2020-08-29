<?php
    namespace Controllers;

    class ListaLivroController extends Controller{
        public function __construct(){
            $this->view = new \Views\View('ListaLivro/listaLivro');
        }

        public function execute(){
            $this->view->render(array('titulo'=>'Listar Livro',
                                      'pageCss'=>(array(INCLUDE_PATH_VIEWS.'Pages/ListaLivro/listaLivro'))));
        }
    }
?>