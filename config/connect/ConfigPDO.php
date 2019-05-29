<?php

class ConfigPDO
{
    private $connection;
    private $dbhost;
    private $dbuser;
    private $dbpass;
    private $dbname;

    public function getConfigPDO()
    {
        try{
            $this->dbhost = 'localhost';
            $this->dbuser = 'root';
            $this->dbpass = '147852';
            $this->dbname = 'teste';

            $this->connection = new PDO(
                'mysql:host='.$this->dbhost.';dbname='.$this->dbname,
                $this->dbuser,
                $this->dbpass
            );

            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection->exec("SET CHARACTER SET utf8");

        }catch(PDOException $e){
            echo "Falha ao conectar com o BD: ". $e->getMessage();
        }
    }

    public function getConnection(){
        return $this->connection;
    }
}