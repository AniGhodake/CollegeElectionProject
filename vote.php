<?php include ('head1.php');?>
<?php include("sess.php")?>
<body>
	
    <div id="wrapper">
        
    </div>
	<form method = "POST" action = "vote_result.php">
	<div class="col-lg-6">
	
                    <div class="panel panel-primary">
                        <div class="panel-heading"><center>
						GENERAL SECRETARY (GS)</center>
                        </div>
                        <div class="panel-body" style = "background-color:;">
						<?php
							$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'GENERAL SECRETARY (GS)'") or die(mysqli_errno());
							while($fetch = $query->fetch_array())
						{
						?>
                           <div id = "position"><center>
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
							
							<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "radio" value = "<?php echo $fetch['candidate_id'] ?>" name = "gs_id" class = "gs"></center>
							</div>
	
						<?php
							}
						?>

						</div>
                       
                    </div>
     </div>
				
				
				
	
	
	
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>CLASS REPRESENTATIVE (CR)</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'CLASS REPRESENTATIVE (CR)'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position"><center>
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
						<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "radio" value = "<?php echo $fetch['candidate_id'] ?>" name = "cr_id" class = "cr"></center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>COLLEGE CULTURAL HEAD</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'COLLEGE CULTURAL HEAD'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position"><center>
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
							<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "radio" value = "<?php echo $fetch['candidate_id'] ?>" name = "ccl_id" class = "ccl"></center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>	
	
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>SPORT COORDINATOR</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'SPORT COORDINATOR'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position"><center>
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
							<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "radio" value = "<?php echo $fetch['candidate_id'] ?>" name = "sc_id" class = "dr"></center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
	 <div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>DEPARTMENT REPRESENTATIVE</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'DEPARTMENT REPRESENTATIVE'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position"><center>
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
							<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "radio"  value = "<?php echo $fetch['candidate_id'] ?>" name = "dr_id" class = "dr"></center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
		
		<center><button class = "btn btn-success ballot" type = "submit" name = "submit">Submit Ballot</button></center>
		</form>
</body>
<?php include ('script.php')?>
  
  <script type = "text/javascript">
		$(document).ready(function(){
			$(".GENERAL SECRETARY (GS)").on("change", function(){
				if($(".GENERAL SECRETARY (GS):checked").length == 1)
					{
						$(".GENERAL SECRETARY (GS)").attr("disabled", "disabled");
						$(".GENERAL SECRETARY (GS):checked").removeAttr("disabled");
					}
				else
					{
						$(".GENERAL SECRETARY (GS)").removeAttr("disabled");
					}
			});

			$(".UNIVERSITY REPRESENTATIVE (UR)").on("change", function(){
				if($(".UNIVERSITY REPRESENTATIVE (UR):checked").length == 1)
					{
						$(".UNIVERSITY REPRESENTATIVE (UR)").attr("disabled", "disabled");
						$(".UNIVERSITY REPRESENTATIVE (UR):checked").removeAttr("disabled");
					}
				else
					{
						$(".UNIVERSITY REPRESENTATIVE (UR)").removeAttr("disabled");
					}
			});
			
			$(".CLASS REPRESENTATIVE (CR)").on("change", function(){
				if($(".CLASS REPRESENTATIVE (CR):checked").length == 1)
					{
						$(".CLASS REPRESENTATIVE (CR)").attr("disabled", "disabled");
						$(".CLASS REPRESENTATIVE (CR):checked").removeAttr("disabled");
					}
				else
					{
						$(".CLASS REPRESENTATIVE (CR)").removeAttr("disabled");
					}
			});
			
			$(".COLLEGE CULTURAL HEAD").on("change", function(){
				if($(".COLLEGE CULTURAL HEAD:checked").length == 1)
					{
						$(".COLLEGE CULTURAL HEAD").attr("disabled", "disabled");
						$(".COLLEGE CULTURAL HEAD:checked").removeAttr("disabled");
					}
				else
					{
						$(".COLLEGE CULTURAL HEAD").removeAttr("disabled");
					}
			});
			
			$(".SPORT COORDINATOR").on("change", function(){
				if($(".SPORT COORDINATOR:checked").length == 1)
					{
						$(".SPORT COORDINATOR").attr("disabled", "disabled");
						$(".SPORT COORDINATOR:checked").removeAttr("disabled");
					}
				else
					{
						$(".SPORT COORDINATOR").removeAttr("disabled");
					}
			});
			
			$(".DEPARTMENT REPRESENTATIVE").on("change", function(){
				if($(".DEPARTMENT REPRESENTATIVE:checked").length == 1)
					{
						$(".DEPARTMENT REPRESENTATIVE").attr("disabled", "disabled");
						$(".DEPARTMENT REPRESENTATIVE:checked").removeAttr("disabled");
					}
				else
					{
						$(".DEPARTMENT REPRESENTATIVE").removeAttr("disabled");
					}
			});
			
		});	
	</script>
</html>

