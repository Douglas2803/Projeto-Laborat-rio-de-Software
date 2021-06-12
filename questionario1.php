<?php
include("banco/rotinas.php"); 
$rotinas = new rotinas();

?>
<!DOCTYPE html>
<html lang="pt-br">
<?php require 'header.php';?>
<body>
    <div class="container header">
        <div class="row">
            <div class="col-10">
                <h2>SATISFAÇÃO E QUALIDADE DE VIDA NAS CIDADES</h2>
            </div>
            <div class="col-2 mt-2">
                <a href="index.php"><button class="btn btn-primary btn-sm">Voltar</button></a>
            </div>
        </div>
    </div>    
    <div class="container">
        <p class='text-justify'>
        Estamos realizando uma pesquisa de satisfação na cidade de CAXIAS DO SUL, para a
         qual estamos solicitando a sua participação. Sua  opinião é muito importante a
         fim de identificarmos o que os cidadãos esperam dos usos e serviços públicos da 
         cidade. Além disso, cabe  destacar, também, que a presente pesquisa faz parte 
         de um estudo acadêmico e será utilizada como instrumento de investigação para a  
        disciplina de Estágio em Arquitetura e Urbanismo na Universidade de Caxias do Sul. 
        A partir de sua experiência como usuário urbano, por  favor, responda este questionário 
        pensando em um serviço ou infraestrutura capaz de lhe atender com um nível de qualidade 
        satisfatório. Por  razões éticas inerentes à pesquisa, as respostas serão confidenciais, 
        preservando o anonimato dos respondentes. Agradecemos a  disponibilidade! 

        </p>    
    </div>
    
    <div class="row">
    <div id="exTab1" class="container">	
<ul  class="nav nav-pills">
			<li class="active">
        <a  href="#1a" data-toggle="tab">1 - 10</a>
			</li>
			<li><a href="#2a" data-toggle="tab">11 -20</a>
			</li>
			<li><a href="#3a" data-toggle="tab">Applying clearfix</a>
			</li>
  		<li><a href="#4a" data-toggle="tab">Background color</a>
			</li>
		</ul>

			<div class="tab-content clearfix">
			  <div class="tab-pane active" id="1a">
          loop das perguntas de 1 10
				</div>
				<div class="tab-pane" id="2a">
        loop das perguntas de 11 a 20
				</div>
        <div class="tab-pane" id="3a">
          <h3>We applied clearfix to the tab-content to rid of the gap between the tab and the content</h3>
				</div>
          <div class="tab-pane" id="4a">
          <h3>We use css to change the background color of the content to be equal to the tab</h3>
				</div>
			</div>
  </div>
    </div>
    
</body>
</html>