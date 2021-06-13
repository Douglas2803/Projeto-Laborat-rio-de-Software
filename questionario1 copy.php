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
        
<div class="container"><h1>Questões</h1></div>

    <div id="exTab1" class="container">	

        <ul  class="nav nav-pills">
			<li class="active">
            <a  href="#1a" data-toggle="tab">1-20</a>
			</li>
			<li><a href="#2a" data-toggle="tab">21-30</a>
			</li>
			<li><a href="#3a" data-toggle="tab">31-40</a>
			</li>
  		<li><a href="#4a" data-toggle="tab">41-60</a>
			</li>
		</ul>

		<div class="tab-content clearfix">
		    <div class="tab-pane active" id="1a">
                <p></P> // vai questões de 1-20
		    </div>
		    <div class="tab-pane" id="2a">
                <p></P> // vai questões de
			</div>
            <div class="tab-pane" id="3a">
                <p></P> // vai questões de
			</div>
            <div class="tab-pane" id="4a">
                <p></P> // vai questões de
		    </div>
        </div>

	</div>
</div>

<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <?php 
        $perguntas=$rotinas->selecionar_where("perguntas","*","id_questionario",1);
       
        ?>
            <form method="POST" action="gravar_questionario.php">
            <input type="text" name="perguntas_id" id="perguntas_id" value=''>
            <div class="form-group">
                
                <script>
                    var perguntas_id = []; // isso ? 
                    // for com null em todas posicoes das alternativas
                    //var alernativas = [null,null,...];
                </script>
                <?php
                while($linha = mysql_fetch_assoc($perguntas)){
                    $id_pergunta = $linha['id_pergunta'];
                ?>
                <script>
                    perguntas_id.push(<?php echo $id_pergunta ?>); 
                    var strPerguntas =  perguntas_id.join(',');
                    $('#perguntas_id').val(strPerguntas)
                </script>    
                <p><?php echo utf8_encode($linha['pergunta']); ?> </p>
              <div class="row">
                    <?php
                        $alternativas=$rotinas->seleciona_alternat($id_pergunta);
                        
                        while($linha1 = mysql_fetch_assoc($alternativas)){   
                         $id_alternativa = $linha1['id_alternativa'] ; 
                         
                    ?>
                        <div class="form-check-inline ml-3">
                            <p class="form-check-label">
                                <input type="radio" class="form-check-input" name="alternativa-<?php echo $id_pergunta; ?>" 
                                id="alternativa-<?php echo $id_pergunta; ?>-<?php echo $id_alternativa?>"  /> 
                                <?php echo utf8_encode($linha1['descricao']); ?>
                            </p>
                        </div>
                        
                        <script>
                            $(document).ready(function () {
                               
                                // var alternativas = [];
                                $('#alternativa-<?php echo $id_pergunta; ?>-<?php echo $id_alternativa?>').change(function() {
                                    
                                    // criar um vetor
                                   // varrer o vetor de perguntas.
                                   // achar a posição que a pargunta ta pelo id
                                   // gravar na posicao correspondente o ida da alternativa selecionada



                                    var currentId = $(this).attr('id');
                                    var result = currentId.split('-');
                                    var pergunta = result[1];
                                    var alternativa = result[2];
                                
                                   
                                   // console.log(perguntas);
                                   
                                   
                                });
                               
                             });
                        </script>
                    <?php
                    } // fecha alternativas
                    
                    ?>
                    
                </div>
                <?php
                } //fecha perguntas
                ?>
            </div>
  
            <button type="submit" class="btn btn-primary">Responder</button>  
           </form>
        </div>
    </div>
    
</body>
</html>