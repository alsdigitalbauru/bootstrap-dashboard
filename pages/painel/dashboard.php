<!doctype html>
<html lang="pt-BR">

<head>
	<script src="/dmxAppConnect/dmxAppConnect.js"></script>
	<meta name="ac:route" content="/painel/dashboard">
	<base href="/pages/painel/">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no maximum-scale=0">
	<title>Dashboard Template · Bootstrap</title>
	<link rel="stylesheet" href="/fontawesome4/css/font-awesome.min.css" />
	<script src="/js/jquery-3.4.1.slim.min.js"></script>
	<link rel="stylesheet" href="/bootstrap/4/css/bootstrap.min.css" />
	<script src="/dmxAppConnect/dmxBootstrap4Collapse/dmxBootstrap4Collapse.js" defer=""></script>
	<link href="/assets/css/dashboard.css" rel="stylesheet">
</head>

<body is="dmx-app" id="dashboard">
	<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
		<a class="navbar-brand col-md-3 col-lg-2 mr-0 pt-3 pb-3 pl-3 pr-3" href="#">Company name</a>
		<button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<ul class="navbar-nav px-3 flex-row justify-content-between">
			<li class="nav-item text-nowrap mr-3">
				<a class="nav-link" href="#"><i class="fa fa-external-link"></i> Ver Site </a>
			</li>
			<li class="nav-item text-nowrap mr-3">
				<a class="nav-link" href="#"><i class="fa fa-envelope-o"></i><span class="badge badge-danger badge-pill">+99</span> </a>
			</li>
			<li class="nav-item text-nowrap">
				<a class="nav-link" href="#"><i class="fa fa-sign-out"></i> Sair</a>
			</li>
		</ul>
	</nav>

	<div class="container-fluid">
		<div class="row">
			<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse mt-n5">
				<div class="sidebar-sticky">
					<ul class="nav flex-column">
						<li class="nav-item font-weight-bold mb-3 pl-3">
							MENU ADMINISTRADOR
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><i class="fa fa-users"></i> Usuários</a>
							<hr>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#" data-toggle="collapse" data-target="#collapse_menu_paginas"><i class="fa fa-caret-down"></i> Páginas</a>
							<div class="collapse" id="collapse_menu_paginas" is="dmx-bs4-collapse">
								<ul id="nav_sub_paginas">
									<a href="/">
										<li class="text-dark"> Categorias</li>
									</a>
									<a href="/">
										<li class="text-dark">Categorias</li>
									</a>
								</ul>
							</div>
							<hr>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								<i class="fa fa-file-o fa-fw"></i> Orders
							</a>
							<hr>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								<i class="fa fa-file-o fa-fw"></i> Orders
							</a>
							<hr>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								<i class="fa fa-file-o fa-fw"></i> Orders
							</a>
							<hr>
						</li>
					</ul>

				</div>
			</nav>
			<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
				<h2>Dashboard</h2>
				<section>
					<div class="container-fluid">
						<div class="row">
							<div class="col"></div>
						</div>
					</div>
				</section>
			</main>
		</div>
	</div>
	<script>
		window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')
	</script>
	<script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
	<script src="dashboard.js"></script>
	<script src="/bootstrap/4/js/popper.min.js"></script>
	<script src="/bootstrap/4/js/bootstrap.min.js"></script>
</body>

</html>
