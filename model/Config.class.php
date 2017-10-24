<?php
class Config{
  //INFORMAÇÕES BASICAS DO SITE
    const SITE_URL = "http://localhost";
    const SITE_PASTA = "php_mvc";
    const SITE_NOME = "Mini framework";
    const SITE_EMAIL_ADMIN = "thalyswolf01@gmail.com";

  //INFORMAÇÕES DO BANCO DE DADOS
    const DB_HOST = 'localhost',
          DB_USER = 'root',
          DB_PASSWORD = '',
          DB_NAME = "loja",
          DB_PREFIX = '';

  //INFORMAÇÕES PARA O PHPMAILER
    const EMAIL_USER = "thalyswolf01@gmail.com";
    const EMAIL_NOME = "Contato";
    const EMAIL_PASSWORD = "*******";
    const EMAIL_PORT = 587;
    const EMAIL_SMTPAUTH = true;
    const EMAIL_HOST = "smtp.gmail.com";
    const EMAIL_COPY = 'thalyswolf01@gmail.com';


}
 ?>
