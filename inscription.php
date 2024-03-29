<?php

require_once(dirname(__FILE__) . "/controllers/traitement_register.php");

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
	<title>S'inscrire</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/login.css">
</head>

<body>

<div class="container-fluid">
		<div class="row no-gutter">
			<div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
			<div class="col-md-8 col-lg-6">
				<div class="login d-flex align-items-center py-5">
					<div class="container">
						<div class="row">
							<div class="col-md-9 col-lg-8 mx-auto">
								<h3 class="login-heading mb-4">Nous saluons ton retour!</h3>
								<?php
									if(isset($error)) {
										foreach($error as $errors) {
									?>
									<div class="alert alert-danger">
										<strong><?php echo $errors; ?></strong>
									</div>
									<?php
										}
									}
									if(isset($success)) { ?>
									<div class="alert alert-success">
										<strong><?php echo $success; ?></strong>
									</div>
									<?php
									}
								?>
								<form method="post">


									<div class="form-label-group">
										<input type="text" name="username" class="form-control" required autofocus>
										<label for="email">Pseudo</label>
									</div>

									<div class="form-label-group">
										<input type="text" name="email" class="form-control" required autofocus>
										<label for="email">Email</label>
									</div>


									<div class="form-label-group">
										<input type="password" name="password" class="form-control" required>
										<label for="password">Mot de passe</label>
									</div>

									<input
										class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2"
										type="submit" name="inscription" value="S'incrire">
									<div class="text-center">
										Vous avez déjà un compte ? <a class="small" href="index.php">Connexion</a></div>

								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <?php require_once __DIR__."/includes/alerts.inc.php"; ?>
</body>
<?php require_once __DIR__."/includes/footer.inc.php"; ?>

</html>


































	<div class="wrapper">

		<div class="container">

			<div class="col-lg-12">

				<?php
					if (isset($error)) {
						foreach ($error as $errors)
					{
				?>
					<div class="alert alert-danger">
						<strong>Erreur ! : <?php echo $errors; ?></strong>
					</div>
				<?php
					}
				}
					if (isset($success)) { 
				?>
					<div class="alert alert-success">
						<strong><?php echo $success; ?></strong>
					</div>
				<?php
					}
				?>
				<center>
					<h2>S'inscrire</h2>
				</center>
				<form method="post" class="form-horizontal">


					<div class="form-group">
						<label class="col-sm-3 control-label">Pseudo</label>
						<div class="col-sm-6">
							<input type="text" name="username" class="form-control" placeholder="Entrer un pseudo" />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label">Adresse Email</label>
						<div class="col-sm-6">
							<input type="text" name="email" class="form-control" placeholder="Entrer une adresse email" />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label">Mot de passe</label>
						<div class="col-sm-6">
							<input type="password" name="password" class="form-control" placeholder="Entrer un mot de passe" />
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-9 m-t-15">
							<input type="submit" name="btn_register" class="btn btn-primary " value="S'enregistrer">
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-9 m-t-15">
							Vous avez déjà un compte ? <a href="index.php">
								<p class="text-info">Connexion</p>
							</a>
						</div>
					</div>

				</form>

			</div>

		</div>

	</div>

</body>

</html>