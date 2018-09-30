<?php
/***********************************************************************************************************
* local/script name: ./views/home.php                                                                      *
* Criado por: 2º Sgt Deusyvan deusyvan@gmail.com / contato@dfsweb.com.br                                   *
* Inclui arquivo de inicialização do sistema                                                               *
* Define o contexto básico lançado em cada página                                                          *
* **********************************************************************************************************/
?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-12">
				<div class="breadcrumb-holder">
					<h1 class="main-title float-left">Dashboard</h1>
					<ol class="breadcrumb float-right">
						<li class="breadcrumb-item">Home</li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
					<div class="clearfix"></div>
				</div>
			</div>
		</div><!-- end row -->
		
		<div class="alert alert-danger" role="alert" >
			<h4 class="alert-heading">Atenção!</h4>
			<p>Sistema de Controle de Contatos sendo desenvolvido!</p>
			<p>Todos as informações aqui encontradas são meramente <b>fictícias!</b></p>
			<p>Para mais informações contactar: 61 9 8548-1931 - Deusyvan - Analista de Sistemas - <b>Desenvolvedor Responsável</b></p>
		</div>
						
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
				<div class="card-box noradius noborder bg-default">
					<i class="fa fa-file-text-o float-right text-white"></i>
					<h6 class="text-white text-uppercase m-b-20">Total de Contatos</h6>
					<h1 class="m-b-20 text-white"><?php echo $total_contatos; ?></h1>
					<span class="text-white">Outras análises!</span>
				</div>
			</div>

			<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
				<div class="card-box noradius noborder bg-warning">
					<i class="fa fa-bar-chart float-right text-white"></i>
					<h6 class="text-white text-uppercase m-b-20">Contatos com Whatzap</h6>
					<h1 class="m-b-20 text-white counter"><?php echo $total_whatzap; ?></h1>
					<span class="text-white">Outras análises!</span>
				</div>
			</div>

 			<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
				<div class="card-box noradius noborder bg-info">
					<i class="fa fa-user-o float-right text-white"></i>
					<h6 class="text-white text-uppercase m-b-20">Contatos On-line</h6>
					<h1 class="m-b-20 text-white counter"><?php echo $total_online; ?></h1>
					<span class="text-white">Outras análises!</span>
				</div>
			</div>

 			<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
				<div class="card-box noradius noborder bg-danger">
					<i class="fa fa-bell-o float-right text-white"></i>
					<h6 class="text-white text-uppercase m-b-20">Contatos Pendentes</h6>
					<h1 class="m-b-20 text-white counter"><?php echo $total_pendentes; ?></h1>
					<span class="text-white">Outras análises!</span>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
				<div class="card-box noradius noborder bg-default">
					<i class="fa fa-file-text-o float-right text-white"></i>
					<h6 class="text-white text-uppercase m-b-20">Contatos Retirados da Lista</h6>
					<h1 class="m-b-20 text-white"><?php echo $total_nao_apoia; ?></h1>
					<span class="text-white">Outras análises!</span>
				</div>
			</div>

 			<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
				<div class="card-box noradius noborder bg-info">
					<i class="fa fa-user-o float-right text-white"></i>
					<h6 class="text-white text-uppercase m-b-20">Contatos Sem Whatzap</h6>
					<h1 class="m-b-20 text-white counter"><?php echo $total_sem_whatzap; ?></h1>
					<span class="text-white">Outras análises!</span>
				</div>
			</div>

 			<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
				<div class="card-box noradius noborder bg-danger">
					<i class="fa fa-bell-o float-right text-white"></i>
					<h6 class="text-white text-uppercase m-b-20">Contatos Aceitos</h6>
					<h1 class="m-b-20 text-white counter"><?php echo $total_aceitos; ?></h1>
					<span class="text-white">Outras análises!</span>
				</div>
			</div>
		</div><!-- end row -->
    </div>    <!-- END container-fluid -->