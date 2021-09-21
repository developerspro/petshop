<?php
class Layout
{
   public function menu($menu){
    include $menu.".php";
   } 

   public function conteudo($conteudo){
    include $conteudo.".php";
   }

   public function rodape(){
    include "rodape.php";
   }
}
