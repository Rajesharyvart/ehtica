<?php
include('header.php');
echo admin_css('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css', true);
?>

<?php include('left_admin.php'); ?>
<div class="content-wrapper" style="min-height: 916px;"> 

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Brand <small>Form</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="#">Attributes Form</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Attributes Form</h3>

                <div class="box-tools pull-right">
                    <button title="" data-toggle="tooltip" data-widget="collapse" class="btn btn-box-tool" type="button" data-original-title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button title="" data-toggle="tooltip" data-widget="remove" class="btn btn-box-tool" type="button" data-original-title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box-body">
                    <?php echo form_open_multipart($this->config->item('admin_folder') . '/attributes/form/'); ?>
                   
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Attributes Name</label>                           
                            <?php
                            $data = array('name' => 'en_attribute_name', 'class' => 'form-control lang-translatable');
                            echo form_input($data);
                            ?>
                            <span class="en_brand error"></span>
                        </div>           
                       
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit"  class="btn btn-primary btn-mini btn-next submit_banner" style="margin-left: 20px;margin-right: 20px;">Save</button>
                        <button type="button" onClick="redirect();"  class="btn btn-primary btn-mini btn-prev">Cancel</button>
                       <!--<button class="btn btn-primary" type="submit">Submit</button>-->
                    </div>
                    </form>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">

            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<?php include('footer.php'); ?>


