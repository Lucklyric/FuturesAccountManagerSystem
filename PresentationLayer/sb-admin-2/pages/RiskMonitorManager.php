
<?php
include_once("Template.php");
?>

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">风控员管理</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            风控员
                        </div>

                        <div class="panel-body">
                            <div class="dataTable_wrapper">


                                <!--Modal-->
                                <div class="modal fade" tabindex="-1" role="dialog" id="riskManagerModal"
                                     aria-labelledby="riskManagerModal" aria-hidden="true">
                                    <div class="modal-dialog" id="newRiskManagerModal">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="newMainAccountLabel">风控员设置</h4>
                                            </div>
                                            <div class="modal-body">

                                                <div class="container">
                                                    <div class="row clearfix">
                                                        <div class="col-md-2 column modal-row">
                                                            <label style="margin-top: 8px"
                                                                   for="riskManagerAccount">账户</label>
                                                        </div>
                                                        <div class="col-md-4 column modal-row">
                                                            <input class="form-control" type="text"
                                                                   name="riskManagerAccount" id="riskManagerAccount"
                                                                   value="" placeholder="账户ID"/>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-md-2 column modal-row">
                                                            <label style="margin-top: 8px"
                                                                   for="riskManagerPassword">密码</label>
                                                        </div>
                                                        <div class="col-md-4 column modal-row">
                                                            <input class="form-control" type="password"
                                                                   name="riskManagerPassword" id="riskManagerPassword"
                                                                   value="" placeholder="账户密码"/>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-md-2 column modal-row">
                                                            <label style="margin-top: 8px" for="riskManagerPassword">附属子账户</label>
                                                        </div>
                                                        <div class="col-md-4 column modal-row">
                                                            <div class="well" style="max-height: 300px;overflow: auto;">
                                                                <ul class="list-group checked-list-box"
                                                                    id="subAccountUL">
                                                                    <li class="list-group-item">Cras justo odio</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-md-2 column modal-row">
                                                            <label style="margin-top: 8px"
                                                                   for="riskManagerName">姓名</label>
                                                        </div>
                                                        <div class="col-md-4 column modal-row">
                                                            <input class="form-control" type="text"
                                                                   name="riskManagerName" id="riskManagerName"
                                                                   value="" placeholder="姓名"/>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-md-2 column modal-row">
                                                            <label style="margin-top: 8px" for="riskManagerContact">联系方式</label>
                                                        </div>
                                                        <div class="col-md-4 column modal-row">
                                                            <input class="form-control" type="text"
                                                                   name="riskManagerContact" id="riskManagerContact"
                                                                   value="" placeholder="联系方式"/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--<div width="30%">-->


                                                <!--<div class="form-group">-->
                                                <!--<div class="radio" id="blackOrWhite">-->
                                                <!--<label><input type="radio" name="black">黑名单</label>-->
                                                <!--</div>-->
                                                <!--<div class="radio">-->
                                                <!--<label><input type="radio" name="white">白名单</label>-->
                                                <!--</div>-->
                                                <!--</div>-->

                                                <!--</div>-->

                                                <!--<div class="form-group">-->

                                                <!--<label for="company">经纪公司</label>-->

                                                <!--<select  style="float: right; width: 50%" class="form-control" id="company">-->
                                                <!--<option>CTP</option>-->
                                                <!--<option>CTP</option>-->
                                                <!--<option>CTP</option>-->
                                                <!--<option>CTP</option>-->
                                                <!--<option>CTP</option>-->
                                                <!--</select>-->
                                                <!--</div>-->

                                                <!--<div class="form-group">-->

                                                <!--<label for="server">服务器</label>-->

                                                <!--<select  style="float: right; width: 50%" class="form-control" id="server">-->
                                                <!--<option>上海电信</option>-->
                                                <!--<option>上海电信</option>-->
                                                <!--<option>上海电信</option>-->
                                                <!--<option>上海电信</option>-->
                                                <!--<option>上海电信</option>-->
                                                <!--</select>-->
                                                <!--</div>-->


                                                <!--<div class="form-group">-->
                                                <!--<label for="userId">账户ID</label>-->
                                                <!--<input class="form-control" style="float: right; width: 50%" type="text" name="userId" id="userId"-->
                                                <!--value="" placeholder="账户ID"/>-->
                                                <!--</div>-->

                                                <!--<div class="form-group">-->
                                                <!--<label for="userPassword">账户密码</label>-->
                                                <!--<input  class="form-control" style="float: right; width: 50%" type="password" name="userPassword"-->
                                                <!--id="userPassword" value="" placeholder="账户密码"/>-->
                                                <!--</div>-->


                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">取消
                                                </button>
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">确定
                                                </button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!--/.modal-->


                                <table id="riskMonitorTable" class="table table-striped table-bordered table-hover"
                                       cellspacing="0" width="100%">

                                    <div class="subAccountToolbar" style="float:left">
                                        <button type="button" class="btn btn-success" id="riskManager-add"
                                                data-toggle="modal">
                                            添加风控员
                                        </button>
                                        <button type="button" class="btn btn-warning" id="riskManager-update"
                                                data-toggle="modal">
                                            修改风控员
                                        </button>
                                        <button type="button" class="btn btn-danger" id="riskManager-delete"
                                                data-toggle="modal">
                                            删除风控员
                                        </button>
                                    </div>
                                    <thead>
                                    <tr>
                                        <th>编号</th>
                                        <th>名称</th>
                                        <th>密码</th>
                                        <th>附属子账户</th>
                                        <th>姓名</th>
                                        <th>联系方式</th>
                                    </tr>
                                    </thead>

                                    <tfoot>
                                    <tr>
                                        <th>编号</th>
                                        <th>名称</th>
                                        <th>密码</th>
                                        <th>附属子账户</th>
                                        <th>姓名</th>
                                        <th>联系方式</th>
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

    var riskMonitorTable;
    var riskMonitorTableData;
    var riskMonitorData = [];
    var subAccounts = [];
    var selectedIndex = 0;  //mainSelectedIndex
    var toolBarManger = new SSToolBar($("#restartServer"), $("#connectMainAccount"), $("#onlineCount"), $("#serverStatus"));
    /**
     * Document加载完毕 更新数据刷新Table绑定点击事件
     */
    $(document).ready(function () {
        ifHideMainAccountToolBar(true);
        refreshSubAccounts(1);
        refreshMainTable();
        refreshData(1); //更新数据

        $('#riskMonitorTable').on('click', 'tr', function () { //绑定点击事件刷新子账户
            selectedIndex = riskMonitorTable.row(this).index();
            ifHideMainAccountToolBar(false);
            //refreshMainTable();
            if ($(this).hasClass('selected')) {
                //$(this).removeClass('selected');
            }
            else {
                riskMonitorTable.$('tr.selected').removeClass('selected');
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
        riskMonitorData = [];
        var table = $('#riskMonitorTable').dataTable();
        table.fnProcessingIndicator();      // On
        console.log("开始刷新数据");
        //mainAccountTable.fnProcessingIndicator();
        if (flag === undefined) {
            if (sessionStorage.getItem('riskMonitorData')) {
                riskMonitorData = JSON.parse(sessionStorage.getItem('riskMonitorData'));
                refreshMainTable();
                return;
            }
        }
        $.getJSON('../../../../FuturesAccountManagerSystem/BusinessLogicLayer/RiskMonitors/Refresh.php?AdminAccount='+superAdminId+'&AdminPassword='+superAdminPwd, function (data) {
            riskMonitorTableData = data.data;
            console.log(riskMonitorTableData[0]);
            for (var i = 0; i < riskMonitorTableData.length; i++) {
                riskMonitorData.push(riskMonitorTableData[i]);
            }
            console.log("取到数据");
            sessionStorage.setItem('riskMonitorData', JSON.stringify(riskMonitorData));
            refreshMainTable();
        });
        setAdminCookie("sharpspeedadminaccount", superAdminId, 30*1/24/60);
        setAdminCookie("sharpspeedadminpassword", superAdminPwd, 30*1/24/60);
    }
    /**
     * 刷新子账户
     */
    function refreshSubAccounts(flag) {
        if (flag === undefined) {
            if (sessionStorage.getItem('localSettlement')) {
                subAccounts = JSON.parse(sessionStorage.getItem('localSettlement'));
                console.log("长度"+subAccounts.length);
                return;
            }
        }
        //mainAccountTable.fnProcessingIndicator();

        $.getJSON('../../../../FuturesAccountManagerSystem/BusinessLogicLayer/Settlement/Refresh.php?AdminAccount='+superAdminId+'&AdminPassword='+superAdminPwd, function (data) {
            subAccounts = [];
            for (var i = 0; i < data.data.length; i++) {
                subAccounts.push(data.data[i]);
            }
            console.log("长度"+subAccounts.length);
            sessionStorage.setItem('localSettlement', JSON.stringify(subAccounts));
        });
        setAdminCookie("sharpspeedadminaccount", superAdminId, 30*1/24/60);
        setAdminCookie("sharpspeedadminpassword", superAdminPwd, 30*1/24/60);
    }

    /**
     * 刷新主账户表格
     */
    function refreshMainTable() {
        var container = $('#riskMonitorTable,div.dataTables_scrollBody');
        if ($.fn.dataTable.isDataTable('#riskMonitorTable')) {
            console.log("刷新表格");
            console.log(riskMonitorData[0]);
            var tmpOffset = container.scrollTop();
            riskMonitorTable.clear();
            for (var i = 0; i < riskMonitorData.length; i++) {
                riskMonitorTable.row.add(riskMonitorData[i]);
            }
            riskMonitorTable.draw();
            var table = $('#riskMonitorTable').dataTable();
            table.fnProcessingIndicator(false);      // On
            container.scrollTop(tmpOffset);
        }
        else {
            console.log("开始构建主表");
            riskMonitorTable = $('#riskMonitorTable').DataTable({
                "processing": true,
                "data": riskMonitorData,
                "scrollY": "500px",
                "scrollCollapse": false,
                "paging": false,
                "scrollX": true,
                "dom": '<"riskMonitorToolbar"f>rlpti',
                "language": {
                    "search": "搜索:",
                    "info": "显示 _START_ 到 _END_ 共 _TOTAL_ 记录",
                    "infoEmpty": "显示 0 到 0 共 0 记录",
                    "emptyTable": "暂无可显示数据",
                    "processing": "正在加载......"
                }
            });

        }
        riskMonitorTable.row(selectedIndex).nodes().to$().addClass('selected');
        ifHideMainAccountToolBar(true);
    }


</script>

<script>

    function addNewRiskManager(){
        if (subAccounts.length == 0)return;
        //modal 确定 逻辑处理
            var checkedSubAccounts = getCheckedItems().join(";");
            var riskManagerAccount = $("#newRiskManagerModal #riskManagerAccount").val();
            var riskManagerPassword = $("#newRiskManagerModal #riskManagerPassword").val();
            var riskManagerName = $("#newRiskManagerModal #riskManagerName").val();
            var riskManagerContact = $("#newRiskManagerModal #riskManagerContact").val();

            //TODO: 应该做 validate
            //ajax 发送插入

            var hostpath = "../../../../FuturesAccountManagerSystem/BusinessLogicLayer/RiskMonitors/InsertData.php";

            $.ajax({
                url: hostpath,
                type: "get", //send it through get method
                data:{
                    Id: riskManagerAccount,
                    Password: riskManagerPassword,
                    SubAccount: checkedSubAccounts,
                    Name: riskManagerName,
                    Contact: riskManagerContact,
                    SystemId : 0,
                    State: 1,
                    AdminAccount: superAdminId,
                    AdminPassword: superAdminPwd
                },
                success: function(response) {
                    response = JSON.parse(response);
                    if(response==''){
                        $('#generalNotificationBody').text('成功');
                    }else{
                        $('#generalNotificationBody').text(response);
                    }
                    $('#generalNotification').modal('show');
                    refreshData(1);
                },
                error: function(xhr) {
                    //Do Something to handle error
                }
            });
    }

    function updateRiskManager(){
        if (subAccounts.length == 0)return;
        //modal 确定 逻辑处理
        var riskManagerInfo = riskMonitorData[selectedIndex];

        var checkedSubAccounts = getCheckedItems().join(";");
        var riskManagerAccount = $("#newRiskManagerModal #riskManagerAccount").val();
        var riskManagerPassword = $("#newRiskManagerModal #riskManagerPassword").val();
        var riskManagerName = $("#newRiskManagerModal #riskManagerName").val();
        var riskManagerContact = $("#newRiskManagerModal #riskManagerContact").val();
        var systemId = riskManagerInfo[0];


        //TODO: 应该做 validate
        //ajax 发送插入

        //TODO: PHP有问题，修改PHP
        var hostpath = "../../../../FuturesAccountManagerSystem/BusinessLogicLayer/RiskMonitors/InsertData.php";

        $.ajax({
            url: hostpath,
            type: "get", //send it through get method
            data:{
                Id: riskManagerAccount,
                Password: riskManagerPassword,
                SubAccount: checkedSubAccounts,
                Name: riskManagerName,
                Contact: riskManagerContact,
                SystemId : systemId,
                State: 3,
                AdminAccount: superAdminId,
                AdminPassword: superAdminPwd
            },
            success: function(response) {
                response = JSON.parse(response);
                if(response==''){
                    $('#generalNotificationBody').text('成功');
                }else{
                    $('#generalNotificationBody').text(response);
                }
                $('#generalNotification').modal('show');
                refreshData(1);
            },
            error: function(xhr) {
                //Do Something to handle error
            }
        });
    }

    function deleteRiskManager(){
        if (subAccounts.length == 0)return;
        var riskManagerInfo = riskMonitorData[selectedIndex];

        var checkedSubAccounts = riskManagerInfo[3];
        var riskManagerAccount = riskManagerInfo[1];
        var riskManagerPassword = riskManagerInfo[2];
        var riskManagerName = riskManagerInfo[4];
        var riskManagerContact = riskManagerInfo[5];
        var systemId = riskManagerInfo[0];

        //TODO: 应该做 validate
        //ajax 发送插入

        //TODO: PHP有问题，修改PHP
        var hostpath = "../../../../FuturesAccountManagerSystem/BusinessLogicLayer/RiskMonitors/InsertData.php";

        $.ajax({
            url: hostpath,
            type: "get", //send it through get method
            data:{
                Id: riskManagerAccount,
                Password: riskManagerPassword,
                SubAccount: checkedSubAccounts,
                Name: riskManagerName,
                Contact: riskManagerContact,
                SystemId : systemId,
                State: 2,
                AdminAccount: superAdminId,
                AdminPassword: superAdminPwd
            },
            success: function(response) {
                response = JSON.parse(response);
                if(response==''){
                    $('#generalNotificationBody').text('成功');
                }else{
                    $('#generalNotificationBody').text(response);
                }
                $('#generalNotification').modal('show');
                selectedIndex = 0;
                refreshData(1);
            },
            error: function(xhr) {
                //Do Something to handle error
            }
        });
    }


    function ifHideMainAccountToolBar(flag) {

        if (flag) {
            $('#riskManager-update').hide();
            $('#riskManager-delete').hide();
        } else {
            $('#riskManager-update').show();
            $('#riskManager-delete').show();
        }

        if(riskMonitorData.length == 0){
            $('#riskManager-update').hide();
            $('#riskManager-delete').hide();
        }else{
            $('#riskManager-update').show();
            $('#riskManager-delete').show();
        }
    }

    function setRiskMonitorInfo() {
        //clear existing contents
        $("#newRiskManagerModal #riskManagerAccount").val("");
        $("#newRiskManagerModal #riskManagerPassword").val("");
        $("#newRiskManagerModal #riskManagerName").val("");
        $("#newRiskManagerModal #riskManagerContact").val("");

        $("#newRiskManagerModal #riskManagerAccount").removeAttr('disabled');

        //add subAccounts
        var subAccountUL = $("#newRiskManagerModal #subAccountUL");
        subAccountUL.empty();
        for (var i = 0; i < subAccounts.length; i++) {
            subAccountUL.append($("<li class='list-group-item'>").text(subAccounts[i][1]));
        }
        updateCheckBox();
    }

    //暂时无法测试
    function fillRiskManagerModal(){
        var riskManagerInfo = riskMonitorData[selectedIndex];
        $("#newRiskManagerModal #riskManagerAccount").val(riskManagerInfo[1]);
        $("#newRiskManagerModal #riskManagerPassword").val(riskManagerInfo[2]);
        $("#newRiskManagerModal #riskManagerName").val(riskManagerInfo[4]);
        $("#newRiskManagerModal #riskManagerContact").val(riskManagerInfo[5]);

        $("#newRiskManagerModal #riskManagerAccount").attr('disabled','disabled');

        var subAccountArray = riskManagerInfo[3].split(";");

        $("#subAccountUL li").each(function (idx, li) {
            var subId = $(li).text();
           // alert(subID);
            if (subAccountArray.indexOf(subId) > -1) { //找到
                $(li).click();//高亮
            }
            //TODO: checkbox
        });
    }

    function getCheckedItems () {
        var checkedItems = [], counter = 0;
        $("#subAccountUL li.active").each(function (idx, li) {
            checkedItems[counter] = $(li).text();
            counter++;
        });
        return checkedItems;
    }

    //显示modal //SY这边添加添删改的功能
    $(document).on("click", "#riskManager-add", function () {

        $(document).off("click", "#newRiskManagerModal .btn-primary");
        setRiskMonitorInfo();
        $(document).on("click", "#newRiskManagerModal .btn-primary", addNewRiskManager);
        $('#riskManagerModal').modal('show');
    });

    //显示modal //SY这边添加添删改的功能
    $(document).on("click", "#riskManager-update", function () {
        $(document).off("click", "#newRiskManagerModal .btn-primary");
        setRiskMonitorInfo();
        fillRiskManagerModal();
        $(document).on("click", "#newRiskManagerModal .btn-primary", updateRiskManager);
        $('#riskManagerModal').modal('show');
    });

    $(document).on("click", "#riskManager-delete", function () {
        deleteRiskManager();
    });

</script>


</body>

</html>
