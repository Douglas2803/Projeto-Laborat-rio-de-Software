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
                <h2>AVALIAÇÃO DA PERCEPÇÃO DA MOBILIDADE NAS CIDADES</h2>
            </div>
            <div class="col-2 mt-2">
                <a href="index.php"><button class="btn btn-primary btn-sm">Voltar</button></a>
            </div>
        </div>
     </div>    
     <div class="container">
            <p class='text-justify'>
        Estamos realizando uma pesquisa de satisfação na Cidade de Caxias do Sul, para a qual 
        solicitamos a sua participação. Sua opinião é muito impoidentificarmos o que os cidadãos 
        percebem dos usos e serviços de mobilidade da região. A partir da sua experiência como 
        cidadão, por favor, rquestionário indicando o seu grau de concordância com as informações 
        seguir, em uma escala de 1. Discordo totalmente a 7. Concordo totalmeAgradecemos a sua 
        disponibilidade.
        </p>    
    </div>
    <div class="row">
        <div class="container">
        <?php 
        $perguntas=$rotinas->selecionar_where("perguntas","pergunta","id_questionario",2);
       
        ?>
            <form method="POST" action="gravar_questionario.php">
            <div class="form-group">
                <?php
                while($linha = mysql_fetch_assoc($perguntas)){
                ?>
                <p><?php echo utf8_encode($linha['pergunta']); ?> </p>
                <div class="row">
                    <?php
                        $alternativas=$rotinas->selecionar("alternativas","*","","");
                        $i=0;
                        while($linha = mysql_fetch_assoc($alternativas)){   
                            $i++;      
                    ?>
                        <div class="form-check-inline ml-3">
                            <p class="form-check-label">
                                <input type="radio" class="form-check-input" name="pergunta<?{$i}?>" id="pergunta<?{$i}?>"  /> 
                                <?php echo $linha['descricao']; ?>
                            </p>
                        </div>
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