<!DOCTYPE html>
<html lang="en">
    <head>                        
        <title>Boooya - Login</title>            
        
        <!-- META SECTION -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <!-- END META SECTION -->
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" href="../css/styles.css">
        <!-- EOF CSS INCLUDE -->
    </head>
    <body>        
        
        <!-- APP WRAPPER -->
        <div class="app">

            <!-- START APP CONTAINER -->
            <div class="app-container">
                
                <div class="app-login-box">                                        
                    <div class="app-login-box-user"><img src="../img/user/no-image.png" alt="John Doe"></div>
                    <div class="app-login-box-title">
                        <div class="title">Already a member?</div>
                        <div class="subtitle">Sign in to your account</div>                        
                    </div>
                    <div class="app-login-box-container">
                    
    <?php
    if(!empty($success_msg)){
        echo '<p class="statusMsg">'.$success_msg.'</p>';
    }elseif(!empty($error_msg)){
        echo '<p class="statusMsg">'.$error_msg.'</p>';
    }
    ?>
                        <form action="<?php base_url();?>login" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="login" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">

                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <div class="app-checkbox">
                                            <label><input type="checkbox" name="app-checkbox-1" value="0"> Remember me</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <button name="loginSubmit" class="btn btn-success btn-block" value="Submit">Sign In</button>
                                    </div>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                    <div class="app-login-box-or">
                        <div class="or">OR</div>
                    </div>
                    <div class="app-login-box-container">
                        <button class="btn btn-facebook btn-block">Connect With Facebook</button>
                        <button class="btn btn-twitter btn-block">Connect With Twitter</button>
                    </div>
                    <div class="app-login-box-footer">
                        &copy; Boooya 2016. All rights reserved.

                    </div>
                </div>
                                
            </div>
            <!-- END APP CONTAINER -->
           
        </div>        
        <!-- END APP WRAPPER -->                
        
        <!-- IMPORTANT SCRIPTS -->
        <script type="text/javascript" src="../js/vendor/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="../js/vendor/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="../js/vendor/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/vendor/moment/moment.min.js"></script>
        <script type="text/javascript" src="../js/vendor/customscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <!-- END IMPORTANT SCRIPTS -->
        <!-- APP SCRIPTS -->
        <script type="text/javascript" src="../js/app.js"></script>
        <script type="text/javascript" src="../js/app_plugins.js"></script>
        <script type="text/javascript" src="../js/app_demo.js"></script>
        <!-- END APP SCRIPTS -->
    </body>
</html>