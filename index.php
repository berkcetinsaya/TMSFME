<!DOCTYPE html>
<html>

	<?php 

// INCLUDE DATABASE INFORMATION
		include("db_conn.php");
//

// TOTAL DURATIONS OF ALL MONTH
		// Create an array that includes 2nd, 3rd, 4th Engineers' ID //
		$userIdArray = array(2,3,4);
		// Create an array that includes 2nd, 3rd, 4th Engineers' ID //

		// Create an array to store task duration for a task //
		$task_duration = array();
		// Create an array to store task duration for a task //

		// Create a variable that stores days of month e.g. 1,2,3,..,31 and initialize to 1 in order to start from the first day of the month //
		$day = 1;
		// Create a variable that stores days of month e.g. 1,2,3,..,31 and initialize to 1 in order to start from the first day of the month //

		// Create two-dimensional array to store engineers' total task duration for a day //
		$info = array();
		// Create two-dimensional array to store engineers' total task duration for a day //

		// This for loop is for a month //
		for($day = 1; $day < 31; $day++){
			// This foreach is for engineers' ids //
			foreach ($userIdArray as $key => $value) {
				// This if is to add '0' if day is less than 10 e.g. 01,02,03,..,09 //
				if($day <10){
					// This is a sql statement that pull the task duration data from the database for a day and a specific user //
					$result = $db->query('select * from task where date = \'2017-11-0'. $day . '\'and userid =' .$userIdArray[$key]);
					
				} else{
					$result = $db->query('select * from task where date = \'2017-11-'. $day . '\'and userid =' .$userIdArray[$key]);
					// This is a sql statement that pull the task duration data from the database for a day and a specific user //				
				}
				// This if is to add '0' if day is less than 10 e.g. 01,02,03,..,09 //

				// This unset is for release(remove) task_duration array. It is called to empty the array //
				unset($task_duration);
				// This unset is for release(remove) task_duration array. It is called to empty the array //

				// Create an array to store task duration for a task //
				$task_duration = array();
				// Create an array to store task duration for a task //

				// This while loop is used for fetching the  duration data for a task and store them in the task_duration array //
				while($row = $result->fetch_assoc()){
					$task_duration[] = $row['duration'];
				}
				// This while loop is used for fetching the  duration data for a task and store them in the task_duration array //

				// This is used for delete the sql statement. Because we do not need it anymore. We have already used and now we have to clean it to reduce memory usage // 
				$result->free();
				// This is used for delete the sql statement. Because we do not need it anymore. We have already used and now we have to clean it to reduce memory usage // 

				// This is a variable in order to store total daily working hours for an engineer //
				$dailyTotalWorkingHours = 0;
				// This is a variable in order to store total daily working hours for an engineer //

				// This foreach is used to calculate the total duration in a day by adding task duration to dailyTotalWorkingHours variable //
				foreach ($task_duration as &$value) {
					$dailyTotalWorkingHours = $dailyTotalWorkingHours + $value;
				}
				// This foreach is used to calculate the total duration in a day by adding task duration to dailyTotalWorkingHours variable //

				// This stores total hours for a day that engineer has got //				
				$info[$day][$userIdArray[$key]] = $dailyTotalWorkingHours;
				/**
				 * $info[1][2] = 4 ---> in 2017-11-01, 2nd engineer has total 4 hours task.
				 * $info[1][3] = 2 ---> in 2017-11-01, 3rd engineer has total 2 hours task.
				 * $info[1][4] = 3 ---> in 2017-11-01, 4th engineer has total 3 hours task.
				 * $info[2][2] = 4 ---> in 2017-11-02, 2nd engineer has total 4 hours task.
				 * 		..		..		..		..		..		..		..		..		..
				 * 		..		..		..		..		..		..		..		..		..
				 * 		..		..		..		..		..		..		..		..		..
				 * 		..		..		..		..		..		..		..		..		..
				 * $info[30][4] = 4 ---> in 2017-11-30, 4th engineer has total 4 hours task.
				 */
				// This stores total hours for a day that engineer has got //
			}	
			// This foreach is for engineers' ids //
		}
		// This for loop is for a month //
		
		// For debugging
		//print_r($info);
		// For debugging
// TOTAL DURATIONS OF ALL MONTH
		
	$maxDuration = 8; 
	$dailyTotalWorkingHours = 0; 
	$task_duration = array();
	//echo 'Date: 11-30-2017 '. $userIdArray[0] . ' Duration: ' . $info[30][4] ; ?><?php
	
