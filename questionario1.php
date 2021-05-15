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
                <h1>Questionario 1</h1>
            </div>
            <div class="col-2 mt-2">
                <a href="questionarios.php"><button class="btn btn-primary btn-sm">Voltar</button></a>
            </div>
        </div>
     </div>    

    <div class="row">
        <div class="container">
        <?php 
        $perguntas=$rotinas->selecionar_where("perguntas","pergunta","id_questionario",1);
        $alternativas=$rotinas->selecionar("alternativas","*","","");
        ?>
            <form method="POST" action="gravar_questionario.php">
            <div class="form-group">
                <?php
                    while($linha = mysql_fetch_assoc($perguntas)){
                ?>
                <label><?php echo utf8_encode($linha['pergunta']); ?> </label><br>
                <div class="row">
                    <?php
                        while($linha = mysql_fetch_assoc($alternativas)){         
                    ?>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="pergunta" /> 
                                    <?php echo $linha['descricao']; ?>
                        </label><br>
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