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