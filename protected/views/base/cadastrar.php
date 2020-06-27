<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://getbootstrap.com.br/docs/4.1/examples/sign-in/signin.css">
  <link rel="icon" href="icone.svg">

  <title>Smart Energy - Cadastrar</title>


  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <!-- <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet"> -->
  <!-- <script src="js/ie-emulation-modes-warning.js"></script> -->
</head>

<body>
  <div class="container text-center">
    <form class="form-signin-lg " style="background-color: white; box-shadow: 1px 1px 100px gray;">
      <img class="mb-4" src="https://image.flaticon.com/icons/png/512/17/17004.png" alt="Logo Login" width="72" height="72">
      <h4 class="mb-3">Cadastrar Usuário</h4>

      <div class="row col-md-12">
        <div class="col-md-6">
          <p class="text-left" for="exampleInputEmail1">Endereço de email</p>
          <input type="text" name="Email" id="email" class="mb-2 form-control" maxlength="112"  style="background-color: #ececec;" required>
        </div>

        <div class="col-md-6">
          <p class="text-left" for="exampleInputEmail1">Nome de Usuário</p>
          <input type="text" name="nome" id="nome" class="mb-2 form-control" maxlength="14"  style="background-color: #ececec;" required autofocus>
        </div>
      </div>

      <div class="row col-md-12">
        <div class="col-md-6">
          <p class="text-left" for="exampleInputEmail1">Senha</p>
          <input type="password" name="senha" id="inputSenha" class="mb-2 form-control" maxlength="14"  style="background-color: #ececec;" required autofocus>
        </div>

        <div class="col-md-6">
          <p class="text-left" for="exampleInputEmail1">Confirmar Senha</p>
          <input type="password" name="confirmaSenha" id="confirmaSenha" class="mb-2 form-control" maxlength="14"  style="background-color: #ececec;" required autofocus>
        </div>
      </div>
      
        <br/>
      <button type="submit" class="col-md-4 btn btn-primary btn-lg " style="margin-bottom: 20px;" id="cadastrar">Cadastrar</button>

      <h6 class="mb-3"  id="error" style="color:red; margin-top:20px;"></h6>
      <br/>
    </form>

    <div class="modal" id="msg-modal" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
       <div class="modal-content">         
         <div class="modal-body">
          <h5 class="title">Dados salvos com suceso!</h5>
          <p>Você será redirecionado para a página de Login.</p>
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-secondary">OK</button>
         </div>
       </div>
     </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  
  <script>
    $('#cadastrar').on('click', function(e) {
      e.preventDefault();

      let email = $('#email').val();
      let nome = $('#nome').val();
      let senha = $('#inputSenha').val();     
      let confirmaSenha = $('#confirmaSenha').val();
      
      if(!email, !nome, !senha, !confirmaSenha){
        $('#error').text('Todos os campos são obrigatórios. Por favor verifique novamente.');
        return;
      }

      if(senha != confirmaSenha){
        $('#error').text('As senhas não são iguais. Por favor preencha novamente.');
        return;
      }     

      $.ajax({
          type: 'GET',
          url: "<?= $this->createUrl('/usuarios/cadastrarUser') ?>",
          data: { 'registerData' : email + '-' + nome + '-' + senha}, 
          async: false,
          success: function(response) {
              console.log('response', response);
              
              $('#msg-modal').show();

              setTimeout(() => {        
                window.location.href = response;              
              }, 1500);
          },
          error: function(response) {
            console.log('response', response);
            $('#error').text('Ocorreu um erro ao salvar os dados. Favor entrar em contato com suporte.');
              
          }
      });
    
    });

  </script>

</body>

</html>