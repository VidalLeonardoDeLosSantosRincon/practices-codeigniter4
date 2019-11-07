<!doctype html>
<html>
	<head>
		<title>Welcome to CodeIgniter</title>

		<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
	</head>
	<body>

		<style {csp-style-nonce}>
		*{
			padding:0;
			margin:0;
		}
		.wrap{
			background:orangered;
			height:100vh;
			width:100%;
			font-size:50px;
			font-family:arial;
			color:white;

			display:flex;
			justify-content:center;
			align-items:center;
		}
		</style>

		<div class="wrap">
			<ul>
				<?php
					$dias_semana = ["Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo"];
					foreach($dias_semana as $dias){
						echo "<li>$dias</li>";
					}
				
				?>
			</ul>
		</div>

	</body>
</html>
