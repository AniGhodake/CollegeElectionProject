<?php include ('head1.php');?>
<body>
    <div class="container">
    <div class="row">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
                <li class="breadcrumb-item active">Voters Login</li>
            </ol>
           
        </div>
        <div class="row">
        <marquee class="rotation" style="color:#bf3048 !important; background:none; margin-bottom: 0px;">
        <h4><strong><img src="new.gif" />
        Stay Tuned Result Will be Displayed on 21st JULY 2022 At.11 am  <img src="new.gif" /> Voting Link Will be Active Only on 30 th MAY 2022 From 11 AM to 5 PM, After Time Voters Cant Cast Vote.
        </strong></h4>
      </marquee>
		
		<center>
			<h2><b>Voters Login</b></h2></center>
            <div class="col-md-4 col-md-offset-4">
              	
		 <div class="login-panel panel panel-default">	
                
		    <div class="panel-heading">
                        <center><h3 class="panel-title"> Log In</h3></center>
                    </div>
                    <div class="panel-body">
                        <form role="form" method = "post" enctype = "multipart/form-data">
                            <fieldset>
							
                                <div class="form-group">
									<label for = "username" >PR Number</label>
										<input class="form-control" placeholder="Please Enter PR Number" name="idno" type="text" required = "required" autofocus>
                                </div>
								
                                <div class="form-group">
									<label for = "username" >Password</label>
										<input class="form-control" placeholder="Password" name="password" type="password" required = "required">
                                </div>
                             
                              
                                <button class="btn btn-lg btn-success btn-block " name = "login">Login</a>
								
								
                            </fieldset>
							
									<?php include ('login_query.php');?>
                        </form>
                        <h4><b>Note:</b> <i>One voter can only vote/login one time!!</i> </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <?php include ('script.php');?>

</body>

</html>
