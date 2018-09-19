<?php
/***********************************************************************************************************
* local/script name: ./views/template.php                                                                  *
* Criado por: 2º Sgt Deusyvan deusyvan@gmail.com / contato@dfsweb.com.br                                   *
* Inclui arquivo de template                                                                               *
* Define o contexto básico lançado em cada página                                                          *
* **********************************************************************************************************/
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Sistema de Controle de Contatos</title>
		<meta name="description" content="Sistema de Controle de Contatos | SisContCon">
		<meta name="author" content="Web Development - https://www.dfsweb.com.br">

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo BASE_URL; ?>assets/images/favicon.ico">
		
		<!-- Switchery css -->
		<link href="<?php echo BASE_URL; ?>assets/plugins/switchery/switchery.min.css" rel="stylesheet" />

		<!-- Bootstrap CSS -->
		<link href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Font Awesome CSS -->
		<link href="<?php echo BASE_URL; ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Custom CSS -->
		<link href="<?php echo BASE_URL; ?>assets/css/style.css" rel="stylesheet" type="text/css" />
		
		<!-- Select2 -->
		<link href="<?php echo BASE_URL; ?>assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
		
		<link href="<?php echo BASE_URL; ?>assets/css/style-externo.css" rel="stylesheet" type="text/css" />
		
		<!-- DatePicker -->
		<link href="<?php echo BASE_URL; ?>assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css" rel="stylesheet" /> 
		<link href="<?php echo BASE_URL; ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />
</head>

<body class="adminbody">

