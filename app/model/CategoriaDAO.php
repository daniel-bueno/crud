<?php
require_once '../../config/connect/Connect.php';
require_once 'repository/Categoria.php';

class CategoriaDAO extends Categoria
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
            $sttm = $this->connect->prepare('INSERT INTO categoria (`descricao`) VALUES (:desc)');
            $sttm->bindValue(':desc', $this->getDescricao());
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
            $sttm = $this->connect->prepare('SELECT * FROM categoria');
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
            $sttm = $this->connect->prepare('UPDATE `categoria` SET `descricao` = :desc WHERE (`id_categoria` = :id)');
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
            $sttm = $this->connect->prepare('DELETE FROM `categoria` WHERE (`id_categoria` = :id)');
            $sttm->bindValue(':id', $this->getId());
            $sttm->execute();
            return $sttm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            var_dump($e);
            return false;
        }
    }
}