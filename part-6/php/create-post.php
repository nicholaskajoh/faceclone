<?php
  require_once "../functions.php";

  db_connect();

  $sql = "INSERT INTO posts (content, user_id) VALUES (?, ?)";
  $statement = $conn->prepare($sql);
  $statement->bind_param('si', $_POST['content'], $_SESSION['user_id']);

  if ($statement->execute()) {
    redirect_to("/home.php");
  } else {
    echo "Error: " . $conn->error;
  }
