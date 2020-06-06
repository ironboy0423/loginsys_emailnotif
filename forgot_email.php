<?php require_once 'controllers/authcontroller.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- CSS Custom Styling -->
    <link rel="stylesheet" href="css/style.css">
    <title>Forgot Password</title>
  </head>
  <body>
      <div class="container">
        <div class="row">
          <div class="col-md-4 offset-md-4 form-div">
            <form action="forgot_password.php" method="post">
                <h3 class="text-center">Reset password</h3>

                <p>
                  Please enter an email address to send your link.
                </p>

                <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                  <?php foreach($errors as $error): ?>
                  <li><?php echo $error; ?></li>
                  <?php endforeach; ?>
                </div>
                <?php endif; ?>

                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-lg">
                </div>

                <div class="form-group">
                  <button type="submit" name="forgot-password-new_email" class="btn btn-primary btn-block btn-lg">
                    Reset my password
                  </button>
                </form>
              </div>
            </div>
          </div>


  </body>
</html>
