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
                        </li><!-- END Menu ajuda -->
						<!-- Menu Logar -->
                        <li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="<?php echo BASE_URL; ?>login" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/avatars/login.png" alt="Profile image" class="avatar-rounded">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Desconectado!</small> </h5>
                                </div>

                                <!-- item-->
                                <a href="pro-profile.html" class="dropdown-item notify-item">
                                    <i class="fa fa-user"></i> <span>Cadastre-se</span>
                                </a>
                            </div>
                        </li><!-- END Menu Logar -->
                    </ul>
        </nav>
	</div><!-- End Navigation -->
	
		<div class="content">
			<div class="container-fluid">
		<div class="row">
			<div class="col-xl-12">
				<div class="breadcrumb-holder">
					<h1 class="main-title float-left">Login</h1>
					<ol class="breadcrumb float-right">
						<li class="breadcrumb-item">Home</li>
						<li class="breadcrumb-item active">Login</li>
					</ol>
					<div class="clearfix"></div>
				</div>
			</div>
		</div><!-- end row -->
		<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">						
					<div class="card mb-3">						
						<div class="card-body">
							<form class="demo-form" method="POST">
							  <div class="form-section">
								<label for="email">E-mail:</label>
								<input type="text" class="form-control" name="email" id="email" required>

								<label for="senha">Senha:</label>
								<input type="password" class="form-control" name="senha" id="senha" required>
							  </div>
							  <br /><br />
							  <div class="form-navigation">
								<input type="submit" class="btn btn-primary pull-right" value="Fazer Login">
								<span class="clearfix"></span>
							  </div>
							</form>
						</div>														
					</div><!-- end card-->					
                </div>
		</div><!-- end row -->
    </div><!-- END container-fluid -->
    	</div><!-- END content -->
	
	<footer class="footer">
		<span class="text-right">Copyright <a target="_blank" href="#">Sistema de Controle de Contatos</a></span>
		<span class="float-right">Produzido por <a target="_blank" href="https://www.dfsweb.com.br">
			<b>DFSWeb - Sistemas OnLine</b></a>
		</span>
	</footer>
</div><!-- END main -->
	
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
</body>
</html>