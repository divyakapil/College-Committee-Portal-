<?php
include 'connect.php';
if(isset($_GET['event_id'])) {
    $event_id = $_GET['event_id'];
    $event_query = "SELECT * FROM workshop where workshopid=".$event_id.";";
    $result = mysqli_query($conn, $event_query);
    $event = mysqli_fetch_assoc($result);
}
if(isset($_POST['submit'])) {
    $rollno=$_POST['rollno'];
    $branch=$_POST['branch'];
    $year=$_POST['year'];
    $emailid=$_POST['emailid'];
    $workshopid=$_POST['workshopid'];
    $sql = "INSERT INTO event_registrations (rollno, branch, year, emailid, workshopid)
    VALUES ('$rollno', '$branch', '$year', '$emailid', '$workshopid')";
    if(mysqli_query($conn,$sql))
    {
        header('Location: /comm/and.html');
    }
    else
        echo "error";    
}
?>    
<html><head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container"><br>
        
        <h1 class="text-sucess text-center">Registration Form for Event: <?php echo $event['name'] ?></h1><br>
		<div class="col-lg-8 m-auto d-block">
			<form action="/comm/register_event_form.php?event_id=<?php echo $event['workshopid'] ?>" on="" submit="return validation()" class="bg-light" method="post">
				<div class="form-group">
					<label>Rollno:</label>
					<input type="text" name="rollno" class="form-control" id="roll" autocomplete="off" required="">
					<span id="username" class="text-danger  font-weight-bold">
					</span>
				</div>

				 <div class="form-group">
					<label>Branch:</label>
					<input type="text" name="branch" class="form-control" id="Branch" autocomplete="off" required="">
				</div>	
				<div class="form-group">
					<label>Year</label>
					<input type="text" name="year" class="form-control" id="year" autocomplete="off" required="">
				</div>

				<div class="form-group">
					<label>Email-id</label>
					<input type="text" name="emailid" class="form-control" id="emailid" autocomplete="off" required="">
					<span id="username" class="text-danger  font-weight-bold">
					</span>
				</div>
                <input type="hidden" name="workshopid" value="<?php echo $event['workshopid'] ?>" />
				<input type="submit" name="submit" value="submit" class="btn btn-success">
				</form>
				</div>
				</div>
</body></html>