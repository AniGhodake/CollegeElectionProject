<?php include ('head.php');?>

<body>

    <div class="container">
    <div class="row">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                <li class="breadcrumb-item active">Admin Panel</li>
            </ol>
        </div>
        <div class="row">
		<center><h2><b>College Election System <br> </h2>
			<h3> <b>Admin Panel</h3></center>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">Admin Log In</h3></center>
                    </div>
                    <div class="panel-body">
                        <form role="form" method = "post" enctype = "multipart/form-data">
                            <fieldset>
							
                                <div class="form-group">
									<label for = "username" >Username</label>
										<input class="form-control" placeholder="Please Enter your Username" name="username" type="text" autofocus>
                                </div>
								
                                <div class="form-group">
									<label for = "username" >Password</label>
										<input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                             
                              
                                <button class="btn btn-lg btn-success btn-block " name = "login">Login</a>
								
								
                            </fieldset>
							
									<?php include ('login_query.php');?>
                        </form>
                    </div>
                </div>
            </div>
			
			 </div>
        </div>
    </div>

  <?php include ('script.php');?>

</body>

</html>
