<?php

/**
 * Nos aproveitaremos da hierarquia do WordPress 
 * e utilizaremos a página "home.php" para exibição de
 * uma página de manutenção, desse modo podemos editar
 * o site sem que ele fique "disponibilizado" para o 
 * público.
 * 
 * Para remover essa página, basta ir no menu
 * administrativo do WordPress Configurações -> Leitura
 * e escolher uma página para ser a nova home. Essa
 * página então desaparecerá.
 * 
 */

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet">
    <style>
       *{margin:0;padding:0;box-sizing:border-box}html{height:100%}body{background:#fff;font-family:"Lato", sans-serif;font-size:14px;font-weight:400;color:#333}.container,.row{display:block;height:auto;padding:0;overflow:hidden}.container{width:990px;margin:0 auto}.row{width:100%;margin:0}.row:after{content:"";display:table;clear:both}.col{height:auto;float:left;padding:0;margin:0 0 1%}.col-2{width:16.666666%}.col-10{width:83.333333%;padding-left:1%}.col-12{width:100%}.col-12.margin{margin:0 0 2%;animation:titleFadeIn 4s ease-out}.content,.footer,.sidebar{display:block;width:100%;margin:0;position:relative}.sidebar{height:65vh;background-color:#ff9e15;animation:constructSidebar 1s ease-out}.content{height:65vh;background-color:#22b2bf;animation:constructContent 2s ease-out}.footer{height:15vh;background-color:#ff9e15;animation:constructFooter 3s ease-out}.title{text-align:center;margin:2% 0 1%;color:#22b2bf}.col-12 p{text-align:center;color:#7e7e7e}p a:link,p a:visited{color:#22b2bf;text-decoration:none;-webkit-transition:0.3s;transition:0.3s}p a:hover,p a:active{color:#7e7e7e}p.agency{text-align:right;margin:2% 0 0;animation:titleFadeIn 5s ease-out}@keyframes constructSidebar{from{left:-40%;opacity:0;}to{left:0;opacity:1;}}@keyframes constructContent{0%{right:-10%;opacity:0;}50%{right:-10%;opacity:0;}100%{right:0;opacity:1;}}@keyframes constructFooter{0%{top:40px;opacity:0;}75%{top:40px;opacity:0;}100%{top:0px;opacity:1;}}@keyframes titleFadeIn{0%{opacity:0;}75%{opacity:0;}100%{opacity:1;}}@media (max-width: 990px){.container{width:100%;padding:0 5px;margin:0}.col-2{width:36.666666%}.col-10{width:63.333333%}}
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-12 margin">
          <h1 class="title">Site em Construção</h1>
          <p>Nosso novo site está em construção nesse exato momento!</p>
        </div>
      </div>
      <div class="row">
        <div class="col col-2">
          <div class="sidebar"></div>
        </div>
        <div class="col col-10">
          <div class="content"></div>
        </div>
      </div>
      <div class="row">
        <div class="col col-12">
          <div class="footer"></div>
          <p class="agency"><a href="http://agenciadelucca.com.br" title="Agência Delucca">Agência Delucca</a></p>
        </div>
      </div>
    </div>
  </body>
</html>
