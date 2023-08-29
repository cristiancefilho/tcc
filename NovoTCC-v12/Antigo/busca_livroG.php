<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="cadastro_livro.php" method="get">
        <label for="genero">Insira o Gênero Desejado</label>
        <br>
        <select name="buscar">
            <?php
            include('conexao.php');
            $sql = "select * from genero;";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['nome'] . "'>" . $row['nome'] . "</option>";
                }
            }
            $conn->close();
            ?>
        </select>

        <br>
        <input type="checkbox" name="orde" id="ordene" value="on">
        <label for="ordene">Titulo Ordenado</label>
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>