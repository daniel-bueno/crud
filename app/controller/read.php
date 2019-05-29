<?php

function listaProdutos() {
    require_once '../model/ProdutoDAO.php';
    return (new ProdutoDAO())->read();
}

