<?php 
session_start();
if (isset($_SESSION['role']) && isset($_SESSION['id']) && $_SESSION['role'] == "admin") {
    include "DB_connection.php";
    include "app/Model/User.php";

    $users = get_all_users($conn);
  
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Manage Users</title>
	<link rel="icon" type="image/x-icon" href="img/logo.ico">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<input type="checkbox" id="checkbox">
	<?php include "inc/header.php" ?>
	<div class="body">
		<?php include "inc/nav.php" ?>
		<section class="section-1">
			<h4 class="title">Manage Users <a href="add-user.php" class="desktop-add-user">Add User</a></h4>
			<a href="add-user.php" class="add-user-btn">+</a>

			<?php if (isset($_GET['success'])) {?>
      	  	<div class="success" role="alert">
			  <?php echo stripcslashes($_GET['success']); ?>
			</div>
		<?php } ?>
			<?php if ($users != 0) { ?>
			<table class="main-table desktop-table">
				<tr>
					<th>#</th>
					<th>Full Name</th>
					<th>Username</th>
					<th>role</th>
					<th>Action</th>
				</tr>
				<?php $i=0; foreach ($users as $user) { ?>
				<tr>
					<td><?=++$i?></td>
					<td><?=$user['full_name']?></td>
					<td><?=$user['username']?></td>
					<td><?=$user['role']?></td>
					<td>
						<a href="edit-user.php?id=<?=$user['id']?>" class="edit-btn">Edit</a>
						<a href="delete-user.php?id=<?=$user['id']?>" class="delete-btn">Delete</a>
					</td>
				</tr>
			   <?php	} ?>
			</table>
			<!-- 📱 Mobile cards version -->
			<div class="mobile-cards">
				<?php $i=0; foreach ($users as $user) { ?>
				<div class="user-card">
				<div class="user-info">
					<p><strong>#<?=++$i?></strong></p>
					<p><strong>Full Name:</strong> <?=$user['full_name']?></p>
					<p><strong>Username:</strong> <?=$user['username']?></p>
					<p><strong>Role:</strong> <?=$user['role']?></p>
				</div>
				<div class="user-actions">
					<a href="edit-user.php?id=<?=$user['id']?>" class="edit-btn">Edit</a>
					<a href="delete-user.php?id=<?=$user['id']?>" class="delete-btn">Delete</a>
				</div>
				</div>
				<?php } ?>
			</div>
		<?php }else { ?>
			<h3>Empty</h3>
		<?php  }?>
			
		</section>
	</div>

<script type="text/javascript">
	var active = document.querySelector("#navList li:nth-child(2)");
	active.classList.add("active");
</script>
</body>
</html>
<?php }else{ 
   $em = "First login";
   header("Location: login.php?error=$em");
   exit();
}
 ?>