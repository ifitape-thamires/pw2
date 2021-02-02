<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php require "cabecalho.php";
    require_once "conexao.php";

    $comando = "SELECT * FROM turma";

    $result = mysqli_query($conexao, $comando);


?>

    <form action="processa_cad_aluno.php" method="POST">
        Nome: <input type="text" name="txtNome"><br>
        Prontuario: <input type="text" name="txtProntuario"><br>
        Telefone: <input type="text" name="txtTelefone"><br>
        Cidade: <input type="text" name="txtCidade"><br>
        Sexo: <input type="radio" value="M" name="rdSexo"> Masculino  
              <input type="radio" value="F" name="rdSexo"> Feminino <br>
        Turma: <select name="txtTurma"> 
                <option> Selecione uma turma </option>

            <?php 
                while( $linha = mysqli_fetch_assoc($result)) {
            ?>                    
                    <option value="<?=$linha['id_turma']?>" <?=$selected?>><?=$linha['nome']?></option>';
            <?php        
                }
            ?>
            </select>
        <button type="submit"> Enviar </button>

    </form>
</body>
</html>