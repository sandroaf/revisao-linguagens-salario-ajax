<?php
   define("salariominimo",1212);
   $erro = false;
   $msg = "";

   function fNaoPreenchido($valor) {
    if ($valor == "") {
        return true;
      } else {
        return false;
      }
   }
   
   if (fNaoPreenchido($_POST["iNome"])) {
      $msg = "<p>Erro: Nome não informado</p>";
      $erro = true;
   }
   
   if (fNaoPreenchido($_POST["iEndereco"])) {
      $msg =  "<p>Erro: Endereço não informado</p>";
      $erro = true;
   }

   if (!$erro) {
      printf("<strong>%s</strong> Recebe o equivalente a <strong>%1.2f salários mínimos</strong>. <br>Mora no endereço:<br> <strong><pre>%s</pre></strong><br>",$_POST["iNome"],($_POST["iSalario"] / salariominimo),$_POST["iEndereco"]);
   } else {
      echo $msg;
   }
   
?>