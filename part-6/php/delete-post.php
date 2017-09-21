<?php
  require_once "../functions.php";

  db_connect();

  $sql = "DELETE FROM posts WHERE id = ?";
  $statement = $conn->prepare($sql);
  $statement->bind_param('i', $_GET['id']);

  if ($statement->execute()) {
    redirect_to("/home.php");
  } else {
    echo "Error: " . $conn->error;
  }
