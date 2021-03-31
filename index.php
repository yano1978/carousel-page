<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- Bootstrap core CSS -->
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="./css/custom.css" rel="stylesheet">
    </head>
    <body>
        <?php include './components/header.php';?>
           <!-- Begin page content -->
        <main role="main" class="container">
            <h1 class="mt-5">Sticky footer with fixed navbar</h1>
            <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body &gt; .container</code>.</p>
            <p>Back to <a href="../sticky-footer/">the default sticky footer</a> minus the navbar.</p>
            <!-- <form class="form-signin">
              <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
              <label for="inputEmail" class="sr-only">Email address</label>
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form> -->
            <form class="form-signin" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                <label for="Name" class="sr-only">Name</label>
                <input class="form-control" type="text" name="name" placeholder="Name" value="<?php echo $name;?>">
                <span class="error">* <?php echo $nameErr;?></span>
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="text" name="email" class="form-control" placeholder="Email address" value="<?php echo $email;?>">
                <span class="error">* <?php echo $emailErr;?></span>
                <button class="btn btn-lg btn-primary btn-block" type="submit" value="Submit">Submit</button>
                <?php
                  echo '
                      <div class="subscribe-msg">
                        <h4>Thanks '.$name.' for subscribe!</h4>
                      </div>';
                ?>  
            </form>
        </main>
        <?php include './components/footer.php';?>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="./js/bootstrap.min.js"></script>
    </body>
</html>