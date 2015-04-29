<?php

require_once('fwk/controller.php');

class HomeControlador extends Controller {
    function index() {
        $this->render( 'visao/home_produto_visao.php');
    }
}
