<?php
include_once'class_cone.php';


class rotinas extends banco{
		
		
		
	/********************************************** funçoes de banco**************************************************************/
	
	/*********************
	//Function inserir 
	*********************/
	protected $inserir = null;
	protected $INSERIR_tabelas ;
	protected $INSERIR_colunas ;
	protected $INSERIR_conteudos ;		
		
	function inserir($tabelas=null, $colunas=null, $conteudos=null){
			
			$this->INSERIR_tabelas 		= $tabelas;
			$this->INSERIR_colunas 		= $colunas;
			$this->INSERIR_conteudos 	= $conteudos;
			
			if(!isset($this->INSERIR_tabelas)):die('tabela nao declarada');	  endif; 	
			if(!isset($this->INSERIR_colunas)):die('calunas nao declarada'); 	endif; 	
			if(!isset($this->INSERIR_conteudos)):die('calunas nao declarada'); 	endif; 
			
			if ($this->INSERIR_colunas == "") {
				$query 	= "INSERT INTO $this->INSERIR_tabelas VALUES($this->INSERIR_conteudos)";
			} else {
				$query 	= "INSERT INTO $this->INSERIR_tabelas($this->INSERIR_colunas)VALUES($this->INSERIR_conteudos)";
			}			


			print_r($query);
			$queryExec	= mysql_query($query)or die(mysql_error());
	}
		
		
		
		
		
	/*********************	
	//Function Alterar	
	*********************/
	protected $alterar = null;
	protected $ALTERAR_tabelas ;
	protected $ALTERAR_colunas ;
	protected $ALTERAR_conteudos ;
	protected $ALTERAR_id ;	
		
		
		
		
	function alterar($tabelas=null, $colunas=null, $conteudos=null , $id=null){
			
			$this->ALTERAR_tabelas 		= $tabelas;
			if($colunas==null){$this->ALTERAR_colunas = 'id';}else{$this->ALTERAR_colunas = $colunas;}
			$this->ALTERAR_conteudos 	= $conteudos;
			$this->ALTERAR_id 	= $id;
			
			if(!isset($this->ALTERAR_tabelas)):die('tabela nao declarada');	  endif; 	
			if(!isset($this->ALTERAR_colunas)):die('calunas nao declarada'); 	endif; 	
			if(!isset($this->ALTERAR_conteudos)):die('calunas nao declarada'); 	endif; 
			if(!isset($this->ALTERAR_id)):die('id nao declarada'); 	endif; 
			
		//	$query 		= "INSERT INTO $this->ALTERAR_tabelas($this->ALTERAR_colunas)VALUES($this->ALTERAR_conteudos) ";
			
			$query = "UPDATE $this->ALTERAR_tabelas SET $this->ALTERAR_conteudos WHERE  $this->ALTERAR_colunas  =$this->ALTERAR_id ";
			
			//print_r($query);
			
			$queryExec	= mysql_query($query)or die(mysql_error());
	}
		
	/********************
	//Function Deletar
	*********************/
	
	protected $DELETA = null;
	protected $DELETA_tabelas ;
	protected $DELETA_colunas ;
	protected $DELETA_conteudos ;
	protected $DELETA_id ;	
		
	function deleta($tabelas=null, $colunas=null, $conteudos=null , $id=null){
			
			$this->DELETAR_tabelas 		= $tabelas;
			$this->DELETAR_colunas 		= $colunas;
			$this->DELETAR_conteudos 	= $conteudos;
			$this->DELETAR_id 			= $id;
			
			if(!isset($this->DELETAR_tabelas)):die('tabela nao declarada');	  endif; 	
			if(!isset($this->DELETAR_colunas)):die('calunas nao declarada'); 	endif; 	
			if(!isset($this->DELETAR_conteudos)):die('calunas nao declarada'); 	endif; 
			if(!isset($this->DELETAR_id)):die('id nao declarada'); 	endif; 
			
		//	$query 		= "INSERT INTO $this->ALTERAR_tabelas($this->ALTERAR_colunas)VALUES($this->ALTERAR_conteudos) ";
			
			$query 	= " DELETE FROM  $this->DELETAR_tabelas WHERE  $this->DELETAR_colunas = $this->DELETAR_id  ";

			//print_r($query);

			$queryExec	= mysql_query($query)or die(mysql_error());
	}
		
		
		
	/********************
	//Function selecionar
	*********************/
	
