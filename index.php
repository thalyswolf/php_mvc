<?php
  require './lib/autoload.php';
  $smarty = new Template();



  $smarty->assign('GET_TEMA', Rotas::get_siteTemplate());
  $smarty->assign('GET_HOME', Rotas::get_siteHOME());
  $smarty->assign('TITLE', Config::SITE_NOME);



  $smarty->display('index.tpl');
 ?>
