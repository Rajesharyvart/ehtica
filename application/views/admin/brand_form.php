<?php
include('header.php');
$single_img = array();
//echo "<pre>"; print_r($brand_image); exit;
foreach ($brand_image as $img) {
    if ($img['referal_value'] == 'brand_image') {
        $single_img = $img;
    }
}
$lang = '';
?>
<?php echo admin_css('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css', true); ?>

<?php include('left_admin.php'); ?>
<div class="content-wrapper" style="min-height: 916px;"> 

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Brand <small>Form</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="#">Brand Form</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Brand Form</h3>

                <div class="box-tools pull-right">
                    <button title="" data-toggle="tooltip" data-widget="collapse" class="btn btn-box-tool" type="button" data-original-title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button title="" data-toggle="tooltip" data-widget="remove" class="btn btn-box-tool" type="button" data-original-title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box-body">
                    <?php echo form_open_multipart($this->config->item('admin_folder') . '/brand/form/' . $brand_id, ' id="product_tag_form"'); ?>
                    <div class="row">
                        <div class="languae-projector">
                            <ul class="list-inline">
                                <li lang="en" class="lang-switch active"><a href="javascript:void(0)" type="button" class="btn btn-default"><img src="assets/image/gb.jpg" /> <span> English </span></a>                                        </li>
                                <li lang="fr" class="lang-switch"><a href="javascript:void(0)" type="button" class="btn btn-default dutch" ><img src="assets/image/fr.jpg" /> <span> French </span></a></li>
                                <li lang="de" class="lang-switch"><a href="javascript:void(0)" type="button" class="btn btn-default dutch"><img src="assets/image/de.jpg" /> <span> Dutsch </span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Brand Name</label>
                            <input name="language-fields[_brand][en]" type="hidden" class="hidden" value="<?php echo $en_brand; ?>">
                            <input name="language-fields[_brand][fr]" type="hidden" class="hidden" value="<?php echo $fr_brand; ?>">
                            <input name="language-fields[_brand][de]" type="hidden" class="hidden" value="<?php echo $de_brand; ?>">
                            <?php
                            $data = array('name' => '_brand', 'value' => set_value('_brand', $_brand), 'class' => 'form-control lang-translatable', 'lan_attr' => 'en');
                            echo form_input($data);
                            ?>
                            <span class="en_brand error"></span>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Brand Slug</label>
                           <input name="language-fields[_slug][en]" type="hidden" class="hidden" value="<?php echo $en_slug; ?>">
                            <input name="language-fields[_slug][fr]" type="hidden" class="hidden" value="<?php echo $fr_slug; ?>">
                            <input name="language-fields[_slug][de]" type="hidden" class="hidden" value="<?php echo $de_slug; ?>">
                            <?php
                            $data = array('name' => '_slug', 'value' => set_value('_slug', $_slug), 'class' => 'form-control lang-translatable' ,'lan_attr'=>'en');
                            echo form_input($data);
                            ?>
                        </div>
                        <div class="form-group">
                            <div style="position:relative; bottom:3px;">
                                  <a class='btn btn-primary' href='javascript:;'>
                                      Select From Your Computer
                                      <input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="single_image_local" id="single_image_local" size="40" <?php if(empty($single_img)) { /*echo 'required';*/ } ?> >
                                  </a>
                                  &nbsp;
                                  <span class='label label-info' id="upload-file-info"></span>
                              </div>
                              <div class="home-banner">
                                  <?php echo brand_images($single_img, array('id' => 'myimage', 'height' => '100', 'height' => '100')); ?>
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

