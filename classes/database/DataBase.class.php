<?php

header("Content-Type: text/html; charset=UTF-8", true);
require_once(dirname(__FILE__) . '/../erros/DbException.class.php');

class DataBase extends PDO {

    private $bdType = "mysql";
    private $bdhost = "";
    private $bduser = "";
    private $bdpassword = '';
    private $bdbanco = "";
    private $persistent = false;
    private static $conexao;

    function __construct() {
        $this->inf();
        try {
            $options = array(PDO :: MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
            parent::__construct($this->bdType . ":host=" . $this->bdhost . ";dbname=" . $this->bdbanco, $this->bduser, $this->bdpassword, $options);
            parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Erro ao conectar: ' . $e->getMessage();
        }
    }

    function inf() {
        include "inf.php";
        $this->bdhost = $bdhost;
        $this->bduser = $bduser;
        $this->bdpassword = $bdpassword;
        $this->bdbanco = $bdbanco;
    }

    public static function getInstance() {
        // Se o a instancia nÃ£o existe eu faÃ§o uma
        if (!isset(self::$conexao)) {
            try {
                self::$conexao = new DataBase();
            } catch (Exception $e) {
                echo 'Erro ao conectar';
                exit();
            }
        }
        // Se jÃ¡ existe instancia na memÃ³ria eu retorno ela
        return self::$conexao;
    }

}

?>