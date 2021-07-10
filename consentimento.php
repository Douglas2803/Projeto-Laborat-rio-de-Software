<html>
<?php require 'header.php';?>
<body>
  
<div class="container-fluid text-center topo" >
    <h1>CONSENTIMENTO</h1>
</div>

<div class="container mt-2">
    <div class="jumbotron">
    <p class="lead">
    Estou ciente que minhas respostas neste questionário serão
    utilizados para pesquisas por terceiros de forma anônima.
    </p>
    <hr class="my-4">

    <p class="lead">
        <a class="btn btn-success btn-lg" href="questionarios.php" role="button">Aceito</a>
        <a class="btn btn-danger btn-lg text-light" id="nao_aceita" role="button">Não aceito</a>
    </p>
    </div>
</div>
<div class="container d-none" id="informacao">  
<h4 class='alert-danger'>Para aceitar voce deve aceitar o consentimento</h4>
</div>
<script>
$(document).ready(function(){
  $("#nao_aceita").click(function(){
   $("#informacao").removeClass('d-none');
  });
});
</script>
</body>
</html>