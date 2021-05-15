<?php
include("banco/rotinas.php"); 
$rotinas = new rotinas();
	
 

 $campo1=@$_POST['email'];
 $campo2=@$_POST['senha'];

 
  
if(($campo1 !="") and ($campo2 !="")){

 
	 $total_user=$rotinas->selecionar_senha("investidores","*","email","senha","'".$campo1."'","'".$campo2."'");
 
	 
	 if(mysql_num_rows($total_user) >0){
	 
	  $total_lista_menu= mysql_fetch_array($total_user);
	 

 		session_start();
		 $_SESSION['usersession']=$campo1;
		 $_SESSION['passsession']=$campo2;
		 $_SESSION['id']=$total_lista_menu['id'];
		 $_SESSION['nome']=$total_lista_menu['nome'];
		 $_SESSION['tipo']=$total_lista_menu['tipo'];

		
		header("location:modulos/index2.php");
		 
	}else{
		header("location:index.php?msg=".base64_encode("Usuario ou senha incorreto!!!")); 
	 }
			
			
			
			
 
}else{
	
	
	
	
header("location:index.php?msg=".base64_encode("Campo usuario ou senha em branco!!!"));

	
}

?>