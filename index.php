<?php include (‘ligacao.php’);?>

<html>
    <head> 
        <title> Listar Clientes </title> 
    </head>
    <body> 
        <h2> Lista de clientes: </h2> 
        <br>
        <?php
        $ligax = mysqli_connect('localhost', 'root', '');
        if (!$ligax) {
            echo '<p> Falha na ligação.';
        }
        mysqli_select_db($ligax, 'vendas');
        $consulta = "Select * From Clientes";
        $result = mysqli_query($ligax, $consulta);
        $nregistos = mysqli_num_rows($result);
        echo "Nº de registos encontrados: $nregistos ";
        ?>
        <br> 
        <table border="1">
            <tr>
                <td>
                    Codigo: 
                <td>
                    Nome: 
                <td> 
                    Morada: 
            </tr>
            <?php
                for ($i=0; $i <$nregistos; $i++) {
                    $registo = mysqli_fetch_assoc($result);
                        echo '<tr>';
                        echo '<td>'.$registo['CodCli'].'</td>';
                        echo '<td>'.$registo['Nome'].'</td>';
                        echo '<td>'.$registo['Morada'].'<td>';
                        echo '</tr>'; echo '</p>';
                }
            ?>
        </table> 
        <br> 
        <a href="index.htm">Voltar à entrada</a>
    </body>
</html>