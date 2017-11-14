<?php include('header.php'); ?>

  
<?php echo admin_css('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css', true); ?>
  
<?php include('left_admin.php');?>  
  
  <div class="content-wrapper" style="min-height: 916px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Product 
        <small>Category</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Product category</a></li>
        <li class="active">Listing</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Product Category Listing</h3>
<div class="pull-right top-page-ui">
                    <a href="<?php echo base_url($this->config->item('admin_folder').'/product_category/form'); ?>" class="btn btn-primary pull-right">
                        <i class="fa fa-plus-circle fa-lg"></i> Add Product Category
                    </a>
                </div>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="category_list" class="table table-bordered table-striped">
                <thead>
                        <tr>
                           <th><span>Category Name</span></th>                                            
                                                <th><span>Category Slug</span></th>  
                                                <th><span>Category Image</span></th>  
                                                <th class="no-sort">Action</th>
                        </tr>
                </thead>
               <tbody>
                                            <?php foreach ($product_category as $val):
                                                ?>
                                                <tr>
                                                    <td class="abc">
                                                        <?php echo $val['en_cat']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $val['en_slug']; ?>
                                                    </td> 
                                                    <td class="">
                                                        <?php echo product_image($this->category_model->get_category_images($val['category_id'], 'category_image'), '', 'thumb'); ?>

                                                    </td>

                                                    <td style="width: 20%;">                                                                
                                                        <a href="<?php echo base_url($this->config->item('admin_folder') . '/product_category/form/' . $val['category_id']); ?>" class="table-link">
                                                            <span class="fa-stack">
                                                                <i class="fa fa-square fa-stack-2x"></i>
                                                                <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                            </span>
                                                        </a>
                                                        <!--<button class="btn btn-primary" id="complexConfirm">Click me</button>-->
                                                        <a href="<?php echo base_url($this->config->item('admin_folder') . '/product_category/delete/' . $val['category_id']); ?>" str="" class="complexConfirm table-link danger">
                                                            <span class="fa-stack">
                                                                <i class="fa fa-square fa-stack-2x"></i>
                                                                <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
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
        $('#category_list').DataTable();
    } );
    </script>	

<?php include('footer.php'); ?>