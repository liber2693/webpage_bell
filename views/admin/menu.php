	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
		<center>
			<a class="navbar-brand" href="inicAmin.php">
			<img src="../../img/images/logos.jpg" width="45%" height="30%"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class=""><i class="fas fa-align-justify" style="color: #fff;"></i></span>
			</button>
		</center>
		
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		    	<li class="nav-item active">
		        	<a class="nav-link" href="inicAmin.php">Inicio <span class="sr-only">(current)</span></a>
		      	</li> &nbsp;&nbsp;
				<li class="nav-item">
					<a class="nav-link" href="createAdmin.php">Agregar Noticia</a>
				</li>
				<!--<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Dropdown
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Disabled</a>
				</li>-->
		    </ul>
			<i id="login_out" onclick="<?php echo "cerrar_seccion(".$id.",'".$acceso."')";?>" class="fa fa-user"></i>
	  	</div>
	</nav>