<?php


?>

<div class="principal">
	<form action="router.php?controller=contatos&modo=novo" method="post" name="frmcontatos">
		<table width="100%" border="1">
			<caption> CADASTRO DE CONTATOS</caption>
			<tr>
				<td width="30%">Nome:</td>
				<td><input type="text" name="txtNome" value=""/></td>
			</tr>
			<tr>
				<td>Telefone:</td>
				<td><input type="text" name="txtTelefone" value=""/></td>
			</tr>
			<tr>
				<td>Celular:</td>
				<td><input type="text" name="txtCelular" value=""/></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="text" name="txtEmail" value=""/></td>
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
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td><a href="#">Editar<a></td>
			<td><a href="#">Excluir<a></td>
		</tr>
	</table>
</div>
