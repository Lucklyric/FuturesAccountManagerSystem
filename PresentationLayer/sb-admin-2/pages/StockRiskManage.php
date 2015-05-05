<?php
include_once("Template.php");
?>
<!--自定义Header-->
<header>
<!-- Bootstrap Core CSS -->
<link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

<!-- DataTables CSS -->

<link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css"
      rel="stylesheet">


<!-- DataTables Responsive CSS -->
<link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

<!-- Custom CSS -->s
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


<link rel="stylesheet"
      href="../bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css"/>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

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


<script type="text/javascript" src="../bower_components/moment/min/moment.min.js"></script>
<script type="text/javascript"
        src="../bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>


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
        max-width: 500px;
    }

    textarea {
        resize: vertical;
    }

    input[type="checkbox"] {
        margin-left: 15px;
    }

    fieldset {
        border: 1px solid #DDD;
        padding: 0 1.5em 0 1.5em;
        margin: 0 0 0.5em 0;
        display: inline-block;
    }

    legend {
        font-size: 1em;
        font-weight: bold;
        width:inherit;
        padding:0 10px;
        border-bottom:none;
    }

    .modal-content {
        width: 900px;
        margin-left: -150px;
    }

    .modal .modal-body {
        max-height: 580px;
        overflow-y: auto;
    }

    .container {
        max-width: none !important;
        width: 800px;
    }

</style>

