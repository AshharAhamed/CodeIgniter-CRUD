<?php include 'head.php';?>
<?php include 'header.php';?>
<?php include 'sidebar.php';?>


 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Teacher
        <small>Registration</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('index.php/home'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Teacher Registration</li>
      </ol>
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
		
     <div class="col-md-8">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Basic Information</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" id="form1">
              <div class="box-body">
                <div class="form-group">
                  <label for="fname" class="col-sm-2 control-label">First Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter First Name">
                  </div>
                </div>

                <div class="form-group">
                  <label for="mname" class="col-sm-2 control-label">Middle Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="mname" id="mname" placeholder="Enter Middle Name">
                  </div>
                </div>

                <div class="form-group">
                  <label for="lname" class="col-sm-2 control-label">Last Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter Last Name">
                  </div>
                </div>

                <!-- radio -->
                <div class="form-group">
				  <label for="gender" class="col-sm-2 control-label">Gender</label>
					<div class="radio">
                    <label class="radio-inline">
                      <input type="radio" name="gender" id="gender1" value="Male" checked>
                      Male
					</label>
					<label class="radio-inline">
                      <input type="radio" name="gender" id="gender2" value="Female">
                      Female
					</label>
                  </div>
                </div>	

              <!-- Date -->
              <div class="form-group">
                <label for="datepicker" class="col-sm-2 control-label">Date of Birth</label>

                <div class="col-sm-9 input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="dob" placeholder="MM/DD/YYYY">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
			  
                <div class="form-group">
                  <label for="aline1" class="col-sm-2 control-label">Address Line 1</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="aline1" id="aline1" placeholder="Enter Address Line 1">
                  </div>
                </div>
             <!-- /.form group -->
			 
                <div class="form-group">
                  <label for="aline2" class="col-sm-2 control-label">Address Line 2</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="aline2" id="aline2" placeholder="Enter Address Line 2">
                  </div>
                </div>
             <!-- /.form group -->
			 
                <div class="form-group">
                  <label for="aline3" class="col-sm-2 control-label">Address Line 3</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="aline3" id="aline3" placeholder="Enter Address Line 3">
                  </div>
                </div>
             <!-- /.form group -->
			 
                <div class="form-group">
                  <label for="city" class="col-sm-2 control-label">City</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="city" id="city" placeholder="Enter City">
                  </div>
                </div>
             <!-- /.form group -->

                <div class="form-group">
                  <label for="nic" class="col-sm-2 control-label">NIC No.</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nic" id="nic" placeholder="Enter NIC No">
                  </div>
                </div>
             <!-- /.form group -->		

                <div class="form-group">
                  <label for="subject" class="col-sm-2 control-label">Subject Expert</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter Subject">
                  </div>
                </div>
             <!-- /.form group -->			 
			 
                <div class="form-group">
                  <label for="role" class="col-sm-2 control-label">Job Role</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="role" id="role" placeholder="Enter Job Role">
                  </div>
                </div>
             <!-- /.form group -->			 

                <div class="form-group">
                  <label for="mobile" class="col-sm-2 control-label">Mobile No.</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile No.">
                  </div>
                </div>
             <!-- /.form group -->				 
			 </div>
			  
			  
			  
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" name="cancel" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right" name="save" value="save">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
 
        </div>		
        <!--/.col (left) -->
        <!-- right column -->
   
		
	  
        <!--/.col (right) -->
		
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
<?php include 'footer.php';?>


<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>front/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>front/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>front/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>front/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>front/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>front/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>front/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>front/dist/js/demo.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>front/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url(); ?>front/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url(); ?>front/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url(); ?>front/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url(); ?>front/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url(); ?>front/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url(); ?>front/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url(); ?>front/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url(); ?>front/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>front/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url(); ?>front/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>front/bower_components/fastclick/lib/fastclick.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>

</body>
</html>