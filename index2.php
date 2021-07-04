<html>
<?php require 'head.php';?>

<body>
<header>
<div class="container-fluid text-center header">
    <h1>Laboratório de Software</h1>
</div>
</header>

<!-- <div class="jumbotron jumbotron-fluid">
  <div class="container">
  <img src="imagens/mobilidade.png" class="rounded float-left imagem" alt="...">
    <h1 class="display-4">Pesquisa de satisfação de qualidade de vida</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div> -->

<div class="container mt-1 cartas">
    <div class="row">
        <div class="col-6">
            <div class="card">
            <img class="card-img-top" src="imagens/qualidade.jpg" alt="Card image cap" width="538px" height="340px">
                <div class="card-body">
                    <h4 class="card-title">SATISFAÇÃO E QUALIDADE DE VIDA NAS CIDADES</h4>
                    <p class="card-text text-justify ">Estamos realizando uma pesquisa de satisfação na cidade de CAXIAS DO SUL, para a qual estamos solicitando a sua participação. Sua
                    opinião é muito importante a fim de identificarmos o que os cidadãos esperam dos usos e serviços públicos da cidade.</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#questionario1">Respoder</button>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card">
            <img class="card-img-top" src="imagens/mobilidade.png" alt="Card image cap" width="538px" height="340px">
                <div class="card-body">
                    <h4 class="card-title">AVALIAÇÃO DA PERCEPÇÃO DA MOBILIDADE NAS CIDADES</h4>
                    <p class="card-text text-justify">Estamos realizando uma pesquisa de satisfação na Cidade de Caxias do Sul, para a qual solicitamos a sua participação. Sua opinião é muito importante a fim de
                    identificarmos o que os cidadãos percebem dos usos e serviços de mobilidade da região.</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#questionario2">Respoder</button>
                </div>
            </div>
        </div>
        
    </div>
</div>

<div class="container-fluid text-center rodape mt-2" >
    <h6>Desenvolvido pelo grupo 1 de Laboratório de software</h6>
</div>

<div class="modal fade" id="questionario1">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-body">
            
                <p> Estou ciente que minhas respostas neste questionário serão
                utilizados para pesquisas por terceiros de forma anônima.</P>

            </div>

            <div class="modal-footer">
            
                <a href="questionario1.php" class="btn btn-primary">Responder</a>
                <button type="button" data-dismiss="modal" class="btn btn-secondary">Não Aceito</button>    

            </div>

        </div>

    </div>

</div>

<div class="modal fade" id="questionario2">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-body">
            
                <p> Estou ciente que minhas respostas neste questionário serão
                utilizados para pesquisas por terceiros de forma anônima.</P>

            </div>

            <div class="modal-footer">
            
                <a href="questionario2.php" class="btn btn-primary">Responder</a>
                <button type="button" data-dismiss="modal" class="btn btn-secondary">Não Aceito</button>    

            </div>

        </div>

    </div>

</div>

</body>
</html>