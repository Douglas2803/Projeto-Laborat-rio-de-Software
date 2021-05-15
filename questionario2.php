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
          1 - discordo  7-concordo
        </div>
    </div>
    <div class="row">
    <div class="container">
        <form>
        <div class="row mt-2">   
            <label for="">Exemplo da pergunta</label>
        </div>
        <div class="row">
            <?php
            $alterntiva = 0;
            for($i = 0; $i <= 6; $i++){
              $alterntiva++;          
            ?>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optradio"> <?php echo $alterntiva; ?>
                    </label>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="row mt-2">   
            <label for="">Exemplo da pergunta</label>
        </div>
        <div class="row">
            <?php
            $alterntiva = 0;
            for($i = 0; $i <= 6; $i++){
              $alterntiva++;          
            ?>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optradio2"> <?php echo $alterntiva; ?>
                    </label>
                </div>
            <?php
            }
            ?>
        </div>  
        <div class="row mt-2">  
        <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
        </form>
    </div>
    </div>
    
</body>
</html>