<?php include('header.php'); ?>

  
<?php echo admin_css('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css', true); ?>
  
<?php include('left_admin.php');?>  
  
  <div class="content-wrapper" style="min-height: 916px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Brand<small>Listing</small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Brand</a></li>
        <li class="active">Listing</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Brand Listing</h3>
<div class="pull-right top-page-ui">
                    <a href="<?php echo base_url($this->config->item('admin_folder').'/brand/form'); ?>" class="btn btn-primary pull-right">
                        <i class="fa fa-plus-circle fa-lg"></i> Add Brand
                    </a>
                </div>
            </div>


            <!-- /.box-header -->
            <div class="box-body">
              <table id="brand_list" class="table table-bordered table-striped">
                <thead>
                        <tr>
                            <th>Brand Name</th>
                                            <th>Brand Slug</th>
                                            <th>Brand Image</th>
                                            <th><span>Action</span></th>
                        </tr>
                </thead>
                <tbody>
                                        <?php foreach ($brand as $val): 
                                            ?>
                                            <tr>
<td><?php echo $val['en_brand']; ?></td>
<td><?php echo $val['en_slug']; ?></td>
                                                <td class="">
                                                    <?php echo product_image($this->brand_model->get_brand_images($val['brand_id'] , 'brand_image'),'','thumb'); ?>

                                                </td>

                                                <td style="width: 20%;">                                                                
                                                    <a href="<?php echo base_url($this->config->item('admin_folder').'/brand/form/' . $val['brand_id']); ?>" class="table-link">
                                                        <span class="fa-stack">
                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                            <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                        </span>
                                                    </a>
                                                    
                                                                                                     
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
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
        $(document).ready(function() {
        $('#brand_list').DataTable();
    } );
    </script>	

<?php include('footer.php'); ?>