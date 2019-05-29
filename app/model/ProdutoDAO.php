<?php
require_once '../../../config/connect/Connect.php';
require_once 'repository/Produto.php';

class ProdutoDAO extends Produto
{
    private $connect;

    public function __construct()
    {
        $conn = Connect::getInstance();
        $this->connect = $conn->getConnection();
    }

    public function create()
    {
        try {
            $sttm = $this->connect->prepare('INSERT INTO produto` (`descricao`, `id_categoria`) VALUES (:desc, :cat)');
            $sttm->bindValue(':desc', $this->getDescricao());
            $sttm->bindValue(':cat', $this->getCategoria());
            $sttm->execute();
            return $sttm->rowCount() > 0 ? true : false;
        } catch (Exception $e) {
            var_dump($e);
            return false;
        }
    }

    public function read()
    {
        try {
            $sttm = $this->connect->prepare('
                SELECT 
                    id_produto,
                    nome as nome_produto,
                    descricao as categoria
                FROM
                    produto AS p
                        INNER JOIN
                    categoria AS c ON p.id_categoria = c.id_categoria;');
            $sttm->execute();
            return $sttm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            var_dump($e);
            return false;
        }
    }

    public function update()
    {
        try {
            $sttm = $this->connect->prepare('UPDATE `produto` SET `descricao` = :desc WHERE (`id_produto` = :id)');
            $sttm->bindValue(':desc', $this->getDescricao());
            $sttm->bindValue(':id', $this->getId());
            $sttm->execute();
            return $sttm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            var_dump($e);
            return false;
        }
    }

    public function delete()
    {
        try {
            $sttm = $this->connect->prepare('DELETE FROM `produto` WHERE (`id_produto` = :id)');
            $sttm->bindValue(':id', $this->getId());
            $sttm->execute();
            return $sttm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            var_dump($e);
            return false;
        }
    }
}