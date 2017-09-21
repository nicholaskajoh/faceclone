<?php
  require_once "../functions.php";

  db_connect();

  $sql = "DELETE FROM friend_requests WHERE user_id = ?";
  $statement = $conn->prepare($sql);
  $statement->bind_param('i', $_GET['uid']);

  if ($statement->execute()) {
    redirect_to("/profile.php?username=" . $_SESSION['user_username']);
  } else {
    echo "Error: " . $conn->error;
  }
