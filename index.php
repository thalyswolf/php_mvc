<?php
  require './lib/autoload.php';
  $smarty = new Template();



  $smarty->assign('GET_TEMPLATE', Rotas::getTemplate());
  $smarty->assign('GET_HOME', Rotas::getHome());
  $smarty->assign('TITLE', Config::SITE_NOME);



  $smarty->display('index.tpl');
 ?>
