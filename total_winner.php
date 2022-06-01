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
                    <h3 class="page-header"><center><b> Total Winners Report</b><center></h3></div>
				
                        <?php
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

