<?

/**
  * Use an HTML form to create a new entry in the
  * users table.
  *
  */

if (isset($_POST['submit'])) {
    require "connection/config.php";
    require "utils/common.php";

    try {
        $connection = new PDO($dsn, $username, $password, $options);
        
        $new_user = array(
        "firstname" => $_POST['firstname'],
        "email"     => $_POST['email'],
        "password"  => $_POST['password']
        );

        $sql = sprintf(
        "INSERT INTO %s (%s) values (%s)",
        "users",
        implode(", ", array_keys($new_user)),
        ":" . implode(", :", array_keys($new_user))
        );

        $statement = $connection->prepare($sql);
        $statement->execute($new_user);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }

}


$validator = htmlspecialchars($_SERVER["PHP_SELF"]);
if (isset($_POST['submit']) && $statement) { 
    $success = '/components/success.php';
}
echo '
    <form class="form-signin needs-validation" method="post" action="'.$success.'" novalidate>  
        <label for="Name" class="sr-only">Name</label>
        <input class="form-control" type="text" name="firstname" placeholder="Name" value="'.$name.'" required>
        <div class="error">* '.$nameErr.'</div>
        <div class="invalid-feedback">
            Please provide a valid name.
        </div>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" class="form-control input-email" placeholder="Email address" value="'.$email.'" required>
        <div class="error">* '.$emailErr.'</div>
        <div class="invalid-feedback">
            Please provide a valid email.
        </div>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" class="form-control input-show" placeholder="Password" value="'.$password.'" required>
        <input class="check" type="checkbox"> <small>Show password</small>
        <div class="error">* '.$passwordErr.'</div>
        <div class="invalid-feedback">
            Please provide a valid password.
        </div>
        <label for="inputRepeatPassword" class="sr-only">Repeat password</label>
        <input type="password" name="cpassword" class="form-control input-show" placeholder="Repeat password" value="'.$cpassword.'" required>
        <input class="check" type="checkbox"> <small>Show repeated password</small>
        <div class="error">* '.$cpasswordErr.'</div>
        <button id="btn-submit" class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Submit" disabled="disabled">Submit</button>
    </form> 
';

?>