<?php include 'cabecalho.php';
	include 'logica-usuario.php';
	?>

				<?php $nome = "Otavio"; ?>
				<h1>Loja do <?php echo $nome; ?><h1>
				<h2>Login</h2>


					<?php
					if (isset($_SESSION["usuario_logado"])) {
						?>
						<p class="text-success"> O usuario <?= usuarioLogado();?> foi logado com sucesso!
						<a href="logout.php">logout</a></p>
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
