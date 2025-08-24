<?php 

function get_all_users($conn){
	$sql = "SELECT * FROM users WHERE role =? ";
	$stmt = $conn->prepare($sql);
	$stmt->execute(["employee"]);

	if($stmt->rowCount() > 0){
		$users = $stmt->fetchAll();
	}else $users = 0;

	return $users;
}


function insert_user($conn, $data){
	$data[2] = password_hash($data[2], PASSWORD_DEFAULT);
	$sql = "INSERT INTO users (full_name, username, password, role) VALUES(?,?,?, ?)";
	$stmt = $conn->prepare($sql);
	$stmt->execute($data);
}

function update_user($conn, $data){
	$data[2] = password_hash($data[2], PASSWORD_DEFAULT);
	$sql = "UPDATE users SET full_name=?, username=?, password=?, role=? WHERE id=? AND role=?";
	$stmt = $conn->prepare($sql);
	$stmt->execute($data);
}

function delete_user($conn, $data){
	$user_id = $data[0];

	$sql = "DELETE FROM tasks WHERE assigned_to = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$user_id]);

	$sql = "DELETE FROM users WHERE id=?";
	$stmt = $conn->prepare($sql);
	$stmt->execute([$user_id]);
}


function get_user_by_id($conn, $id){
	$sql = "SELECT * FROM users WHERE id =? ";
	$stmt = $conn->prepare($sql);
	$stmt->execute([$id]);

	if($stmt->rowCount() > 0){
		$user = $stmt->fetch();
	}else $user = 0;

	return $user;
}

function update_profile($conn, $data){
	$sql = "UPDATE users SET full_name=?,  password=? WHERE id=? ";
	$stmt = $conn->prepare($sql);
	$stmt->execute($data);
}

function count_users($conn){
	$sql = "SELECT id FROM users WHERE role='employee'";
	$stmt = $conn->prepare($sql);
	$stmt->execute([]);

	return $stmt->rowCount();
}