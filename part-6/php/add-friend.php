<?php
  require_once "../functions.php";

  db_connect();

  $sql = "INSERT INTO friend_requests (user_id, friend_id) VALUES (?, ?)";
  $statement = $conn->prepare($sql);
  $statement->bind_param('ii', $_SESSION['user_id'], $_GET['uid']);

  if ($statement->execute()) {
    redirect_to("/home.php?request_sent=true");
  } else {
    echo "Error: " . $conn->error;
  }
