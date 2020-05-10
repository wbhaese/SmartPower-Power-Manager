<?php
// include("../process/config.php");?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Administração - Smart Energy</title>
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">

    <script src="../js/functions.js"></script>
    <script src="https://kit.fontawesome.com/eba2add985.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light shadow p-3 mb-5 bg-white rounded">
		<a class="navbar-brand" href="administrativo.php"><i class="fas fa-power-off"></i>&nbsp;&nbsp;Smart Energy</a>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<div class="btn-group">
					<button type="button" class="btn dropdown-toggle botaoCriar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-plus-square"></i>&nbsp;&nbsp;Criar
					</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#"><i class="fas fa-user"></i>&nbsp;Usuário</a>
						<a class="dropdown-item" href="#"><i class="fas fa-map-marker-alt"></i>&nbsp;Local</a>
						<a class="dropdown-item" href="#">Alguma coisa aqui</a>
						<div class="dropdown-divider">
						</div>
						<a class="dropdown-item" href="#">OUTRO ITEM</a>
					</div>
				</div>

				<li class="nav-item dropdownright">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-user"></i>&nbsp;&nbsp;<span class="badge badge-dark">3</span>
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Meu Perfil</a>
						<a class="dropdown-item" href="#">Ajuda</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="logout.php">Sair</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>

	<!-- Menu Lateral -->
	<div class="row">
		<div class="col-" style="margin-top: -48px;">
			<div class="list-group">
				<a href="#" class="list-group-item list-group-item-action"><i class="fas fa-laptop-house"></i>&nbsp;&nbsp;Monitoramento</a>
				<div class="list-group-item list-group-item-info divisorLista">Cadastros</div>
				<a href="#" class="list-group-item list-group-item-action"><i class="fas fa-users">&nbsp;&nbsp;</i>Usuários</a>
				<a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
				<a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
				<a href="#" class="list-group-item list-group-item-action">Vestibulum at eros</a>
			</div>
		</div>
		<div class="col-sm">
			<!-- Card's Contadores -->
			<div class="card" style="width: 48%; background-color: lightblue; border-style: none; float: left; margin-left: -8px;">
				<div class="card-body">
					<h5 class="card-title">Quant. Salas</h5>
					<h6 class="card-subtitle mb-2 text-muted" style="float: right">0/10</h6>
					<br>
					<p class="card-text" style="float: right">Ativas/Total</p>
				</div>
			</div>
			<div class="card" style="width: 48%; background-color: #E7505A; border-style: none; float: right; margin-left: 10px;">
				<div class="card-body">
					<h5 class="card-title">Quant. Equipamentos</h5>
					<h6 class="card-subtitle mb-2 text-muted" style="float: right">0/10</h6>
					<br>
					<p class="card-text" style="float: right">Ativas/Total</p>
				</div>
			</div>
			<!-- Card Frame -->
			<br><br><br><br><br><br>
			<div class="card" style=" margin-left: -8px;">
				<div class="card-header">
					Auditório
				</div>
				<div class="row">
					<div class="col-3">
						<div class="card-body">
							<div class="card shadow p-3 mb-5 bg-white rounded" style="width: 18rem;">
								<div class="card-body" style="text-align: center">
									<h5 class="card-title">Ar-Condicionado 1</h5>
									<img src="https://image.flaticon.com/icons/svg/1659/1659283.svg" width="30%" alt="">
								</div>
								<ul class="list-group list-group-flush">
									<li class="list-group-item itemCard"><i class="fas fa-play"></i>&nbsp;Modo<p class="text-info" style="float: right">Frio</p>
									</li>
									<li class="list-group-item itemCard"><i class="fas fa-thermometer-empty"></i>&nbsp;Temperatura interna <span class="temperatura" id="temperatura1"></span>
									</li>
									<li class="list-group-item itemCard"><i class="far fa-snowflake"></i>&nbsp;Turbo<p class="text-danger" style="float: right">Inativo</p>
									</li>
									<li class="list-group-item itemCard"><i class="fas fa-desktop"></i>&nbsp;Tela LED<p class="text-danger" style="float: right">Inativo</p>
									</li>
									<li class="list-group-item itemCard"><i class="fas fa-clock"></i>&nbsp;Timer<p class="text-danger" style="float: right">Inativo</p>
									</li>
								</ul>
								<div class="card-body" style="text-align: center">
									<input type="button" class="card-link btn btn-outline-danger col" id="estadoEquipamento" value="Inativo" onclick="setarTemperatura()">
								</div>
							</div>
						</div>
					</div>
					<div class="col-3">
						<div class="card-body">
							<div class="card shadow p-3 mb-5 bg-white rounded" style="width: 18rem;">
								<div class="card-body" style="text-align: center">
									<h5 class="card-title">Ar-Condicionado 2</h5>
									<img src="https://image.flaticon.com/icons/svg/1659/1659283.svg" width="30%" alt="">
								</div>
								<ul class="list-group list-group-flush">
									<li class="list-group-item itemCard"><i class="fas fa-play"></i>&nbsp;Modo<p class="text-info" style="float: right">Frio</p>
									</li>
									<li class="list-group-item itemCard"><i class="fas fa-thermometer-empty"></i>&nbsp;Temperatura interna <span class="temperatura" id="temperatura2"></span>
									</li>
									<li class="list-group-item itemCard"><i class="far fa-snowflake"></i>&nbsp;Turbo<p class="text-primary" style="float: right">Turbo</p>
									</li>
									<li class="list-group-item itemCard"><i class="fas fa-desktop"></i>&nbsp;Tela LED<p class="text-success" style="float: right">Ativo</p>
									</li>
									<li class="list-group-item itemCard"><i class="fas fa-clock"></i>&nbsp;Timer<p class="text-danger" style="float: right">Inativo</p>
									</li>
								</ul>
								<div class="card-body" style="text-align: center">
									<input type="button" class="card-link btn btn-outline-danger col" id="estadoEquipamento2" value="Inativo" onclick="setarTemperatura2()">
								</div>
							</div>
						</div>
					</div>
					<div class="col-3">
						<div class="card-body">
							<div class="card shadow p-3 mb-5 bg-white rounded" style="width: 18rem;">
								<div class="card-body" style="text-align: center">
									<h5 class="card-title">Lampada</h5>
									<img src="https://image.flaticon.com/icons/svg/2097/2097141.svg" width="30%" alt="">
								</div>
								<ul class="list-group list-group-flush">
									<li class="list-group-item itemCard"><i class="fas fa-play"></i>&nbsp;Modo<p class="text-info" style="float: right">Frio</p>
									</li>
								</ul>
								<div class="card-body" style="text-align: center">
									<input type="button" class="card-link btn btn-outline-danger col" id="estadoEquipamento2" value="Inativo" onclick="setarTemperatura2()">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

</html>