</header>
<!--自定义Header-->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">风控管理</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            风控
                        </div>

                        <div class="panel-body">
                            <div class="dataTable_wrapper">


                                <!--Modal-->
                                <div class="modal fade" tabindex="-1" role="dialog" id="riskModal"
                                     aria-labelledby="newMainAccountLabel" aria-hidden="true">
                                    <div class="modal-dialog" id="newRiskModal">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="newMainAccountLabel">新建风控设置</h4>
                                            </div>
                                            <div class="modal-body">

                                                <div class="row clearfix modal-row">
                                                    <div class="col-xs-4 column">
                                                        <label style="margin-top: 5px">风控组名称</label>
                                                    </div>
                                                    <div class="col-xs-4 column">
                                                        <input class="form-control" value=""
                                                               type="text"
                                                               id="groupName"/>
                                                    </div>
                                                </div>

                                                <fieldset>
                                                    <legend>交易合约限制</legend>
                                                    <div class="container">
                                                        <div class="row clearfix">
                                                            <div class="col-xs-2 column">
                                                                <div class="form-group">
                                                                    <div class="radio" id="blackOrWhite">
                                                                        <label><input type="radio" name="blackOrWhite"
                                                                                      id="black">黑名单</label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label><input type="radio" id="white"
                                                                                      name="blackOrWhite">白名单</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-3 column modal-row">
                                                                <div class="form-group">
                                                                    <select class="form-control"
                                                                            id="exchange">
                                                                        <option>上海</option>
                                                                        <option>深圳</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-3 column modal-row">
                                                                <input class="form-control"
                                                                       id="instrument"
                                                                       value="" placeholder="股票代码"/>
                                                            </div>
                                                            <div class="col-xs-2 column">
                                                                <button type="button" id="rest-add"
                                                                        class="btn btn-default form-control"
                                                                        style="margin-top: 5px">添加
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-xs-3 column">
                                                                <button type="button" id="rest-clear"
                                                                        class="btn btn-default form-control"
                                                                        style="margin-top: 5px">清除
                                                                </button>
                                                            </div>
                                                            <div class="col-xs-7 column modal-row">
                                                                <textarea class="form-control" rows="5"></textarea>
                                                            </div>
                                                            <div class="col-xs-2 column">
                                                                <div class="row clearfix">
                                                                    <button type="button" class="btn btn-default"
                                                                            id="rest-addST"
                                                                            style="margin-top: 5px; margin-left: 15px">
                                                                        ST股票
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>

                                                <fieldset>
                                                    <legend>风控设置 (在普通，净值，亏损中选择一个)</legend>

                                                    <div role="tabpanel">

                                                        <!-- Nav tabs -->
                                                        <ul class="nav nav-tabs" role="tablist">
                                                            <li role="presentation" class="active"><a href="#normal"
                                                                                                      aria-controls="normal"
                                                                                                      role="tab"
                                                                                                      data-toggle="tab">普通风控</a>
                                                            </li>
                                                            <li role="presentation"><a href="#abs"
                                                                                       aria-controls="abs"
                                                                                       role="tab"
                                                                                       data-toggle="tab">净值风控</a></li>
                                                            <li role="presentation"><a href="#loss"
                                                                                       aria-controls="loss"
                                                                                       role="tab"
                                                                                       data-toggle="tab">亏损风控</a></li>
                                                        </ul>

                                                        <!-- Tab panes -->
                                                        <div class="tab-content">
                                                            <div role="tabpanel" class="tab-pane active" id="normal">
                                                                <div class="container">
                                                                    <div class="row clearfix" style="padding-top: 15px">
                                                                        <div class="col-xs-2 column">
                                                                            <label style="margin-top: 5px">强平线</label>
                                                                        </div>
                                                                        <div class="col-xs-4 column">
                                                                            <input class="form-control" value=""
                                                                                   type="number"
                                                                                   id="normal-forceCloseLine"/>
                                                                        </div>
                                                                        <div class="col-xs-2 column">
                                                                            <label style="margin-top: 5px">警告线</label>
                                                                        </div>
                                                                        <div class="col-xs-4 column">
                                                                            <input class="form-control" value=""
                                                                                   type="number"
                                                                                   id="normal-warningLine"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row clearfix">
                                                                        <fieldset style="margin-top: 5px">
                                                                            <legend>隔夜时间设置</legend>
                                                                            <div class="container" style="width: 750px">
                                                                                <div class="row clearfix">
                                                                                    <div class="col-xs-3 column">
                                                                                        <div class='input-group date'
                                                                                             id='normal-datetimepickerFrom'>
                                                                                            <input type='text'
                                                                                                   id="normal-fromTime"
                                                                                                   class="form-control"/>
                                                                                            <span class="input-group-addon">
                                                                                                <span class="glyphicon glyphicon-time"></span>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xs-1 column">
                                                                                        到
                                                                                    </div>
                                                                                    <div class="col-xs-3 column">
                                                                                        <div class='input-group date'
                                                                                             id='normal-datetimepickerTo'>
                                                                                            <input type='text'
                                                                                                   id="normal-toTime"
                                                                                                   class="form-control"/>
                                                                                            <span class="input-group-addon">
                                                                                                <span class="glyphicon glyphicon-time"></span>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <script type="text/javascript">
                                                                                        $(function () {
                                                                                            $('#normal-datetimepickerFrom').datetimepicker({
                                                                                                format: 'HH:mm'
                                                                                            });
                                                                                            $('#normal-datetimepickerTo').datetimepicker({
                                                                                                format: 'HH:mm'
                                                                                            });
                                                                                        });
                                                                                    </script>
                                                                                    <div class="col-xs-3 column">
                                                                                        <div class="form-group">
                                                                                            <div class="radio row clearfix"
                                                                                                 id="normal-stockType">
                                                                                                <div class="col-xs-12 column">
                                                                                                    <label><input
                                                                                                            type="radio"
                                                                                                            name="normal-instrumentType"
                                                                                                            id="normal-defauleType"
                                                                                                            >默认品种</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="radio row clearfix">
                                                                                                <div class="col-xs-6 column">
                                                                                                    <label style="margin-top: 5px"><input
                                                                                                            type="radio"
                                                                                                            id="normal-chosenType"
                                                                                                            name="normal-instrumentType">品种</label>
                                                                                                </div>
                                                                                                <div class="col-xs-6 column">
                                                                                                    <input class="form-control"
                                                                                                           type="text"
                                                                                                           style="float: left;"
                                                                                                           value=""
                                                                                                           id="normal-chosenTypeName"
                                                                                                           placeholder="品种"/>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xs-2 column">
                                                                                        <div class="form-group">
                                                                                            <div class="row clearfix">
                                                                                                <div class="col-xs-12 column">
                                                                                                    <button type="button"
                                                                                                            id="normal-overnight-add"
                                                                                                            class="btn btn-success btn-sm">
                                                                                                        添加
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row clearfix">
                                                                                                <div class="col-xs-12 column">
                                                                                                    <button type="button"
                                                                                                            id="normal-overnight-delete"
                                                                                                            class="btn btn-warning btn-sm"
                                                                                                            style="margin-top: 5px">
                                                                                                        删除
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row clearfix">
                                                                                    <div class="col-xs-12 column" style="margin-top: 5px">
                                                                                        <div class="well"
                                                                                             style="max-height: 400px; overflow: auto;">
                                                                                            <ul class="list-group checked-list-box"
                                                                                                id="normal-overnightUL">
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </fieldset>
                                                                        <fieldset>
                                                                            <legend>风控条件</legend>
                                                                            <div class="container" style="width: 750px">
                                                                                <div class="row clearfix" style="margin-top:10px">
                                                                                    <div class="col-xs-3 column">
                                                                                        <label style="margin-top: 5px">日内总仓位上限</label>
                                                                                    </div>
                                                                                    <div class="col-xs-3 column">
                                                                                        <input class="form-control"
                                                                                               id="inDayPos-totalLimit"
                                                                                               value=""/>
                                                                                    </div>
                                                                                    <div class="col-xs-3 column">
                                                                                        <label style="margin-top: 5px">单股票上限</label>
                                                                                    </div>
                                                                                    <div class="col-xs-3 column">
                                                                                        <input class="form-control"
                                                                                               id="inDayPos-limit"
                                                                                               value=""/>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row clearfix" style="margin-top:10px">
                                                                                    <div class="col-xs-3 column">
                                                                                        <label style="margin-top: 5px">隔夜总仓位上限</label>
                                                                                    </div>
                                                                                    <div class="col-xs-3 column">
                                                                                        <input class="form-control"
                                                                                               id="overPos-totalLimit"
                                                                                               value=""/>
                                                                                    </div>
                                                                                    <div class="col-xs-3 column">
                                                                                        <label style="margin-top: 5px">单股票上限</label>
                                                                                    </div>
                                                                                    <div class="col-xs-3 column">
                                                                                        <input class="form-control"
                                                                                               id="overPos-limit"
                                                                                               value=""/>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </fieldset>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div role="tabpanel" class="tab-pane" id="abs">
                                                                <div class="container">
                                                                    <div class="row clearfix" style="padding-top: 15px">
                                                                        <div class="col-xs-2 column">
                                                                            <label style="margin-top: 5px">强平线</label>
                                                                        </div>
                                                                        <div class="col-xs-4 column">
                                                                            <input class="form-control" value=""
                                                                                   type="number"
                                                                                   id="abs-forceCloseLine"/>
                                                                        </div>
                                                                        <div class="col-xs-2 column">
                                                                            <label style="margin-top: 5px">警告线</label>
                                                                        </div>
                                                                        <div class="col-xs-4 column">
                                                                            <input class="form-control" value=""
                                                                                   type="number" id="abs-warningLine"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row clearfix">
                                                                        <fieldset style="margin-top: 5px">
                                                                            <legend>隔夜时间设置</legend>
                                                                            <div class="container" style="width: 750px">
                                                                                <div class="row clearfix">
                                                                                    <div class="col-xs-3 column">
                                                                                        <div class='input-group date'
                                                                                             id='abs-datetimepickerFrom'>
                                                                                            <input type='text'
                                                                                                   id="abs-fromTime"
                                                                                                   class="form-control"/>
                                                                                            <span class="input-group-addon">
                                                                                                <span class="glyphicon glyphicon-time"></span>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xs-1 column">
                                                                                        到
                                                                                    </div>
                                                                                    <div class="col-xs-3 column">
                                                                                        <div class='input-group date'
                                                                                             id='abs-datetimepickerTo'>
                                                                                            <input type='text'
                                                                                                   id="abs-toTime"
                                                                                                   class="form-control"/>
                                                                                            <span class="input-group-addon">
                                                                                                <span class="glyphicon glyphicon-time"></span>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <script type="text/javascript">
                                                                                        $(function () {
                                                                                            $('#abs-datetimepickerFrom').datetimepicker({
                                                                                                format: 'HH:mm'
                                                                                            });
                                                                                            $('#abs-datetimepickerTo').datetimepicker({
                                                                                                format: 'HH:mm'
                                                                                            });
                                                                                        });
                                                                                    </script>
                                                                                    <div class="col-xs-3 column">
                                                                                        <div class="form-group">
                                                                                            <div class="radio row clearfix"
                                                                                                 id="abs-stockType">
                                                                                                <div class="col-xs-12 column">
                                                                                                    <label><input
                                                                                                            type="radio"
                                                                                                            name="abs-instrumentType"
                                                                                                            id="abs-defauleType"
                                                                                                            >默认品种</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="radio row clearfix">
                                                                                                <div class="col-xs-6 column">
                                                                                                    <label style="margin-top: 5px"><input
                                                                                                            type="radio"
                                                                                                            id="abs-chosenType"
                                                                                                            name="abs-instrumentType">品种</label>
                                                                                                </div>
                                                                                                <div class="col-xs-6 column">
                                                                                                    <input class="form-control"
                                                                                                           type="text"
                                                                                                           style="float: left;"
                                                                                                           value=""
                                                                                                           id="abs-chosenTypeName"
                                                                                                           placeholder="品种"/>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xs-2 column">
                                                                                        <div class="form-group">
                                                                                            <button type="button"
                                                                                                    id="abs-overnight-add"
                                                                                                    class="btn btn-success btn-sm">
                                                                                                添加
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </fieldset>
                                                                    </div>
                                                                    <div class="row clearfix">
                                                                        <fieldset style="margin-top: 5px">
                                                                            <legend>风控条件</legend>
                                                                            <div class="container" style="width: 750px">
                                                                                <div class="row clearfix">
                                                                                    <div class="col-xs-3 column">
                                                                                        当净值达到范围
                                                                                    </div>
                                                                                    <div class="col-xs-3 column">
                                                                                        <input class="form-control"
                                                                                               id="abs-lower"
                                                                                               value=""/>
                                                                                    </div>
                                                                                    <div class="col-xs-1 column">到</div>
                                                                                    <div class="col-xs-3 column">
                                                                                        <input class="form-control"
                                                                                               id="abs-upper"
                                                                                               value=""/>
                                                                                    </div>
                                                                                    <div class="col-xs-2 column">
                                                                                        时，设定风控
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row clearfix"
                                                                                     style="margin-top: 5px">
                                                                                    <div class="col-xs-2 column">
                                                                                        <select class="form-control"
                                                                                                id="abs-inDayOrOvernight">
                                                                                            <option>日内</option>
                                                                                            <option>隔夜</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-xs-2 column">
                                                                                        <label style="margin-top: 5px">总仓位上限</label>
                                                                                    </div>
                                                                                    <div class="col-xs-3 column">
                                                                                        <input class="form-control"
                                                                                               id="abs-totalLimit"
                                                                                               value=""/></div>
                                                                                    <div class="col-xs-2 column">
                                                                                        <label style="margin-top: 5px">单股票上限</label>
                                                                                    </div>
                                                                                    <div class="col-xs-3 column">
                                                                                        <input class="form-control"
                                                                                               id="abs-singleLimit"
                                                                                               value=""/>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row clearfix" style="margin-top: 5px">
                                                                                    <div class="form-group"
                                                                                         style="float: right;">
                                                                                        <button type="button"
                                                                                                id="abs-condition-add"
                                                                                                class="btn btn-success btn-sm">
                                                                                            添加
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </fieldset>
                                                                    </div>
                                                                    <div class="row clearfix">
                                                                        <div class="col-xs-12 column" style="margin-top: 5px">
                                                                            <div class="well"
                                                                                 style="max-height: 400px; overflow: auto;">
                                                                                <ul class="list-group checked-list-box"
                                                                                    id="abs-overnightUL">
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row clearfix">
                                                                        <div class="form-group" style="float: right;">
                                                                            <button type="button" id="abs-delete"
                                                                                    class="btn btn-warning btn-sm">
                                                                                删除
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div role="tabpanel" class="tab-pane" id="loss">                                                                <div class="container">
                                                                <div class="row clearfix" style="padding-top: 15px">
                                                                    <div class="col-xs-2 column">
                                                                        <label style="margin-top: 5px">强平线</label>
                                                                    </div>
                                                                    <div class="col-xs-4 column">
                                                                        <input class="form-control" value=""
                                                                               type="number"
                                                                               id="loss-forceCloseLine"/>
                                                                    </div>
                                                                    <div class="col-xs-2 column">
                                                                        <label style="margin-top: 5px">警告线</label>
                                                                    </div>
                                                                    <div class="col-xs-4 column">
                                                                        <input class="form-control" value=""
                                                                               type="number" id="loss-warningLine"/>
                                                                    </div>
                                                                </div>
                                                                <div class="row clearfix">
                                                                    <fieldset style="margin-top: 5px">
                                                                        <legend>隔夜时间设置</legend>
                                                                        <div class="container" style="width: 750px">
                                                                            <div class="row clearfix">
                                                                                <div class="col-xs-3 column">
                                                                                    <div class='input-group date'
                                                                                         id='loss-datetimepickerFrom'>
                                                                                        <input type='text'
                                                                                               id="loss-fromTime"
                                                                                               class="form-control"/>
                                                                                            <span class="input-group-addon">
                                                                                                <span class="glyphicon glyphicon-time"></span>
                                                                                            </span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xs-1 column">
                                                                                    到
                                                                                </div>
                                                                                <div class="col-xs-3 column">
                                                                                    <div class='input-group date'
                                                                                         id='loss-datetimepickerTo'>
                                                                                        <input type='text'
                                                                                               id="loss-toTime"
                                                                                               class="form-control"/>
                                                                                            <span class="input-group-addon">
                                                                                                <span class="glyphicon glyphicon-time"></span>
                                                                                            </span>
                                                                                    </div>
                                                                                </div>
                                                                                <script type="text/javascript">
                                                                                    $(function () {
                                                                                        $('#loss-datetimepickerFrom').datetimepicker({
                                                                                            format: 'HH:mm'
                                                                                        });
                                                                                        $('#loss-datetimepickerTo').datetimepicker({
                                                                                            format: 'HH:mm'
                                                                                        });
                                                                                    });
                                                                                </script>
                                                                                <div class="col-xs-3 column">
                                                                                    <div class="form-group">
                                                                                        <div class="radio row clearfix"
                                                                                             id="loss-stockType">
                                                                                            <div class="col-xs-12 column">
                                                                                                <label><input
                                                                                                        type="radio"
                                                                                                        name="loss-instrumentType"
                                                                                                        id="loss-defauleType"
                                                                                                        >默认品种</label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="radio row clearfix">
                                                                                            <div class="col-xs-6 column">
                                                                                                <label style="margin-top: 5px"><input
                                                                                                        type="radio"
                                                                                                        id="loss-chosenType"
                                                                                                        name="loss-instrumentType">品种</label>
                                                                                            </div>
                                                                                            <div class="col-xs-6 column">
                                                                                                <input class="form-control"
                                                                                                       type="text"
                                                                                                       style="float: left;"
                                                                                                       value=""
                                                                                                       id="loss-chosenTypeName"
                                                                                                       placeholder="品种"/>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xs-2 column">
                                                                                    <div class="form-group">
                                                                                        <button type="button"
                                                                                                id="loss-overnight-add"
                                                                                                class="btn btn-success btn-sm">
                                                                                            添加
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                                <div class="row clearfix">
                                                                    <fieldset style="margin-top: 5px">
                                                                        <legend>风控条件</legend>
                                                                        <div class="container" style="width: 750px">
                                                                            <div class="row clearfix">
                                                                                <div class="col-xs-3 column">
                                                                                    当亏损达到范围
                                                                                </div>
                                                                                <div class="col-xs-3 column">
                                                                                    <input class="form-control"
                                                                                           id="loss-lower"
                                                                                           value=""/>
                                                                                </div>
                                                                                <div class="col-xs-1 column">到</div>
                                                                                <div class="col-xs-3 column">
                                                                                    <input class="form-control"
                                                                                           id="loss-upper"
                                                                                           value=""/>
                                                                                </div>
                                                                                <div class="col-xs-2 column">
                                                                                    时，设定风控
                                                                                </div>
                                                                            </div>
                                                                            <div class="row clearfix"
                                                                                 style="margin-top: 5px">
                                                                                <div class="col-xs-2 column">
                                                                                    <select class="form-control"
                                                                                            id="loss-inDayOrOvernight">
                                                                                        <option>日内</option>
                                                                                        <option>隔夜</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-xs-2 column">
                                                                                    <label style="margin-top: 5px">总仓位上限</label>
                                                                                </div>
                                                                                <div class="col-xs-3 column">
                                                                                    <input class="form-control"
                                                                                           id="loss-totalLimit"
                                                                                           value=""/></div>
                                                                                <div class="col-xs-2 column">
                                                                                    <label style="margin-top: 5px">单股票上限</label>
                                                                                </div>
                                                                                <div class="col-xs-3 column">
                                                                                    <input class="form-control"
                                                                                           id="loss-singleLimit"
                                                                                           value=""/>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row clearfix" style="margin-top: 5px">
                                                                                <div class="form-group"
                                                                                     style="float: right;">
                                                                                    <button type="button"
                                                                                            id="loss-condition-add"
                                                                                            class="btn btn-success btn-sm">
                                                                                        添加
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                                <div class="row clearfix">
                                                                    <div class="col-xs-12 column" style="margin-top: 5px">
                                                                        <div class="well"
                                                                             style="max-height: 400px; overflow: auto;">
                                                                            <ul class="list-group checked-list-box"
                                                                                id="loss-overnightUL">
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row clearfix">
                                                                    <div class="form-group" style="float: right;">
                                                                        <button type="button" id="loss-delete"
                                                                                class="btn btn-warning btn-sm">
                                                                            删除
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            </div>
                                                        </div>

                                                    </div>

                                                </fieldset>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">取消
                                                </button>
                                                <button type="button" class="btn btn-primary">确定
                                                </button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!--/.modal-->


                                <table id="riskManagerTable" class="table table-striped table-bordered table-hover"
                                       cellspacing="0" width="100%">

                                    <div class="riskManagerToolbar" style="float:left">
                                        <button type="button" class="btn btn-success" id="risk-add"
                                                data-toggle="modal">
                                            添加风控设置
                                        </button>
                                        <button type="button" class="btn btn-warning" id="risk-update"
                                                data-toggle="modal">
                                            修改风控设置
                                        </button>
                                        <button type="button" class="btn btn-danger" id="risk-delete"
                                                data-toggle="modal">
                                            删除风控设置
                                        </button>
                                    </div>
                                    <thead>
                                    <tr>
                                        <th>编号</th>
                                        <th>组名称</th>
                                        <th>允许交易合约</th>
                                        <th>不允许交易合约</th>
                                        <th>禁止开仓时段</th>
                                        <th>减仓时段</th>
                                        <th>风险度警告线</th>
                                        <th>风险度警告线详细</th>
                                        <th>风险度禁开线</th>
                                        <th>风险度禁开线详细</th>
                                        <th>权益警告线</th>
                                        <th>权益强平线</th>
                                        <th>隔夜减仓线</th>
                                        <th>隔夜减仓线详细</th>
                                        <th>日撤单上限</th>
                                        <th>亏损预警</th>
                                        <th>亏损强平</th>
                                        <th>亏损日内限制</th>
                                        <th>亏损隔夜限制</th>
                                        <th>净值预警</th>
                                        <th>净值强平</th>
                                        <th>净值日内限制</th>
                                        <th>净值隔夜限制</th>
                                    </tr>
                                    </thead>

                                    <tfoot>
                                    <tr>
                                        <th>编号</th>
                                        <th>组名称</th>
                                        <th>允许交易合约</th>
                                        <th>不允许交易合约</th>
                                        <th>禁止开仓时段</th>
                                        <th>减仓时段</th>
                                        <th>风险度警告线</th>
                                        <th>风险度警告线详细</th>
                                        <th>风险度禁开线</th>
                                        <th>风险度禁开线详细</th>
                                        <th>权益警告线</th>
                                        <th>权益强平线</th>
                                        <th>隔夜减仓线</th>
                                        <th>隔夜减仓线详细</th>
                                        <th>日撤单上限</th>
                                        <th>亏损预警</th>
                                        <th>亏损强平</th>
                                        <th>亏损日内限制</th>
                                        <th>亏损隔夜限制</th>
                                        <th>净值预警</th>
                                        <th>净值强平</th>
                                        <th>净值日内限制</th>
                                        <th>净值隔夜限制</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<?php