<div id="main">

	<!-- top bar navigation -->
	<div class="headerbar">

		<!-- LOGO -->
        <div class="headerbar-left">
			<a href="<?php echo BASE_URL; ?>" class="logo"><img alt="Logo" src="assets/images/logo.png" /> <span>SisContCon</span></a>
        </div>

        <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">
						<!-- Menu ajuda -->
						<li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fa fa-fw fa-question-circle"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><small>Ajuda e Suporte</small></h5>
                                </div>

                                <!-- item-->
                                <a target="_blank" href="https://intranet.cciex.eb.mil.br/blog-info/contato" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Gostaria de falar com o Desenvolvedor sobre o sistema?</b>
                                        <span>Envie uma mensagem</span>
                                    </p>
                                </a>

                                <!-- item-->
                                <a target="_blank" href="https://intranet.cciex.eb.mil.br/blog-info/relatar" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Gostaria apenas de relatar um problema?</b>
                                        <span>Conte-nos</span>
                                    </p>
                                </a>                               

                                <!-- All-->
                                <a title="Clique para visitar o Blog da Informática" target="_blank" href="https://intranet.cciex.eb.mil.br/blog-info" class="dropdown-item notify-item notify-all">
                                    <i class="fa fa-link"></i> Visite nosso Blog da Informática
                                </a>

                            </div>
                        </li>
						<!-- END Menu ajuda -->
						
						<!-- Menu MSG -->
                        <li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fa fa-fw fa-envelope-o"></i><span class="notif-bullet"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><small><span class="label label-danger pull-xs-right">12</span>Mensagens de Contatos</small></h5>
                                </div>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Jokn Doe</b>
                                        <span>Nova mensagem recebida</span>
                                        <small class="text-muted">2 minutes atrás</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Michael Jackson</b>
                                        <span>Nova mensagem recebida</span>
                                        <small class="text-muted">15 minutes atrás</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Foxy Johnes</b>
                                        <span>Nova mensagem recebida</span>
                                        <small class="text-muted">Ontem, 13:30</small>
                                    </p>
                                </a>

                                <!-- All-->
                                <a href="#" class="dropdown-item notify-item notify-all">
                                    Ver todas mensagens
                                </a>

                            </div>
                        </li>
                        <!-- END Menu MSG -->
                        
                        <!-- Menu Alertas -->
						<li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fa fa-fw fa-bell-o"></i><span class="notif-bullet"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg">
								<!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><small><span class="label label-danger pull-xs-right">5</span>Alertas</small></h5>
                                </div>
								
                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="assets/images/avatars/avatar2.png" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>John Doe</b>
                                        <span>Registro do usuário</span>
                                        <small class="text-muted">3 minutes atrás</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="assets/images/avatars/avatar3.png" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>Michael Cox</b>
                                        <span>Tarefa 2 concluída</span>
                                        <small class="text-muted">12 minutes atrás</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="assets/images/avatars/avatar4.png" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>Michelle Dolores</b>
                                        <span>Novo trabalho concluído</span>
                                        <small class="text-muted">35 minutes atrás</small>
                                    </p>
                                </a>

                                <!-- All-->
                                <a href="#" class="dropdown-item notify-item notify-all">
                                    Ver todos os Alertas
                                </a>

                            </div>
                        </li>
						<!-- END Menu Alertas -->
						
						<!-- Menu Logado -->
                        <li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/avatars/admin.png" alt="Profile image" class="avatar-rounded">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Olá, administrador</small> </h5>
                                </div>

                                <!-- item-->
                                <a href="pro-profile.html" class="dropdown-item notify-item">
                                    <i class="fa fa-user"></i> <span>Perfil</span>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <i class="fa fa-power-off"></i> <span>Logout</span>
                                </a>
								
								<!-- item-->
                                <a target="_blank" href="#" class="dropdown-item notify-item">
                                    <i class="fa fa-external-link"></i> <span>Nova página</span>
                                </a>
                            </div>
                        </li>
						<!-- END Menu Logado -->
						
                    </ul>
					
					<!-- Botão Menu -->
                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left">
								<i class="fa fa-fw fa-bars"></i>
                            </button>
                        </li>                        
                    </ul>

        </nav>

	</div>
	<!-- End Navigation -->
	
 
	<!-- Menu Lateral Esquerdo -->
	<div class="left main-sidebar">
		<div class="sidebar-inner leftscroll">
			<div id="sidebar-menu">
			<ul>
					<li class="submenu">
						<a href="<?php echo BASE_URL; ?>"><i class="fa fa-fw fa-bars"></i><span> Dashboard </span> </a>
                    </li>
                    <li class="submenu">
                        <a href="<?php echo BASE_URL; ?>atosTcu"><i class="fa fa-upload bigfonts" aria-hidden="true"></i><span> Importar Atos</span> </a>
                    </li>
					<li class="submenu">
                        <a href="#"><i class="fa fa-fw fa-table"></i> <span> Tabelas de Processos</span> <span class="menu-arrow"></span></a>
							<ul class="list-unstyled">
								<li ><a href="<?php echo BASE_URL; ?>processosDeposito">Depósito</a></li>
								<li><a href="<?php echo BASE_URL; ?>processosAnalise">Em Análise</a></li>
								<li><a href="<?php echo BASE_URL; ?>processosDevolvidos">Devolvidos</a></li>
							</ul>
                    </li>
                    <li class="submenu">
                        <a class="active" href="#"><i class="fa fa-fw fa-file-text-o"></i> <span> Cadastro </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li class="active"><a href="<?php echo BASE_URL; ?>processos">Processo</a></li>
                                <!-- <li><a href="forms-general.html">General Elements</a></li>
								<li><a href="forms-select2.html">Select2</a></li>
                                <li><a href="forms-text-editor.html">Text Editors</a></li>
								<li><a href="forms-upload.html">Multiple File Upload</a></li>
								<li><a href="forms-datetime-picker.html">Date and Time Picker</a></li>
								<li><a href="forms-color-picker.html">Color Picker</a></li> -->
                            </ul>
                    </li>
                    <li class="submenu">
                        <a class="pro" href="#"><i class="fa fa-fw fa-star"></i><span> Administração </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">								
                                <li><a target="_blank" href="<?php echo BASE_URL; ?>tiposProcesso">Tipos de Processo</a></li>
								<li><a href="pro-settings.html">Configurações</a></li>
								<li><a href="pro-profile.html">Meu Perfil</a></li>
                                <li><a href="pro-users.html">Usuários</a></li>
                                <li><a href="pro-articles.html">Artigos</a></li>
                                <li><a href="pro-categories.html">Categorias</a></li>
								<li><a href="pro-pages.html">Páginas</a></li>								
                                <li><a href="pro-contact-messages.html">Mensagens e Contatos</a></li>
								<li><a href="pro-slider.html">Slider</a></li>
                            </ul>
                    </li>
                    
