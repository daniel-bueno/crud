<?php
require_once "../header.php";
require_once "../../model/CategoriaDAO.php";

$categorias = (new CategoriaDAO())->read();
if (empty($categorias))
    $msg = 'Nenhuma categoria cadastrada';
else
    $msg = 'Selecione';
?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="listProduto.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cadastrar</li>
        </ol>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12 mt-1 mb-5">
                <div class="card m-5">
                    <div class="card-body card">
                        <h5 class="card-title text-primary text-center">{{ Cadastrar Novo }} Produto</h5>
                        <form class="m-3">
                            <div class="form-group row">
                                <label for="descricaoProduto" class="col-sm-2 col-form-label">Descrição</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="descricaoProduto" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="categoria" class="col-sm-2 col-form-label">Categoria</label>
                                <div class="col-sm-3">
                                    <select class="form-control" id="categoria" required>
                                        <option value=""><?= $msg ?></option>
                                        <?php foreach ($categorias as $categoria) { ?>
                                            <option value="<?= $categoria['id_categoria'] ?>"><?= $categoria['descricao'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="form-group offset-2 col-sm-4 col-md-4">
                                    <button type="button" onclick="salvarProduto()" class="btn btn-primary">SALVAR</button>
                                    <button type="button" onclick="window.location.href = 'listProduto.php'" class="btn btn-danger">VOLTAR</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php require_once "../footer.php" ?>