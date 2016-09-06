<html>
	<head><title>Projeto MVC | HOME</title>
		<style>
			.cab{
				width:100%;
				height:70px;
				border:solid 1px #000;
			}
			.corpo{
				width:100%;
				height:777px;
			}
			.principal{
				width:700px;
				height:900px;
				border:solid 1px #000;
				margin-left:auto;
				margin-right:auto;
			}
			.rod{
				width:100%;
				height:50px;
				border:solid 1px #000;
			}
		
		</style>
	</head>
	
	<body>
		<div class="principal">
			<div class="cab">
				<center><h1>PROJETO MVC</h1></center>
			</div>
			<div class="corpo">
				<?php
					//inclusão de arquivos
					require_once("contatos/contato_view.php");
					/*outra forma de incluir
						include();
					*/
					
				?>
			</div>
			<div class="rod">
				<center><h3>Rodapé</h3></center>
			</div>
		</div>
	</body>
</html>