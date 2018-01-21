<?php include 'cabecalho.php'; ?>
				<?php $nome = "Otavio"; ?>
				<h1>Loja do <?php echo $nome; ?><h1>
				<h2>Login</h2>
				<?php if (isset($_GET["login"]) && $_GET["login"] ==true)
					{
					?>
					<p class="alert-success">Logado com sucesso</p>
				<?php
			 		}
					?>
				<?php if (isset($_GET["login"]) && $_GET["login"]==false)
					{
					?>
					<p class="alert-danger">Usuario ou senha invalida</p>
				<?php
					}
					?>
					<?php
					if (isset($_COOKIE["usuario_logado"])) {
						?>
						<p class="text-success"> O usuario <?= $_COOKIE["usuario_logado"]?> foi logado com sucesso!</p>
					<?php }  else { ?>

						<form action="login.php" method="post">
							<table class="table">
								<tr>
									<td>Email</td>
									<td>
										<input class="form-control" type="email" name="email">
									</td>
								</tr>
								<tr>
									<td>Senha</td>
									<td>
										<input class="form-control" type="password" name="senha" >
									</td>
								</tr>
								<tr>
									<td><button class="btn btn-primary">Login</button></td>
								</tr>

					<?php }  ?>



					</table>
				</form>
<?php include 'rodape.php'; ?>
