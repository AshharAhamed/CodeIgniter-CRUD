<!DOCTYPE html>
<html>
<head>
<title>Registration form</title>
</head>

<body>
	<form method="post">
		<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td width="230">Enter Your Name </td>
    <td width="329"><input type="text" name="name"/></td>
  </tr>
  <tr>
    <td>Enter Your Email </td>
    <td><input type="text" name="email"/></td>
  </tr>
  <tr>
    <td>Enter Your Mobile </td>
    <td><input type="text" name="mobile"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="save" value="Save Data"/></td>
  </tr>
</table>

	</form>
	
            <!-- form start -->
     <form class="form-horizontal" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">First Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="fname" placeholder="Enter First Name">
                  </div>
                </div>

                <div class="form-group">
                  <label for="email" class="col-sm-2 control-label">Middle Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="email" id="mname" placeholder="Enter Middle Name">
                  </div>
                </div>

                <div class="form-group">
                  <label for="mobile" class="col-sm-2 control-label">Last Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="mobile" id="lname" placeholder="Enter Last Name">
                  </div>
                </div>

			</div>
			  
			  
			  
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" name="cancel" class="btn btn-default">Cancel</button>
                <input type="submit" name="save" value="Save Data"/>
              </div>
              <!-- /.box-footer -->
            </form>
</body>
</html>