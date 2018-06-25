<?php include("resources/configurazione.php");?>
<?php 
$nome_pagina="Notizie";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="public_html/img/favicon.ico">
    <title><?php echo $nome_pagina ;?> - <?php echo $nome_sito ;?></title>
    <!-- Fogli di stile di Bootstrap -->
    <link rel="stylesheet" href="public_html/css/bootstrap.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!-- Fogli di stile per il theme -->
    <link href="public_html/css/cryptorivista.css" rel="stylesheet">
    <link href="public_html/css/notizie.css" rel="stylesheet">
    <!-- Fogli di stile per le icone delle crypto -->
    <link href="public_html/css/crypto-icons/font.css" rel="stylesheet">
    <link href="public_html/css/crypto-icons/style.css" rel="stylesheet">
  </head>

  <body>

    <?php include("resources/templates/header.php"); ?>

    <div class="container cryptorivista-contenuto">
      <!-- Contenuto pagina Cryptorivista -->
      <?php include("resources/templates/header/ads-header.php");?>
      <?php include("system/pagine/notizie.php");?>
      <!-- Fine Contenuto Cryptorivista pagina -->
    </div>
  <?php include("resources/templates/footer.php"); ?>
   
  </body>
</html>
