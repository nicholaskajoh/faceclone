<?php require_once "functions.php"; ?>
<?php include "header.php" ?>

<?php
  check_auth();
?>

<!-- main -->
<main class="container">
  <div class="row">
    <div class="col-md-3">
      <!-- edit profile -->
      <div class="panel panel-default">
        <div class="panel-body">
          <h4>Edit profile</h4>
          <form method="post" action="">
            <div class="form-group">
              <input class="form-control" type="text" name="status" placeholder="Status" value="">
            </div>

            <div class="form-group">
              <input class="form-control" type="text" name="location" placeholder="Location" value="">
            </div>

            <div class="form-group">
              <input class="btn btn-primary" type="submit" name="update_profile" value="Save">
            </div>
          </form>
        </div>
      </div>
      <!-- ./edit profile -->
    </div>
    <div class="col-md-6">
      <!-- user profile -->
      <div class="media">
        <div class="media-left">
          <img src="img/my_avatar.png" class="media-object" style="width: 128px; height: 128px;">
        </div>
        <div class="media-body">
          <h2 class="media-heading">nicholaskajoh</h2>
          <p>Status: I love to code!, Location: Nigeria</p>
        </div>
      </div>
      <!-- user profile -->

      <hr>

      <!-- timeline -->
      <div>
        <!-- post -->
        <div class="panel panel-default">
          <div class="panel-body">
            <p>Hello people! This is my first FaceClone post. Hurray!!!</p>
          </div>
          <div class="panel-footer">
            <span>posted 2017-5-27 20:45:01 by nicholaskajoh</span> 
            <span class="pull-right"><a class="text-danger" href="#">[delete]</a></span>
          </div>
        </div>
        <!-- ./post -->
      </div>
      <!-- ./timeline -->
    </div>
    <div class="col-md-3">
      <!-- friends -->
      <div class="panel panel-default">
        <div class="panel-body">
          <h4>Friends</h4>
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

<?php include "footer.php" ?>