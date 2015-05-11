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

    <title>锋利资产管理系统2015版本</title>
    <link rel="shortcut icon" href="../dist/images/favicon.ico"/>
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

        .modal .modal-body {
            max-height: 580px;
            overflow-y: auto;
            overflow-x: hidden;
        }
    </style>


</head>

<br/>

<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation"
         style="margin-bottom: 0 background-color: rgb(202,86,72);">
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
                    <p id="onlineCount" class="navbar-text">在线人数：0人</p>
                </li>
                <li>
                    <p id="serverStatus" class="navbar-text">服务器状态：关闭</p>
                </li>
                <li>
                    <button id="restartServer" class="btn btn-primary navbar-btn" style="margin-right: 5px">重启服务器
                    </button>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#" id="mainInformation"><i class="fa fa-user fa-fw"></i> 账户资料</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> 设置</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#" id="mainLogout"><i
                                    class="fa fa-sign-out fa-fw"></i> 登出</a>
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
                                <a href="SecuritiesAccountManager.php">证券账户管理</a>
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
                                <a href="../../../../Report/View/DailyReport.aspx">出入金查询</a>
                            </li>
                            <li>
                                <a href="../../../../Report/View/DailyReport.aspx">资金及交易明细查询</a>
                            </li>
                            <li>
                                <a href="../../../../Report/View/DailyReport.aspx">历史报单查询修改</a>
                            </li>
                            <li>
                                <a href="../../../../Report/View/DailyReport.aspx">历史盘前仓位查询修改</a>
                            </li>
                            <li>
                                <a href="../../../../Report/View/DailyReport.aspx">合约收盘结算价修改</a>
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
    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script
        src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script
        src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <script src="../../../Source/DataTable-Plugins/api/fnProcessingIndicator.js"></script>

    <script src="../js/SSClass/SSToolBar.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    <script>
        function getAdminCookie(cname) {
            var arr = document.cookie.match(new RegExp("(^| )" + cname + "=([^;]*)(;|$)"));
            if (arr != null) {
                return decodeURIComponent(arr[2]);
            }
            return null;
        }

        function setAdminCookie(cname, cvalue, min) {
            var exdate = new Date();
            exdate.setDate(exdate.getTime() + min * 60 * 1000);
            document.cookie = cname + "=" + escape(cvalue) + ((min == null) ? "" : ";expires=" + exdate.toGMTString());
        }

        //删除cookies
        function delCookie(name) {
            var exp = new Date();
            exp.setTime(exp.getTime() - 1);
            var cval = getAdminCookie(name);
            if (cval != null)
                document.cookie = name + "=" + cval + ";expires=" + exp.toGMTString();
        }

        var tmp_account = getAdminCookie('sharpspeedadminaccount');
        var tmp_password = getAdminCookie('sharpspeedadminpassword');
        console.log("取到Admin cookies:" + tmp_account + tmp_password);
        if (tmp_account != null && tmp_account != "" && tmp_password != null && tmp_password != "") {
            var superAdminId = tmp_account;
            var superAdminPwd = tmp_password;
            setAdminCookie('sharpspeedadminaccount', superAdminId, 20);
            setAdminCookie('sharpspeedadminpassword', superAdminPwd, 20);
        } else {
            self.location = 'http://121.40.131.144/Report/Shared/login.html';
        }

        //        var superAdminId = "frankzch";
        //        var superAdminPwd = "123456";

        $(document).ready(function () {
            $(document).on("click", "#mainLogout", function () {
                delCookie('sharpspeedadminaccount');
                delCookie('sharpspeedadminpassword');
                self.location = 'http://121.40.131.144/Report/Shared/login.html';
            });

            $(document).on("click", "#mainInformation", function () {
                $.ajax({
                    url: "../../../../../FuturesAccountManagerSystem/BusinessLogicLayer/Server/ServerExtention.php",
                    type: "get", //send it through get method
                    dataType: "json",
                    contentType: "application/json",
                    data: {
                        AdminAccount: superAdminId,
                        AdminPassword: superAdminPwd
                    },
                    success: function (response) {
                        var supperAccountInfo = response.split(":");
                        $('#generalMainAccountInfoBody').html('主账户ID:' + superAdminId + "<br/>服务器地址:" + supperAccountInfo[0] + "\n服务器端口:" + supperAccountInfo[1]);
                        $('#generalMainAccountInfo').modal('show');
                    },
                    error: function (xhr) {
                        //Do Something to handle error
                        console.log("取地址信息发生错误" + xhr);
                    }
                });
            });
        });

    </script>
