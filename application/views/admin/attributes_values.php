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
            <div class="col-md-4">
                <div class="box-body">
                    <?php echo form_open_multipart($this->config->item('admin_folder') . '/attributes_values/form/'); ?>

                    <div class="box-body">                                   
                        <div class="form-group">

                            <label><b>Attributes</b></label>                            

<input type="hidden" value="<?php echo $attribute_value_id; ?>" name="attribute_value_id">
                            <select  name="attribute_id" class="form-control" id="list">
                                <option >Select Attributes</option>
<?php foreach($attri as $vals){ ?>
                                <option value="<?php echo $vals['attribute_id']; ?>" <?php echo ($vals['attribute_id'] == $attribute_id?'selected':''); ?> ><?php echo $vals['en_attribute_name']; ?> </option>
<?php } ?>
                            </select>                             

                        </div>
 <input name="color2" type="hidden" id="color_value" value="99cc00" >
        <button class="jscolor {valueElement: 'color_value'}" id="color_values" style="display:none;">Pick a color</button>
                        <div class="form-group multi-field-wrapper">
                            <label for="exampleInputEmail1">Attributes Vaues</label> 
                            <div class="multi-fields">
                                <div class="multi-field">
                                    <?php
                                    $data = array('name' => 'attribute_value', 'value' => set_value('attribute_value', $attribute_value),  'class' => 'form-control lang-translatable');
                                    echo form_input($data);
                                    ?>
                                </div>
                            </div>

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
            <div class="col-md-8">

                <div class="box-body">
                    <table id="brand_list" class="table table-bordered table-striped">
                        <thead>
                            <tr>                                
                                <th>Attribute Values</th>
                                <th>Attribute Name</th>
                                <th><span>Action</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($attributes as $val):
                                ?>
                                <tr>                                    
                                    <td><?php echo $val['attribute_value']; ?></td> 
                                    <td><?php echo $val['en_attribute_name']; ?></td>
                                    <td style="width: 20%;">                                                                
                                      <a href="<?php echo base_url($this->config->item('admin_folder') . '/attributes_values/form/' . $val['attribute_value_id']); ?>" class="table-link">
 
                                        <span class="fa-stack">
                                                <i class="fa fa-square fa-stack-2x"></i>
                                                <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                            </span>
                                        </a>
 <a href="<?php echo base_url($this->config->item('admin_folder') . '/attributes_values/delete/' . $val['attribute_value_id']); ?>" str="" class="complexConfirm table-link danger">
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
            </div>

            <!-- /.box-body -->
            <div class="box-footer">

            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.box-header -->

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
<!-- JS Color -->
<?php echo admin_js('bower_components/jscolor.js', true); ?>

<script type="text/javascript">
    $(document).ready(function () {
        $('#brand_list').DataTable();
    });

$('.reserve-button').click(function(){

    var attribute_value_id = $('#attribute_val').val();

   $.ajax({
	type: "POST",
	url: "<?php echo base_url(); ?>admin/attributes_values/form",
	data:{'attribute_value_id':attribute_value_id },
	success: function(data){
		console.log(data);
		$("#attribute_val").html(data);
	}
	});
});

//$('select').on('change', function() {
// var color =  $(this).text();
//alert(color);
//});
$("#list").change(function() { 
//var cvalues = $(this).find("option:selected").text();

if($(this).find("option:selected").text().trim() == 'color') {

            $('#color_values').show(); 
        }else{
    $('#color_values').hide(); 
} 

 });

</script>
<?php include('footer.php'); ?>


