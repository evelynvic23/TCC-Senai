<?php 
    //inclui o cabeçalho do site
    include 'header.php'; 
     
    //inclui conexao com o banco de dados
    include 'database.php';

    //resgatar o id passado via get pelo link do listar alunos
    $id_aluno_update = $_GET ['id'];

    //declarar variavel e inserir o comando em sql para consulta por id 
    $sql_id = "SELECT * FROM sge_alunos WHERE sge_alunos.id = '$id_aluno_update'";

    //utiliza a funçao mysqli_query e armazena o resultado em uma variavel 
    $consulta_id = mysqli_query($conexao, $sql_id);

    //converter o resultado da consulta em sql para um array associativo
    $dados_aluno_id = mysqli_fetch_array($consulta_id);            


?>
    <h2>Atualização de cadastro.</h2>
    <P>Todos os campos devem estar preenchidos.</P>
    <form action="atualizar_cadastro_aluno.php" method="post">

    <input type="hidden" name="id" value="<?php echo $dados_aluno_id['id'];?>">

    <div class="mb-3 mt-3">
        <label for="nome_aluno">Nome completo: </label>
        <input type="text" name="nome_aluno" id="nome_aluno" value="<?php echo $dados_aluno_id['nome_aluno'];?>" class="form-control" ><br>
    </div>

    <div class="mb-3 mt-3">
        <label for="email_aluno">Email:</label>
        <input type="text" name="email_aluno" id="email_aluno"  value="<?php echo $dados_aluno_id['email_aluno'];?>" class="form-control"><br>
    </div>

    <div class="mb-3 mt-3">
        <label for="telefone_aluno">Telefone:</label>
        <input type="text" name="telefone_aluno" id="telefone_aluno"  value="<?php echo $dados_aluno_id['telefone_aluno'];?>" class="form-control"><br>
    </div>
    <div class="d-grid">
        <input type="submit" value="Atualizar Cadastro"class="btn btn-primary" id="b2">
    </div>
    </form> <br>

    <div class="d-grid">
        <a href="index.php" class="btn btn-warning" id="b2"> Voltar </a>
    </div>


    <?php include 'footer.php'; ?>