<?php
  require_once "../functions.php";

  db_connect();

  $sql = "UPDATE users SET status = ?, location = ? WHERE id = ?";
  $statement = $conn->prepare($sql);
  $statement->bind_param('ssi', $_POST['status'], $_POST['location'], $_SESSION['user_id']);

  if ($statement->execute()) {
    redirect_to("/profile.php?username={$_SESSION['user_username']}");
  } else {
    echo "Error: " . $conn->error;
  }
