<?
    echo '     
    <!-- Header component -->
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title></title>
            <meta name="description" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
            <!-- Custom styles -->
            <link href="../css/custom.css" rel="stylesheet">
            <!-- Font awesome -->
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
            <!-- Google fonts -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM Sans">
        </head>
            <body>
            <!-- Navbar -->
                <header>
                    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
                        <a class="navbar-brand" href="/">
                        <svg width="88.5" height="50" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M98.8677 50C98.8677 62.4264 88.7941 72.5 76.3677 72.5C63.9413 72.5 53.8677 62.4264 53.8677 50C53.8677 37.5736 63.9413 27.5 76.3677 27.5C88.7941 27.5 98.8677 37.5736 98.8677 50Z" fill="#68DBFF"/>
                            <path d="M123.132 50C123.132 62.4264 113.157 72.5 100.853 72.5C88.5483 72.5 78.5735 62.4264 78.5735 50C78.5735 37.5736 88.5483 27.5 100.853 27.5C113.157 27.5 123.132 37.5736 123.132 50Z" fill="#FF7917"/>
                            <path d="M88.6705 68.8416C94.8109 64.824 98.8676 57.8858 98.8676 50.0001C98.8676 42.1144 94.8109 35.1762 88.6705 31.1586C82.5904 35.1762 78.5735 42.1144 78.5735 50.0001C78.5735 57.8858 82.5904 64.824 88.6705 68.8416Z" fill="#5D2C02"/>
                        </svg>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/components/gallery.php">Gallery</a>
                                </li>
                            </ul>
                            <div class="login">
                                <a href="/">
                                    &nbsp;&nbsp;
                                </a>
                            </div>
                            <form class="form-inline mt-2 mt-md-0">
                                <input id="search" class="form-control" type="text" placeholder="Locations..." aria-label="Search">
                                <button class="btn btn-search my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </div>
                    </nav>
            </header>
            <!-- END: Navbar -->
    <!-- END: Header component -->
  ';
?>