<?php
  require_once "../functions.php";

  db_connect();

  // add users to friends table
  $statement = $conn->prepare("INSERT INTO friends (user_id, friend_id) VALUES (?, ?), (?, ?)");
  $statement->bind_param('iiii', $_SESSION['user_id'], $_GET['uid'], $_GET['uid'], $_SESSION['user_id']);

  // remove friend request
  if ($statement->execute()) {
    redirect_to("/php/remove-request.php?uid=" . $_GET['uid']);
  } else {
    echo "Error: " . $conn->error;
  }
