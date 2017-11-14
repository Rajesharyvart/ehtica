<?php
include('header.php');

$single_img = array();
//int_r($category_image); exit;
foreach ($category_image as $img) {
    if ($img['referal_value'] == 'category_image') {
        $single_img = $img;
    }
}
?>
<?php echo admin_css('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css', true); ?>

<?php include('left_admin.php'); ?>
<div class="content-wrapper" style="min-height: 916px;"> 

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Product <small>Category Form</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="#">Add New Product Category</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Product Category Form</h3>

                <div class="box-tools pull-right">
                    <button title="" data-toggle="tooltip" data-widget="collapse" class="btn btn-box-tool" type="button" data-original-title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button title="" data-toggle="tooltip" data-widget="remove" class="btn btn-box-tool" type="button" data-original-title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box-body">
                    <?php echo form_open_multipart($this->config->item('admin_folder') . '/Product_category/form/' . $category_id, ' id="product_category_form"'); ?>
                    <div class="box-body">
                        <div class="form-group">
                            <label><b>Product Category Name</b></label>
                            <?php
                            $data = array('name' => 'en_cat', 'value' => set_value('en_cat', $en_cat), 'class' => 'form-control');
                            echo form_input($data);
                            ?>
                        </div>
                        <div class="form-group">
                            <label><b>Product Category Slug</b></label>
                            <?php
                            $data = array('name' => 'en_slug', 'value' => set_value('en_slug', $en_slug), 'class' => 'form-control');
                            echo form_input($data);
                            ?>
                        </div>
                        <div class="form-group">
                            
                                <label><b>Parent</b></label>                            

                                <select  name="parent_id" class="form-control">
                                    <option >Select parent</option>
                                    <?php foreach ($cat as $cl) { ?>
                                        <option value="<?php echo $cl['category_id'] ?>" <?php
                                                if ($cl['category_id'] == $parent_id) {
                                                    echo 'selected';
                                                }
                                                ?> ><?php echo $cl['en_cat']; ?></option>
                                <?php } ?>
                                </select>
                                <?php
                                //echo form_dropdown('parent_id', $category, array($parent_id), 'class="form-control categoryselect"');
                                ?>
                         
                        </div>
                        <div class="form-group">
                         
                                <div style="position:relative;    margin-top: 20px;     margin-bottom: 10px;">
                                    <a class='btn btn-primary' href='javascript:;'>
                                        Upload image
                                        <input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="single_image_local" id="single_image_local" size="40" <?php if (empty($single_img)) {
                                    echo 'required';
                                } ?> >
                                    </a>
                                    &nbsp;
                                    <span class='label label-info' id="upload-file-info"></span>
                                </div>
                                <div class="home-banner">
                                    <?php echo category_images($single_img, array('id' => 'myimage', 'height' => '100', 'height' => '100')); ?>
                                
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
<?php echo admin_js('bower_components/jquery.min.1.11.js', true); ?>  
<?php echo admin_js('bower_components/jquery.validate.js', true); ?>  


<script>
    var baseurl = "<?php print base_url(); ?>";
    function redirect()
    {
        window.location = baseurl + '<?php echo $this->config->item('admin_folder'); ?>/product_tag'
    }
    function Single_image_perview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#myimage').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    function check_valid_image(input) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function (e) {
            var image = new Image();

            image.src = e.target.result;
            image.onload = function () {
                var height = this.height;
                var width = this.width;
                console.log(height);
                console.log(width);
                if (width < 50 || height < 50) {

                    document.getElementById("single_image_local").value = "";
                    return false;
                } else {

                    Single_image_perview(input);
                    return true;
                }

            }
        };
    }



    $(document).ready(function () {

        $("#single_image_local").change(function () {
            var res = check_valid_image(this);
        });//end single_image_local

        //click on language switch
        $('.lang-switch').on('click', function () {
            $('.lang-switch').removeClass('active');
            $(this).addClass('active');

            var current_lan = $(this).attr('lang');

            $(".lang-translatable").each(function (index) {
                var att_name = $(this).attr('name');
                $(this).val($('input[name="language-fields[' + att_name + '][' + current_lan + ']"]').val());
                $(this).attr('lan_attr', current_lan);
            });//end lang-translatable
        });//end

        $('.lang-translatable').on('blur', function () {
            var current_lan = $(this).attr('lan_attr');
            var att_name = $(this).attr('name');
            var current_val = $(this).val();
            $('input[name="language-fields[' + att_name + '][' + current_lan + ']"]').val(current_val);
        });//end

        $('.submit_banner').on('click', function () {
            var _brand = $('input[name="language-fields[_brand][en]"]').val();
            var flag = true;
            $('.error').text('');

            if (_brand == '') {
                $('.en_brand').text('Please enter the brand name');
                flag = false;
                $('.lang-switch:nth-child(1)').trigger('click');
            }

            return flag

        });//end


    });//document
</script> 

