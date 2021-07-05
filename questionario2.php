<?php
include("banco/rotinas.php"); 
$rotinas = new rotinas();

?>
<!DOCTYPE html>
<html lang="pt-br">
<?php require 'header.php';?>
<style>
.perguntas{
    width: 100%;
    color: #fff;
    background-color: #848484;
    font-weight: bold;
    padding-left: 30px;
}
</style>

<body>
    <div class="container header">
        <div class="row">
            <div class="col-10">
                <h2>AVALIAÇÃO DA PERCEPÇÃO DA MOBILIDADE NAS CIDADES</h2>
            </div>
            <div class="col-2 mt-2">
                <a href="index.php"><button class="btn btn-primary btn-sm">Voltar</button></a>
            </div>
        </div>
    </div>    
     <script type="text/javascript">
        var valores = new Array();
    
     </script>
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
        <table class="table">
            <tr>
                <td>
                1- Discordo Totalmente
                </td>
                <td>
                7- Concordo Totalmente
                </td>
            </tr>
        </table> 
    </div>
    
<div class="row">
    <div class="container">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab1" role="tab">1-10</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab2" role="tab">11-20</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab3" role="tab">21-30</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab4" role="tab">31-40</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab5" role="tab">41-50</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab6" role="tab">51-60</a>
            </li> -->
        </ul>

        <form method="POST" action="gravar_questionario.php">
            <div class="tab-content">

                <!-- TAB 1 -->
                <div class="tab-pane" id="tab1" role="tabpanel">
                    <?php 
                        $perguntas=$rotinas->seleciona_perguntas_pagina(0,2);
                        while($linha = mysql_fetch_assoc($perguntas)){
                            $id_pergunta = $linha['id_pergunta'];
                            $id_tipo = $linha['id_tipo'];
                            // echo $id_pergunta;
                    ?>
                    <script>
                        valores.push(<?php echo $id_pergunta; ?>)
                        
                    </script>
                    <p class="perguntas"><?php echo utf8_encode($linha['pergunta']); ?> </p>
                    <?php
                    if($id_tipo == 1){
                        
                        $alternativas=$rotinas->seleciona_alternat($id_pergunta);                
                        while($linha1 = mysql_fetch_assoc($alternativas)){   
                            $id_alternativa = $linha1['id_alternativa'] ; 
                        
                    ?>
                        <div class="form-check-inline ml-3">
                            <p class="form-check-label">
                                <input type="radio" class="form-check-input" 
                                name="pergunta_<?php echo $id_pergunta; ?>" 
                                id="alternativa_<?php echo $id_pergunta; ?>_<?php echo $id_alternativa?>" 
                                value="selecionada_<?php echo $id_pergunta; ?>_<?php echo $id_alternativa?>" /> 
                                <?php echo utf8_encode($linha1['descricao']); ?>
                            </p>
                        </div>
                    <script>
                        $('#alternativa_<?php echo $id_pergunta; ?>_<?php echo $id_alternativa?>').change(function() {
                           
                            var currentId = $(this).attr('id');
                            var result = currentId.split('_');
                            var pergunta = result[1];
                            var alternativa = result[2];

                           

                            $("#pergunta_selecionada_<?php echo $id_pergunta?>").val(pergunta);
                            $("#alternativa_selecionada_<?php echo $id_pergunta?>").val(alternativa);
                            
                            //console.log(dados); 
                        });
                    </script>
                    
                    <?php
                    } // fim while
                      ?>
                        <div class="form-group">
                            <input type="hidden" class="form-control" 
                            id="pergunta_selecionada_<?php echo $id_pergunta?>" 
                            name="pergunta_selecionada_<?php echo $id_pergunta?>" />

                            <input type="hidden" class="form-control" 
                            id="alternativa_selecionada_<?php echo $id_pergunta?>" 
                            name="alternativa_selecionada_<?php echo $id_pergunta?>" />
                        </div>
                      <?php  
                    } // fim if tipo
                    if($id_tipo == 2){
                    ?>
                    <div class="form-group">
                        <input type="text" class="form-control" id="idResposta" name="resposta_isolada" />
                    </div>
                    <?php    
                    }
                    ?>
                    
                    <?php
                        }
                    ?>
                      <button class="btn btn-success" onclick="dados()" type="submit">GRAVAR</button>
                </div>
                <!-- FIM DA TAB 1 -->




                <div class="form-group">
                        <input type="hidden" class="form-control" 
                        id="dados_" 
                        name="dados_" />
                </div>
                <script>
                function dados() {
                   
                
                   $('#dados_').val(valores.join(','));
                }
                </script>
                
                    
            </div> <!-- FIM DA TAB CONTENT -->
            
        </form>
    </div> <!-- FIM DO CONTAINER-->
</div>  <!-- FIM DO ROW --> 

    
</body>


</html>