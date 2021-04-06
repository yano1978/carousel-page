<?

require 'utils/email-validation.php';

if (!empty($_POST) && empty($nameErr) && empty($emailErr) && empty($passwordErr) && empty($cpasswordErr)) {
    require 'success.php';
} else {
    echo '
    <!-- Form -->
        <h2 class="mt-5 form-header">Create account</h2>
        <form class="form-signin needs-validation" action="index.php" method="post" novalidate>  
            <label for="Name" class="sr-only">Name</label>
            <input class="form-control" type="text" name="firstname" placeholder="Name" value="'.$name.'" required>
            <div class="error">* Field required '.$nameErr.'</div>
            <div class="invalid-feedback">
                Please provide a valid name.
            </div>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" name="email" class="form-control input-email" placeholder="Email address" value="'.$email.'" required>
            <div class="error">* Field required '.$emailErr.'</div>
            <div class="invalid-feedback">
                Please provide a valid email.
            </div>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" class="form-control input-show" placeholder="Password" value="'.$password.'" required>
            <input class="check" type="checkbox"> <small>Show password</small>
            <div class="error">* Field required '.$passwordErr.'</div>
            <div class="invalid-feedback">
                Please provide a valid password.
            </div>
            <label for="inputRepeatPassword" class="sr-only">Repeat password</label>
            <input type="password" name="cpassword" class="form-control input-show" placeholder="Repeat password" value="'.$cpassword.'" required>
            <input class="check" type="checkbox"> <small>Show repeated password</small>
            <div class="error">'.$cpasswordErr.'</div>
            <button id="btn-submit" class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Submit" disabled="disabled">Send</button>
        </form> 
    <!-- END: Form -->
    ';
}

?>