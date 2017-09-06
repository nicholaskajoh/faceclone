<?php require_once "functions.php"; ?>
<?php include "header.php" ?>

<!-- main -->
<main class="container">
  <!-- messages -->
  <?php if(isset($_GET['registered'])): ?>
    <div class="alert alert-success">
      <p>Account created successfully! Use your username and password to login.</p>
    </div>
  <?php endif; ?>

  <?php if(isset($_GET['login_error'])): ?>
    <div class="alert alert-danger">
      <p>Invalid username or password!</p>
    </div>
  <?php endif; ?>

  <?php if(isset($_GET['logged_in'])): ?>
    <div class="alert alert-danger">
      <p>You are not logged in!</p>
    </div>
  <?php endif; ?>
  <!-- ./messages -->

  <h1 class="text-center">Welcome to FaceClone! <br><small>A simple Facebook clone.</small></h1>

  <div class="row">
    <div class="col-md-6">
      <h4>Login to start enjoying unlimited fun!</h4>

      <!-- login form -->
      <form method="post" action="php/login.php">
        <div class="form-group">
          <input class="form-control" type="text" name="username" placeholder="Username" required>
        </div>

        <div class="form-group">
          <input class="form-control" type="password" name="password" placeholder="Password" required>
        </div>

        <div class="form-group">
          <input class="btn btn-primary" type="submit" name="login" value="Login">
        </div>
      </form>
      <!-- ./login form -->
    </div>
    <div class="col-md-6">
      <h4>Don't have an account yet? Register!</h4>

      <!-- register form -->
      <form method="post" action="php/register.php">
        <div class="form-group">
          <input class="form-control" type="text" name="username" placeholder="Username" required>
        </div>

        <div class="form-group">
          <input class="form-control" type="text" name="location" placeholder="Location">
        </div>

        <div class="form-group">
          <input class="form-control" type="password" name="password" placeholder="Password" required>
        </div>

        <div class="form-group">
          <input class="btn btn-success" type="submit" name="register" value="Register">
        </div>
      </form>
      <!-- ./register form -->
    </div>
  </div>
</main>
<!-- ./main -->

<?php include "footer.php" ?>