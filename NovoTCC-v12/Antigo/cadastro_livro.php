<?php

    session_start();

    $livros=array(
        
        array("titulo"=>"Senhor dos Aneis","genero"=>"aventura","d.publicacao"=>"29/07/1954","numero_livro"=>"3525245","autor"=>"J. R. R. Tolkien"),

        array("titulo"=>"Diario de um Banana","genero"=>"aventura","d.publicacao"=>"01/04/2007","numero_livro"=>"1432245","autor"=>"Roberto"),

        array("titulo"=>"Contra Todas As Probabilidade","genero"=>"Ficção juvenil","d.publicacao"=>"23/01/2018","numero_livro"=>"1344345","autor"=>"Rebekah Crane"),

        array("titulo"=>"Manifesto Comunismo","genero"=>"Literatura","d.publicacao"=>"20/05/1960","numero_livro"=>"354533","autor"=>"Karl Marx"),

        array("titulo"=>"Harry Poter","genero"=>"aventura","d.publicacao"=>"26/07/1997","numero_livro"=>"656464","autor"=>"J. K. Rowling"),

        array("titulo"=>"Revolução Russa","genero"=>"documentario","d.publicacao"=>"01/08/1917","numero_livro"=>"95747","autor"=>"Lênin"),

        array("titulo"=>"Guerra Mundial II","genero"=>"documentario","d.publicacao"=>"1945","numero_livro"=>"88664","autor"=>"Hitter")

    );

    //pegar valores
    $varGenero = @$_GET['buscar'];
    $orden = @$_GET['orde'];
    $vet_livro = []; //os livros pesquisados


    foreach($livros as $genero_livro){

        if($varGenero == $genero_livro['genero']){
            array_push($vet_livro,$genero_livro);
        }
    }
    
    
    //ondenar livros pesquisados
        if($orden=="on"){
            for($i=0;$i<count($vet_livro);$i++){
                for($j=$i;$j< count($vet_livro);$j++){
                    if($vet_livro[$i]['titulo']>$vet_livro[$j]['titulo']){
                        $laux = $vet_livro[$i];
                        $vet_livro[$i] = $vet_livro[$j];
                        $vet_livro[$j] = $laux;
                    }
                }
            }
        }
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
    <title>Tabela de livros</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="d-grid gap-2">
                    <a class="btn btn-primary" type="button">Voltar</a>
                </div>
            </div>
            <div class="col-6">
                <select class="form-select btn btn-primary" aria-label="Default select example" id="Select-estilo">
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
                            <th scope="col">Titulo</th>
                            <th scope="col">Genero</th>
                            <th scope="col">Autor</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php
                            $cont=1;
                            if(count($vet_livro)==0)
                            {
                        ?>
                                <tr>
                                    <td colspan="4"><?php echo "Nenhum livro deste Gênero foi encontrado na lista !!!";?></td>
                                </tr>
                        <?php
                            }else
                            {
                            foreach($vet_livro as $print_livro){
                                
                        ?>
                                <tr>
                                    <th scope="row"><?php echo $cont ?> </th>
                                    <td><?php echo $print_livro['titulo']; ?></td>
                                    <td><?php echo $print_livro['genero'];?></td>
                                    <td><?php echo $print_livro['autor'];?></td>
                                </tr>
                        <?php
                                $cont++;
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
