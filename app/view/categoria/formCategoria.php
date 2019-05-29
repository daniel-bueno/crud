<?php require_once "../header.php" ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="listCategoria.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cadastrar</li>
        </ol>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12 mt-1 mb-5">
                <div class="card m-5">
                    <div class="card-body card">
                        <h5 class="card-title text-primary text-center">{{ Cadastrar Novo }} Categoria</h5>
                        <form class="m-3">
                            <div class="form-group row">
                                <label for="descricaoCategoria" class="col-sm-2 col-form-label">Descrição</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="descricaoCategoria" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="form-group offset-2 col-sm-4 col-md-4">
                                    <button type="button" onclick="salvarCategoria()" class="btn btn-primary">SALVAR</button>
                                    <button type="button" onclick="window.location.href = 'listCategoria.php'" class="btn btn-danger">VOLTAR</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php require_once "../footer.php" ?>