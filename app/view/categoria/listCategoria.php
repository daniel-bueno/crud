<?php require_once "../header.php" ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
    </nav>
    <div class="container">
        <h4 class="text-dark text-center mt-5 mb-4">Lista de Categorias</h4>
        <div class="row">
            <div class="col-md-5 col-xs-12">
                <button type="button" class="btn btn-danger" onclick="window.location.href = '../produto/listProduto.php'">Listar Produtos</button>
                <button type="button" class="btn btn-primary" onclick="window.location.href = 'formCategoria.php'">Cadastrar Categoria</button>
            </div>
            <div class="col-md-12 col-xs-12 mt-4 mb-5">
                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Mark</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <td>Jacob</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <td>Larry</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php require_once "../footer.php" ?>