	protected $SELECIONA = null;
	protected $SELECIONA_tabelas ;
	protected $SELECIONA_colunas ;
	protected $SELECIONA_conteudos ;
	protected $SELECIONA_id ;	
 
	
	  function selecionar ($tabelas=null, $colunas=null, $conteudos=null , $id=null){
			
			$this->SELECIONA_tabelas 		= $tabelas;
			$this->SELECIONA_colunas 		= $colunas;
			$this->SELECIONA_conteudos 	= $conteudos;
			$this->SELECIONA_id 			= $id;
		 
			
			if(!isset($this->SELECIONA_tabelas)):die('tabela nao declarada');	  endif; 	
			if(!isset($this->SELECIONA_colunas)):die('colunas nao declarada'); 	endif; 	
			if(!isset($this->SELECIONA_conteudos)):die('colunas nao declarada'); 	endif; 
			if(!isset($this->SELECIONA_id)):die('id nao declarada'); 	endif; 
			
			
			$query = "SELECT $this->SELECIONA_colunas FROM $this->SELECIONA_tabelas ";
			
			$queryExec	= mysql_query($query)or die(mysql_error());
		
			 return   $queryExec;
			
	}
		
	/********************
	//Function selecionar where
	*********************/
	
	protected $SELECIONA_where = null;
	protected $SELECIONA_tabelas_where ;
	protected $SELECIONA_colunas_where ;
	protected $SELECIONA_conteudos_where ;
	protected $SELECIONA_id_where ;	
 
	
	function selecionar_where ($tabelas=null, $colunas=null, $campo=null , $id=null){
			
		$this->SELECIONA_tabelas_where 		= $tabelas;
		$this->SELECIONA_colunas_where 		= $colunas;
		$this->SELECIONA_campo_where 	= $campo;
		$this->SELECIONA_id_where 			= $id;
		
			
		if(!isset($this->SELECIONA_tabelas_where)):die('tabela nao declarada');	  endif; 	
		if(!isset($this->SELECIONA_colunas_where)):die('calunas nao declarada 1'); 	endif; 	
		if(!isset($this->SELECIONA_campo_where)):die('calunas nao declarada 2'); 	endif; 
		if(!isset($this->SELECIONA_id_where)):die('id nao declarada'); 	endif; 
		
			
		$query = "SELECT $this->SELECIONA_colunas_where FROM $this->SELECIONA_tabelas_where   where   $this->SELECIONA_campo_where = $this->SELECIONA_id_where ";
		
		// print_r($query);

		$queryExec	= mysql_query($query)or die(mysql_error());
		
		return   $queryExec;
	}
		
		
		
		
	/********************
	//Function selesionar where sem o igual para poder manipular melhor 
	*********************/
	
	protected $SELECIONA_where_sem_o_igual = null;
	protected $SELECIONA_tabelas_where_sem_o_igual ;
	protected $SELECIONA_colunas_where_sem_o_igual ;
	protected $SELECIONA_conteudos_where_sem_o_igual ;
	protected $SELECIONA_id_where_sem_o_igual ;	
 
	
	function selecionar_where_sem_o_igual ($tabelas=null, $colunas=null, $campo=null , $id=null){
			
		$this->SELECIONA_tabelas_where_sem_o_igual 		= $tabelas;
		$this->SELECIONA_colunas_where_sem_o_igual 		= $colunas;
		$this->SELECIONA_campo_where_sem_o_igual 		= $campo;
		$this->SELECIONA_id_where_sem_o_igual 			= $id;
		
			
		if(!isset($this->SELECIONA_tabelas_where_sem_o_igual)):die('tabela nao declarada');	  endif; 	
		if(!isset($this->SELECIONA_colunas_where_sem_o_igual)):die('calunas nao declarada'); 	endif; 	
		if(!isset($this->SELECIONA_campo_where_sem_o_igual)):die('calunas nao declarada'); 	endif; 
		if(!isset($this->SELECIONA_id_where_sem_o_igual)):die('id nao declarada'); 	endif; 
			
		$query = "SELECT $this->SELECIONA_colunas_where_sem_o_igual FROM $this->SELECIONA_tabelas_where_sem_o_igual   where   $this->SELECIONA_id_where_sem_o_igual ";
		
		$queryExec	= mysql_query($query)or die(mysql_error());
		
		return   $queryExec;
			
	}	
		
	/********************
	//Function selesionar like
	*********************/
			
