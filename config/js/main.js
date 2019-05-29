$(document).ready(function() {
    $('.table').dataTable({
        "oLanguage": {
            "sLengthMenu": "Mostrar _MENU_ registros por página",
                "sZeroRecords": "Nenhum registro encontrado",
                "sInfo": "Mostrando _START_ / _END_ de _TOTAL_ registro(s)",
                "sInfoEmpty": "Mostrando 0 / 0 de 0 registros",
                "sInfoFiltered": "(filtrado de _MAX_ registros)",
                "sSearch": "Pesquisar: ",
                "oPaginate": {
                "sFirst": "Início",
                    "sPrevious": "Anterior",
                    "sNext": "Próximo",
                    "sLast": "Último"
            }
        },
        "aaSorting": [[0, 'desc']],
            "aoColumnDefs": [
            {"sType": "num-html", "aTargets": [0]}

        ]
    });
});

function validation() {
    var result = true;
    $('input[required], select[required]').each(function (i) {
        if ($(this).val() === "") {
            alert('Campo ' + $(this).parent().prev().text() + ' não preenchido');
            $(this).focus();
            result = false;
            return false;
        }
    });
    return result;
}

function salvarProduto() {
    if(!validation())
        return;

    var dadosProduto = {
        'tipo': 'PRODUTO',
        'descricaoProduto': $('#descricaoProduto').val(),
        'categoria': $('#categoria').val()
    };

    $.post('http://Crud/app/controller/create.php', dadosProduto, function (data) {
        if (data.response) {
            alert('Produto cadastrado com sucesso!');
            window.location.href = 'http://Crud/app/view/categoria/listCategoria.php';
        } else {
            alert('Produto não cadastrado. Contate o desenvolvedor!');
            window.location.href = 'http://Crud/app/view/categoria/formCategoria.php';
        }
    });
}

function salvarCategoria() {
    if(!validation())
        return;

    var dadosCategoria = {
        'tipo': 'CATEGORIA',
        'descricao': $('#descricaoCategoria').val()
    };
    $.post('../../controller/create.php', dadosCategoria, function (data) {
        if (data.response) {
            alert('Categoria cadastrada com sucesso!');
        } else {
            alert('Categoria não cadastrada. Contate o desenvolvedor!');
        }
    });
}
