<?php
/***********************************************************************************************************
* local/script name: ./views/login.php                                                                      *
* Criado por: Deusyvan deusyvan@gmail.com / contato@dfsweb.com.br                                   *
* Inclui arquivo de login do sistema                                                               *
* **********************************************************************************************************/
?>
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
		</div>
		<!-- end row -->
		
		<div class="row">
			
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">						
						<div class="card mb-3">
							<div class="card-header">
								<h3><i class="fa fa-hand-pointer-o"></i> Multi steps form demo</h3>
								Sometimes, you'll need to split long and fastidious forms into multiple parts. See how you could leverage Parsley groups to easily validate such multi step forms, step by step.
							</div>
								
							<div class="card-body">
								

								<form class="demo-form" action="#">
									  <div class="form-section">
										<label for="firstname">First Name:</label>
										<input type="text" class="form-control" name="firstname" id="firstname" required="">

										<label for="lastname">Last Name:</label>
										<input type="text" class="form-control" name="lastname" id="lastname" required="">
									  </div>

									  <div class="form-section">
										<label for="email">Email:</label>
										<input type="email" class="form-control" name="email" id="email" required="">
									  </div>

									  <div class="form-section">
										<label for="color">Favorite color:</label>
										<input type="text" class="form-control" name="color" id="color" required="">
									  </div>
										
									  <br /><br />
										
									  <div class="form-navigation">
										<button type="button" class="previous btn btn-info pull-left">&lt; Previous</button>
										<button type="button" class="next btn btn-info pull-right">Next &gt;</button>
										<input type="submit" class="btn btn-primary pull-right">
										<span class="clearfix"></span>
									  </div>

									</form>
									
									

								
							</div>														
						</div><!-- end card-->					
                    </div>
		</div><!-- end row -->
    </div>
    <!-- END container-fluid -->