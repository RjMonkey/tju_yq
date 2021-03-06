<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>控制台</title>


    <!--STYLESHEET-->
    <!--=================================================--> 

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="/yq/Public/statics/css/bootstrap.min.css" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="/yq/Public/statics/css/nifty.min.css" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="/yq/Public/statics/css/demo/nifty-demo-icons.min.css" rel="stylesheet">


    <!--Demo [ DEMONSTRATION ]-->
    <link href="/yq/Public/statics/css/demo/nifty-demo.min.css" rel="stylesheet">

    <link href="/yq/Public/statics/plugins/ionicons/css/ionicons.min.css" rel="stylesheet">

        
    <!--Morris.js [ OPTIONAL ]-->
    <link href="/yq/Public/statics/plugins/morris-js/morris.min.css" rel="stylesheet">


    <!--Magic Checkbox [ OPTIONAL ]-->
    <link href="/yq/Public/statics/plugins/magic-check/css/magic-check.min.css" rel="stylesheet">

    <link href="/yq/Public/statics/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">





    
    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="/yq/Public/statics/plugins/pace/pace.min.css" rel="stylesheet">
    <script src="/yq/Public/statics/plugins/pace/pace.min.js"></script>


    <!--jQuery [ REQUIRED ]-->
    <script src="/yq/Public/statics/js/jquery-2.2.4.min.js"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="/yq/Public/statics/js/bootstrap.min.js"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="/yq/Public/statics/js/nifty.min.js"></script>






    <!--=================================================-->
    
    <!--Demo script [ DEMONSTRATION ]-->
    <script src="/yq/Public/statics/js/demo/nifty-demo.min.js"></script>

    
    <!--Morris.js [ OPTIONAL ]-->
    <script src="/yq/Public/statics/plugins/morris-js/morris.min.js"></script>
    <script src="/yq/Public/statics/plugins/morris-js/raphael-js/raphael.min.js"></script>


    <!--Sparkline [ OPTIONAL ]-->
    <script src="/yq/Public/statics/plugins/sparkline/jquery.sparkline.min.js"></script>


    <!--Specify page [ SAMPLE ]-->
    <script src="/yq/Public/statics/js/demo/dashboard.js"></script>




    
    <!--=================================================

    REQUIRED
    You must include this in your project.


    RECOMMENDED
    This category must be included but you may modify which plugins or components which should be included in your project.


    OPTIONAL
    Optional plugins. You may choose whether to include it in your project or not.


    DEMONSTRATION
    This is to be removed, used for demonstration purposes only. This category must not be included in your project.


    SAMPLE
    Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


    Detailed information and more samples can be found in the document.

    =================================================-->
        

