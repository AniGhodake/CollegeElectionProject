<?php include ('session.php');?>
<?php include ('head.php');?>

<body>
    <div id="wrapper">

        <!-- Navigation -->
        <?php include ('side_bar.php');?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                <?php 
                $header = '';
                if($_POST['position']=='total_voters_report'){
                    $header = 'Total Voters Report';
                }elseif($_POST['position']=='total_voted_voters_report'){
                    $header = 'Total Voted Voters Report';
                }elseif($_POST['position']=='total_unvoted_voters_report'){
                    $header = 'Total Unvoted Voters Report';
                }elseif($_POST['position']=='total_winners_report'){
                    $header = 'Total Winners Report';
                }elseif($_POST['position']=='total_candidate_report'){
                    $header = 'Total Candidate Report';
                }
                ?>
                    <h3 class="page-header"><center><b> <?php echo $header; ?></b><center></h3></div>
				
                        <?php //echo "<pre>"; print_r($_POST); exit;
                            $hostname="localhost";
                            $username="root";
                            $password="";
                            $database="voting";

                            $con=mysqli_connect($hostname,$username,$password,$database);
                            if(!$con)
                            {
                            die("Connection Failed <br/>".mysqli_error());
                            }
                            $fdate=$_POST['fromdate'];
                            $tdate=$_POST['todate'];
                            ?>
                            <button type="button" onclick="window.print();" style = "margin-right:14px;" id ="print" class = "pull-right btn btn-info"><i class = "fa fa-print"></i> Print</button>
                            <h5 align="center" style="color:blue">Report from <?php echo $fdate?> to <?php echo $tdate?></h5>
                                


                        <!-- /.panel-heading -->
                        <?php 
                        if($_POST['position']=='total_voters_report'){ ?>
                           <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        <th>Sr.No.</th>
                                        <th>PR Number</th>
                                        <th>Name</th>
                                        <th>Email ID</th>
                                        <th>Date</th>
                                        <th>Branch</th>
                                        <th>Year</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php  require 'dbcon.php';
                                    $sql=mysqli_query($con,"select * from voters where date between '$fdate' and '$tdate'");
                                    $cnt=1;
                                    while($row=mysqli_fetch_array($sql))
                                    {
                                    ?>
											<tr>
                                            <td class="center"><?php echo $cnt++;?>.</td>
                                            <td><?php echo $row ['id_number'];?></td>
                                            <td><?php echo $row ['firstname']." ". $row ['lastname'];?></td>
                                            <td><?php echo $row['email'];?></td>
                                            <td><?php echo $row['date'];?></td>
                                            <td><?php echo $row['branch'];?></td>
                                            <td><?php echo $row['year_level'];?></td>		
											</tr>
										
                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                       
                        <?php }elseif($_POST['position']=='total_voted_voters_report'){ ?>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        <th>Sr.No.</th>
                                        <th>PR Number</th>
                                        <th>Name</th>
                                        <th>Email ID</th>
                                        <th>Date</th>
                                        <th>Branch</th>
                                        <th>Year</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    require 'dbcon.php';
                                    $sql=mysqli_query($con,"SELECT * FROM voters where status = 'Voted' AND date between '$fdate' and '$tdate'");
                                    $cnt=1;
                                    while($row=mysqli_fetch_array($sql))
                                    {
                                    ?>
											<tr>
                                            <td class="center"><?php echo $cnt++;?>.</td>
                                            <td><?php echo $row ['id_number'];?></td>
                                            <td><?php echo $row ['firstname']." ". $row ['lastname'];?></td>
                                            <td><?php echo $row['email'];?></td>
                                            <td><?php echo $row['date'];?></td>
                                            <td><?php echo $row['branch'];?></td>
                                            <td><?php echo $row['year_level'];?></td>		
											</tr>
										
                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive --> 
                        </div>
                      
                        <?php }elseif($_POST['position']=='total_unvoted_voters_report'){ ?>
                            <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        <th>Sr.No.</th>
                                        <th>PR Number</th>
                                        <th>Name</th>
                                        <th>Email ID</th>
                                        <th>Date</th>
                                        <th>Branch</th>
                                        <th>Year</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    require 'dbcon.php';
                                    $sql=mysqli_query($con,"SELECT * FROM voters where status = 'Unvoted' AND date between '$fdate' and '$tdate'");
                                    $cnt=1;
                                    while($row=mysqli_fetch_array($sql))
                                    {
                                    ?>
											<tr>
                                            <td class="center"><?php echo $cnt++;?>.</td>
                                            <td><?php echo $row ['id_number'];?></td>
                                            <td><?php echo $row ['firstname']." ". $row ['lastname'];?></td>
                                            <td><?php echo $row['email'];?></td>
                                            <td><?php echo $row['date'];?></td>
                                            <td><?php echo $row['branch'];?></td>
                                            <td><?php echo $row['year_level'];?></td>		
											</tr>
										
                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>

                        <?php }elseif($_POST['position']=='total_winners_report'){ ?>
                            <form method="post" action="sort.php">
			
			          <br><br>
			
                        <div class="panel-body">
                    	
			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;" class = "alert alert-success">Candidate for GENERAL SECRETARY (GS)</td>
						<td style = "width:200px;"class = "alert alert-success">Image</td>
						<td style = "width:150px;" class = "alert alert-success"><center>Total Votes</center></td>
                
					
					</thead>
					<?php
		require 'dbcon.php';
			$query = $conn->query("SELECT * FROM candidate WHERE position = 'GENERAL SECRETARY (GS)'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
					<tbody> 
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>
					
					
			</table>	
			
			
							
			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Candidate for UNIVERSITY REPRESENTATIVE (UR)</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td style = "width:150px;" class = "alert alert-success"><center>Total Votes</center></td>
					
					</thead>
					<?php
			require 'dbcon.php';
			$query = $conn->query("SELECT * FROM candidate WHERE position = 'UNIVERSITY REPRESENTATIVE (UR)'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
					<tbody> 
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>
					
					
			</table>	
			
			
			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Candidate for CLASS REPRESENTATIVE (CR)</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td style = "width:150px;" class = "alert alert-success"><center>Total Votes</center></td>
					
					</thead>
					<?php
		require 'dbcon.php';
		$query = $conn->query("SELECT * FROM candidate WHERE position = 'CLASS REPRESENTATIVE (CR)'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
					<tbody> 
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>
					
					
			</table>	
			
						
			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Candidate COLLEGE CULTURAL HEAD</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td style = "width:150px;" class = "alert alert-success"><center>Total Votes</center></td>
					
					</thead>
					<?php
		require 'dbcon.php';
		$query = $conn->query("SELECT * FROM candidate WHERE position = 'COLLEGE CULTURAL HEAD'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
					<tbody> 
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>
					
					
			</table>		
							
			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Candidate for SPORT COORDINATOR</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td style = "width:150px;" class = "alert alert-success"><center>Total Votes</center></td>
					
					</thead>
					<?php
		require 'dbcon.php';
		$query = $conn->query("SELECT * FROM candidate WHERE position = 'SPORT COORDINATOR'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
					<tbody> 
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>
					
			</table>	
			
							
			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Candidate for DEPARTMENT REPRESENTATIVE</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td style = "width:150px;" class = "alert alert-success"><center>Total Votes</center></td>
                       
					</thead>
					<?php
		require 'dbcon.php';
		$query = $conn->query("SELECT * FROM candidate WHERE position = 'DEPARTMENT REPRESENTATIVE'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
					<tbody> 
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>
					
					
			</table>	
			
			
							</div>				
				
                          </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
              
            </div>
            <!-- /.row -->
        </div>

                       <?php }elseif($_POST['position']=='total_candidate_report'){ ?>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        <th>Candidate ID</th>
                                        <th>Position</th>
                                        <th>Name</th>
                                        <th>Year</th>
                                        <th>Date</th>
                                        <th>Gender</th>
                                        <th>Image</th>    
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    require 'dbcon.php';
                                   
                                       
                                    $sql=mysqli_query($con,"select * from candidate WHERE date BETWEEN '$fdate' and '$tdate'");
                                    $cnt=1;
                                    while($row=mysqli_fetch_array($sql))
                                    {
                                    ?>
											<tr>
                                            <td class="center"><?php echo $cnt++;?>.</td>
                                            <td><?php echo $row['position'];?></td>
                                            <td><?php echo $row ['firstname']." ". $row ['lastname'];?></td>
                                            <td><?php echo $row['year'];?></td>
                                            <td><?php echo $row['date'];?></td>
                                            <td><?php echo $row['gender'];?></td>
                                            <td width="50"><img src="<?php echo $row['img']; ?>" width="50" height="50" class="img-rounded"></td>	
											</tr>
										
                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <?php }
                        ?>
                        
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
              
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->



    </div>
    <!-- /#wrapper -->

    <?php include ('script.php');?>

</body>

</html>

