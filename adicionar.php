<html>
    <head> 
        <title> Inserir </title> </head>
    <body>
        <h2> Novo cliente </h2>
        <?php /*inserir.php*/
        $cod = $_POST['codcli'];
        $nome = $_POST['nome'];
        $morada = $_POST['morada'];
        echo 'Dados recebidos: <br />';
        echo 'Código: '.$cod.'<br />';
        echo 'Nome: '.$nome.'<br />';
        echo 'Morada: '.$morada.'<br />';
        $ligax = mysqli_connect('localhost', 'root', '');
        if (!$ligax) {
            echo '<p> Erro: Falha na ligação.';
            exit;
        }
        mysqli_select_db($ligax, 'vendas');
        
        $insere = "INSERT INTO clientes ( CodCli, Nome, Morada ) 
                    VALUES (".$cod.",".$nome.",".$morada)";";
        $result = mysqli_query($ligax, $insere);
        if ($result==1){
            echo "<p>Dados inseridos<br>";
        } else {
            echo "<p>Dados não inseridos<br>";
        } 
        ?>
    <p> <a href="index.htm">Voltar à entrada</a>
    <p> <a href="listar.php">Listar clientes</a>
    </body>
</html>