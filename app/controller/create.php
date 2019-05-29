<?php

header( 'Cache-Control: no-cache' );
header('Content-type: text/json');

switch ($_POST['tipo']) {
    case 'CATEGORIA':
        criaCategoria();
        break;
    case 'PRODUTO':
        criaProduto();
        break;
    default:
        notFound();
}

function criaCategoria() {
    require_once '../model/CategoriaDAO.php';

    $categoria = new CategoriaDAO();
    $categoria->setDescricao($_POST['descricao']);
    echo json_encode(['response' => $categoria->create()]);
}

function criaProduto() {
    require_once '../model/ProdutoDAO.php';

    $produto = new ProdutoDAO();
    $produto->setDescricao($_POST['descricao']);
    $produto->setCategoria($_POST['categoria']);
    echo json_encode(['response' => $produto->create()]);

}

function notFound() {
    echo json_encode(['response' => false]);
}