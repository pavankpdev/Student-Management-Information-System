<!DOCTYPE html>
<html lang="en">
<?php include "header.php"?>
<head>
	<title>LOGIN - MIS</title>
    <link href="bootstrap.min.css" rel="stylesheet">
	<link href="sb-admin-2.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="http://localhost/M.I.S/admin_authen_login.php">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username-admin123" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password-123admin" name="password" type="password" value="">
                                </div>
                                <input type="submit" value="Login" class="btn btn-lg btn-success btn-block">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include 'footer.php';?>


</body>

</html>
