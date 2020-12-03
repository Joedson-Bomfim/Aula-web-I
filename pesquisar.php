<html> 
    <head> 
        <title>Mostrar</title> </head>
    <body> 
        <h3>Mostrar cliente procurado</h3>
            <?php /*pesquisa.php*/
            $nomeproc = $_POST['nome'];
            if (!$nomeproc){
                echo "Volte atrás e escreva o nome.";
            }
            echo "<p>Nome procurado: $nomeproc. </p>";
            
            $ligax = mysqli_connect('localhost', 'root','');
            if (!$ligax){
                echo "<p> Falha na ligação."; exit;
            }
            mysqli_select_db($ligax, 'vendas');
            $procura = "Select * from clientes where nome like ‘ %".$nomeproc."% ‘ ";
            $result = mysqli_query($ligax, $procura);
            $nregistos = mysqli_num_rows($result);
            echo "Nº de registos encontrados: $nregistos";
            ?>
        <table border="1">
        <tr>
            <td> Codigo: <td> Nome: <td> Morada: </tr>
        <?php
        for ($i=0; $i <$nregistos; $i++) {
         $registo = mysqli_fetch_assoc($result);
         echo '<tr> <td>' .$registo['CodCli']. '</td>';
         echo '<td>' .$registo['Nome']. '</td>';
         echo '<td>' .$registo['Morada']. '<td> </tr>'; }
        ?> 
        </table>
        <p> 
        <a href="listar.php"> Listar registos </a>
    </body>
</html> 