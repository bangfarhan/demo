<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Client BATS Consulting</title>
    <link rel="icon" href="<?php echo base_url(); ?>assets/image/logo/icon.png" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.css">
    <style>
        body {
            background-image: url('<?=base_url();?>/assets/image/background/bg1.jpg');
            background-size: cover;
        }
    </style>
</head>



<?php
if (!empty($err)) {
    ?>
<script src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.1.js" type="text/javascript"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#modal-updateOrder').modal('show');
    });
</script>
<?php
}
?>

<body class="hold-transition login-page col-6">
    <div class="login-box">
        <div class="text-center d-flex">
            <img src="<?=base_url()?>/assets/image/logo/bats200px.png" style="width: 50%;" class="pr-2 pt-3 pb-3 pl-0" alt="">
            <img src="<?=base_url()?>/assets/image/logo/ahr200px.png" style="width: 50%;" alt="">
        </div>
        <div class="card card-outline card-danger">
            <div class="card-header text-center">
                <a href="../../index2.html" class="h2"><b>BATS</b><br> INTEGRATION SYSTEM</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form   onsubmit="return validateForm()" id="form1">
                    <div class="input-group mb-3">
                        <input type="email" id="email" class="form-control" name="email" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" id="pass" name="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-danger btn-block">Sign In</button>
                        </div>
                    </div>
                </form>

                <div class="social-auth-links text-center mt-2 mb-3">
                    <a href="https://api.whatsapp.com/send?phone=6285777885964&text=Assalaamu'alaikum, ..." class="btn btn-block btn-success">
                        <i class="fab fa-whatsapp mr-2"></i> contact us
                    </a>
                </div>
                <p class="mb-1">
                    <a href="https://api.whatsapp.com/send?phone=6285777885964&text=Assalaamu'alaikum, ...">I forgot my password</a>
                </p>
            </div>
        </div>
        <h5 class="text-center mt-5"><b>WWW.BATS-CONSULTING.COM</b></h5>
        <p class="text-center">A member of BATS International Group | Independent Accounting & Tax Firm</p>
        <p class="text-center">©2022 - BATS Consulting</p>
    </div>
    <div class="modal fade" id="modal-updateOrder">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-danger">Warning!</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>email and password don't match!</p>
                </div>
                <div class="modal-footer justify-content-end">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
    <?php 
    $str = site_url('Login/proses_login');
    ?> <script>
        document.getElementById("email").focus();

        function validateForm() {
            var email = document.getElementById("email").value;
            var pass = document.getElementById("pass").value;
            var str = "<?= $str; ?>";
            if (email == "") {
                toastr.error('Email and Password cannot be empty!');
                return false;
            }
            if (pass == "") {
                toastr.error('Password cannot be empty!');
                return false;
            } else {
                document.getElementById('form1').setAttribute('method', "post");
                document.getElementById('form1').setAttribute('action', str);
            }
        }
    </script>
</body>

</html>