<?php include ('head1.php');?>
<?php include ('sess.php');?>

<body>

    <div id="row">
        <?php 
			
			if(ISSET($_POST['submit']))
				{
					if(!ISSET($_POST['gs_id']))
					{
						$_SESSION['gs_id'] = "";
					}
					else
					{
						$_SESSION['gs_id'] = $_POST['gs_id'];
					}
					if(!ISSET($_POST['cr_id']))
					{
						$_SESSION['cr_id'] = "";
					}
					else
					{
						$_SESSION['cr_id'] = $_POST['cr_id'];
					}
					if(!ISSET($_POST['cr_id']))
					{
						$_SESSION['cr_id'] = "";
					}
					else
					{
						$_SESSION['cr_id'] = $_POST['cr_id'];
					}
					if(!ISSET($_POST['ccl_id']))
					{
						$_SESSION['ccl_id'] = "";
					}
					else
					{
						$_SESSION['ccl_id'] = $_POST['ccl_id'];
					}
					if(!ISSET($_POST['sc_id']))
					{
						$_SESSION['sc_id'] = "";
					}
					else
					{
						$_SESSION['sc_id'] = $_POST['sc_id'];
					}
					if(!ISSET($_POST['dr_id']))
					{
						$_SESSION['dr_id'] = "";
					}
					else
					{
						$_SESSION['dr_id'] = $_POST['dr_id'];
					}
				}
		?>
    </div>
			<center>
		  <div class="col-lg-8" style = "margin-left:240px;" >
		  <div class = "alert alert-info">
			<label>GENERAL SECRETARY (GS)</label>
			<br />
			<?php
				if(!$_SESSION['gs_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[gs_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." <br /> "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			<div class = "alert alert-success" >
			<label>UNIVERSITY REPRESENTATIVE (UR)</label>
			<br />
			<?php
				if(!$_SESSION['ur_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[ur_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." <br /> "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			<div class = "alert alert-info">
			<label>CLASS REPRESENTATIVE (CR)</label>
			<br/>
			<?php
				if(!$_SESSION['cr_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[cr_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." <br /> "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
				
			</div>
			<div class = "alert alert-success" >
			<label>COLLEGE CULTURAL HEAD</label>
			<br />
			<?php
				if(!$_SESSION['ccl_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[ccl_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." <br /> "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-info">
			
			<label>SPORT COORDINATOR</label>
			<br />
			<?php
				if(!$_SESSION['sc_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[sc_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." <br /> "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-success">
			<label>DEPARTMENT REPRESENTATIVE</label>
			<br />
			<?php
				if(!$_SESSION['dr_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[dr_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." <br /> "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			
			<br />
			<button type = "submit" data-toggle = "modal" data-target = "#result" class = "btn btn-success" >Submit Final Vote</button>
		</div>
	</center>
	<div class="modal fade" id = "result" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
											<h4 class="modal-title" id="myModalLabel">         
												
											</h4>
										</div>
										
										
                                        <div class="modal-body">
										<p class = "alert alert-danger">Are you sure you want to submit your Votes? </p>
                                    </div>
									
									<div class="modal-footer">
								<a href = "submit_vote.php"><button type = "submit" class="btn btn-success"><i class="icon-check"></i>&nbsp;Yes</button></a>
								<a href = "vote.php"><button class="btn btn-danger" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Back</button></a>
									</div>
									</div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
</body>
<?php include ('script.php')?>
</html>

