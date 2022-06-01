
<?php include ('session.php');?>
<?php include ('head.php');?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
		<?php include ('side_bar.php');?>

        <!-- Page Content -->
		<form role="form" method="post" action="total_voters.php">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12"> </div>
				
				<hr/>
				
                    <div class="panel panel-default">
                        <div class="panel-heading">
							<h4 class = "alert alert-success"><center>Select the Type of Report</center></h4>	
                        </div>
						
					<br/>
 
			<center>
			<select name="position" id="position" class = "form-control pull-center" style = "width:300px;margin-left:19px;">
			
				<option readonly>----Select Report Type----</option>
				<!--<option value="total_voters_report">Total Voters Reports</option>
				<option value="total_voted_voters_report">Total Voted Voters Reports </option>
				<option value="total_unvoted_voters_report">Total Unvoted Voters Reports</option>
				
				<option value="total_candidate_report">Total Candidates Reports</option>-->
				<option value="total_winners_report">Total Winners Reports</option>
			</center>	
			</select>

				<?php 
					$fdate=$_POST['fromdate'];
					$tdate=$_POST['todate']; 
					//echo "<pre>"; print_r($fdate); exit;
				?>
			
			<input type="hidden" name="fromdate" value= "<?php echo $fdate; ?>">	
			<input type="hidden" name="todate" value=  "<?php echo $tdate; ?>"> 

			&nbsp;
			&nbsp;
			&nbsp;
			<br>
			<button id ="select"  class = "btn btn-success">SELECT</button> <br> <br>
           
		</form>	
	   
	


    <?php include ('script.php');?>

</body>

</html>

