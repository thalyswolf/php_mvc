<?php
  class Conexao extends Config{
    private $host, $user, $password, $banco;
    protected $obj, $itens = array();
    protected $prefix;
    function __construct(){
      $this->host = self::DB_HOST;
      $this->user = self::DB_USER;
      $this->password = self::DB_PASSWORD;
      $this->banco = self::DB_NAME;
      $this->prefix = self::DB_PREFIX;

      try {
        if ($this->conectar() == null) {
          $this->conectar();
        }
      } catch (Exception $e) {
        exit($e->getMessage().'<h2>Erro ao conectar</h2>');
      }
    }


    private function conectar(){
      $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
      );
      $link = new PDO("mysql:host={$this->host};dbname={$this->banco}",
                      $this->user, $this->password, $options);
      return $link;
    }

    function executeSQL($query, array $params = NULL){
      $this->obj = $this->conectar()->prepare($query);
      return $this->obj->execute();
    }

    function listarDados(){
      return $this->obj->fetch(PDO::FETCH_ASSOC);
    }

    function totalDados(){
      return $this->obj->rowCount();
    }
    function getItens(){
      return $this->itens;
    }
  }
 ?>