</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<body>
    <div id="container" class="effect aside-float aside-bright mainnav-lg">
        
        <!--NAVBAR-->
        <!--===================================================-->
        <header id="navbar">
            <div id="navbar-container" class="boxed">

                <!--Brand logo & name-->
                <!--================================-->
                <div class="navbar-header">
                    <a href="<?php echo U('Admin/Index/index');?>" class="navbar-brand">
                        <img src="/yq/Public/statics/img/logo.png" alt="Nifty Logo" class="brand-icon">
                        <div class="brand-title">
                            <span class="brand-text">吴伟伟</span>
                        </div>
                    </a>
                </div>
                <!--================================-->
                <!--End brand logo & name-->


                <!--Navbar Dropdown-->
                <!--================================-->
                <div class="navbar-content clearfix">
                    <ul class="nav navbar-top-links pull-left">

                        <!--Navigation toogle button-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="tgl-menu-btn">
                            <a class="mainnav-toggle" href="#">
                                <i class="demo-pli-view-list"></i>
                            </a>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End Navigation toogle button-->



                        <!--Notification dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                <i class="demo-pli-bell"></i>
                                <span class="badge badge-header badge-danger"></span>
                            </a>

                            <!--Notification dropdown menu-->
                            <div class="dropdown-menu dropdown-menu-md">
                                <div class="pad-all bord-btm">
                                    <p class="text-semibold text-main mar-no">You have 9 notifications.</p>
                                </div>
                                <div class="nano scrollable">
                                    <div class="nano-content">
                                        <ul class="head-list">

                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#">
                                                    <div class="clearfix">
                                                        <p class="pull-left">Database Repair</p>
                                                        <p class="pull-right">70%</p>
                                                    </div>
                                                    <div class="progress progress-sm">
                                                        <div style="width: 70%;" class="progress-bar">
                                                            <span class="sr-only">70% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#">
                                                    <div class="clearfix">
                                                        <p class="pull-left">Upgrade Progress</p>
                                                        <p class="pull-right">10%</p>
                                                    </div>
                                                    <div class="progress progress-sm">
                                                        <div style="width: 10%;" class="progress-bar progress-bar-warning">
                                                            <span class="sr-only">10% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Dropdown list-->
                                            <li>
                                                <a class="media" href="#">
                                            <span class="badge badge-success pull-right">90%</span>
                                                    <div class="media-left">
                                                        <i class="demo-pli-data-settings icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">HDD is full</div>
                                                        <small class="text-muted">50 minutes ago</small>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Dropdown list-->
                                            <li>
                                                <a class="media" href="#">
                                                    <div class="media-left">
                                                        <i class="demo-pli-file-edit icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">Write a news article</div>
                                                        <small class="text-muted">Last Update 8 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Dropdown list-->
                                            <li>
                                                <a class="media" href="#">
                                            <span class="label label-danger pull-right">New</span>
                                                    <div class="media-left">
                                                        <i class="demo-pli-speech-bubble-7 icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">Comment Sorting</div>
                                                        <small class="text-muted">Last Update 8 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Dropdown list-->
                                            <li>
                                                <a class="media" href="#">
                                                    <div class="media-left">
                                                        <i class="demo-pli-add-user-plus-star icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">New User Registered</div>
                                                        <small class="text-muted">4 minutes ago</small>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Dropdown list-->
                                            <li class="bg-gray">
                                                <a class="media" href="#">
                                                    <div class="media-left">
                                                        <img class="img-circle img-sm" alt="Profile Picture" src="/yq/Public/statics/img/profile-photos/9.png">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">Lucy sent you a message</div>
                                                        <small class="text-muted">30 minutes ago</small>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Dropdown list-->
                                            <li class="bg-gray">
                                                <a class="media" href="#">
                                                    <div class="media-left">
                                                        <img class="img-circle img-sm" alt="Profile Picture" src="/yq/Public/statics/img/profile-photos/3.png">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">Jackson sent you a message</div>
                                                        <small class="text-muted">40 minutes ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!--Dropdown footer-->
                                <div class="pad-all bord-top">
                                    <a href="#" class="btn-link text-dark box-block">
                                        <i class="fa fa-angle-right fa-lg pull-right"></i>Show All Notifications
                                    </a>
                                </div>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End notifications dropdown-->



                        <!--Mega dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="mega-dropdown">
                            <a href="#" class="mega-dropdown-toggle">
                                <i class="demo-pli-layout-grid"></i>
                            </a>
                            <div class="dropdown-menu mega-dropdown-menu">
                                <div class="row">
                                    <div class="col-sm-4 col-md-3">

                                        <!--Mega menu list-->
                                        <ul class="list-unstyled">
                                            <li class="dropdown-header"><i class="demo-pli-file icon-fw"></i> Pages</li>
                                            <li><a href="#">Profile</a></li>
                                            <li><a href="#">Search Result</a></li>
                                            <li><a href="#">FAQ</a></li>
                                            <li><a href="#">Sreen Lock</a></li>
                                            <li><a href="#" class="disabled">Disabled</a></li>                                        </ul>

                                    </div>
                                    <div class="col-sm-4 col-md-3">

                                        <!--Mega menu list-->
                                        <ul class="list-unstyled">
                                            <li class="dropdown-header"><i class="demo-pli-mail icon-fw"></i> Mailbox</li>
                                            <li><a href="#"><span class="pull-right label label-danger">Hot</span>Indox</a></li>
                                            <li><a href="#">Read Message</a></li>
                                            <li><a href="#">Compose</a></li>
                                        </ul>
                                        <p class="pad-top mar-top bord-top text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                    </div>
                                    <div class="col-sm-4 col-md-3">
                                        <!--Mega menu list-->
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="#" class="media mar-btm">
                                                    <span class="badge badge-success pull-right">90%</span>
                                                    <div class="media-left">
                                                        <i class="demo-pli-data-settings icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text-semibold text-dark mar-no">Data Backup</p>
                                                        <small class="text-muted">This is the item description</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="media mar-btm">
                                                    <div class="media-left">
                                                        <i class="demo-pli-support icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text-semibold text-dark mar-no">Support</p>
                                                        <small class="text-muted">This is the item description</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="media mar-btm">
                                                    <div class="media-left">
                                                        <i class="demo-pli-computer-secure icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text-semibold text-dark mar-no">Security</p>
                                                        <small class="text-muted">This is the item description</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="media mar-btm">
                                                    <div class="media-left">
                                                        <i class="demo-pli-map-2 icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text-semibold text-dark mar-no">Location</p>
                                                        <small class="text-muted">This is the item description</small>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <p class="dropdown-header"><i class="demo-pli-file-jpg icon-fw"></i> Gallery</p>
                                        <ul class="list-unstyled list-inline text-justify">

                                            <li class="pad-btm">
                                                <img src="/yq/Public/statics/img/thumbs/mega-menu-2.jpg" alt="thumbs">
                                            </li>
                                            <li class="pad-btm">
                                                <img src="/yq/Public/statics/img/thumbs/mega-menu-3.jpg" alt="thumbs">
                                            </li>
                                            <li class="pad-btm">
                                                <img src="/yq/Public/statics/img/thumbs/mega-menu-1.jpg" alt="thumbs">
                                            </li>
                                            <li class="pad-btm">
                                                <img src="/yq/Public/statics/img/thumbs/mega-menu-4.jpg" alt="thumbs">
                                            </li>
                                            <li class="pad-btm">
                                                <img src="/yq/Public/statics/img/thumbs/mega-menu-5.jpg" alt="thumbs">
                                            </li>
                                            <li class="pad-btm">
                                                <img src="/yq/Public/statics/img/thumbs/mega-menu-6.jpg" alt="thumbs">
                                            </li>
                                        </ul>
                                        <a href="#" class="btn btn-sm btn-block btn-default">Browse Gallery</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End mega dropdown-->

                    </ul>
                    <ul class="nav navbar-top-links pull-right">

                        <!--Language selector-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="dropdown">
                            <a id="demo-lang-switch" class="lang-selector dropdown-toggle" href="#" data-toggle="dropdown">
                                <span class="lang-selected">
                                    <img class="lang-flag" src="/yq/Public/statics/img/flags/united-kingdom.png" alt="English">
                                </span>
                            </a>

                            <!--Language selector menu-->
                            <ul class="head-list dropdown-menu">
                                <li>
                                    <!--English-->
                                    <a href="#" class="active">
                                        <img class="lang-flag" src="/yq/Public/statics/img/flags/united-kingdom.png" alt="English">
                                        <span class="lang-id">EN</span>
                                        <span class="lang-name">English</span>
                                    </a>
                                </li>
                                <li>
                                    <!--France-->
                                    <a href="#">
                                        <img class="lang-flag" src="/yq/Public/statics/img/flags/france.png" alt="France">
                                        <span class="lang-id">FR</span>
                                        <span class="lang-name">Fran&ccedil;ais</span>
                                    </a>
                                </li>
                                <li>
                                    <!--Germany-->
                                    <a href="#">
                                        <img class="lang-flag" src="/yq/Public/statics/img/flags/germany.png" alt="Germany">
                                        <span class="lang-id">DE</span>
                                        <span class="lang-name">Deutsch</span>
                                    </a>
                                </li>
                                <li>
                                    <!--Italy-->
                                    <a href="#">
                                        <img class="lang-flag" src="/yq/Public/statics/img/flags/italy.png" alt="Italy">
                                        <span class="lang-id">IT</span>
                                        <span class="lang-name">Italiano</span>
                                    </a>
                                </li>
                                <li>
                                    <!--Spain-->
                                    <a href="#">
                                        <img class="lang-flag" src="/yq/Public/statics/img/flags/spain.png" alt="Spain">
                                        <span class="lang-id">ES</span>
                                        <span class="lang-name">Espa&ntilde;ol</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End language selector-->



                        <!--User dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li id="dropdown-user" class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                <span class="pull-right">
                                    <!--<img class="img-circle img-user media-object" src="images/profile-photos/1.png" alt="Profile Picture">-->
                                    <i class="demo-pli-male ic-user"></i>
                                </span>
                                <div class="username hidden-xs"><h4 class="text-main"><p class="text-pink"><?php echo ($_SESSION['user']['username']); ?></p></h4></div>
                            </a>


                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right panel-default">

                                <!-- Dropdown heading  -->
                                <div class="pad-all bord-btm">
                                    <p class="text-main mar-btm"><span class="text-bold">750GB</span> of 1,000GB Used</p>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar" style="width: 70%;">
                                            <span class="sr-only">70%</span>
                                        </div>
                                    </div>
                                </div>


                                <!-- User dropdown menu -->
                                <ul class="head-list">
                                    <li>
                                        <a href="#">
                                            <i class="demo-pli-male icon-lg icon-fw"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="badge badge-danger pull-right">9</span>
                                            <i class="demo-pli-mail icon-lg icon-fw"></i> Messages
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label label-success pull-right">New</span>
                                            <i class="demo-pli-gear icon-lg icon-fw"></i> Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="demo-pli-information icon-lg icon-fw"></i> Help
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="demo-pli-computer-secure icon-lg icon-fw"></i> Lock screen
                                        </a>
                                    </li>
                                </ul>

                                <!-- Dropdown footer -->
                                <div class="pad-all text-right">
                                    <a href="<?php echo U('Admin/Index/logout');?>" class="btn btn-primary">
                                        <i class="demo-pli-unlock"></i> Logout
                                    </a>
                                </div>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End user dropdown-->
                    </ul>
                </div>
                <!--================================-->
                <!--End Navbar Dropdown-->

            </div>
        </header>
        <!--===================================================-->
        <!--END NAVBAR-->

        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
                
                <!--Page Title-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!-- <div id="page-title">
                    <h1 class="page-header text-overflow">Dashboard</h1>

                    <div class="searchbox">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..">
                            <span class="input-group-btn">
                                <button class="text-muted" type="button"><i class="demo-pli-magnifi-glass"></i></button>
                            </span>
                        </div>
                    </div>
                </div> -->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End page title-->

                <!-- <div class="layui-body">
                    <div class="layui-tab layui-tab-brief">
                        <ul class="layui-tab-title">
                            <li class="layui-this">网站概览</li>
                        </ul>
                        <div class="layui-tab-content">
                            <div class="layui-tab-item layui-show">
                                <table class="layui-table">
                                    <tr>
                                        <td style="width: 400px;">网站域名</td>
                                        <td><?php echo ($config["url"]); ?></td>
                                    </tr>
                                    <tr>
                                        <td>网站目录</td>
                                        <td><?php echo ($config["document_root"]); ?></td>
                                    </tr>
                                    <tr>
                                        <td>服务器操作系统</td>
                                        <td><?php echo ($config["server_os"]); ?></td>
                                    </tr>
                                    <tr>
                                        <td>服务器端口</td>
                                        <td><?php echo ($config["server_port"]); ?></td>
                                    </tr>
                                    <tr>
                                        <td>服务器环境</td>
                                        <td><?php echo ($config["server_soft"]); ?></td>
                                    </tr>
                                    <tr>
                                        <td>PHP版本</td>
                                        <td><?php echo ($config["php_version"]); ?></td>
                                    </tr>
                                    <tr>
                                        <td>MySQL版本</td>
                                        <td><?php echo ($config["mysql_version"]); ?></td>
                                    </tr>
                                    <tr>
                                        <td>最大上传限制</td>
                                        <td><?php echo ($config["max_upload_size"]); ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="col-sm-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">服务器配置</h3>
                        </div>
            
                        <!-- Striped Table -->
                        <!--===================================================-->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>网站域名</td>
                                            <td><?php echo ($_SERVER['HTTP_HOST']); ?></td>
                                        </tr>
                                        <tr>
                                            <td>网站目录</td>
                                            <td><?php echo ($_SERVER['DOCUMENT_ROOT']); ?></td>
                                        </tr>
                                        <tr>
                                            <td>服务器端口</td>
                                            <td><?php echo ($_SERVER['SERVER_PORT']); ?></td>
                                        </tr>
                                        <tr>
                                            <td>服务器环境</td>
                                            <td><?php echo ($_SERVER['SERVER_SOFTWARE']); ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--===================================================-->
                        <!-- End Striped Table -->
            
                    </div>
                </div>

                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Order Status</h3>
                                </div>
                    
                                <!--Data Table-->
                                <!--===================================================-->
                                <div class="panel-body">
                                    <div class="pad-btm form-inline">
                                        <div class="row">
                                            <div class="col-sm-6 table-toolbar-left">
                                                <button class="btn btn-purple"><i class="demo-pli-add icon-fw"></i>Add</button>
                                                <button class="btn btn-default"><i class="demo-pli-printer"></i></button>
                                                <div class="btn-group">
                                                    <button class="btn btn-default"><i class="demo-pli-information"></i></button>
                                                    <button class="btn btn-default"><i class="demo-pli-recycling"></i></button>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 table-toolbar-right">
                                                <div class="form-group">
                                                    <input type="text" autocomplete="off" class="form-control" placeholder="Search" id="demo-input-search2">
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn btn-default"><i class="demo-pli-download-from-cloud"></i></button>
                                                    <div class="btn-group">
                                                        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                            <i class="demo-pli-gear"></i>
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                            <li><a href="#">Action</a></li>
                                                            <li><a href="#">Another action</a></li>
                                                            <li><a href="#">Something else here</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Invoice</th>
                                                    <th>User</th>
                                                    <th>Order date</th>
                                                    <th>Amount</th>
                                                    <th class="text-center">Status</th>
                                                    <th class="text-center">Tracking Number</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="#" class="btn-link"> <?php echo ($_SERVER['HTTP_HOST']); ?></a></td>
                                                    <td>Steve N. Horton</td>
                                                    <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 22, 2014</span></td>
                                                    <td>$45.00</td>
                                                    <td class="text-center">
                                                        <div class="label label-table label-success">Paid</div>
                                                    </td>
                                                    <td class="text-center">-</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn-link"> Order #53432</a></td>
                                                    <td>Charles S Boyle</td>
                                                    <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 24, 2014</span></td>
                                                    <td>$245.30</td>
                                                    <td class="text-center">
                                                        <div class="label label-table label-info">Shipped</div>
                                                    </td>
                                                    <td class="text-center"><i class="fa fa-plane"></i> CGX0089734531</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn-link"> Order #53433</a></td>
                                                    <td>Lucy Doe</td>
                                                    <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 24, 2014</span></td>
                                                    <td>$38.00</td>
                                                    <td class="text-center">
                                                        <div class="label label-table label-info">Shipped</div>
                                                    </td>
                                                    <td class="text-center"><i class="fa fa-plane"></i> CGX0089934571</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn-link"> Order #53434</a></td>
                                                    <td>Teresa L. Doe</td>
                                                    <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 15, 2014</span></td>
                                                    <td>$77.99</td>
                                                    <td class="text-center">
                                                        <div class="label label-table label-info">Shipped</div>
                                                    </td>
                                                    <td class="text-center"><i class="fa fa-plane"></i> CGX0089734574</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn-link"> Order #53435</a></td>
                                                    <td>Teresa L. Doe</td>
                                                    <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 12, 2014</span></td>
                                                    <td>$18.00</td>
                                                    <td class="text-center">
                                                        <div class="label label-table label-success">Paid</div>
                                                    </td>
                                                    <td class="text-center">-</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn-link">Order #53437</a></td>
                                                    <td>Charles S Boyle</td>
                                                    <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 17, 2014</span></td>
                                                    <td>$658.00</td>
                                                    <td class="text-center">
                                                        <div class="label label-table label-danger">Refunded</div>
                                                    </td>
                                                    <td class="text-center">-</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn-link">Order #536584</a></td>
                                                    <td>Scott S. Calabrese</td>
                                                    <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 19, 2014</span></td>
                                                    <td>$45.58</td>
                                                    <td class="text-center">
                                                        <div class="label label-table label-warning">Unpaid</div>
                                                    </td>
                                                    <td class="text-center">-</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <hr>
                                    <div class="pull-right">
                                        <ul class="pagination text-nowrap mar-no">
                                            <li class="page-pre disabled">
                                                <a href="#">&lt;</a>
                                            </li>
                                            <li class="page-number active">
                                                <span>1</span>
                                            </li>
                                            <li class="page-number">
                                                <a href="#">2</a>
                                            </li>
                                            <li class="page-number">
                                                <a href="#">3</a>
                                            </li>
                                            <li>
                                                <span>...</span>
                                            </li>
                                            <li class="page-number">
                                                <a href="#">9</a>
                                            </li>
                                            <li class="page-next">
                                                <a href="#">&gt;</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--===================================================-->
                                <!--End Data Table-->
                    
                            </div>
                        </div>
                    </div>
                    
                    
                    
                </div>
                <!--===================================================-->
                <!--End page content-->


            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->


            
            <!--ASIDE-->
            <!--===================================================-->
            <!--===================================================-->
            <!--END ASIDE-->

            
            <!--MAIN NAVIGATION-->
            <!--===================================================-->
            <nav id="mainnav-container">
                <div id="mainnav">

                    <!--Menu-->
                    <!--================================-->
                    <div id="mainnav-menu-wrap">
                        <div class="nano">
                            <div class="nano-content">

                                <!--Profile Widget-->
                                <!--================================-->
                                <div id="mainnav-profile" class="mainnav-profile">
                                    <div class="profile-wrap">
                                        <div class="pad-btm">
                                            <span class="label label-success pull-right">New</span>
                                            <img class="img-circle img-sm img-border" src="/yq/Public/statics/img/profile-photos/1.png" alt="Profile Picture">
                                        </div>
                                        <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                            <span class="pull-right dropdown-toggle">
                                                <i class="dropdown-caret"></i>
                                            </span>
                                            <p class="mnp-name">Aaron Chavez</p>
                                            <span class="mnp-desc">aaron.cha@themeon.net</span>
                                        </a>
                                    </div>
                                    <div id="profile-nav" class="collapse list-group bg-trans">
                                        <a href="#" class="list-group-item">
                                            <i class="demo-pli-male icon-lg icon-fw"></i> View Profile
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <i class="demo-pli-gear icon-lg icon-fw"></i> Settings
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <i class="demo-pli-information icon-lg icon-fw"></i> Help
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <i class="demo-pli-unlock icon-lg icon-fw"></i> Logout
                                        </a>
                                    </div>
                                </div>


                                <!--Shortcut buttons-->
                                <!--================================-->
                                <div id="mainnav-shortcut">
                                    <ul class="list-unstyled">
                                        <li class="col-xs-3" data-content="My Profile">
                                            <a class="shortcut-grid" href="#">
                                                <i class="demo-psi-male"></i>
                                            </a>
                                        </li>
                                        <li class="col-xs-3" data-content="Messages">
                                            <a class="shortcut-grid" href="#">
                                                <i class="demo-psi-speech-bubble-3"></i>
                                            </a>
                                        </li>
                                        <li class="col-xs-3" data-content="Activity">
                                            <a class="shortcut-grid" href="#">
                                                <i class="demo-psi-thunder"></i>
                                            </a>
                                        </li>
                                        <li class="col-xs-3" data-content="Lock Screen">
                                            <a class="shortcut-grid" href="#">
                                                <i class="demo-psi-lock-2"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!--================================-->
                                <!--End shortcut buttons-->


                                <ul id="mainnav-menu" class="list-group">
                        
                                    <!--Category name-->
                                    <li class="list-header">Navigation</li>
                        
                                    <!--Menu list item-->
                                    <li class="active-link">
                                        <a href="<?php echo U('Admin/Index/index');?>">
                                            <i class="demo-psi-home"></i>
                                            <span class="menu-title">
                                                <strong>控制台</strong>
                                            </span>
                                        </a>
                                    </li>
                        
                                    <!--Menu list item-->
                                    <li>
                                        <a href="#">
                                            <i class="demo-psi-split-vertical-2"></i>
                                            <span class="menu-title">
                                                <strong>管理设置</strong>
                                            </span>
                                            <i class="arrow"></i>
                                        </a>
                        
                                        <!--Submenu-->
                                        <ul class="collapse">
                                            <li><a href="<?php echo U('Admin/User/my_center');?>">个人中心</a></li>
                                        </ul>
                                    </li>

                                    <!--Menu list item-->
                                    <li>
                                        <a href="#">
                                            <i class="demo-psi-gear-2"></i>
                                            <span class="menu-title">
                                                <strong>权限控制</strong>
                                                <!-- <span class="pull-right badge badge-warning">24</span> -->
                                            </span>
                                             <i class="arrow"></i>
                                        </a>

                                        <ul class="collapse">
                                            <li><a href="<?php echo U('Admin/Rule/rule_list');?>">权限管理</a></li>
                                            <li><a href="<?php echo U('Admin/Rule/rule_group');?>">角色管理</a></li>
                                            <li><a href="<?php echo U('Admin/User/index');?>">用户管理</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="fa fa-cog"></i>
                                            <span class="menu-title">
                                                <strong>系统设置</strong>
                                                <!-- <span class="pull-right badge badge-warning">24</span> -->
                                            </span>
                                             <i class="arrow"></i>
                                        </a>

                                        <ul class="collapse">
                                            <li><a href="<?php echo U('Admin/Article/index');?>">文章管理</a></li>
                                            <li><a href="#">菜单管理</a></li>
                                            <li><a href="#">日志管理</a></li>
                                        </ul>
                                    </li>
                                </ul>

                                <!--Widget-->
                                <!--================================-->
                                <div class="mainnav-widget">

                                    <!-- Show the button on collapsed navigation -->
                                    <div class="show-small">
                                        <a href="#" data-toggle="menu-widget" data-target="#demo-wg-server">
                                            <i class="demo-pli-monitor-2"></i>
                                        </a>
                                    </div>

                                    <!-- Hide the content on collapsed navigation -->
                                    <div id="demo-wg-server" class="hide-small mainnav-widget-content">
                                        <ul class="list-group">
                                            <li class="list-header pad-no pad-ver">Server Status</li>
                                            <li class="mar-btm">
                                                <span class="label label-primary pull-right">15%</span>
                                                <p>CPU Usage</p>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar progress-bar-primary" style="width: 15%;">
                                                        <span class="sr-only">15%</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mar-btm">
                                                <span class="label label-purple pull-right">75%</span>
                                                <p>Bandwidth</p>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar progress-bar-purple" style="width: 75%;">
                                                        <span class="sr-only">75%</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="pad-ver"><a href="#" class="btn btn-success btn-bock">View Details</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--================================-->
                                <!--End widget-->

                            </div>
                        </div>
                    </div>
                    <!--================================-->
                    <!--End menu-->

                </div>
            </nav>
            <!--===================================================-->
            <!--END MAIN NAVIGATION-->

        </div>

        

        <!-- FOOTER -->
        <!--===================================================-->
        <footer id="footer">

            <!-- Visible when footer positions are fixed -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="show-fixed pull-right">
                You have <a href="#" class="text-bold text-main"><span class="label label-danger">3</span> pending action.</a>
            </div>



            <!-- Visible when footer positions are static -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="hide-fixed pull-right pad-rgt">
                14GB of <strong>512GB</strong> Free.
            </div>



            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <!-- Remove the class "show-fixed" and "hide-fixed" to make the content always appears. -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

            <p class="pad-lft">&#0169; 2016 Your Company</p>



        </footer>
        <!--===================================================-->
        <!-- END FOOTER -->


        <!-- SCROLL PAGE BUTTON -->
        <!--===================================================-->
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
        <!--===================================================-->



    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->


    
        <!-- SETTINGS - DEMO PURPOSE ONLY -->
    <!-- END SETTINGS -->


</body>
</html>