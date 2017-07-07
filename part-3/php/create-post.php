<?php
  require_once "../functions.php";

  db_connect();

  $sql = "INSERT INTO posts (content, user_id) VALUES (?, 0)";
  $statement = $conn->prepare($sql);
  $statement->bind_param('s', $_POST['content']);

  if ($statement->execute()) {
    redirect_to("/home.php");
  } else {
    echo "Error: " . $conn->error;
  }

  $conn->close();