	protected $SELECIONA_like = null;
	protected $SELECIONA_tabelas_like ;
	protected $SELECIONA_colunas_like ;
	protected $SELECIONA_conteudos_like ;
	protected $SELECIONA_buscar_like ;	
		 
			
	function selecionar_like($tabelas=null, $colunas=null, $campo=null , $conteudo_a_buscar=null){
					
		$this->SELECIONA_tabelas_like 		= $tabelas;
		$this->SELECIONA_colunas_like 		= $colunas;
		$this->SELECIONA_campo_like 		= $campo;
		$this->SELECIONA_buscar_like 		= $conteudo_a_buscar;
					
		if(!isset($this->SELECIONA_tabelas_like)):die('tabela nao declarada');	endif; 	
		if(!isset($this->SELECIONA_colunas_like)):die('calunas nao declarada'); endif; 	
		if(!isset($this->SELECIONA_campo_like)):die('calunas nao declarada'); 	endif; 
		if(!isset($this->SELECIONA_buscar_like)):die('id nao declarada'); 			endif; 
		
					
		 $query = "SELECT $this->SELECIONA_colunas_like FROM $this->SELECIONA_tabelas_like   where   $this->SELECIONA_campo_like  LIKE  '%%$this->SELECIONA_buscar_like%%'";
		
		 $queryExec	= mysql_query($query)or die(mysql_error());
				
		return   $queryExec;
	}
				
		
	/********************
	//Function selesionar like com OR
	*********************/
	
	protected $SELECIONA_like_or = null;
	protected $SELECIONA_tabelas_like_or ;
	protected $SELECIONA_colunas_like_or ;
	protected $SELECIONA_campo_like_or_1 ;
	protected $SELECIONA_campo_like_or_2 ;
	protected $SELECIONA_buscar_like_or_1 ;
	protected $SELECIONA_buscar_like_or_2 ;	
	
	
 	function selecionar_like_com_or($tabelas=null, $colunas=null, $campo1=null , $campo2=null , $conteudo_a_buscar1=null , $conteudo_a_buscar2=null){
					
		$this->SELECIONA_tabelas_like_or 		= $tabelas;
		$this->SELECIONA_colunas_like_or 		= $colunas;
		$this->SELECIONA_campo_like_or_1 		= $campo1;
		$this->SELECIONA_campo_like_or_2 		= $campo2;
		$this->SELECIONA_buscar_like_or_1 		= $conteudo_a_buscar1;
		$this->SELECIONA_buscar_like_or_2 		= $conteudo_a_buscar2;
		
					
		if(!isset($this->SELECIONA_tabelas_like_or)):die('tabela nao declarada');	endif; 	
		if(!isset($this->SELECIONA_colunas_like_or)):die('calunas nao declarada'); endif; 	
		if(!isset($this->SELECIONA_campo_like_or_1)):die('calunas nao declarada'); 	endif; 
		if(!isset($this->SELECIONA_campo_like_or_2)):die('calunas nao declarada'); 	endif; 
		if(!isset($this->SELECIONA_buscar_like_or_1)):die('conteudo busca1'); 			endif; 
		if(!isset($this->SELECIONA_buscar_like_or_2)):die('conteudo busca2'); 			endif; 
		
					 
	 
		$query = "SELECT $this->SELECIONA_colunas_like_or FROM $this->SELECIONA_tabelas_like_or WHERE $this->SELECIONA_campo_like_or_1 LIKE '%$this->SELECIONA_buscar_like_or_1%' OR $this->SELECIONA_campo_like_or_2 LIKE '%$this->SELECIONA_buscar_like_or_2%'";
		$queryExec	= mysql_query($query)or die(mysql_error());
				
		return   $queryExec;
	
	}
	
	
	/********************
	//Function login e senha
	**********/
		
	protected $SENHA = null;
	protected $SENHA_tabelas ;
	protected $SENHA_colunas ;
	protected $SENHA_conteudos ;
	protected $SENHA_id ;	
 
	
	 
