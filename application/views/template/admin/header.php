<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/fontawesome-all.min.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/admin.css"); ?>"> 
    <title>Petalia Furnitures</title>
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="mainHeader">
                <div class="row">
                    <div class="col-sm-12 col-xs-12 col-md-6">
                        <div class="logo">
                            <h1><a href="<?php echo base_url("Admin/index")?>"><?php echo $pageTitle ?></a></h1><h1></h1>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xs-12 col-md-6">
                        <div class="employee-info">
                            <h5>Welcome! <a href="">Elvin Mendoza</a>! [Admin] | <a href="<?php echo base_url("Main/login")?>">Log Out</a></h5>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        
        <!-- For Desktop Users -->
        <nav class="nav-web">
            <div class="text-center">
                <ul class="breadcrumb">
                <li class=""><a href="<?php echo base_url("Admin/index")?>">DASHBOARD</a></li>
                        <li class=""><a href="<?php echo base_url("Sales/sales_statistics")?>">SALES STATISTICS</a></li>
                        <li class=""><a href="<?php echo base_url("Sales/sales_history")?>">SALES HISTORY</a></li>
                        <li class=""><a href="<?php echo base_url("Sales/customers")?>">CUSTOMERS</a></li>
                        <li class=""><a href="<?php echo base_url("Sales/profile")?>">PROFILE</a></li>
                </ul>
            </div>
        </nav>

        <!-- For Mobile Users -->
        <nav class="nav-mobile">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="#">Menu</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class=""><a href="<?php echo base_url("Admin/index")?>">DASHBOARD</a></li>
                        <li class=""><a href="#">SALES STATISTICS</a></li>
                        <li class=""><a href="#">SALES HISTORY</a></li>
                        <li class=""><a href="#">CUSTOMERS</a></li>
                        <li class=""><a href="#">PROFILE</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>