include_once("ModalTemplate.php");
?>

<script>
    //http://bootsnipp.com/snippets/featured/checked-list-group

    function updateCheckBox() {
        $('.list-group.checked-list-box .list-group-item').each(function () {

            // Settings
            var $widget = $(this),
                    $checkbox = $('<input type="checkbox" class="hidden" />'),
                    color = ($widget.data('color') ? $widget.data('color') : "primary"),
                    style = ($widget.data('style') == "button" ? "btn-" : "list-group-item-"),
                    settings = {
                        on: {
                            icon: 'glyphicon glyphicon-check'
                        },
                        off: {
                            icon: 'glyphicon glyphicon-unchecked'
                        }
                    };

            $widget.css('cursor', 'pointer')
            $widget.append($checkbox);

            // Event Handlers
            $widget.on('click', function () {
                $checkbox.prop('checked', !$checkbox.is(':checked'));
                $checkbox.triggerHandler('change');
                updateDisplay();
            });
            $checkbox.on('change', function () {
                updateDisplay();
            });


            // Actions
            function updateDisplay() {
                var isChecked = $checkbox.is(':checked');

                // Set the button's state
                $widget.data('state', (isChecked) ? "on" : "off");

                // Set the button's icon
                $widget.find('.state-icon')
                        .removeClass()
                        .addClass('state-icon ' + settings[$widget.data('state')].icon);

                // Update the button's color
                if (isChecked) {
                    $widget.addClass(style + color + ' active');
                } else {
                    $widget.removeClass(style + color + ' active');
                }
            }

            // Initialization
            function init() {

                if ($widget.data('checked') == true) {
                    $checkbox.prop('checked', !$checkbox.is(':checked'));
                }

                updateDisplay();

                // Inject the icon if applicable
                if ($widget.find('.state-icon').length == 0) {
                    $widget.prepend('<span class="state-icon ' + settings[$widget.data('state')].icon + '"></span>');
                }
            }

            init();
        });
    }

