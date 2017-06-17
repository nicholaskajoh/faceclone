<?php include "header.php" ?>

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
      <form method="post" action="">
        <div class="input-group">
          <input class="form-control" type="text" name="content" placeholder="Make a post...">
          <span class="input-group-btn">
            <button class="btn btn-success" type="submit" name="post">Post</button>
          </span>
        </div>
      </form><hr>
      <!-- ./post form -->

      <!-- feed -->
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

<?php include "footer.php" ?>