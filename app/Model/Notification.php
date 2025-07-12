<?php  

function get_all_my_notifications($conn, $id){
	$sql = "SELECT * FROM notifications WHERE recipient=?";
	$stmt = $conn->prepare($sql);
	$stmt->execute([$id]);

	if($stmt->rowCount() > 0){
		$notifications = $stmt->fetchAll();
	}else $notifications = 0;

	return $notifications;
}


function count_notification($conn, $id){
	$sql = "SELECT id FROM notifications WHERE recipient=? AND is_read=0";
	$stmt = $conn->prepare($sql);
	$stmt->execute([$id]);

	return $stmt->rowCount();
}

function insert_notification($conn, $data){
	$sql = "INSERT INTO notifications (message, recipient, type) VALUES(?,?,?)";
	$stmt = $conn->prepare($sql);
	$stmt->execute($data);
}

function notification_make_read($conn, $recipient_id, $notification_id){
	$sql = "UPDATE notifications SET is_read=1 WHERE id=? AND recipient=?";
	$stmt = $conn->prepare($sql);
	$stmt->execute([$notification_id, $recipient_id]);
}
function add_notification($conn, $user_id, $message, $type) {
    // Save email to database
    $sql = "INSERT INTO notifications (user_id, message, type, date) 
            VALUES (?, ?, ?, NOW())";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$user_id, $message, $type]);

    $emailStmt = $conn->prepare("SELECT email, full_name FROM users WHERE id = ?");
    $emailStmt->execute([$user_id]);
    $user = $emailStmt->fetch();

    // Pass data to JS for EmailJS (only if in a page that outputs HTML)
    if ($user && !empty($user['email'])) {
        echo "<script>
            sendNotificationEmail('" . addslashes($user['full_name']) . "', '" . $user['email'] . "', `" . addslashes($message) . "`);
        	</script>";
    }
}
