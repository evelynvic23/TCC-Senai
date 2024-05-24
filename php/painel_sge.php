<?php 
    include 'header.php';

    //Iniciar a sessão em PHP
    session_start();

    //Recuperando o array de usuário da sessão e armazenando 
    $usuario = $_SESSION['usuario'];

    //Verificar o perfil de acesso 
    if($usuario['perfil'] != "admin"){?>

    <!-- Conteúdo em HTML - Perfil Aluno -->
    <div class="card" style="width:500px">
        <img class="card-img-top" src="imagens/alunos.png" alt="Card image" style="width:100%" height="420px">
        <div class="card-body">
        <a href="form.php" class="btn btn-primary" id="b1">Cadastrar Aluno(a)</a>
        <a href="listar_alunos.php" class="btn btn-primary" id="b2">Lista de Alunos</a>
        </div>
    </div>
    <!-- Fim do conteúdo em HTML - Perfil aluno -->
    <?php
    }
    else{ ?>
        <!-- Conteúdo em HTML perfil admin -->

        <h2>Painel Administrativo - SGE</h2>
        <br>
        <hr>
        <p>Você tem a permissão de acesso: <?php echo $usuario['perfil'];?></p>
        <h3>Seja bem-vindo: <?php echo $usuario['login'];?></h3>

        <div class="card" style="width:500px">
          <img class="card-img-top" src="imagens/alunos.png" alt="Card image" style="width:100%" height="420px">
         <div class="card-body">
        <a href="form.php" class="btn btn-primary" id="b1">Cadastrar Aluno(a)</a>
        <a href="listar_alunos.php" class="btn btn-primary" id="b2">Lista de Alunos</a>
        </div>
        </div>
<?php 
    }
    include 'footer.php';

?>

