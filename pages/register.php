<div class="page">
  <div class="form-sections">
    <h2 class="section-header">Create your account</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data" method="post">
      <h3 class="required"><?php echo $sign_up_err; ?></h3>

      <div class="input-div-full">
      <div class="input-div-medium">
        <input id="firstname" class="input" name="firstname" type="text" placeholder="First Name" value="<?php echo $FIRST_NAME; ?>"><span class="required">*</span>
        <p class="required"> <?php echo $FIRST_NAME_err; ?></p>
      </div>

      <div class="input-div-medium">
        <input id="surname" class="input" name="surname" type="text" placeholder="Surname" value="<?php echo $SURNAME; ?>"><span class="required">*</span>
        <p class="required"> <?php echo $SURNAME_err; ?></p>
      </div>
      </div>

      <div class="input-div-full">
      <div class="input-div-medium">
        <input id="othername" class="input" name="othername" type="text" placeholder="Other Name" value="<?php echo $OTHER_NAME; ?>">
      </div>

      <div class="input-div-medium">
        <input id="username" class="input" name="username" type="text" placeholder="Enter your username" value="<?php echo $USER_NAME; ?>"><span class="required">*</span>
        <p class="required"> <?php echo $USER_NAME_err; ?></pp>
      </div>
      </div>

      <div class="input-div-full">
        <input id="email" class="input" name="email" type="email" placeholder="Enter your email address" value="<?php echo $EMAIL; ?>"><span class="required">*</span>
        <p class="required"> <?php echo $EMAIL_err; ?></p>
      </div>

      <div class="input-div-full">
        <input id="phone" class="input" name="phone" type="text" placeholder="Enter your phone number" value="<?php echo $PHONE_NO; ?>"><span class="required">*</span>
        <p class="required"> <?php echo $PHONE_NO_err; ?></p>
      </div>

      <div class="input-div-full">
      <div class="input-div-medium">
        <input id="password" class="input" name="password" type="password" placeholder="Password" value="<?php echo $PASSWORD; ?>"><span class="required">*</span>
        <p class="required"> <?php echo $PASSWORD_err; ?></p>
      </div>

      <div class="input-div-medium">
        <input id="Cpassword" class="input" name="Cpassword" type="password" placeholder="Confirm Password" value="<?php echo $C_PASSWORD; ?>"><span class="required">*</span>
        <p class="required"> <?php echo $C_PASSWORD_err; ?></p>
      </div>
      </div>

      <button class="buttons form-btn" type="submit">Sign Up</button>

      <p class="form-text"><a href="logIn.php">Have an account already? Log In &rarr;</a></p>
    </form>
  </div>
</div>