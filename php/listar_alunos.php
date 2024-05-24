<?php 
// Incluir o arquivo de conexão ao banco de dados
include "database.php"; 
// Incluir o header 
include "header.php"; 

// Declarar uma variável para receber o comando em SQL
$sql_listar = "SELECT * FROM sge_alunos";

// Utilizar a função mysqli_query para conectar ao banco e executar o comando SQL
$consulta_bd = mysqli_query($conexao, $sql_listar);
?>

<!-- Tabela para listar os dados -->
<table class="table table-striped">
    <!-- Cabeçalho da tabela -->
    <thead>
        <!-- Linha da tabela -->
        <tr>
            <!-- nome do índice da coluna -->
            <th>Nome:</th>
            <th>E-mail:</th>
            <th>Telefone:</th>
            <th>Atualizar:</th>
            <th>Excluir:</th>
        </tr>
    </thead>
    <!-- Corpo da tabela -->
    <tbody>
        <?php while($dados_bd = mysqli_fetch_array($consulta_bd)): ?>
            <!-- Linha da tabela -->
            <tr>
                <td><?php echo htmlspecialchars($dados_bd['nome_aluno']); ?></td>
                <td><?php echo htmlspecialchars($dados_bd['email_aluno']); ?></td>
                <td><?php echo htmlspecialchars($dados_bd['telefone_aluno']); ?></td>
                <td><a href="form_atualizar_cad_aluno.php?id=<?php echo $dados_bd['id']; ?>"><img src="icons/up.png" alt="atualizar" width="30%"></a></td>
                <td><a href="excluir_cadastro_aluno.php?id=<?php echo $dados_bd['id']; ?>"><img src="icons/deleta.png" alt="deletar" width="35%"></a></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<div class="d-grid">
    <a href="index.php" class="btn btn-primary" id="b2">Voltar</a>
</div>

<?php include "footer.php"; ?>
