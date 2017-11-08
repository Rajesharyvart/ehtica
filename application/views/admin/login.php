<?php include('header_login.php'); ?>


<!-- /.login-logo -->
<div class="login-box-body">
    <div  id="spnError"></div>
    <p class="login-box-msg">Sign in to start your session</p>

    <form  method="post" id="login-form">
        <div class="form-group has-feedback">
            <?php echo form_input(array('name' => 'email', 'class' => 'form-control', 'placeholder' => 'Email address')); ?>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <?php echo form_password(array('name' => 'password', 'class' => 'form-control', 'placeholder' => 'Password')); ?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox"> Remember Me
                    </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                <input type="hidden" value="submitted" name="submitted"/>	
            </div>
            <!-- /.col -->
        </div>
    </form>


    <!-- /.social-auth-links -->

    <!--    <a href="#">I forgot my password</a><br>
        <a href="register.html" class="text-center">Register a new membership</a>-->

</div>
<!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->



<?php echo admin_js('bower_components/jquery/dist/jquery.min.js', true); ?>
<?php echo admin_js('bower_components/bootstrap/dist/js/bootstrap.min.js', true); ?>
<?php echo admin_js('plugins/iCheck/icheck.min.js', true); ?>

<?php echo admin_js('bower_components/jquery.validate-rules.js', true); ?>
<?php echo admin_js('bower_components/jquery.validate.js', true); ?>

<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>




<script type='text/javascript'>
    /* attach a submit handler to the form */
    $("#login-form").submit(function (event)

    {

        /* stop form from submitting normally */
        event.preventDefault();

        if ($("#login-form").valid())
        {
            $('#spnError').html('Checking...');
            $.ajax({
                type: "POST",
                url: baseurl + "admin/login/ajax_login/true",
                dataType: "json",
                data: $('#login-form').serialize(),
                success: function (json) {

                    if (json.result == 0) {

                        $('#spnError').html('Invalid Login!');
                        $('#spnError').addClass('alert alert-danger');


                        //$('#spnError').show();
                        return false;
                    } else if (json.result == 1) {
                        $('#spnError').addClass('alert alert-success');

                        $('#spnError').html('Success...Transferring');
                        window.location = baseurl + json.redirect;
                    }
                }
            });
        }

    });
</script>
</body>
</html>