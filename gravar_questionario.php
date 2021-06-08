<?php


include("banco/rotinas.php"); 
$rotinas = new rotinas();

$perguntas = $_POST['perguntas_id'];

$auxPerguntas = explode(',', $perguntas);
$ip_ =  $_SERVER["REMOTE_ADDR"];

foreach($auxPerguntas as $aux){
    $tipos=$rotinas->selecionar_where("perguntas","*","id_pergunta",$aux);
    $linha = mysql_fetch_assoc($tipos);
    $tipo = $linha['id_tipo'];

   $pergunta  = $_POST['pergunta_selecionada_'.$aux];
   $alternativa  = $_POST['alternativa_selecionada_'.$aux];
   if($tipo == 1){
    $resultado=$rotinas->inserir("respostas ","","NULL,'$pergunta', '$alternativa','','$ip_'");
   }else{
    echo 'outro insert';   
   }
   
} 
  

header("location:index.php");


// var_dump($_POST);
// die;
?>