<?php   

    //PDO
    $pdo = new PDO('mysql:host=localhost;dbname=projeto', 'root', '');

    //COLUNAS
    $columns = $pdo->prepare("SELECT id_respostas, id_pergunta, id_alternativa, descricao, ip_usuario
                 FROM respostas");
    $columns->execute();
    $results_columns = $columns->fetchAll(PDO::FETCH_COLUMN,0);

    //DADOS
    $stmt = $pdo->prepare('SELECT * FROM respostas');   
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //CRIAÇÃO DO ARQUIVO CSV
    $from = fopen("file.csv", 'wb');

    //ADICIONANDO O CABEÇALHO
    fwrite($from, '"'.implode('";"', $results_columns).'"'.PHP_EOL);

    //ADICIONANDO OS DADOS
    foreach ($results as $idx => $result) 
    {       
        //fputcsv( $from, $result );
        $results[$idx] = str_replace("\"", "\"\"", $result);        
        fwrite($from, '"'.implode('";"', $results[$idx]).'"'.PHP_EOL);
    }   
    fclose($from);

  echo"<script>alert('Arquivo Exportado com Sucesso');top.location.href='index.php';</script>";

  //echo"<script>$('#retorno').html('Exportado com sucesso')</script>";
  
  //header("location:index.php");

?>
 
   