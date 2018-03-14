<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css");?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/datatables.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.bootstrap.min.css');?>"> 
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
                            <h1><a href="<?php echo base_url("Purchase/index")?>"><?php echo $pageTitle ?></a></h1><h1></h1>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xs-12 col-md-6">
                        <div class="employee-info">
                            <h5>Welcome! <a href="<?php echo base_url("Purchase/profile")?>">Elvin Mendoza</a>! [Admin] | <a href="<?php echo base_url("Main/login")?>">Log Out</a></h5>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        
        <!-- For Desktop Users -->
        <nav class="nav-web">
            <div class="text-center">
                <ul class="breadcrumb">
                    <li class=""><a href="<?php echo base_url("Purchase/index")?>">DASHBOARD</a></li>
                    <li class=""><a href="<?php echo base_url("Purchase/purchase_order")?>">PURCHASE ORDER</a></li>
                    <li class=""><a href="<?php echo base_url("Purchase/purchase_history")?>">PURCHASE HISTORY</a></li>
                    <li class=""><a href="<?php echo base_url("Purchase/suppliers")?>">SUPPLIERS</a></li>
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
                        <li class=""><a href="<?php echo base_url("Purchase/index")?>">DASHBOARD</a></li>
                        <li class=""><a href="<?php echo base_url("Purchase/purchase_order")?>">PURCHASE ORDER</a></li>
                        <li class=""><a href="<?php echo base_url("Purchase/purchase_history")?>">PURCHASE HISTORY</a></li>
                        <li class=""><a href="<?php echo base_url("Purchase/suppliers")?>">SUPPLIERS</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>
