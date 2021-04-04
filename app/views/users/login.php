<?php require APP_ROOT . '/views/includes/header.php'; ?>
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">
          <h3>Login</h3>
          <p>Please fill in youe credentials to log in</p>
          <form action="<?php echo URL_ROOT . '/users/login'; ?>" method="POST">
              <div class="form-group">
                <label for="email">Email: <sup>*</sup></label>
                <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data
                ['email_error'])) ? 'is-invalid' : ''; ?>" id="email" value="<?php echo isset($data['email'])
                ? $data['email'] : ''; ?>">
                <span class="invalid-feedback"><?php echo $data['email_error']; ?></span>
              </div>
              <div class="form-group">
                <label for="password">Password: <sup>*</sup></label>
                <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data
                ['password_error'])) ? 'is-invalid' : ''; ?>" id="password" value="<?php echo isset($data['password'])
                ? $data['password'] : ''; ?>">
                <span class="invalid-feedback"><?php echo $data['password_error']; ?></span>
              </div>
              <div class="row mt-3">
                <div class="col">
                  <input value="Login" type="submit" class="btn btn-success btn-block" style="width: 100%;" />
                </div>
                <div class="col">
                  <a href="<?php echo URL_ROOT . '/users/register'; ?>" class="btn btn-light btn-block">No account? Register</a>
                </div>
              </div>             
          </form>
        </div>
      </div>
    </div>
<?php require APP_ROOT . '/views/includes/footer.php'; ?>