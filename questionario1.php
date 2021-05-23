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
        <div class="container">
        <?php 
        $perguntas=$rotinas->selecionar_where("perguntas","*","id_questionario",1);
       
        ?>
            <form method="POST" action="gravar_questionario.php">
            <div class="form-group">
                <?php
                while($linha = mysql_fetch_assoc($perguntas)){
                    $id_pergunta = $linha['id_pergunta'];
                ?>
                <p><?php echo utf8_encode($linha['pergunta']); ?> </p>
                <div class="row">
                    <?php
                        $alternativas=$rotinas->selecionar("alternativas","*","","");
                        
                        while($linha1 = mysql_fetch_assoc($alternativas)){   
                         $id_alternativa = $linha1['id_alternativas'] ; 
                         
                    ?>
                        <div class="form-check-inline ml-3">
                            <p class="form-check-label">
                                <input type="radio" class="form-check-input" name="alternativa-<?php echo $id_pergunta; ?>" 
                                id="alternativa-<?php echo $id_pergunta; ?>-<?php echo $id_alternativa?>"  /> 
                                <?php echo $linha1['descricao']; ?>
                            </p>
                        </div>
                        
                        <script>
                            $(document).ready(function () {
                                var perguntas = [];
                                // var alternativas = [];
                                $('#alternativa-<?php echo $id_pergunta; ?>-<?php echo $id_alternativa?>').change(function() {
                                    var currentId = $(this).attr('id');
                                    var result = currentId.split('-');
                                    var pergunta = result[1];
                                    var alternativa = result[2];
                                    
                                    perguntas.push({ Pergunta: pergunta });
                                    
                                     // alert(perguntas[0]);
                                    // for(let i = 0; i < perguntas.length; i++){
                                    //     console.log(perguntas[i]);
                                    // }
                                    // alternativas.push({ Alternativa: alternativa });
                                    // alternativas.forEach(item => alert(item))
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
            <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div> 
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>  
            <button type="submit" class="btn btn-primary">Responder</button>  
           </form>
        </div>
    </div>
    
</body>
</html>