<?php
require_once 'ConfigPDO.php';

class Connect extends ConfigPDO {

    private static $_instance;

    public static function getInstance()
    {
        if(!self::$_instance) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    private function __construct()
    {
        $this->getConfigPDO();
    }

    // clone é vazio para evitar a duplicação de conexão
    private function __clone(){}
}


