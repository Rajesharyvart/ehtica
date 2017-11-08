<?php include('header.php'); ?>

  
<?php echo admin_css('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css', true); ?>
  
<?php include('left_admin.php');?>  
  
  <div class="content-wrapper" style="min-height: 916px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="user_list" class="table table-bordered table-striped">
                <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Zipcode</th>
			    <th>Provider</th>
                        </tr>
                </thead>
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>

          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>





 
<?php init_admin_tail(); ?>
<!-- DataTables -->
<?php echo admin_js('bower_components/datatables.net/js/jquery.dataTables.min.js', true); ?>
<?php echo admin_js('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js', true); ?>
<!-- SlimScroll -->
<?php echo admin_js('bower_components/jquery-slimscroll/jquery.slimscroll.min.js', true); ?>
<!-- FastClick -->
<?php echo admin_js('bower_components/fastclick/lib/fastclick.js', true); ?>

    <script type="text/javascript">
        $(document).ready(function () {
            
            //$('#example1').DataTable();
            
            $('#user_list').DataTable({
                "bProcessing": true,
                "serverSide": true,
                "ajax": {
                    url: "<?php echo base_url(); ?>admin/user/user_list_response", // json datasource
                    type: "post", // type of method  ,GET/POST/DELETE			
                    error: function () {
                        $("#employee_grid_processing").css("display", "none");
                    },
                    "dataSrc": function (json) {
                        //alert(json.nivas);
                        return json.data;
                    }

                }

            });

        });//end document
    </script>	

<?php include('footer.php'); ?>