// IF SUBMIT BUTTON IS PRESSED //
	if (isset($_POST['submit'])){
		// These are user inputs //
		$inputTask = $_POST['inputTask'];
		$inputDuration = $_POST['inputDuration'];
		$inputDate = $_POST['inputDate'];
		$inputUserID = $_POST['inputUserID'];		
		// These are user inputs //

		// This is used to pull tasks where date and engineer type is given //
		$result = $db->query("select * from task where date = '{$inputDate}' and userid = '{$inputUserID}'");

		while($row = $result->fetch_assoc()){
			$task_duration[] = $row['duration'];
		}
		$result->free();
		// This is used to pull tasks where date and engineer type is given //

		// This foreach is used to calculate the total duration in a day by adding task duration to dailyTotalWorkingHours variable //
		foreach ($task_duration as &$value) {
			$dailyTotalWorkingHours = $dailyTotalWorkingHours + $value;
		}
		// This foreach is used to calculate the total duration in a day by adding task duration to dailyTotalWorkingHours variable //

		// This is a variable that stores total task duration and user input duration 
		// e.g. 2nd engineer total duration for 2017-11-01 is 4 and user entered 3 hours task. So, totalWorkingHoursStatment will be 4 + 3 = 7
		$totalWorkingHoursStatement = $dailyTotalWorkingHours + $inputDuration;
		// e.g. 2nd engineer total duration for 2017-11-01 is 4 and user entered 3 hours task. So, totalWorkingHoursStatment will be 4 + 3 = 7

		// If sum of the total task time for a day and user input task duration is less than or equal to 8, add that task to database //
		if($totalWorkingHoursStatement <= $maxDuration && $_POST['check'] != 1){
			$sql = "INSERT  INTO `task` (`idtask`, `name`, `duration`, `date`, `userid`) VALUES (NULL, '{$inputTask}', '{$inputDuration}', '{$inputDate}', '{$inputUserID}')";
			if ($db->query($sql)) {
				// Redirect to homepage //
				header("Location:  index.php");
				// Redirect to homepage //
			}			
		}
		// If sum of the total task time for a day and user input task duration is less than or equal to 8, add that task to database //

		
	elseif($_POST['check'] == 1){
		if($totalWorkingHoursStatement <= $maxDuration){
			$priority = $inputTask . " (PRIORITY)";
			$sql = "INSERT  INTO `task` (`idtask`, `name`, `duration`, `date`, `userid`) VALUES (NULL, '{$priority}', '{$inputDuration}', '{$inputDate}', '{$inputUserID}')";
			if ($db->query($sql)) {
				// Redirect to homepage //
				header("Location:  index.php");
				// Redirect to homepage //
			}
		}
		else{
			$daystr = date("d",strtotime($inputDate));
			//echo $daystr. '<br>';
			$task_id = array();
			$task_name = array();
			$task_duration = array();
			$date = array();
			$user_id = array();
			$dates = array();

			$result = $db->query("select * from task where date = \"" .$inputDate. "\" and userid = " .$inputUserID);
			// This is a sql statement that pull the task duration data from the database for a day and a specific user //	
			while($row = $result->fetch_assoc()){
				$task_id[]       = $row['idtask'];
				$task_name[]     = $row['name'];
				$task_duration[] = $row['duration'];
				$date[]          = $row['date'];
				$user_id[]	   = $row['userid'];
			}
			//echo "select * from task where date = \"" .$newDate. "\" and userid = " .$inputUserID;
			//echo $task_id;
			$result->free();


			foreach ($task_id as $key => $value) {
			for($day = (int)$daystr+1; $day < 31; $day++){
				if($info[$day][$inputUserID] + $task_duration[$key] <= $maxDuration){
									
					//$newDate = date("2017-11-" .$day);
					//echo $day. '<br>';
					//echo $info[$day][$inputUserID]+$inputDuration . '<br>';
					if($day <10){
						$newDate = date("2017-11-0" .$day);
						// This is a sql statement that pull the task duration data from the database for a day and a specific user //
						//$result = $db->query("select * from task where date = \"" .$inputDate. "\" and userid = " .$inputUserID);
						//echo $result;
					} else{
						$newDate = date("2017-11-" .$day);
									
					}
					
					$sql = "INSERT  INTO `task` (`idtask`, `name`, `duration`, `date`, `userid`) VALUES (NULL, '{$task_name[$key]}', $task_duration[$key], '{$newDate}', $user_id[$key])";
					if ($db->query($sql)) {
						// Redirect to homepage //
						//header("Location:  index.php");
						// Redirect to homepage //
					}	
					$sql = "DELETE FROM `task` WHERE `idtask` = " .$task_id[$key];
					if ($db->query($sql)) {
						// Redirect to homepage //
						//header("Location:  index.php");
						// Redirect to homepage //
					}	
					$info[(int)$daystr][$inputUserID] = $info[(int)$daystr][$inputUserID] - $task_duration[$key];
					$info[$day][$inputUserID] = $info[$day][$inputUserID] + $task_duration[$key];
					break;

				}
			}
		}
			$priority = $inputTask . " (PRIORITY)";
			$sql = "INSERT  INTO `task` (`idtask`, `name`, `duration`, `date`, `userid`) VALUES (NULL, '{$priority}', '{$inputDuration}', '{$inputDate}', '{$inputUserID}')";
			if ($db->query($sql)) {
				// Redirect to homepage //
				//header("Location:  index.php");
				// Redirect to homepage //
				echo '<script type="text/javascript">
				alert("Priority Task '.$priority.' added and due to limitation of the task duration, previous tasks dates are changed!");
				window.location.href = "index.php";
				</script>';
			}	
		}
	}
	else{				
		echo 
			'<script type="text/javascript">
			alert("Maximum Task Duration! Please select another date!");
			window.location.href = "index.php";
			</script>';
	}
	// Else alert to user and redirect to homepage //

	}
