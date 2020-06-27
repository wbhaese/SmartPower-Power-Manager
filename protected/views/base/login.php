<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://getbootstrap.com.br/docs/4.1/examples/sign-in/signin.css">
  <link rel="icon" href="icone.svg">

  <title>Smart Energy - Login</title>
</head>

<body>
  <div class="container text-center">
    <form class="form-signin" style="background-color: white; box-shadow: 1px 1px 100px gray;">
      <img class="mb-4" src="https://image.flaticon.com/icons/svg/702/702814.svg" alt="Logo Login" width="72" height="72">
      <h4 class="mb-3">Acesso Virtual - SmartPower</h4>

      <p class="text-left" for="exampleInputEmail1">Nome de Usuário</p>
      <input type="text" name="nome" id="nome" class="mb-2 form-control" placeholder="Nome" maxlength="14"  style="background-color: #ececec;" required autofocus>

      <p class="text-left" for="exampleInputEmail1">Senha</p>
      <input type="password" name="senha" id="inputSenha" class="mb-2 form-control" placeholder="Senha" maxlength="8" style="background-color: #ececec;" required>
      
      <button class="btn btn-lg btn-danger btn-block" type="submit" id="login">Acessar</button>
      <!-- <label class="form-check-label" for="exampleCheck1">Lembrar senha</label> -->
      <h6 class="mb-3" id="cadastrarUser" style="margin-top:20px"><a href="<?= $this->createUrl('/base/cadastrar') ?>">Cadastrar usuário</a></h6>
      <h6 class="mb-3"  id="error" style="color:red; margin-top:20px" ></h6>
    </form>
    <p class="text-center text-danger">
      <?php if (isset($_SESSION['loginErro'])) {
        echo $_SESSION['loginErro'];
        unset($_SESSION['loginErro']);
      } ?>
    </p>
    <p class="text-center text-success" style="background-color: #a5efa69b; border-color: #28A745">
      <?php
      if (isset($_SESSION['logindeslogado'])) {
        echo $_SESSION['logindeslogado'];
        unset($_SESSION['logindeslogado']);
      }
      ?>
    </p>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
  
  <script>
    $('#login').on('click', function(e) {
      e.preventDefault();
      // debugger;
    
      let nome = $('#nome').val();
      let senha = $('#inputSenha').val();     

      $.ajax({
          type: 'GET',
          url: "<?= $this->createUrl('/usuarios/buscarUsuario') ?>",
          data: { 'userData' : nome.toLowerCase() + '-' + senha.toLowerCase() }, 
          async: false,
          success: function(response) {
              console.log('response', response);
              window.location.href = response;
              
          },
          error: function(response) {
            console.log('response', response);
            $('#error').text('Usuário ou senha inválidos');
              
          }
      });
    
    });

    // Swal.fire({
      //   title: 'Por favor aguarde',
      //   allowEscapeKey: false,
      //   allowOutsideClick: false,
      //   onBeforeOpen: () => {
      //       Swal.showLoading()
      //   }
      // });

  </script>

</body>

</html>