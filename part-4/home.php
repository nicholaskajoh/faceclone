<?php require_once "functions.php"; ?>
<?php include "header.php"; ?>

<?php
  check_auth();
  db_connect();
?>

<!-- main -->
<main class="container">
  <div class="row">
    <div class="col-md-3">
      <!-- profile brief -->
      <div class="panel panel-default">
        <div class="panel-body">
          <h4>nicholaskajoh</h4>
          <p>I love to code!</p>
        </div>
      </div>
      <!-- ./profile brief -->

      <!-- friend requests -->
      <div class="panel panel-default">
        <div class="panel-body">
          <h4>friend requests</h4>
          <ul>
            <li>
              <a href="#">johndoe</a> 
              <a class="text-success" href="#">[accept]</a> 
              <a class="text-danger" href="#">[decline]</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- ./friend requests -->
    </div>
    <div class="col-md-6">
      <!-- post form -->
      <form method="post" action="php/create-post.php">
        <div class="input-group">
          <input class="form-control" type="text" name="content" placeholder="Make a post..." required>
          <span class="input-group-btn">
            <button class="btn btn-success" type="submit" name="post">Post</button>
          </span>
        </div>
      </form><hr>
      <!-- ./post form -->

      <!-- feed -->
      <div>
        <!-- post -->
        <?php 
          $sql = "SELECT * FROM posts ORDER BY created_at DESC";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            while($post = $result->fetch_assoc()) {
              ?>
                <div class="panel panel-default">
                  <div class="panel-body">
                    <p><?php echo $post['content']; ?></p>
                  </div>
                  <div class="panel-footer">
                    <span>posted <?php echo $post['created_at']; ?> by nicholaskajoh</span> 
                    <span class="pull-right"><a class="text-danger" href="php/delete-post.php?id=<?php echo $post['id']; ?>">[delete]</a></span>
                  </div>
                </div>
              <?php
            }
          } else {
            ?>
              <p class="text-center">No posts yet!</p>
            <?php
          }
          $conn->close();
        ?>
        <!-- ./post -->
      </div>
      <!-- ./feed -->
    </div>
    <div class="col-md-3">
    <!-- add friend -->
      <div class="panel panel-default">
        <div class="panel-body">
          <h4>add friend</h4>
          <ul>
            <li>
              <a href="#">alberte</a> 
              <a href="#">[add]</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- ./add friend -->

      <!-- friends -->
      <div class="panel panel-default">
        <div class="panel-body">
          <h4>friends</h4>
          <ul>
            <li>
              <a href="#">peterpan</a> 
              <a class="text-danger" href="#">[unfriend]</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- ./friends -->
    </div>
  </div>
</main>
<!-- ./main -->

<?php include "footer.php"; ?>