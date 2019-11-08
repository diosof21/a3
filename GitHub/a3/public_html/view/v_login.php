<?php if(isset($_SESSION["user"]) && $_SESSION["user"]!="") header("Location:index.php?c=2");?>
<style>
	#contenido{
		margin-top: 20vh;
		margin-left: 31vw;
	}
	
	#titulo{
		height: 10vh;
	}
	
	.td{
		padding-right: 2vw;
	}
	
</style>
<div id="contenido">
	<table cellspacing="0" cellpadding="0" width="100%" border="0">
	 	<tr>
	  		<td bgcolor="#FFFFFF" style="padding: 15pt 15pt 15pt 15pt">
	  			<form method='post' action='index.php?c=1'>
					<p>
						<table>
							<tr><td></td><td align='center' id="titulo"><b>ACCESO USUARIO</b<br></td></tr>
							<tr><td align='right' class="td"><b>N</b>ombre de Usuario: </td><td><input type='text' name='user' value='' size='50'></td></tr>
							<tr><td align='right' class="td"><b>P</b>assword: </td><td><input type='password' name='pass' value='' size='50'></td></tr>
							<tr><td></td><td align='center'><?php if ($_COOKIE["fail"]==1) echo $_SESSION["error"];?></td></tr>
							<tr><td></td><td align='center'><input type='submit' name="login" value='Entrar'> </td></tr>
						</table>
					</p>
				</form>
			</td>
		</tr>
		<tr>
	  		<td bgcolor="#FFFFFF" style="padding: 15pt 15pt 15pt 15pt">
	  			<form method='post' action='index.php?c=1'>
					<p>
						<table>
							<tr><td></td><td align='center' id="titulo"><b>REGISTRO NUEVO USUARIO</b<br></td></tr>
							<tr><td align='right' class="td"><b>N</b>ombre de Usuario: </td><td><input type='text' name='user' value='' size='50'></td></tr>
							<tr><td align='right' class="td"><b>P</b>assword: </td><td><input type='password' name='pass' value='' size='50'></td></tr>
							<tr><td></td><td align='center'><?php if ($_COOKIE["fail"]==1) echo $_SESSION["error"];?></td></tr>
							<tr><td></td><td align='center'><input type='submit' name="registro" value='Registrarse'> </td></tr>
							<tr><td align='center'><?php echo $html;?></td></tr>
						</table>
					</p>
				</form>
			</td>
		</tr>
	</table>
</div>