<?php if(isset($_SESSION["user"]) && $_SESSION["user"]!="") header("Location:index.php?c=2");?>
<style>
	#contenido{
		margin-top: 30vh;
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
							<tr><td></td><td align='center' id="titulo"><b>REGISTRO DE UN USUARIO NUEVO</b<br></td></tr>
							<tr><td align='right' class="td"><b>N</b>ombre de Usuario: </td><td><input type='text' name='user' value='' size='50'></td></tr>
							<tr><td align='right' class="td"><b>P</b>assword: </td><td><input type='password' name='pass' value='' size='50'></td></tr>
							<tr><td></td><td align='center'><?php if ($_COOKIE["fail"]==1) echo $_SESSION["error"];?></td></tr>
							<tr><td></td><td align='center'><input type='submit' value='Entrar'> </td></tr>
						</table>
					</p>
				</form>
			</td>
		</tr>
	</table>
</div>