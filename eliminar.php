<html>
    <head>
        <title> Remover </title> </head>
    <body> 
        <h2> Remover cliente </h2>
        <?php
        $codrem = $_POST['codcli'];
        if (!$codrem) {
            echo 'Volte atrás e escreva o código do cliente a remover.'; 
        }
        echo "Cliente a remover: $codrem. <p>";
        $ligax = mysqli_connect('localhost', 'root','');
        if (!$ligax){
            echo "<p> Falha na ligação."; 
            exit; 
        }
        mysqli_select_db($ligax, 'vendas');
        $consulta = "Select * From Clientes";
        $result = mysqli_query($ligax, $consulta);
        $nr_antes = mysqli_num_rows($result);
        $remove = "delete from clientes where codcli = ".$codrem."; ";
        $result = mysqli_query($ligax, $remove);
        if ($result==0){ 
            echo "<p>Não removido<br>";
        }
        $consulta = "Select * From Clientes";
        $result = mysqli_query($ligax, $consulta);
        $nr_depois = mysqli_num_rows($result);
        $nr_removidos = $nr_antes - $nr_depois;
        echo 'Nº de registos removidos: '.$nr_removidos;
        ?>
    <p> <a href="listar.php"> Listar registos </a>
    </body> 
</html>