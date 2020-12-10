<div class="page">
  <div class="form-sections">
    <h2 class="section-header">Log in to access your account</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data" method="post">
      <h3 class="required"><?php echo $log_in_err; ?></h3>
      <div class="input-div-full">
        <input class="input" type="username" name="username" placeholder="Enter your username" value="<?php echo $USER_NAME; ?>"><span class="required">*</span>
        <p class="required"><?php echo $USER_NAME_err; ?></p>
      </div>
      <div class="input-div-full">
        <input class="input" type="password" name="password" placeholder="Enter your password" value="<?php echo $PASSWORD; ?>"><span class="required">*</span>
        <p class="required"><?php echo $PASSWORD_err; ?></p>
      </div>
      <button class="buttons form-btn" type="submit">Log In</button>
      <p class="form-text"><a href="recovery.php">forgot password?</a></p>
    </form>
  </div>
</div>