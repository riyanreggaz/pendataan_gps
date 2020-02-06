<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Login | AdaHIPPO Admin</title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url('assets') ;?>/css2/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url('assets') ;?>/css2/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets') ;?>/font-awesome/4.5.0/css/font-awesome.min.css" />
    <!-- Waves Effect Css -->
    <link href="<?php echo base_url('assets') ;?>/css2/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url('assets') ;?>/css2/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url('assets') ;?>/css2/css/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
           <img src="<?php echo base_url('assets') ;?>/images/Logo AdaHippo1.png">
       </div>
       <div class="card">
        <div class="body">
            <?php
            if($this->session->flashdata('alert')) {
               echo '<div class="alert alert-warning alert-message">';
               echo $this->session->flashdata('alert');
               echo '</div>';
            }
            if($this->session->flashdata('success')) {
               echo '<div class="alert alert-success alert-message">';
               echo $this->session->flashdata('success');
               echo '</div>';
            }
            ?>
            <form action="" method="post">
               
                <div class="msg">Masuk untuk memulai sesimu</div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="ace-icon fa fa-user"></i>
                    </span>
                    <div class="form-line">
                        <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="ace-icon fa fa-lock"></i>
                    </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-8 p-t-5">
                        <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                        <label for="rememberme">Ingat Saya</label>
                    </div>
                    <div class="col-xs-4">
                        <a href="lupa.html">Lupa Password?</a>
                    </div>
                </div>
                <button class="btn btn-block bg-pink waves-effect "  type="submit" name="submit" value="Submit">LOGIN</button>
                <div class="row m-t-15 m-b--20">
                    <div class="col-xs-6 align-right">

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="footer">
    <div class="footer-inner">
        <div class="footer-content">
            <span class="bigger-120">
                2018 &copy; <span class="red bolder">AdaHIPPO</span> by Project Based Learning
            </span>


        </div>

        <!-- Jquery Core Js -->
        <script src="<?php echo base_url('assets') ;?>/css2/plugins/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core Js -->
        <script src="<?php echo base_url('assets') ;?>/css2/plugins/bootstrap/js/bootstrap.js"></script>

        <!-- Waves Effect Plugin Js -->
        <script src="<?php echo base_url('assets') ;?>/css2//plugins/node-waves/waves.js"></script>

        <!-- Validation Plugin Js -->
        <script src="<?php echo base_url('assets') ;?>/css2/plugins/jquery-validation/jquery.validate.js"></script>

        <!-- Custom Js -->
        <script src="<?php echo base_url('assets') ;?>/css2/js/admin.js"></script>
        <script src="<?php echo base_url('assets') ;?>/css2/js/pages/examples/sign-in.js"></script>
    </body>

    </html>