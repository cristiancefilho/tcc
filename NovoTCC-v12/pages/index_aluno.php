<?php

    include("validar_sessao_adm.php");
    
?>
    
<?php
    include('conexao.php');

    $sql = "SELECT * FROM tb_usuario ORDER BY ID";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_all($result,MYSQLI_ASSOC);

    $sql = "SELECT * FROM tb_aluno ORDER BY ID_USUARIO";
    $resultado = mysqli_query($conn, $sql);

    $row2 = mysqli_fetch_all($resultado,MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/estilo-tabelas.css">
    <link rel="stylesheet" href="../CSS/style-cadastro.css">
    <link rel="stylesheet" href="../CSS/style-login.css">
    <script src="https://kit.fontawesome.com/ab69d533e3.js" crossorigin="anonymous"></script>
    <title>Tabela de livros</title>
</head>
<body>
    <div class="container">
        <div class="row m-3 ">
            <div class="col-6">
                <div class="d-grid gap-2">
                    <a href="../adm/index-adm.php" class="btn btn-primary " type="button">Voltar</a>
                </div>
            </div>
            <div class="col-6">
                <select class="form-select btn btn-primary " aria-label="Default select example" id="Select-estilo">
                    <option selected>Todos</option>
                    <option value="1">Alunos</option>
                    <option value="2">Funcionarios</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">0</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Excluir</th>
                            <th scope="col">Alterar</th>
                            <th scope="col">Ver mais</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                    <?php
                        foreach ($row as $itens) {
                    ?>
                    
                    <tr>
                        <th scope="row"><?php echo $itens["ID"]; ?> </th>
                        <td><?php echo $itens["EMAIL"];?></td>
                        <td><?php echo $itens["TIPO"];?></td>
                        <td><a class="btn btn-primary" href="excluir-aluno.php?id=<?php echo $itens['ID'] ?>" role="button"><i class="fa-solid fa-trash"></i></a></td>
                        <td><a class="btn btn-primary" href="Alterar-aluno.php?id=<?php echo $itens['ID'] ?>" role="button"><i class="fa-solid fa-trash"></i></a></td>
                        <td><a class="btn btn-primary" href="informacoes.php?id=<?php echo $itens['ID'] ?>" role="button"><i class="fa-solid fa-trash"></i></a></td>
                    </tr>
                    
                    <?php
                        }
                    ?> 
        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal -->

    
</div>
</body>
</html>