<?php
  class Rotas{

    public static $pag;
    private static $pasta_controller = 'controller';
    private static $pasta_view = 'view';
    public static function get_siteHOME(){
      return Config::SITE_URL . '/dashboard/' . Config::SITE_PASTA;
    }

    public static function get_siteRAIZ(){
      return $_SERVER['DOCUMENT_ROOT'] . '/' .  Config::SITE_PASTA;
    }

    public static function get_siteTemplate(){
      return self::$pasta_view;
    }


    static function get_pagina(){
      if (isset($_GET['pag'])) {
        $pagina = $_GET['pag'];
        self::$pag = explode('/', $pagina);
        $pagina = 'controller/'.self::$pag[0] . '.php';
        if (file_exists($pagina)) {
          include $pagina;
        }else{
          include 'erro.php';
        }
      }else{
        include 'erro.php';
      }
    }
  }
 ?>
