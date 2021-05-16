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