</script>


<script>
    /**
     * 定义全局变量
     */

    var instrumentData;
    var riskManagerTable;
    var riskManagerTableData;
    var riskManagerData = [];
    var subAccounts = [];
    var selectedIndex = 0;  //mainSelectedIndex
    var toolBarManger = new SSToolBar($("#restartServer"), $("#connectMainAccount"), $("#onlineCount"), $("#serverStatus"));
    /**
     * Document加载完毕 更新数据刷新Table绑定点击事件
     */
    $(document).ready(function () {
        ifHideMainAccountToolBar(true);
        refreshMainTable();
        refreshData(1); //更新数据

        $('#riskManagerTable').on('click', 'tr', function () { //绑定点击事件刷新子账户
            selectedIndex = riskManagerTable.row(this).index();
            ifHideMainAccountToolBar(false);
            //refreshMainTable();
            if ($(this).hasClass('selected')) {
                //$(this).removeClass('selected');
            }
            else {
                riskManagerTable.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
            // $('.modal-dialog').modal('show');
        });
    });
</script>

<script>
    /**
     * Ajax从服务端取数据
     */
    function refreshData(flag) {
        riskManagerData = [];
        var table = $('#riskManagerTable').dataTable();
        table.fnProcessingIndicator();      // On
        console.log("开始刷新数据");
        if (flag === undefined) {
            if (sessionStorage.getItem('riskManagerData')) {
                riskManagerData = JSON.parse(sessionStorage.getItem('stockRiskManagerData'));
                instrumentData = JSON.parse(sessionStorage.getItem('instrumentData'));
                refreshMainTable();
                return;
            }
        }

        $.getJSON('../../../../FuturesAccountManagerSystem/BusinessLogicLayer/Server/GetAllTradableInstrumentsAndProps.php?AdminAccount='+superAdminId+'&AdminPassword='+superAdminPwd, function (data) {
            instrumentData = data.mapExchange2Category2Prop;
            console.log(instrumentData[0]);
            sessionStorage.setItem('instrumentData', JSON.stringify(instrumentData));
            console.log("取到数据");
        });

        //mainAccountTable.fnProcessingIndicator();
        $.getJSON('../../../../FuturesAccountManagerSystem/BusinessLogicLayer/RiskManage/Refresh.php?AdminAccount='+superAdminId+'&AdminPassword='+superAdminPwd, function (data) {
            riskManagerTableData = data.data;
            console.log(riskManagerTableData[0]);
            for (var i = 0; i < riskManagerTableData.length; i++) {
                if (riskManagerTableData[i][1].match(/\(证券/g)) {
                    riskManagerData.push(riskManagerTableData[i]);
                }
            }
            sessionStorage.setItem('stockRiskManagerData', JSON.stringify(riskManagerData));
            console.log("取到数据");
            refreshMainTable();
        });
        setAdminCookie("sharpspeedadminaccount", superAdminId, 30*1/24/60);
        setAdminCookie("sharpspeedadminpassword", superAdminPwd, 30*1/24/60);
    }
    /**
     * 刷新主账户表格
     */
    function refreshMainTable() {
        if ($.fn.dataTable.isDataTable('#riskManagerTable')) {
            console.log("刷新表格");
            console.log(riskManagerData[0]);
            riskManagerTable.clear();
            for (var i = 0; i < riskManagerData.length; i++) {
                riskManagerTable.row.add(riskManagerData[i]);
            }
            riskManagerTable.draw();
            var table = $('#riskManagerTable').dataTable();
            table.fnProcessingIndicator(false);      // On
        }
        else {
            console.log("开始构建主表");
            riskManagerTable = $('#riskManagerTable').DataTable({
                "processing": true,
                "data": riskManagerData,
                "scrollY": "500px",
                "scrollX": true,
                "scrollCollapse": false,
                "paging": false,
                columnDefs: [
                    {
                        width: '50px',
                        targets: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22]
                    }
                ],
                "dom": '<"riskManagerToolbar"f>rlpti',
                "language": {
                    "search": "搜索:",
                    "info": "显示 _START_ 到 _END_ 共 _TOTAL_ 记录",
                    "infoEmpty": "显示 0 到 0 共 0 记录",
                    "emptyTable": "暂无可显示数据",
                    "processing": "正在加载......"
                }
            });

        }
    }

    function ulToString(ul){
        var result = null;
        $(ul).find("li").each(function (idx, li) {
            if (idx == 0){
                result = $(li).text();
            }
            else{
                result += ";" + $(li).text();
            }
        });
        return result;
    }

    function stringToUL(input, ul, surfix){
        if (surfix === undefined)
            surfix = "";
        var array = input.split(";");
        for (var i = 0; i < array.length; i++) {
            if (array[i])
                ul.append($("<li class='list-group-item'>").text(array[i] + surfix));
        }
    }

    function getInDayString(ul){
        var result = null;
        $(ul).find("li").each(function (idx, li) {
            var entry = $(li).text();
            if (entry.match(/\(日内\)/g)){//match
                if (result == null) {
                    result = entry.replace(/\(日内\)/g, "");
                }else{
                    result += ";" + entry.replace(/\(日内\)/g, "");
                }
            }
        });
        return result;
    }

    function getOverString(ul){
        var result = null;
        $(ul).find("li").each(function (idx, li) {
            var entry = $(li).text();
            if (entry.match(/\(隔夜\)/g)){//match
                if (result == null) {
                    result = entry.replace(/\(隔夜\)/g, "");
                }else{
                    result += ";" + entry.replace(/\(隔夜\)/g, "");
                }
            }
        });
        return result;
    }

</script>

<script>

    //clear modal everytime
    $('#riskModal').on('hidden.bs.modal', function (e) {
        $(this)
                .find("input,textarea,select")
                .val('')
                .end()
                .find("input[type=checkbox], input[type=radio]")
                .prop("checked", "")
                .end()
                .find(".checked-list-box")
                .empty()
                .end();
    });

    //modal 确定 逻辑处理
    function sendRequest(event) {

        var data;
        if (event === undefined){
            var dataToDelete = riskManagerData[selectedIndex];
            data = {
                admin: superAdminId,
                password: superAdminPwd,
                tablename: "RiskManage",
                State: 2,
                编号: dataToDelete[0]
            };
        }else {
            data = {
                admin: superAdminId,
                password: superAdminPwd,
                tablename: "RiskManage",
                State: event.data.state,
                编号:0,
                组名称:null,
                允许交易合约:null,
                不允许交易合约:null,
                禁止开仓时间段:null,
                减仓时间段:null,
                风险度警告线:null,
                风险度警告线详细:null,
                风险度禁开线:null,
                风险度禁开线详细:null,
                权益警告线:null,
                权益强平线:null,
                隔夜减仓线:null,
                隔夜减仓线详细:null,
                每日撤单次数上限:null,
                亏损预警:null,
                亏损强平:null,
                亏损日内限制:null,
                亏损隔夜限制:null,
                净值预警:null,
                净值强平:null,
                净值日内限制:null,
                净值隔夜限制:null
            };
            if (event.data.state == 3) {
                data["编号"] = riskManagerData[selectedIndex][0];
                data["禁止开仓时间段"] = riskManagerData[selectedIndex][4];
            }

            if (!$("#groupName").val()){
                $("#alertNotificationBody").text("风控组名不能为空");
                $("#generalAlert").modal('show');
                return;
            }

            data["组名称"] = $("#groupName").val() + "(证券";
            //交易合约限制
            if ($("#black").prop("checked")) {//不允许交易合约
                data["不允许交易合约"] = $("textarea").val();
            } else {//允许交易合约
                data["允许交易合约"] = $("textarea").val();
            }

            if ($('.nav-tabs .active').index() == 0) {
                data["组名称"] += "普通)";
                data["权益强平线"] = $("#normal-forceCloseLine").val();
                data["权益警告线"] = $("#normal-warningLine").val();
                data["减仓时间段"] = ulToString($("#normal-overnightUL"));
//                data["风险度警告线"] = $("#inDayPos-warning").val();
                data["风险度禁开线"] = $("#inDayPos-totalLimit").val();
                data["风险度禁开线详细"] = "证券-" + $("#inDayPos-limit").val();
                data["隔夜减仓线"] = $("#overPos-totalLimit").val();
                data["隔夜减仓线详细"] = "证券-" + $("#overPos-limit").val();
            } else if ($('.nav-tabs .active').index() == 1) {
                data["组名称"] += "净值)";
                data["净值强平"] = $("#abs-forceCloseLine").val();
                data["净值预警"] = $("#abs-warningLine").val();
                data["净值日内限制"] = getInDayString($("#abs-overnightUL"));
                data["净值隔夜限制"] = getOverString($("#abs-overnightUL"));
            } else {
                data["组名称"] += "亏损)";
                data["亏损强平"] = $("#loss-forceCloseLine").val();
                data["亏损预警"] = $("#loss-warningLine").val();
                data["亏损日内限制"] = getInDayString($("#loss-overnightUL"));
                data["亏损隔夜限制"] = getOverString($("#loss-overnightUL"));
            }
        }
//        "编号","组名称","允许交易合约","不允许交易合约","禁止开仓时间段","减仓时间段","风险度警告线","风险度警告线详细","风险度禁开线","风险度禁开线详细",
// "权益警告线","权益强平线","隔夜减仓线","隔夜减仓线详细","每日撤单次数上限","亏损预警","亏损强平","亏损日内限制","亏损隔夜限制","净值预警","净值强平",
// "净值日内限制","净值隔夜限制"

        //TODO: 应该做 validate
        //ajax 发送插入

        var hostpath = "../../../../FuturesAccountManagerSystem/BusinessLogicLayer/RiskManage/InsertData.php";

        $.ajax({
            url: hostpath,
            type: "get", //send it through get method
            data: data,
            success: function (response) {
                response = JSON.parse(response);
                if(response==''){
                    $('#generalNotificationBody').text('成功');
                }else{
                    $('#generalNotificationBody').text(response);
                }
                $('#generalNotification').modal('show');
                refreshData(1);
            },
            error: function (xhr) {
                //Do Something to handle error
            }
        });

        $('#riskModal').modal('hide');

    }

    function ifHideMainAccountToolBar(flag) {

        if (flag) {
            $('#risk-update').hide();
            $('#risk-delete').hide();
        } else {
            $('#risk-update').show();
            $('#risk-delete').show();
        }
    }

    function setupRiskManageInfo() {
        $("#newRiskModal #black").prop("checked", true);
        $("#groupName").removeAttr('disabled');
//        var exchangeSelect = $("#newRiskModal #exchange");
//        for (var i = 0; i < instrumentData.length; i++) {
//            exchangeSelect.append($('<option>', {
//                value: i,
//                text: instrumentData[i]["Key"]
//            }))
//        }
//        exchangeSelect.on('change', function () {
//            var exchangeSelect = $("#newRiskModal #instrument");
//            var instrumentDictArray = instrumentData[this.value]["Value"];
//            console.log(instrumentDictArray);
//            exchangeSelect.empty();
//            for (var i = 0; i < instrumentDictArray.length; i++) {
//                exchangeSelect.append($('<option>', {
//                    value: i,
//                    text: instrumentDictArray[i]["Key"]
//                }))
//            }
//        })
//        exchangeSelect.eq(0).attr('selected', 'selected');
//        exchangeSelect.trigger('change');
        $("#newRiskModal #normal-defauleType").prop("checked", true);
        $("#newRiskModal #abs-defauleType").prop("checked", true);
        $("#newRiskModal #loss-defauleType").prop("checked", true);
        $('.nav-tabs li.active').removeClass("active");
    }

    function fillRiskModal(){
        var riskGroupData = riskManagerData[selectedIndex];
        $("#groupName").val(riskGroupData[1].replace(/\(证券..\)/g, ""));
        $("#groupName").attr('disabled','disabled');
        if (riskGroupData[2]){//白名单
            $("#white").prop("checked",true);
            $("textarea").val(riskGroupData[2]);
        }else{
            $("#black").prop("checked",true);
            $("textarea").val(riskGroupData[3]);
        }
        if (riskGroupData[1].match(/普通\)/g)){//普通

            $("#normal-warningLine").val(riskGroupData[10]);
            $("#normal-forceCloseLine").val(riskGroupData[11]);
            stringToUL(riskGroupData[5],$("#normal-overnightUL"));

//            $("#inDayPos-warning").val(riskGroupData[6]);
            $("#inDayPos-totalLimit").val(riskGroupData[8]);
            $("#inDayPos-limit").val(riskGroupData[9].replace(/证券-/g, ""));

            $("#overPos-totalLimit").val(riskGroupData[12]);
            $("#overPos-limit").val(riskGroupData[13].replace(/证券-/g, ""));

            $('.nav-tabs a[href="#normal"]').trigger('click');

        }else if (riskGroupData[1].match(/净值\)/g)){//净值

            $("#abs-forceCloseLine").val(riskGroupData[19]);
            $("#abs-warningLine").val(riskGroupData[20]);

            stringToUL(riskGroupData[21],$("#abs-overnightUL"), "(日内)");
            stringToUL(riskGroupData[22],$("#abs-overnightUL"), "(隔夜)");
            $("#abs-inDayOrOvernight").eq(0).prop("selected", true);

            $('.nav-tabs a[href="#abs"]').trigger('click');

        }else {//亏损

            $("#loss-forceCloseLine").val(riskGroupData[15]);
            $("#loss-warningLine").val(riskGroupData[16]);

            stringToUL(riskGroupData[17],$("#loss-overnightUL"), "(日内)");
            stringToUL(riskGroupData[18],$("#loss-overnightUL"), "(隔夜)");
            $("#loss-inDayOrOvernight").eq(0).prop("selected", true);

            $('.nav-tabs a[href="#loss"]').trigger('click');
        }
    }

    $(document).on("click", "#risk-add", function () {
        $(document).off("click", "#newRiskModal .btn-primary");
        setupRiskManageInfo();
        updateCheckBox();
        $('.nav-tabs li').eq(0).addClass("active");//切换到普通tab
        $(document).on("click", "#newRiskModal .btn-primary", {state: 1}, sendRequest);
        $('#riskModal').modal('show');
    });

    $(document).on("click", "#risk-update", function () {
        $(document).off("click", "#newRiskModal .btn-primary");
        setupRiskManageInfo();
        fillRiskModal();
        updateCheckBox();
        $(document).on("click", "#newRiskModal .btn-primary", {state: 3}, sendRequest);
        $('#riskModal').modal('show');
    });

    $(document).on("click", "#risk-delete", function () {
        sendRequest();
    });

    ////////////////////////////////////////////普通风控逻辑部分////////////////////////////////////////////

    //添加合约限制
    $(document).on("click", "#rest-add", function () {
//        var newRestriction = $("#newRiskModal #instrument option:selected").text();
        var newRestriction = $("#newRiskModal #instrument").val();

        var restrictionText = $("textarea");
        if (!restrictionText.val()) {
            restrictionText.val(newRestriction)
        } else {
            restrictionText.val(restrictionText.val() + ";" + newRestriction);
        }
    });

    //清除合约限制
    $(document).on("click", "#rest-clear", function () {
        $("textarea").val("");
    });

    //添加ST
    $(document).on("click", "#rest-addST", function () {
        var restrictionText = $("textarea");
        if (!restrictionText.val()) {
            restrictionText.val("ST股票")
        } else {
            restrictionText.val(restrictionText.val() + ";" + "ST股票");
        }
    });

    //添加隔夜设置
    $(document).on("click", "#normal-overnight-add", function () {
        var overnightSetting = $("#normal-fromTime").val() + "-" + $("#normal-toTime").val();
        if ($('#normal-chosenType').prop('checked')) {
            overnightSetting += " " + $("#normal-chosenTypeName").val();
        }
        $("#normal-overnightUL").append($("<li class='list-group-item'>").text(overnightSetting));
        updateCheckBox();
    });

    //删除隔夜设置
    $(document).on("click", "#normal-overnight-delete", function () {
        $("#normal-overnightUL li.active").remove();
    });

    ////////////////////////////////////////////end of 普通风控逻辑部分////////////////////////////////////////////

    ////////////////////////////////////////////净值风控逻辑部分////////////////////////////////////////////


    //添加隔夜设置
    $(document).on("click", "#abs-overnight-add", function () {
        var overnightSetting = $("#abs-fromTime").val() + "-" + $("#abs-toTime").val();
        if ($('#abs-chosenType').prop('checked')) {
            overnightSetting += " " + $("#abs-chosenTypeName").val();
        }
        overnightSetting += "(隔夜)";
        $("#abs-overnightUL").append($("<li class='list-group-item'>").text(overnightSetting));
        updateCheckBox();
    });

    //添加风控条件设置
    $(document).on("click", "#abs-condition-add", function () {
        var conditionSetting = $("#abs-lower").val() + "," + $("#abs-upper").val() + "," + $("#abs-totalLimit").val() + "," + $("#abs-singleLimit").val();
        $("#abs-instrumentUL li").each(function (idx, li) {
            conditionSetting += "," + $(li).text();
        });

        if ($("#abs-inDayOrOvernight option:selected").index() == 0) {//日内
            conditionSetting += "(日内)";
        } else {//隔夜
            conditionSetting += "(隔夜)";
        }

        $("#abs-overnightUL").append($("<li class='list-group-item'>").text(conditionSetting));
        updateCheckBox();
    });

    //删除设置
    $(document).on("click", "#abs-delete", function () {
        $("#abs-overnightUL li.active").remove();
    });

    ////////////////////////////////////////////end of 净值风控逻辑部分////////////////////////////////////////////

    ////////////////////////////////////////////亏损风控逻辑部分////////////////////////////////////////////


    //添加隔夜设置
    $(document).on("click", "#loss-overnight-add", function () {
        var overnightSetting = $("#loss-fromTime").val() + "-" + $("#loss-toTime").val();
        if ($('#loss-chosenType').prop('checked')) {
            overnightSetting += " " + $("#loss-chosenTypeName").val();
        }
        overnightSetting += "(隔夜)";
        $("#loss-overnightUL").append($("<li class='list-group-item'>").text(overnightSetting));
        updateCheckBox();
    });

    //添加风控条件设置
    $(document).on("click", "#loss-condition-add", function () {
        var conditionSetting = $("#loss-lower").val() + "," + $("#loss-upper").val() + "," + $("#loss-totalLimit").val() + "," + $("#loss-singleLimit").val();
        $("#loss-instrumentUL li").each(function (idx, li) {
            conditionSetting += "," + $(li).text();
        });

        if ($("#loss-inDayOrOvernight option:selected").index() == 0) {//日内
            conditionSetting += "(日内)";
        } else {//隔夜
            conditionSetting += "(隔夜)";
        }

        $("#loss-overnightUL").append($("<li class='list-group-item'>").text(conditionSetting));
        updateCheckBox();
    });

    //删除设置
    $(document).on("click", "#loss-delete", function () {
        $("#loss-overnightUL li.active").remove();
    });

    ////////////////////////////////////////////end of 亏损风控逻辑部分////////////////////////////////////////////


</script>

</body>

</html>
