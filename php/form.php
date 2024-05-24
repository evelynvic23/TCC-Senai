<?php include 'header.php';?>


<form action="cadastro.php" method="post" class="formulario" id="form">
  <div class="form-group">
    <label for="nome_aluno">Nome do Aluno:</label>
    <input type="text" class="form-control form-control-lg" placeholder="..." name="nome_aluno" id="nome_aluno" >
  </div>
  <div class="form-group">
    <label for="email_aluno">Email do Aluno:</label>
    <input type="email" class="form-control form-control-lg" placeholder="..." name="email_aluno" id="email_aluno">
  </div>
  <div class="form-group">
    <label for="telefone_aluno">Telefone:</label>
    <input type="text" class="form-control form-control-lg" placeholder="..." name="telefone_aluno" id="telefone_aluno" >
 
  </div>

  <br>
  
  <div class="d-grid">
  <button id="b" type="submit" class="btn btn-info" value="Cadastrar aluno" onclick="alertCadastrado()">Cadastrar Aluno(a)</button>
</div>

<br>
<br>

<div class="d-grid">
        <a href="index.php" class="btn btn-warning" id="b2"> Voltar </a>
    </div>

</form>


<?php include 'footer.php';?>

<script>


  // Envio seguro do formulário

  document.getElementById('form').addEventListener('submit', function(event) {
  event.preventDefault(); // Impede o envio automático do formulário

  const campos = document.querySelectorAll('#form input, #form textarea');
  let camposPreenchidos = true;

  campos.forEach(function(campo) {
    if (!campo.value.trim()) {
      camposPreenchidos = false;
      campo.style.borderColor = 'black';
    } else {
      campo.style.borderColor = '';
    }
  });

  if (camposPreenchidos) {
    alert('Formulário enviado com sucesso!!!');
    // Submete o formulário manualmente após a validação
    this.submit();
  } else {
    alert('Preencha todos os campos obrigatórios!');
  }
});



    
</script>