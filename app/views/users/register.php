<?php require APP_ROOT . '/views/includes/header.php'; ?>
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">
          <h3>Create an Acount</h3>
          <p>Please fill this form out to register with us</p>
          <form action="<?php echo URL_ROOT . '/users/register'; ?>" method="POST">
              <div class="form-group">
                <label for="firstname">First Name: <sup>*</sup></label>
                <input type="text" name="first_name" class="form-control form-control-lg <?php echo (!empty($data
                ['first_name_error'])) ? 'is-invalid' : ''; ?>" id="firstname" value="<?php echo isset($data['first_name'])
                ? $data['first_name'] : ''; ?>">
                <span class="invalid-feedback"><?php echo $data['first_name_error']; ?></span>
              </div>
              <div class="form-group">
                <label for="lastname">Last Name: <sup>*</sup></label>
                <input type="text" name="last_name" class="form-control form-control-lg <?php echo (!empty($data
                ['last_name_error'])) ? 'is-invalid' : ''; ?>" id="lastname" value="<?php echo isset($data['last_name'])
                ? $data['last_name'] : ''; ?>">
                <span class="invalid-feedback"><?php echo $data['last_name_error']; ?></span>
              </div>
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
              <div class="form-group">
                <label for="confirm_password">Confirm Password: <sup>*</sup></label>
                <input type="password" name="confirm_password" class="form-control form-control-lg <?php echo (!empty($data
                ['confirm_password_error'])) ? 'is-invalid' : ''; ?>" id="confirmpassword" value="<?php echo isset($data['confirm_password'])
                ? $data['confirm_password'] : ''; ?>">
                <span class="invalid-feedback"><?php echo $data['confirm_password_error']; ?></span>
              </div>
              <div class="row mt-3">
                <div class="col">
                  <input value="Register" type="submit" class="btn btn-success btn-block" style="width: 100%;" />
                </div>
                <div class="col">
                  <a href="<?php echo URL_ROOT . '/users/login'; ?>" class="btn btn-light btn-block">Already have an acount? Login</a>
                </div>
              </div>             
          </form>
        </div>
      </div>
    </div>
<?php require APP_ROOT . '/views/includes/footer.php'; ?>