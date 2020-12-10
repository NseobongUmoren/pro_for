<div id="recovery">
    <div id="marginedRecovery">
        <h2>Recover your account</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" method="post">
            <div><span class="required"><?php echo $recovery_msg;?></span></div>
            <div class="recDiv"><input class="input" type="email" name="recovery_email" placeholder="Enter your email address" value="<?php echo $EMAIL;?>"><span class="required">* <?php echo $EMAIL_err;?></span></div>
            <div class="recDiv"><button class="button2" type="submit">Submit</button></div>
        </form>
    </div>
</div>