	function selecionar_senha($tabelas=null, $colunas=null, $campo_login=null , $campo_senha=null , $conteudo_login=null , $conteudo_senha=null ){
			
		$this->SENHA_tabelas 			= $tabelas;
		$this->SENHA_colunas 			= $colunas;
		$this->SENHA_campo_login		=$campo_login;
		$this->SENHA_campo_senha		=$campo_senha;	
		$this->SENHA_conteudo_login		=$conteudo_login;
		$this->SENHA_conteudo_senha		=$conteudo_senha;
		
		if(!isset($this->SENHA_tabelas)):die('tabela nao declarada1');	  endif; 	
		if(!isset($this->SENHA_colunas)):die('calunas nao declarada2'); 	endif; 	
		if(!isset($this->SENHA_campo_login)):die('calunas nao declarada3'); 	endif; 
		if(!isset($this->SENHA_campo_senha)):die('calunas nao declarada4'); 	endif; 
		if(!isset($this->SENHA_conteudo_login)):die('calunas nao declarada5'); 	endif; 
		if(!isset($this->SENHA_conteudo_senha)):die('calunas nao declarada6'); 	endif; 
		
 	
 
		$query = "SELECT $this->SENHA_colunas FROM $this->SENHA_tabelas WHERE  $this->SENHA_campo_login = $this->SENHA_conteudo_login and  $this->SENHA_campo_senha= $this->SENHA_conteudo_senha";
		
		//print_r($query);
			
		$queryExec	= mysql_query($query)or die(mysql_error());

		
		
		return   $queryExec;
	}

		
		
		
	/********************************************** funçoes de segurançã**************************************************************/
		 
	  
	  
	  
	/********************
	//Function validação de ssession
	*********************/
	public $LINK_ssession;
 
	
	function validacao_ssession($link=null){
			
		$this->LINK_ssession =$link;
			
		session_start();
		
			if(!(@$_SESSION['usersession'])or !($_SESSION['passsession'])){
			
				//valida se tiver link de paginas especifica ele direciona a elas se nao ele segue o padão e envia para a pasta usuarios
	
				if($this->LINK_ssession==null){
					header("location:index.php");
				}else{
					header("location:".$this->LINK_ssession);
				}
				exit;
			}
	}
   
 	
	
	
	
	
	/********************************************** funçoes de janelas**************************************************************/

	  
	/********************
	//Function rotina Titulo
	*********************/
		  
	function rotina_titulo(){
		echo "Sistema";
				 
	}
	
	
	
	 ////// funbção retorna o mes escrito por extenso
	function mes_por_extenso($mes2){
		switch ($mes2){
			
			case 1: 	$mes = "JANEIRO"; 	break;
			case 2: 	$mes = "FEVEREIRO"; break;
			case 3: 	$mes = "MARÇO"; 	break;
			case 4: 	$mes = "ABRIL"; 	break;
			case 5: 	$mes = "MAIO"; 		break;
			case 6: 	$mes = "JUNHO"; 	break;
			case 7: 	$mes = "JULHO"; 	break;
			case 8: 	$mes = "AGOSTO"; 	break;
			case 9: 	$mes = "SETEMBRO"; 	break;
			case 10:	$mes = "OUTUBRO"; 	break;
			case 11:	$mes = "NOVEMBRO"; 	break;
			case 12:	$mes = "DEZEMBRO"; 	break;
				
		}
		return $mes;
	}
			 
			 
			 
	function dia_da_semana($data) {
					
		switch($data) {
			case"0": $diasemana = "Domingo";       break;
			case"1": $diasemana = "Segunda-Feira"; break;
			case"2": $diasemana = "Terça-Feira";   break;
			case"3": $diasemana = "Quarta-Feira";  break;
			case"4": $diasemana = "Quinta-Feira";  break;
			case"5": $diasemana = "Sexta-Feira";   break;
			case"6": $diasemana = "Sábado";        break;
		}
				
		echo "$diasemana";
	}
	
	/***************QUESTIONARIO 1 ******************/
	/***LISTA 1 A 10******/
	function seleciona_1_10_1(){
		$query = "SELECT * FROM perguntas LIMIT 10 OFFSET 0";
		$queryExec	= mysql_query($query)or die(mysql_error());
		return   $queryExec;
	}

	function seleciona_11_20_1(){
		$query = "SELECT * FROM perguntas LIMIT 10 OFFSET 10";
		$queryExec	= mysql_query($query)or die(mysql_error());
		return   $queryExec;
	}

	function seleciona_21_30_1(){
		$query = "SELECT * FROM perguntas LIMIT 10 OFFSET 20";
		$queryExec	= mysql_query($query)or die(mysql_error());
		return   $queryExec;
	}

	function seleciona_31_40_1(){
		$query = "SELECT * FROM perguntas LIMIT 10 OFFSET 30";
		$queryExec	= mysql_query($query)or die(mysql_error());
		return   $queryExec;
	}

	function seleciona_41_50_1(){
		$query = "SELECT * FROM perguntas LIMIT 10 OFFSET 40";
		$queryExec	= mysql_query($query)or die(mysql_error());
		return   $queryExec;
	}

	/***************FIM QUESTIONARIO 1 ******************/


	function seleciona_alternat($id_pergunta){
			
		$query = "
		SELECT * FROM perguntas_alternativas as perg_alter, alternativas as alternat 
		WHERE perg_alter.id_alternativa = alternat.id_alternativa AND
		perg_alter.id_pergunta = ".$id_pergunta;
				
				
		
			$queryExec	= mysql_query($query)or die(mysql_error());
				
			return   $queryExec;
	}

	
}	

?>


