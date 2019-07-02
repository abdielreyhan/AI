<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>ARTIFICIAL INTELLEGENT</title>
        <!-- Favicon-->
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <!-- Bootstrap Core Css -->
        <link href="<?php echo base_url('asset/home/'); ?>plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Waves Effect Css -->
        <link href="<?php echo base_url('asset/home/'); ?>plugins/node-waves/waves.css" rel="stylesheet" />
        <!-- Animation Css -->
        <link href="<?php echo base_url('asset/home/'); ?>plugins/animate-css/animate.css" rel="stylesheet" />
        <!-- Morris Chart Css-->
        <link href="<?php echo base_url('asset/home/'); ?>plugins/morrisjs/morris.css" rel="stylesheet" />
        <!-- Bootstrap Select Css -->
        <link href="<?php echo base_url('asset/home/'); ?>plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
        <!-- Custom Css -->
        <link href="<?php echo base_url('asset/home/'); ?>css/style.css" rel="stylesheet">
        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="<?php echo base_url('asset/home/'); ?>css/themes/all-themes.css" rel="stylesheet" />
    </head>
    <body class="theme-black">
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        <!-- #END# Overlay For Sidebars -->
        <!-- Top Bar -->
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand" href="<?php echo base_url('/'); ?>">SISTEM PAKAR PEMILIHAN JENIS MOTOR</a>
                </div>
            </div>
        </nav>
        <!-- #Top Bar -->
        <section>
            <!-- Left Sidebar -->
            <aside id="leftsidebar" class="sidebar">
                <!-- User Info -->
                <div class="user-info">
                    <div class="image">
                        <img src="<?php echo base_url('asset/home/'); ?>images/user.png" width="48" height="48" alt="User" />
                    </div>
                    <div class="info-container">
                        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ADMIN</div>
                        <div class="email">admin@superuser.com</div>
                    </div>
                </div>
                <!-- #User Info -->
                <!-- Menu -->
                <div class="menu">
                    <ul class="list">
                        <li class="header">MENU UTAMA</li>
                        <li class="active">
                            <a href="<?php echo base_url('/'); ?>">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- #Menu -->
                <!-- Footer -->
                <div class="legal">
                    <div class="copyright">
                        &copy; <?php echo date('Y'); ?> <a href="javascript:void(0);">ARTIFICIAL INTELLEGENT</a>.
                    </div>
                </div>
                <!-- #Footer -->
            </aside>
            <!-- #END# Left Sidebar -->   
        </section>
        <section class="content">
            <div class="container-fluid">
                <!-- Basic Validation -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>CERTAINTY FACTOR</h2>
                            </div>
                            <div class="body">
                                <form id="form_validation" method="POST">
                                    <div class="form-group form-float">
                                        <label class="form-label">APAKAH ANDA SUKA KOPLING ?</label>
                                        <div class="form-line">
                                            <select class="form-control show-tick" require>
                                                <option value="">-- Please select --</option>
                                                <option value="1">Ya</option>
                                                <option value="0.6">Mungkin Iya</option>
                                                <option value="0.05">Tidak Tahu</option>
                                                <option value="-0.6">Mungkin Tidak</option>
                                                <option value="-1">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <label class="form-label">APAKAH ANDA SUKA BODY BESAR ?</label>
                                        <div class="form-line">
                                            <select class="form-control show-tick" require>
                                                <option value="">-- Please select --</option>
                                                <option value="1">Ya</option>
                                                <option value="0.6">Mungkin Iya</option>
                                                <option value="0.05">Tidak Tahu</option>
                                                <option value="-0.6">Mungkin Tidak</option>
                                                <option value="-1">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <label class="form-label">APAKAH ANDA SUKA BODY KECIL ?</label>
                                        <div class="form-line">
                                            <select class="form-control show-tick" require>
                                                <option value="">-- Please select --</option>
                                                <option value="1">Ya</option>
                                                <option value="0.6">Mungkin Iya</option>
                                                <option value="0.05">Tidak Tahu</option>
                                                <option value="-0.6">Mungkin Tidak</option>
                                                <option value="-1">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <label class="form-label">APAKAH ANDA SUKA PERAWATAN MUDAH ?</label>
                                        <div class="form-line">
                                            <select class="form-control show-tick" require>
                                                <option value="">-- Please select --</option>
                                                <option value="1">Ya</option>
                                                <option value="0.6">Mungkin Iya</option>
                                                <option value="0.05">Tidak Tahu</option>
                                                <option value="-0.6">Mungkin Tidak</option>
                                                <option value="-1">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <label class="form-label">APAKAH ANDA SUKA PERAWATAN MAHAL ?</label>
                                        <div class="form-line">
                                            <select class="form-control show-tick" require>
                                                <option value="">-- Please select --</option>
                                                <option value="1">Ya</option>
                                                <option value="0.6">Mungkin Iya</option>
                                                <option value="0.05">Tidak Tahu</option>
                                                <option value="-0.6">Mungkin Tidak</option>
                                                <option value="-1">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <label class="form-label">APAKAH ANDA BUTUH Cc DIATAS 150Cc ?</label>
                                        <div class="form-line">
                                            <select class="form-control show-tick" require>
                                                <option value="">-- Please select --</option>
                                                <option value="1">Ya</option>
                                                <option value="0.6">Mungkin Iya</option>
                                                <option value="0.05">Tidak Tahu</option>
                                                <option value="-0.6">Mungkin Tidak</option>
                                                <option value="-1">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <label class="form-label">APAKAH ANDA BUTUH Cc DIBAWAH 150Cc ?</label>
                                        <div class="form-line">
                                            <select class="form-control show-tick" require>
                                                <option value="">-- Please select --</option>
                                                <option value="1">Ya</option>
                                                <option value="0.6">Mungkin Iya</option>
                                                <option value="0.05">Tidak Tahu</option>
                                                <option value="-0.6">Mungkin Tidak</option>
                                                <option value="-1">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Basic Validation -->
            </div>
            <!-- Basic Example | Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>CERTAINTY FACTOR</h2>
                        </div>
                        <div class="body">
                            <div id="wizard_vertical">
                                <h2>Question 1</h2>
                                <section>
                                    <div class="form-group form-float">
                                        <label class="form-label">APAKAH ANDA INGIN MOTOR KOPLING ?</label>
                                        <br><br>
                                        <div class="row clearfix">
                                            <div class="col-md-12">
                                                <input type="radio" name="q1"  class="with-gap radio-col-red" value="1"/>
                                                <label>YA</label>
                                                <!-- <input name="group1" type="radio" id="radio_1" checked /> -->
                                            </div>
                                            <div class="col-md-12">
                                                <input type="radio" name="q1"  class="with-gap radio-col-red" value="0.6"/>
                                                <label>MUNGKIN IYA</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="radio" name="q1"  class="with-gap radio-col-red" value="0.05"/>
                                                <label>TIDAK TAHU</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="radio" name="q1"  class="with-gap radio-col-red" value="-0.6"/>
                                                <label>MUNGKIN TIDAK</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="radio" name="q1"  class="with-gap radio-col-red" value="-1"/>
                                                <label>TIDAK</label>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <h2>Question 2</h2>
                                <section>
                                    <div class="form-group form-float">
                                        <label class="form-label">APAKAH ANDA INGIN MOTOR BODY BESAR ?</label>
                                        <br><br>
                                        <div class="row clearfix">
                                            <div class="col-md-12">
                                                <input  type="radio" name="q2y"  class="with-gap radio-col-red" value="1"/>
                                                <label>YA</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input  type="radio" name="q2my"  class="with-gap radio-col-red" value="0.6"/>
                                                <label>MUNGKIN IYA</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input  type="radio" name="q2tt"  class="with-gap radio-col-red" value="0.05"/>
                                                <label>TIDAK TAHU</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input  type="radio" name="q2mt"  class="with-gap radio-col-red" value="-0.6"/>
                                                <label>MUNGKIN TIDAK</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input  type="radio" name="q2t"  class="with-gap radio-col-red" value="-1"/>
                                                <label>TIDAK</label>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <h2>Question 3</h2>
                                <section>
                                    <div class="form-group form-float">
                                        <label class="form-label">APAKAH ANDA INGIN MOTOR BODY KECIL  ?</label>
                                        <br><br>
                                        <div class="row clearfix">
                                            <div class="col-md-12">
                                                <input  type="radio" name="q3y"  class="with-gap radio-col-red" value="1"/>
                                                <label>YA</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input  type="radio" name="q3my"  class="with-gap radio-col-red" value="0.6"/>
                                                <label>MUNGKIN IYA</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input  type="radio" name="q3tt"  class="with-gap radio-col-red" value="0.05"/>
                                                <label>TIDAK TAHU</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input  type="radio" name="q3mt"  class="with-gap radio-col-red" value="-0.6"/>
                                                <label>MUNGKIN TIDAK</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input  type="radio" name="q3t"  class="with-gap radio-col-red" value="-1"/>
                                                <label>TIDAK</label>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <h2>Question 4</h2>
                                <section>
                                    <div class="form-group form-float">
                                        <label class="form-label">APAKAH ANDA INGIN PERAWATAN MURAH ?</label>
                                        <br><br>
                                        <div class="row clearfix">
                                            <div class="col-md-12">
                                                <input  type="radio" name="q4y"  class="with-gap radio-col-red" value="1"/>
                                                <label>YA</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input  type="radio" name="q4my"  class="with-gap radio-col-red" value="0.6"/>
                                                <label>MUNGKIN IYA</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input  type="radio" name="q4tt"  class="with-gap radio-col-red" value="0.05"/>
                                                <label>TIDAK TAHU</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input  type="radio" name="q4mt"  class="with-gap radio-col-red" value="-0.6"/>
                                                <label>MUNGKIN TIDAK</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input  type="radio" name="q4t"  class="with-gap radio-col-red" value="-1"/>
                                                <label>TIDAK</label>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <h2>Question 5</h2>
                                <section>
                                    <div class="form-group form-float">
                                        <label class="form-label">APAKAH ANDA INGIN PERAWATAN MAHAL ?</label>
                                        <br><br>
                                        <div class="row clearfix">
                                            <div class="col-md-12">
                                                <input  type="radio" name="q5y"  class="with-gap radio-col-red" value="1"/>
                                                <label>YA</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input  type="radio" name="q5my"  class="with-gap radio-col-red" value="0.6"/>
                                                <label>MUNGKIN IYA</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input  type="radio" name="q5tt"  class="with-gap radio-col-red" value="0.05"/>
                                                <label>TIDAK TAHU</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input  type="radio" name="q5mt"  class="with-gap radio-col-red" value="-0.6"/>
                                                <label>MUNGKIN TIDAK</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input  type="radio" name="q5t"  class="with-gap radio-col-red" value="-1"/>
                                                <label>TIDAK</label>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <h2>Question 6</h2>
                                <section>
                                    <div class="form-group form-float">
                                        <label class="form-label">APAKAH ANDA INGIN MOTOR DIATAS 150 CC ?</label>
                                        <br><br>
                                        <div class="row clearfix">
                                            <div class="col-md-12">
                                                <input type="radio" name="q6y"  class="with-gap radio-col-red" value="1"/>
                                                <label>YA</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="radio" name="q6my"  class="with-gap radio-col-red" value="0.6"/>
                                                <label>MUNGKIN IYA</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="radio" name="q6tt"  class="with-gap radio-col-red" value="0.05"/>
                                                <label>TIDAK TAHU</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="radio" name="q6mt"  class="with-gap radio-col-red" value="-0.6"/>
                                                <label>MUNGKIN TIDAK</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="radio" name="q6t"  class="with-gap radio-col-red" value="-1"/>
                                                <label>TIDAK</label>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <h2>Question 7</h2>
                                <section>
                                    <div class="form-group form-float">
                                        <label class="form-label">APAKAH ANDA INGIN MOTOR DIBAWAH 150 CC ?</label>
                                        <br><br>
                                        <div class="row clearfix">
                                            <div class="col-md-12">
                                                <input type="radio" name="q7y"  class="with-gap radio-col-red" value="1"/>
                                                <label>YA</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="radio" name="q7my"  class="with-gap radio-col-red" value="0.6"/>
                                                <label>MUNGKIN IYA</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="radio" name="q7tt"  class="with-gap radio-col-red" value="0.05"/>
                                                <label>TIDAK TAHU</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="radio" name="q7mt"  class="with-gap radio-col-red" value="-0.6"/>
                                                <label>MUNGKIN TIDAK</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="radio" name="q7t"  class="with-gap radio-col-red" value="-1"/>
                                                <label>TIDAK</label>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Example | Vertical Layout -->
        </section>
        <!-- Jquery Core Js -->
        <script src="<?php echo base_url('asset/home/'); ?>plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap Core Js -->
        <script src="<?php echo base_url('asset/home/'); ?>plugins/bootstrap/js/bootstrap.js"></script>
        <!-- Select Plugin Js -->
        <script src="<?php echo base_url('asset/home/'); ?>plugins/bootstrap-select/js/bootstrap-select.js"></script>
        <!-- Slimscroll Plugin Js -->
        <script src="<?php echo base_url('asset/home/'); ?>plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
        <!-- Waves Effect Plugin Js -->
        <script src="<?php echo base_url('asset/home/'); ?>plugins/node-waves/waves.js"></script> 	  
        <!-- Select Plugin Js -->
        <script src="<?php echo base_url('asset/home/'); ?>plugins/bootstrap-select/js/bootstrap-select.js"></script>
        <!-- Jquery Validation Plugin Css -->
        <script src="<?php echo base_url('asset/home/'); ?>plugins/jquery-validation/jquery.validate.js"></script>
        <!-- JQuery Steps Plugin Js -->
        <script src="<?php echo base_url('asset/home/'); ?>plugins/jquery-steps/jquery.steps.js"></script>
        <!-- Custom Js -->
        <script src="<?php echo base_url('asset/home/'); ?>js/admin.js"></script>
        <script src="<?php echo base_url('asset/home/'); ?>js/pages/forms/form-wizard.js"></script>
        <!-- Demo Js -->
        <script src="<?php echo base_url('asset/home/'); ?>js/demo.js"></script>
    </body>
</html>