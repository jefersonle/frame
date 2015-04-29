<?php

/**
* Classe de visao que renderiza os arquivos de recurso HTML/PHP
* Define que o modelo sera usado pela visao a partir de um array $data
**/
class View {
    public function render($viewName, $data = array()) {
        require_once $viewName;
    }
}