// IF SUBMIT BUTTON IS PRESSED //

// IF SUBMIT BUTTON IS NOT PRESSED LOAD THE WEBPAGE //
	else{


	?>

	<!-- BROWSER SETTINGS AND INCLUDING STYLE AND ANIMATION FILES-->
		<head>
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<!-- Custom CSS -->
			<link href="css/modern-business.css" rel="stylesheet">
			<!-- Custom Fonts -->
			<link  rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
			<title>
				Furkan
			</title>		
		</head>
	<!-- BROWSER SETTINGS AND INCLUDING STYLE AND ANIMATION FILES-->

	<!-- ALL WEB PAGE CONTENT-->
		<body>
			<!-- MENU -->
			<nav style="background-color:#800000;" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php"><i class="fa fa-anchor"></i> Furkan <i class="fa fa-ship"></i></a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="operation.php"><i class="fa fa-cog"></i> Operation Task</a>
							</li>
							<li>
								<a href="user.php"> <i class="fa fa-user"></i> Engineer List</a>
							</li>
							<li>
								<a href="filter.php"><i class="fa fa-filter"></i> Filters</a>
							</li>
							<li>
								<a href="contact.php"> <i class="fa fa-address-book"></i> Contact</a>
							</li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container -->
			</nav>
			<!-- MENU -->

			<!-- SLIDE SHOW -->
			<header id="myCarousel" class="carousel slide">
				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<div class="fill" style="background-image:url('ship4.jpg');"></div>
					</div>
					<div class="item">
						<div class="fill" style="background-image:url('ship3.jpg');"></div>
					</div>
					<div class="item">
						<div class="fill" style="background-image:url('ship.jpg');"></div>
					</div>
					<div class="item">
						<div class="fill" style="background-image:url('ship1.jpg');"></div>
					</div>
					<div class="item">
						<div class="fill" style="background-image:url('ship2.jpg');"></div>
					</div>
				</div>
				<!-- Controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="icon-prev"></span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="icon-next"></span>
				</a>
			</header>
			<!-- SLIDE SHOW -->

			<!-- CONTENT -->
			<div class="container">
				<div class="row">
				<!-- TASK FORM HEADER -->
					<div class="col-lg-12">
						<h3 class="page-header text-center">
						<i class="fa fa-list"></i> Task Form
						</h3>
					</div>
				<!-- TASK FORM HEADER -->
				<!-- TASK FORM -->
					<div class="col-lg-12">
						<form style action="<?=$_SERVER['PHP_SELF']?>" method="post">
							<div class="col-xs-12 col-sm-12 col-lg-12">
								<div class="form-group">
									<label for="inputUserID" class="col-2 col-form-label"><i class="fa fa-address-card"></i> Engineer ID</label>
									<div class="col-10">
									<!-- This <select> and <option> is used for dropdown menu to select engineers-->
										<select class="form-control" id="inputUserID" name="inputUserID"> <?php										
											echo "<option selected>2</option>";
											echo "<option>3</option>";
											echo "<option>4</option>"; ?>
										</select>
									<!-- This <select> and <option> is used for dropdown menu to select engineers-->
									</div>
								</div>
								
								<div class="form-group">
									<label for="inputTask"><i class="fa fa-comment"></i> Task Description</label>
									<input type="text" class="form-control" id="inputTask" name="inputTask" placeholder="Enter Task Description" required>
									<input type="checkbox" id="check" name="check" value="1"/>
									<label for="check"> <i class="fa fa-exclamation"></i> Unexpected </label>
								</div>
								<div class="form-group">
									<label for="inputDuration"><i class="fa fa-clock-o"></i> Task Duration (hours)</label>
									<input type="number" class="form-control" id="inputDuration" name="inputDuration" placeholder="Enter Task Duration (hours)" required>
								</div>
								<div class="form-group">
									<label for="inputDate" class="col-2 col-form-label"><i class="fa fa-calendar"></i> Date</label>
									<div class="col-10">
										<input class="form-control" type="date" value="<?php echo date("2017-11-01");?>" id="inputDate" name="inputDate">
									</div>
								</div>
								
								<button name="submit" type="submit" class="btn btn-primary btn-block"> <i class="fa fa-paper-plane "></i> Submit</button>
							</div>
						</form>
					</div>
				<!-- TASK FORM -->
				</div>
				<div class="row">	
				<!-- TASK TABLE HEADER -->
					<div class="col-lg-12">
						<h3 class="page-header text-center">
							<i class="fa fa-table "></i> Task Table
						</h3>
					</div>	
				<!-- TASK TABLE HEADER -->
				<!-- TASK TABLE -->
					<div class="col-lg-12">
						<div style="height:300px;overflow:auto;">
							<table class="table table-hover table-bordered table-striped">
								<thead>
									<!-- TABLE ROW -->
										<tr>
										<!-- TABLE HEADERS -->
											<th>Task ID</th>
											<th>Task Description</th>
											<th>Task Duration(hours)</th>
											<th>Date</th>						
											<th>Engineer</th>
										<!-- TABLE HEADERS -->
										</tr>
									<!-- TABLE ROW -->
								</thead>
								<tbody>
									<?php
										// This statement is used for pull all tasks by descending ordering by task id. As a result, last added task will appear in the first row //
										$result = $db->query("select * from task order by date asc");
										// This statement is used for pull all tasks by descending ordering by task id. As a result, last added task will appear in the first row //

										//This while loop is used for creating a table that consists of tasks //
										while($row = $result->fetch_assoc()){
											$task_id       = $row['idtask'];
											$task_name     = $row['name'];
											$task_duration = $row['duration'];
											$date          = $row['date'];
											$user_id	   = $row['userid'];
											echo 	
											'<tr>
												<!-- TABLE COLUMNS -->
													<td>' . $task_id . '</td>
													<td>' . $task_name .'</td>
													<td>' . $task_duration . '</td>
													<td>' . $date . '</td>									
													<td>' . $user_id . '</td>
												<!-- TABLE COLUMNS -->
											</tr>';
										}
										//This while loop is used for creating a table that consists of tasks //

										// This is used for delete the sql statement. Because we do not need it anymore. We have already used and now we have to clean it to reduce memory usage // 
										$result->free();
										// This is used for delete the sql statement. Because we do not need it anymore. We have already used and now we have to clean it to reduce memory usage // 
									?>
								</tbody>
							</table>
						</div>
					</div>
				<!-- TASK TABLE -->
				</div>
			<!-- COPYRIGHT -->
				<footer>
					<div class="row text-center">
						<div class="col-lg-12">
							<p>Copyright <i class="fa fa-copyright "></i> <b>Furkan Sayin</b> 2017</p>
						</div>
					</div>
				</footer>
			<!-- COPYRIGHT -->
			</div>
			<!-- CONTENT -->

		<!-- ANIMATION AND SLIDE SHOW SECONDS INTERVAL -->
			<script src="js/jquery.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script>
			$('.carousel').carousel({
				interval: 5000 //changes the speed
			});
			</script>
		<!-- ANIMATION AND SLIDE SHOW SECONDS INTERVAL -->
		</body> <?php } 
// IF SUBMIT BUTTON IS NOT PRESSED LOAD THE WEBPAGE // ?>
	
<!-- ALL WEB PAGE CONTENT-->
</html>