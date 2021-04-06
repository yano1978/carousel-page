<?  

    /**
    * User's creation
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
         $to = "yano1978@gmail.com"; 
         $from = $_POST['email'];
         $name = $_POST['firstname'];
         $subject = "Subscription request";
         $message = $name . " just subscribed.";
     
         $headers = "From:" . $from;
         $headers  = "From: Sender Name <mail2@example.com>" . "\r\n";
         $headers .= 'MIME-Version: 1.0' . "\r\n";
         $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
         mail($to,$subject,$message,$headers);
        //  var_dump($_POST);
        //  die();
    }
    echo '
        <!-- Success -->
            <div class="container h-100">
                <div class="subscribe-msg row h-100 justify-content-center align-items-center">
                    <h4>'.$name.' user successfully added!</h4>
                    <div class="col-xs-6 col-sm-6 col-md-12 col-xl-12">Your email has been sent correctly. Thank you '.$name.' for subscribing.</div>
                        <div class="container container-back">
                            <a href="/">
                                <i class="fas fa-angle-left icon-arrow"></i>Go back
                            </a>
                        </div>
                    </div>
            </div>
        <!-- END: Success -->
        ';
?>