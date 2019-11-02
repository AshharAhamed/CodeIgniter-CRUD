<html>
<head>
<title>Update Data In Database Using CodeIgniter</title>
<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>

</head>
<body>
<div id="container">
<div id="wrapper">
<h1>Update Data In Database Using CodeIgniter </h1><hr/>
<div id="detail">
<!-- Fetching All Details of Selected Student From Database And Showing In a Form -->
<?php foreach ($single_student as $student): ?>
<p>Edit Detail & Click Update Button</p>
<form method="post" action="<?php echo base_url() . "index.php/update_ctrl/update_student_id"?>">
<input type="text" name="stdid" value="<?php echo $student->StdId; ?>">
<label>First Name :</label>
<input type="text" name="fname" value="<?php echo $student->FirstName; ?>">
<label>Middle Name :</label>
<input type="text" name="mname" value="<?php echo $student->MiddleName; ?>">
<label>Last Name :</label>
<input type="text" name="lname" value="<?php echo $student->LastName; ?>">
<label>Gender :</label>
<input type="text" name="gender" value="<?php echo $student->Gender; ?>">
<label>Date of birth :</label>
<input type="text" name="dob" value="<?php echo $student->DOB; ?>">

<input type="submit" id="submit" name="dsubmit" value="Update">
</form>
<?php endforeach; ?>
</div>
</div>
</div>
</body>
</html>