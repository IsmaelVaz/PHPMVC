<?php

require_once("controllers/contatos_controller.php");
require_once("models/contato_class.php");

	$nome = $list->nome;
	$telefone = $list->telefone;
	$email = $list->email;
	$celular = $list->celular;
	$cod = $list->cod;
?>

<div class="principal">
	<form action="router.php?controller=contatos&modo=novo" method="post" name="frmcontatos">
		<table width="100%" border="1">
			<caption> CADASTRO DE CONTATOS</caption>
			<tr>
				<td width="30%">Nome:</td>
				<td><input type="text" name="txtNome" value="<?php echo $nome; ?>"/></td>
			</tr>
			<tr>
				<td>Telefone:</td>
				<td><input type="text" name="txtTelefone" value="<?php echo $telefone; ?>"/></td>
			</tr>
			<tr>
				<td>Celular:</td>
				<td><input type="text" name="txtCelular" value="<?php echo $celular; ?>"/></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="text" name="txtEmail" value="<?php echo $email;?>"/></td>
			</tr>
			<tr>
				<td><input type="reset"  value="LIMPAR"/></td>
				<td><input type="submit" name="btnSalvar" value="SALVAR"/></td>
			</tr>
		</table>
	</form>
	<table width="100%" border="1" style="margin-top:30px;">
		<caption> CONSULTA</caption>
		<tr style="text-align:center;">
			<td>Nome</td>
			<td>Telefone</td>
			<td>Celular</td>
			<td>Email</td>
			<td>Opção</td>
		</tr>
		<?php
			$controller_local = new ControllerContato();
			$rs = $controller_local->Visualizar();
			$cont = 0;
			while($cont < count($rs)){
		?>
		<tr>
			<td><?php echo $rs[$cont]->nome?></td>
			<td><?php echo $rs[$cont]->telefone?></td>
			<td><?php echo $rs[$cont]->celular?></td>
			<td><?php echo $rs[$cont]->email?></td>
			<td>
				<a href="router.php?controller=contatos&modo=atualizar&codigo=<?php echo $rs[$cont]->cod?>">Editar</a> 
				<a href="router.php?controller=contatos&modo=excluir&codigo=<?php echo $rs[$cont]->cod?>">Excluir</a>
			</td>
		</tr>
		<?php
				$cont ++;
			}
		?>
	</table>
</div>
