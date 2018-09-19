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
		</div>
		<!-- end row -->
		
		<div class="alert alert-danger" role="alert" >
			<h4 class="alert-heading">Atenção!</h4>
			<p>Sistema de Controle de Processo sendo desenvolvido!</p>
			<p>Todos as informações aqui encontradas são meramente <b>fictícias!</b></p>
			<p>Para mais informações contactar: 3591 - 2º Sgt Deusyvan - Auxiliar Informática - <b>Desenvolvedor Responsável</b></p>
		</div>
						
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
				<div class="card-box noradius noborder bg-default">
					<i class="fa fa-file-text-o float-right text-white"></i>
					<h6 class="text-white text-uppercase m-b-20">Processos no Estoque</h6>
					<h1 class="m-b-20 text-white"><?php echo $total_processos; ?></h1>
					<span class="text-white"><?php echo $total_processos_mes; ?> neste mês!</span>
				</div>
			</div>

			<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
				<div class="card-box noradius noborder bg-warning">
					<i class="fa fa-bar-chart float-right text-white"></i>
					<h6 class="text-white text-uppercase m-b-20">Processos Em Análise</h6>
					<h1 class="m-b-20 text-white counter"><?php echo $total_em_analise; ?></h1>
					<span class="text-white"><?php echo round($percentual_analise,2); ?>% do Total</span>
				</div>
			</div>

 			<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
				<div class="card-box noradius noborder bg-info">
					<i class="fa fa-user-o float-right text-white"></i>
					<h6 class="text-white text-uppercase m-b-20">Atos no "TCU"</h6>
					<h1 class="m-b-20 text-white counter"><?php echo $total_atos; ?></h1>
					<span class="text-white"><?php echo $atos_sem_processo; ?> ainda não chegaram</span>
				</div>
			</div>

 			<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
				<div class="card-box noradius noborder bg-danger">
					<i class="fa fa-bell-o float-right text-white"></i>
					<h6 class="text-white text-uppercase m-b-20">Diligências Vigentes</h6>
					<h1 class="m-b-20 text-white counter"><?php echo $total_diligencias; ?></h1>
					<span class="text-white"><?php echo $novas_diligencias; ?> Novas Diligências</span>
				</div>
			</div>
		</div>
		<!-- end row -->

		<div class="row">
		
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">						
				<div class="card mb-3">
					<div class="card-header">
						<h3><i class="fa fa-line-chart"></i> Atos do TCU</h3>
							Comparativo de Atos do TCU no portal: E-Pessoal com os processos físicos no CCIEx 
					</div>
							
					<div class="card-body">
							<canvas id="lineChart"></canvas>
					</div>							
					<div class="card-footer small text-muted">Atualizado hoje às 10:59 AM</div>
				</div>
				<!-- end card-->
									
			</div>

				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">						
					<div class="card mb-3">
						<div class="card-header">
							<h3><i class="fa fa-bar-chart-o"></i> Tipos de Processos</h3>
							 Gráfico com informações dos quantitativos de processos separados por tipo.
						</div>
							
						<div class="card-body">
							<canvas id="pieChart"></canvas>
						</div>
						<div class="card-footer small text-muted">Atualizado hoje às 10:59 AM</div>
					</div><!-- end card-->					
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">						
					<div class="card mb-3">
						<div class="card-header">
							<h3><i class="fa fa-bar-chart-o"></i> Diligências Realizadas por Área</h3>
							 Gráfico mostra os quantitativos de diligências por RM
						</div>
							
						<div class="card-body">
							<canvas id="doughnutChart"></canvas>
						</div>
						<div class="card-footer small text-muted">Atualizado hoje às 10:59 AM</div>
					</div><!-- end card-->					
				</div>
				
		</div>
		<!-- end row -->
    </div>
    <!-- END container-fluid -->