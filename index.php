<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Title -->
    <title>WiseScan - Asset Management</title>

     <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Stylesheet -->
    <link href="css/blog-post.css" rel="stylesheet">
    <link href="css/appStyle.css" rel="stylesheet">

    <!-- JS libraries -->
    <script src="js/jquery-3.2.0.min.js"></script>

    <!-- JS scripts -->
    <script src="js.js"></script>

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">WS</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">File</a>
                    </li>
                    <li>
                        <a href="#">Edit</a>
                    </li>
                    <li>
                        <a href="#">View</a>
                    </li>
                </ul>
                <br>
            </div>
            <!-- /.navbar-collapse -->
            <!-- Title -->
            <div align="middle">
                <h1 style="font-size: 50px; font-weight: bolder;color: white;"><span style="color:yellow;"></span></h1>
            </div>
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container" style="padding-top: 40px;">

        <div class="row background-img" align="middle">
            <!-- Main menu-->
            <div class="well"  style="width:320px; border: none; opacity: 0.9;">

                <div align="middle">
                    <div class="logo-med"></div>
                </div>

                    <div class="input-group">
                        <div style="padding-top:10px;padding-bottom: 10px;">
                            <h4>Username </h4>
                            <input type="text" class="form-control" size="60">
                        </div>
                        <br>
                        <div style="padding-top:10px;padding-bottom: 10px;">
                            <h4>Password </h4>
                            <input type="text" class="form-control" size="60">
                        </div>
                    </div>

                    <br><br>
                    
                    <button class="btn btn-default" type="button" style="width: 100%;">
                        <h4>Login</h4>
                    </button>
                    
                    <br><br>

                     <a href="http://system.dev/wisescan/admin/home/"> Forgot your password ?</a>
            </div>
        
        </div>        
</div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>;

<script>
    function show(){
            $(".btn").show();
    }

     function hide(){
            $(".btn").hide();
    }
</script>