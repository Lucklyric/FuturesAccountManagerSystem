<?php
include_once("Template.php");
?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">费率管理</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            基础费率设置
                        </div>
                        <div class="panel-body">

                            <div class="form-inline" role="form">
                                <div class="form-group">
                                    交易费=期货公司交易的
                                    <input class="form-control" id="ratio1" type="text">倍
                                </div>
                                <div class="form-group">
                                    手续费=期货公司交易的
                                    <input class="form-control" id="ratio2" type="text">倍
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary" id="confirmRatio">确定</button>
                                </div>

                            </div>

                            <!--<div class="row">-->
                            <!--<span>交易费=期货公司交易的</span>-->
                            <!--<div class="col-xs-2">-->
                            <!--<input type="text" class="form-control" id ='ration1' text='1'>倍-->
                            <!--</div>-->
                            <!--<div class="col-xs-2">-->
                            <!--<span>保证金=期货公司交易的</span><input type="text" class="form-control" id="ration2"text="1">倍-->
                            <!--</div>-->


                            <!--</div>-->

                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            管理
                        </div>

                        <div class="panel-body">
                            <div class="dataTable_wrapper">


                                <!--Modal-->
                                <div class="modal fade" tabindex="-1" role="dialog" id="feesettingModal"
                                     aria-labelledby="feesettingModal" aria-hidden="true">
                                    <div class="modal-dialog" id="newFeesettingModal">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="newFeesettingLabel">费率设置</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container">
                                                    <div class="row clearfix">
                                                        <div class="col-md-2 column modal-row">
                                                            <label style="margin-top: 8px">组名称</label>
                                                        </div>
                                                        <div class="col-md-4 column modal-row">
                                                            <div class="form-group">
                                                                <div class="radio row clearfix" id="newOrUseExisting">
                                                                    <div style="margin-top: 8px"
                                                                         class="col-md-6 column modal-row">
                                                                        <label><input type="radio"
                                                                                      name="newOrUseExisting" onclick="handleNewGroup()">新建组</label>
                                                                    </div>
                                                                    <div class="col-md-6 column modal-row">
                                                                        <input class="form-control" type="text"
                                                                               name="feesettingGroup"
                                                                               id="feesettingGroup"
                                                                               value="" placeholder="新建组名称(必填)"/>
                                                                    </div>
                                                                </div>
                                                                <div class="radio row clearfix">
                                                                    <div style="margin-top: 8px"
                                                                         class="col-md-6 column modal-row">
                                                                        <label><input type="radio" name="newOrUseExisting" onclick="handleUseExistingGroup()">使用已有组</label>
                                                                    </div>
                                                                    <div class="col-md-6 column modal-row">
                                                                        <select class="form-control" id="existingGroup">
                                                                            <option>1</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-md-2 column modal-row">
                                                            <label style="margin-top: 8px">交易所</label>
                                                        </div>
                                                        <div class="col-md-4 column modal-row">
                                                            <select class="form-control" id="channel">
                                                                <option>1</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-md-2 column modal-row">
                                                            <label style="margin-top: 8px">手续费类型</label>
                                                        </div>
                                                        <div class="col-md-4 column modal-row">
                                                            <select class="form-control" id="feeType">
                                                                <option>固定金额</option>
                                                                <option>百分比</option>
                                                                <option>万分比</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-md-2 column modal-row">
                                                            <label style="margin-top: 8px">开仓手续费</label>
                                                        </div>
                                                        <div class="col-md-4 column modal-row">
                                                            <input class="form-control" type="text"
                                                                   name="openPositionFee" id="openPositionFee"
                                                                   value="" placeholder="开仓手续费(必填)"/>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-md-2 column modal-row">
                                                            <label style="margin-top: 8px">平仓手续费</label>
                                                        </div>
                                                        <div class="col-md-4 column modal-row">
                                                            <input class="form-control" type="text"
                                                                   name="closePositionFee" id="closePositionFee"
                                                                   value="" placeholder="平仓手续费(必填)"/>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-md-2 column modal-row">
                                                            <label style="margin-top: 8px">平今手续费</label>
                                                        </div>
                                                        <div class="col-md-4 column modal-row">
                                                            <input class="form-control" type="text"
                                                                   name="closeNowFee" id="closeNowFee"
                                                                   value="" placeholder="平今手续费(必填)"/>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-md-2 column modal-row">
                                                            <label style="margin-top: 8px">保证金比例</label>
                                                        </div>
                                                        <div class="col-md-4 column modal-row">
                                                            <input class="form-control" type="text"
                                                                   name="deposit" id="deposit"
                                                                   value="" placeholder="保证金比例(可选)"/>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-md-2 column modal-row">
                                                            <label style="margin-top: 8px">(保证金填0代表使用默认值)</label>
                                                        </div>
                                                    </div>
                                                </div>


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

                                <table id="feeSettingTable" class="table table-striped table-bordered table-hover"
                                       cellspacing="0" width="100%">

                                    <div class="feeSettingToolbar" style="float:left">
                                        <button type="button" class="btn btn-success" id="feesetting-add"
                                                data-toggle="modal">
                                            添加费率设置
                                        </button>
                                        <button type="button" class="btn btn-warning" id="feesetting-update"
                                                data-toggle="modal">
                                            修改费率设置
                                        </button>
                                        <button type="button" class="btn btn-danger" id="feesetting-delete"
                                                data-toggle="modal">
                                            删除费率设置
                                        </button>
                                    </div>
                                    <thead>
                                    <tr>
                                        <th>组名称</th>
                                        <th>合约</th>
                                        <th>开仓手续费</th>
                                        <th>平仓手续费</th>
                                        <th>平今手续费</th>
                                        <th>手续费类型</th>
                                        <th>保证金比例</th>
                                    </tr>
                                    </thead>

                                    <tfoot>
                                    <tr>
                                        <th>组名称</th>
                                        <th>合约</th>
                                        <th>开仓手续费</th>
                                        <th>平仓手续费</th>
                                        <th>平今手续费</th>
                                        <th>手续费类型</th>
                                        <th>保证金比例</th>
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
    /**
     * 定义全局变量
     */

    var feeSettingGroups = {};
    var feeSettingTable;
    var feeSettingTableData;
    var feeSettingData = [];
    var selectedIndex = 0;  //mainSelectedIndex
    var toolBarManger = new SSToolBar($("#restartServer"), $("#connectMainAccount"), $("#onlineCount"), $("#serverStatus"));
    /**
     * Document加载完毕 更新数据刷新Table绑定点击事件
     */
    $(document).ready(function () {
        // ifHideMainAccountToolBar(true);
        refreshMainTable();
        refreshData(); //更新数据

        $('#feeSettingTable').on('click', 'tr', function () { //绑定点击事件刷新子账户
            selectedIndex = feeSettingTable.row(this).index();
            ifHideMainAccountToolBar(false);
            //refreshMainTable();
            if ($(this).hasClass('selected')) {
                //$(this).removeClass('selected');
            }
            else {
                feeSettingTable.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
            $('.modal-dialog').modal('show');
        });


    });
</script>

<script>
    /**
     * Ajax从服务端取数据
     */
    function refreshData(flag) {
        feeSettingData = [];
        ifHideMainAccountToolBar(true);
        var table = $('#feeSettingTable').dataTable();
        table.fnProcessingIndicator();      // On
        console.log("开始刷新数据");
        //mainAccountTable.fnProcessingIndicator();
        if (flag === undefined) {
            if (sessionStorage.getItem('ratioTypes')) {
                feeSettingData = JSON.parse(sessionStorage.getItem('ratioTypes'));
                refreshMainTable();
                return;
            }
        }

        $.getJSON('../../../../FuturesAccountManagerSystem/BusinessLogicLayer/FeeSetting/Refresh.php', function (data) {
            feeSettingTableData = data.data;
            console.log(feeSettingTableData[0]);
            for (var i = 0; i < feeSettingTableData.length; i++) {
                feeSettingData.push(feeSettingTableData[i]);
//                if (!(feeSettingTableData[i][0] in feeSettingGroups)){
//                    feeSettingGroups[feeSettingTableData[i][0]] = 1;
//                }
            }
            console.log("取到数据");
            sessionStorage.setItem('ratioTypes', JSON.stringify(feeSettingData));
            refreshMainTable();
        });
    }


    /**
     * 刷新主账户表格
     */
    function refreshMainTable() {
        if ($.fn.dataTable.isDataTable('#feeSettingTable')) {
            console.log("刷新表格");
            console.log(feeSettingData[0]);
            feeSettingTable.clear();
            for (var i = 0; i < feeSettingData.length; i++) {
                feeSettingTable.row.add(feeSettingData[i]);
            }
            feeSettingTable.draw();
            var table = $('#feeSettingTable').dataTable();
            table.fnProcessingIndicator(false);      // On
        }
        else {
            console.log("开始构建主表");
            feeSettingTable = $('#feeSettingTable').DataTable({
                "processing": true,
                "data": feeSettingData,
                "scrollY": "500px",
                "scrollCollapse": false,
                "paging": false,
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

</script>

<script>

    function ifHideMainAccountToolBar(flag) {

        if (flag) {
            $('#feesetting-update').hide();
            $('#feesetting-delete').hide();
        } else {
            $('#feesetting-update').show();
            $('#feesetting-delete').show();
        }
    }

    //提交比例修改
    $('#confirmRatio').on('click', function () {
        console.log("提交比例修改");
    });
</script>

<script>

    function handleNewGroup(){
        $("#newFeesettingModal #feesettingGroup").removeAttr('disabled');
        $("#newFeesettingModal #existingGroup").attr('disabled','disabled');
    }

    function handleUseExistingGroup(){
        $("#newFeesettingModal #existingGroup").removeAttr('disabled');
        $("#newFeesettingModal #feesettingGroup").attr('disabled','disabled');
    }

//    function addNewAdminManager(){
//        //    $Id="12";
////    $Name="GCtest";
////    $Password="testpass";
////    $SubMain="1";
////    $Restriction="2";
////    $UserName="GameCloud";
////    $Contact="CA";
//
//        //modal 确定 逻辑处理
//        var checkedMainAccounts = getCheckedItems().toString();
//        var adminManagerAccount = $("#newAdminManagerModal #adminManagerAccount").val();
//        var adminManagerPassword = $("#newAdminManagerModal #adminManagerPassword").val();
//        var adminManagerName = $("#newAdminManagerModal #adminManagerName").val();
//        var adminManagerContact = $("#newAdminManagerModal #adminManagerContact").val();
//        var accountAdmin = $("#newAdminManagerModal #accountAdmin :selected").val();
//        var moneyAdmin = $("#newAdminManagerModal #moneyAdmin :selected").val();
//        var riskAdmin = $("#newAdminManagerModal #riskAdmin :selected").val();
//        var rateAdmin = $("#newAdminManagerModal #rateAdmin :selected").val();
//        var riskManagerAdmin = $("#newAdminManagerModal #riskManagerAdmin :selected").val();
//        var restriction = "0-" + accountAdmin + ",1-" + moneyAdmin + ",2-" + riskAdmin + ",3-" + rateAdmin + ",4-" + riskManagerAdmin;
//
//        alert(checkedMainAccounts);
//
//        //TODO: 应该做 validate
//        //ajax 发送插入
//
//        var hostpath = "../../../../FuturesAccountManagerSystem/BusinessLogicLayer/Administrator/InsertData.php";
//
//        $.ajax({
//            url: hostpath,
//            type: "get", //send it through get method
//            data:{
//                Id: 0,
//                Name: adminManagerAccount,
//                Password: adminManagerPassword,
//                SubMain: checkedMainAccounts,
//                Restriction: restriction,
//                UserName: adminManagerName,
//                Contact: adminManagerContact,
//                State: 1
//            },
//            success: function(response) {
//                alert( "Data Loaded: " + response);
//            },
//            error: function(xhr) {
//                //Do Something to handle error
//            }
//        });
//    }

//    function updateAdminManager(){
//
//        var adminManagerInfo = adminManagerData[selectedIndex];
//        var systemId = adminManagerInfo[0];
//
//        var checkedMainAccounts = getCheckedItems().toString();
//        var adminManagerAccount = $("#newAdminManagerModal #adminManagerAccount").val();
//        var adminManagerPassword = $("#newAdminManagerModal #adminManagerPassword").val();
//        var adminManagerName = $("#newAdminManagerModal #adminManagerName").val();
//        var adminManagerContact = $("#newAdminManagerModal #adminManagerContact").val();
//        var accountAdmin = $("#newAdminManagerModal #accountAdmin :selected").val();
//        var moneyAdmin = $("#newAdminManagerModal #moneyAdmin :selected").val();
//        var riskAdmin = $("#newAdminManagerModal #riskAdmin :selected").val();
//        var rateAdmin = $("#newAdminManagerModal #rateAdmin :selected").val();
//        var riskManagerAdmin = $("#newAdminManagerModal #riskManagerAdmin :selected").val();
//        var restriction = "0-" + accountAdmin + ",1-" + moneyAdmin + ",2-" + riskAdmin + ",3-" + rateAdmin + ",4-" + riskManagerAdmin;
//
//        alert(checkedMainAccounts);
//
//        //TODO: 应该做 validate
//        //ajax 发送插入
//
//        var hostpath = "../../../../FuturesAccountManagerSystem/BusinessLogicLayer/Administrator/InsertData.php";
//
//        $.ajax({
//            url: hostpath,
//            type: "get", //send it through get method
//            data:{
//                Id: systemId,
//                Name: adminManagerAccount,
//                Password: adminManagerPassword,
//                SubMain: checkedMainAccounts,
//                Restriction: restriction,
//                UserName: adminManagerName,
//                Contact: adminManagerContact,
//                State: 3
//            },
//            success: function(response) {
//                alert( "Data Loaded: " + response);
//            },
//            error: function(xhr) {
//                //Do Something to handle error
//            }
//        });
//    }

//    function deleteAdminManager(){
//        var adminManagerInfo = adminManagerData[selectedIndex];
//
//        var adminManagerAccount = adminManagerInfo[1];
//        var adminManagerPassword = adminManagerInfo[2];
//        var checkedMainAccounts = adminManagerInfo[3];
//        var systemId = adminManagerInfo[0];
//        var adminManagerName = adminManagerInfo[5];
//        var adminManagerContact = adminManagerInfo[6];
//        var restriction = adminManagerInfo[4];
//
//        //TODO: 应该做 validate
//        //ajax 发送插入
//
//        //TODO: PHP有问题，修改PHP
//        var hostpath = "../../../../FuturesAccountManagerSystem/BusinessLogicLayer/Administrator/InsertData.php";
//
//        $.ajax({
//            url: hostpath,
//            type: "get", //send it through get method
//            data:{
//                Name: adminManagerAccount,
//                Password: adminManagerPassword,
//                SubMain: checkedMainAccounts,
//                Id: systemId,
//                Restriction: restriction,
//                UserName: adminManagerName,
//                Contact: adminManagerContact,
//                State: 2
//            },
//            success: function(response) {
//                alert( "Data Loaded: " + response);
//            },
//            error: function(xhr) {
//                //Do Something to handle error
//            }
//        });
//    }

    //设置费率信息
    function setFeesettingInfo() {
        //clear existing contents
        $("#newFeesettingModal #openPositionFee").val("");
        $("#newFeesettingModal #closePositionFee").val("");
        $("#newFeesettingModal #closeNowFee").val("");
        $("#newFeesettingModal #deposit").val("");

        for (var groupName in feeSettingGroups){
            alert(groupName);
        }
//        $("#newAdminManagerModal #accountAdmin option").eq(0).attr("selected","selected");
//        $("#newAdminManagerModal #moneyAdmin option").eq(0).attr("selected","selected");
//        $("#newAdminManagerModal #riskAdmin option").eq(0).attr("selected","selected");
//        $("#newAdminManagerModal #rateAdmin option").eq(0).attr("selected","selected");
//        $("#newAdminManagerModal #riskManagerAdmin option").eq(0).attr("selected","selected");
//
//        //add mainAccounts
//        var mainAccountUL = $("#newAdminManagerModal #mainAccountUL");
//        mainAccountUL.empty();
//        for (var i = 0; i < mainAccountTableData.length; i++) {
//            mainAccountUL.append($("<li class='list-group-item'>").text(mainAccountTableData[i].inf[0]));
//        }
//
//        updateCheckBox();
    }

//    function fillAdminManagerModal(){
//        var adminManagerInfo = adminManagerData[selectedIndex];
//
//        $("#newAdminManagerModal #adminManagerAccount").val(adminManagerInfo[1]);
//        $("#newAdminManagerModal #adminManagerPassword").val(adminManagerInfo[2]);
//        $("#newAdminManagerModal #adminManagerName").val(adminManagerInfo[5]);
//        $("#newAdminManagerModal #adminManagerContact").val(adminManagerInfo[6]);
//
//        var mainAccountArray = adminManagerInfo[3].split(",");
//
//        $("#mainAccountUL li").each(function (idx, li) {
//            var subId = $(li).text();
//            if (mainAccountArray.indexOf(subId) > -1) //找到
//                $(li).click();  //高亮
//        });
//
//        var restrictionArray = adminManagerInfo[4].split(",");
//
//        var accountAdmin = restrictionArray[0].slice(-1);
//        var accountAdminOption = $("#newAdminManagerModal #accountAdmin option");
//        accountAdminOption.eq(accountAdmin).attr('selected', 'selected');
//
//        var moneyAdmin = restrictionArray[1].slice(-1);
//        var moneyAdminOption = $("#newAdminManagerModal #moneyAdmin option");
//        moneyAdminOption.eq(moneyAdmin).attr('selected', 'selected');
//
//        var riskAdmin = restrictionArray[2].slice(-1);
//        var riskAdminOption = $("#newAdminManagerModal #riskAdmin option");
//        riskAdminOption.eq(riskAdmin).attr('selected', 'selected');
//
//        var rateAdmin = restrictionArray[3].slice(-1);
//        var rateAdminOption = $("#newAdminManagerModal #rateAdmin option");
//        rateAdminOption.eq(rateAdmin).attr('selected', 'selected');
//
//        var riskManagerAdmin = restrictionArray[4].slice(-1);
//        var riskManagerAdminOption = $("#newAdminManagerModal #riskManagerAdmin option");
//        riskManagerAdminOption.eq(riskManagerAdmin).attr('selected', 'selected');
//
//    }

//    function getCheckedItems () {
//        var checkedItems = [], counter = 0;
//        $("#mainAccountUL li.active").each(function (idx, li) {
//            checkedItems[counter] = $(li).text();
//            counter++;
//        });
//        return checkedItems;
//    }

    $(document).on("click", "#feesetting-add", function () {
        $(document).off("click", "#newFeesettingModal .btn-primary");
        setFeesettingInfo();
//        $(document).on("click", "#newFeesettingModal .btn-primary", addNewAdminManager);
        $('#feesettingModal').modal('show');
    });

//    $(document).on("click", "#admin-update", function () {
//        $(document).off("click", "#newAdminManagerModal .btn-primary");
//        setAdminManagerInfo();
//        fillAdminManagerModal();
//        $(document).on("click", "#newAdminManagerModal .btn-primary", updateAdminManager);
//        $('#adminManagerModal').modal('show');
//    });

//    $(document).on("click", "#admin-delete", function () {
//        deleteAdminManager();
//    });
</script>

</body>

</html>
