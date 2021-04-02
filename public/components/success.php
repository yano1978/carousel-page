<?  
    include 'header.php';
    echo '<div class="container h-100">
            <div class="subscribe-msg row h-100 justify-content-center align-items-center"><h4>'. $_POST['firstname'] .' user successfully added!</h4>
                <div class="container">
                    <a href="/">Go back</a>
                </div>
            </div>
          </div>
        ';
    include 'footer.php';
?>