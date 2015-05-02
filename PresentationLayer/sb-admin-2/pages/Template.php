<?php
/**
 * Created by IntelliJ IDEA.
 * User: Alvin
 * Date: 2015-04-29
 * Time: 12:45 PM
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>锋利资产管理系统</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css"
          rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


    <![endif]-->


    <!--http://bootsnipp.com/snippets/featured/checked-list-group-->
    <style>
        .state-icon {
            left: -5px;
        }

        .list-group-item-primary {
            color: rgb(255, 255, 255);
            background-color: rgb(66, 139, 202);
        }

        /* DEMO ONLY - REMOVES UNWANTED MARGIN */
        .well .list-group {
            margin-bottom: 0px;
        }

        .modal-row {
            padding: 10px;
            max-width: 350px;
        }
    </style>


</head>

<br/>
<div id = "wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0 background-color: rgb(202,86,72);">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">锋利资产管理系统2015版</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <p id = "onlineCount" class="navbar-text">在线人数：0人</p>
                </li>
                <li>
                    <p id = "serverStatus" class="navbar-text">服务器状态：关闭</p>
                </li>
                <li>
                    <button id = "connectMainAccount" class="btn btn-info navbar-btn" style="margin-right: 5px">连接主账户</button>
                </li>
                <li>
                    <button id = "restartServer" class="btn btn-primary navbar-btn" style="margin-right: 5px">重启服务器</button>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> 账户资料</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> 设置</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> 登出</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
            </ul>

            <!-- /.navbar-top-links -->
            <!-- /.dropdown -->
            <!-- /.navbar-top-links -->
        </div>
        <div class="navbar-default sidebar" role="navigation" style="margin-top:5px">
            <div class="sidebar-nav navbar-collapse" style="margin-top:0px">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="index.html"><i class="fa fa-th-list fa-fw"></i> 账户管理<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="FuturesAccountManager.php">期货账户管理</a>
                            </li>
                            <li>
                                <a href="SecuritiesAccountManager.php">期货账户管理</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-cny fa-fw"></i> 资金管理<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="SubAccountOutMoney.php">子账户出金</a>
                            </li>
                            <li>
                                <a href="SubAccountInMoney.php">子账户入金</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-tachometer fa-fw"></i> 风控管理<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="FuturesRiskManage.php">期货风控设置</a>
                            </li>
                            <li>
                                <a href="StockRiskManage.php">证券风控设置</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 费率管理<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="FuturesFeeSetting.php">期货费率管理</a>
                            </li>
                            <li>
                                <a href="StockFeeSetting.php">证券费率管理</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="RiskMonitorManager.php"><i class="fa fa-user fa-fw"></i> 风控员管理</a>
                    </li>
                    <!--<li>-->
                    <!--<a href="AdminManager.html"><i class="fa fa-user fa-fw"></i> 管理员管理</a>-->
                    <!--</li>-->
                    <!--<li>-->
                    <!--<a href="OperationManager.html"><i class="fa fa-check fa-fw"></i> 业务审核</a>-->
                    <!--</li>-->
                    <li>
                        <a href="#"><i class="fa fa-search fa-fw"></i> 数据查询<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">出入金查询</a>
                            </li>
                            <li>
                                <a href="#l">交易记录查询</a>
                            </li>
                            <li>
                                <a href="#l">资金曲线查询</a>
                            </li>
                            <li>
                                <a href="#l">业务审批查询</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
        <!--</div>-->
    </nav>

    <div class="modal fade" tabindex="-1" role="dialog" id="generalNotification"
         aria-labelledby="newMainAccountLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    <h3 class="modal-title" id="newMainAccountLabel">提示</h3>
                </div>
                <div class="modal-body">
                    <h4 id="generalNotificationBody">成功</h4>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-primary" data-dismiss="modal">确定</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="generalAlert"
         aria-labelledby="newMainAccountLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    <h3 class="modal-title" id="newMainAccountLabel">提示</h3>
                </div>
                <div class="modal-body">
                    <h4 id="generalNotificationBody">成功</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消
                    </button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">确定</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
