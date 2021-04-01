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
if (isset($_POST['submit']) && $statement) { 
    echo $_POST['firstname'] .' successfully added.';
} 

$validator = htmlspecialchars($_SERVER["PHP_SELF"]);
echo '
    <form class="form-signin" method="post" action="'.$validator.'">  
        <label for="Name" class="sr-only">Name</label>
        <input class="form-control" type="text" name="firstname" placeholder="Name" value="'.$name.'">
        <span class="error">* '.$nameErr.'</span>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" name="email" class="form-control" placeholder="Email address" value="'.$email.'">
        <span class="error">* '.$emailErr.'</span>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="text" name="password" class="form-control" placeholder="Password" value="'.$password.'">
        <span class="error">* '.$passwordErr.'</span>
        <label for="inputRepeatPassword" class="sr-only">Repeat password</label>
        <input type="text" name="repeat-password" class="form-control" placeholder="Repeat password" value="'.$cpassword.'">
        <span class="error">* '.$cpasswordErr.'</span>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Submit">Submit</button>
    </form> 
    <div class="subscribe-msg">
        <h4>Thanks '.$name.' for subscribe!</h4>
        <h4>Your password is '.$password.'</h4>
        <h4>Your confirmed password is '.$cpassword.'</h4>
    </div>
'
?>