<!-- 					<li class="submenu">
                        <a href="#"><i class="fa fa-fw fa-area-chart"></i><span> Gráficos upload</span> </a>
                    </li>
  -->                   
            </ul>
            <div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- End Menu Lateral Esquerdo -->
    <div class="content-page">
		<div class="content">
		<?php $this->loadViewInTemplate($viewName, $viewData); ?>
    	</div><!-- END content -->
  	</div><!-- END content-page -->
	<footer class="footer">
		<span class="text-right">
		Copyright <a target="_blank" href="#">Sistema de Controle de Processos - CCIEx</a>
		</span>
		<span class="float-right">
		Produzido por <a target="_blank" href="https://blog-informatica-cciex"><b>Informática CCIEx</b></a>
		</span>
	</footer>
</div>
    <!-- END main -->
    <script src="<?php echo BASE_URL; ?>assets/js/modernizr.min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/moment.min.js"></script>    		
    <script src="<?php echo BASE_URL; ?>assets/js/popper.min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/detect.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/fastclick.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/jquery.blockUI.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/jquery.nicescroll.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/plugins/switchery/switchery.min.js"></script>

    <!-- App js -->
    <script src="<?php echo BASE_URL; ?>assets/js/pikeadmin.js"></script>

    <!-- BEGIN Java Script for this page -->
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    	<script src="<?php echo BASE_URL; ?>assets/plugins/select2/js/select2.min.js"></script>

	<!-- Counter-Up-->
	<script src="<?php echo BASE_URL; ?>assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/plugins/counterup/jquery.counterup.min.js"></script>	
	
	<!-- DateTimePicker-->
	<script src="<?php echo BASE_URL; ?>assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/plugins/bootstrap-datepicker/dist/locales/bootstrap-datepicker.pt-BR.min.js"></script>
	
	<!-- Máscara -->
	<script src="<?php echo BASE_URL; ?>assets/plugins/jquery-maskedinput/dist/jquery.maskedinput.js"></script>
	
	<!-- Ações para start de plugins -->
	<script src="<?php echo BASE_URL; ?>assets/js/modal-acoes.js"></script>
	
	<script>
		$(document).ready(function() {
			// data-tables
			$('#example1').DataTable();
					
			// counter-up
			$('.counter').counterUp({
				delay: 10,
				time: 600
			});
		} );		
	</script>
	<script>
	$(document).ready(function() {
	    $('.select2').select2();
	});
	</script>
	
	<script>
	var ctx1 = document.getElementById("lineChart").getContext('2d');
	var lineChart = new Chart(ctx1, {
		type: 'bar',
		data: {
			labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
			datasets: [{
					label: 'Dataset 1',
					backgroundColor: '#3EB9DC',
					data: [10, 14, 6, 7, 13, 9, 13, 16, 11, 8, 12, 9] 
				}, {
					label: 'Dataset 2',
					backgroundColor: '#EBEFF3',
					data: [12, 14, 6, 7, 13, 6, 13, 16, 10, 8, 11, 12]
				}]
				
		},
		options: {
						tooltips: {
							mode: 'index',
							intersect: false
						},
						responsive: true,
						scales: {
							xAxes: [{
								stacked: true,
							}],
							yAxes: [{
								stacked: true
							}]
						}
					}
	});


	var ctx2 = document.getElementById("pieChart").getContext('2d');
	var pieChart = new Chart(ctx2, {
		type: 'pie',
		data: {
				datasets: [{
					data: [12, 19, 3, 5, 2, 3],
					backgroundColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)'
					],
					label: 'Dataset 1'
				}],
				labels: [
					"Red",
					"Orange",
					"Yellow",
					"Green",
					"Blue"
				]
			},
			options: {
				responsive: true
			}
	 
	});


	var ctx3 = document.getElementById("doughnutChart").getContext('2d');
	var doughnutChart = new Chart(ctx3, {
		type: 'doughnut',
		data: {
				datasets: [{
					data: [12, 19, 3, 5, 2, 3],
					backgroundColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)'
					],
					label: 'Dataset 1'
				}],
				labels: [
					"Red",
					"Orange",
					"Yellow",
					"Green",
					"Blue"
				]
			},
			options: {
				responsive: true
			}
	 
	});
	</script>
<!-- END Java Script for this page -->

</body>
</html>