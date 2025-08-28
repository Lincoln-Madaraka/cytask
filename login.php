<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login | Cytask</title>
	<link rel="icon" type="image/x-icon" href="img/logo.ico">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
</head>
<body class="login-body">
	  <div class="app-brand text-center mb-4">
		<img src="img/logo.png" alt="Cytask Logo" class="cytask-logo">
		<h2 class="cy"><span class="cy">Cy</span><span class="task">task</span></h2>
		<p class="cytask-slogan">Task management made easy.</p>
	</div>

      <form method="POST" action="app/login.php" class="form-1">

      	  <h3 class="display-4 text-center">LOGIN</h3>
      	  <?php if (isset($_GET['error'])) {?>
      	  	<div class="alert alert-danger" role="alert">
			  <?php echo stripcslashes($_GET['error']); ?>
			</div>
      	  <?php } ?>

      	  <?php if (isset($_GET['success'])) {?>
      	  	<div class="alert alert-success" role="alert">
			  <?php echo stripcslashes($_GET['success']); ?>
			</div>
      	  <?php } 

                // $pass = "123";
                // $pass = password_hash($pass, PASSWORD_DEFAULT);
                // echo $pass;
      
      	  ?>
  
			
		  <div class="mb-3">
		    <label for="exampleInputEmail1" class="form-label">Username</label>
		    <input type="text" class="form-control" name="user_name">
		  </div>
		  <div class="mb-3">
		    <label for="exampleInputPassword1" class="form-label">Password</label>
			<div class="input-group">
				<input type="password" class="form-control" name="password" id="exampleInputPassword1">
				<button class="btn btn-outline-secondary" type="button" id="togglePassword">Show</button>
			</div>
		  </div>
		  <button type="submit" class="btn btn-primary d-block mx-auto">Login</button>
		</form>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	  <script>
		const togglePassword = document.querySelector('#togglePassword');
		const passwordField = document.querySelector('#exampleInputPassword1');

		togglePassword.addEventListener('click', function () {
			const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
			passwordField.setAttribute('type', type);

			this.textContent = type === 'password' ? 'Show' : 'Hide';
		});
		</script>
</body>
</html>