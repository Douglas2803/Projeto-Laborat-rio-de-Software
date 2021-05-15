<?php
abstract class banco{
	
	protected $servidor	='localhost';
	protected $user		='root';
	protected $senha	='';
	protected $banco	='prezzi';
	 
	protected $conexao 	=null;
	protected $selectdb	=null;
	
	
	 
	 
	public function __construct(){$this->conecta();}
	public function __destruct(){if($this->conexao !=null){ mysql_close($this->conexao);}}
		
	public function conecta(){
		 
		 $this->conexao=@mysql_connect($this->servidor, $this->user, $this->senha, true);
		 $this->selectdb=@mysql_select_db($this->banco);
	}
}

?>
