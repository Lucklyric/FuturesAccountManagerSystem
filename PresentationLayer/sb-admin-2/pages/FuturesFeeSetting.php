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
                                    <input class="form-control" id="commission" type="text">倍
                                </div>
                                <div class="form-group">
                                    保证金=期货公司保证金的
                                    <input class="form-control" id="margin" type="text">倍
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary" id="confirmRatio">确定</button>
                                </div>

                            </div>
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
                                                                <div class="radio row clearfix">
                                                                    <div style="margin-top: 8px"
                                                                         class="col-md-6 column modal-row">
                                                                        <label><input type="radio" id="new"
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
                                                                        <label><input type="radio" id="existing" name="newOrUseExisting" onclick="handleUseExistingGroup()">使用已有组</label>
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
                                                            <select class="form-control" id="exchange">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-md-2 column modal-row">
                                                            <label style="margin-top: 8px">品种</label>
                                                        </div>
                                                        <div class="col-md-4 column modal-row">
                                                            <select class="form-control" id="instrument">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-md-2 column modal-row">
                                                            <label style="margin-top: 8px">手续费类型</label>
                                                        </div>
                                                        <div class="col-md-4 column modal-row">
                                                            <select class="form-control" id="feeType">
                                                                <option value="绝对值">绝对值</option>
                                                                <option value="百分比">百分比</option>
                                                                <option value="万分比">万分比</option>
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
                                                <button type="button" class="btn btn-primary">确定
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
                                        <button type="button" class="btn btn-warning" id="feesetting-update" style="display : none"
                                                data-toggle="modal">
                                            修改费率设置
                                        </button>
                                        <button type="button" class="btn btn-danger" id="feesetting-delete" style="display : none"
                                                data-toggle="modal">
                                            删除费率设置
                                        </button>
                                    </div>
                                    <thead>
                                    <tr>
                                        <th>编号</th>
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
                                        <th>编号</th>
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
    /**
     * 定义全局变量
     */

    var instrumentData;
    var feeSettingGroups = {};
    var feeSettingTable;
    var feeSettingTableData;
    var feeSettingData = [];
    var multiplierData;
    var selectedIndex = 0;  //mainSelectedIndex
    var toolBarManger = new SSToolBar($("#restartServer"), $("#connectMainAccount"), $("#onlineCount"), $("#serverStatus"));
    /**
     * Document加载完毕 更新数据刷新Table绑定点击事件
     */
    $(document).ready(function () {
        // ifHideMainAccountToolBar(true);
        refreshMainTable();
        refreshData(1); //更新数据

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
                instrumentData = JSON.parse(sessionStorage.getItem('instrumentData'));
                multiplierData = JSON.parse(sessionStorage.getItem('multiplierData'));
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

        $.getJSON('../../../../FuturesAccountManagerSystem/BusinessLogicLayer/FeeSetting/Refresh.php?AdminAccount='+superAdminId+'&AdminPassword='+superAdminPwd, function (data) {
            feeSettingTableData = data.data;
            console.log(feeSettingTableData[0]);
            for (var i = 0; i < feeSettingTableData.length; i++) {
                if (feeSettingTableData[i][1].match(/\(期货\)/)){
                    feeSettingData.push(feeSettingTableData[i]);
                }
            }
            console.log("取到数据");
            sessionStorage.setItem('ratioTypes', JSON.stringify(feeSettingData));
            refreshMainTable();
        });

        $.getJSON('../../../../FuturesAccountManagerSystem/BusinessLogicLayer/FeeSetting/RefreshMultipliers.php?AdminAccount='+superAdminId+'&AdminPassword='+superAdminPwd, function (data) {
            multiplierData = data;
            console.log(multiplierData);
            console.log("取到数据");
            sessionStorage.setItem('multiplierData', JSON.stringify(multiplierData));
            refreshMultipliers();
        });

        setAdminCookie("sharpspeedadminaccount", superAdminId, 30*1/24/60);
        setAdminCookie("sharpspeedadminpassword", superAdminPwd, 30*1/24/60);
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

    function refreshMultipliers(){
        $("#margin").val(multiplierData.Margin);
        $("#commission").val(multiplierData.Commission);
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

    //clear modal everytime
    $('#feesettingModal').on('hidden.bs.modal', function (e) {
        $(this)
            .find("input,textarea,select")
            .val('')
            .end()
            .find("input[type=checkbox], input[type=radio]")
            .prop("checked", "")
            .end();
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

    function saveMultipliers(){

        var hostpath = "../../../../FuturesAccountManagerSystem/BusinessLogicLayer/FeeSetting/SaveMultiplier.php";

        $.ajax({
            url: hostpath,
            type: "get", //send it through get method
            data: {
                adminid: superAdminId,
                adminpw: superAdminPwd,
                dCommissionFeeMultiplier: $("#commission").val(),
                dMarginRateMultiplier: $("#margin").val()
            },
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

    }

    function sendRequest(event) {

       // ["编号","组名称","合约","开仓手续费","平仓手续费","平今手续费","手续费类型","保证金比例"]

        var data;
        if (event === undefined){
            var dataToDelete = feeSettingData[selectedIndex];
            data = {
                admin: superAdminId,
                password: superAdminPwd,
                tablename: "Commission",
                State: 2,
                编号: dataToDelete[0]
            };
        }else {
            data = {
                admin: superAdminId,
                password: superAdminPwd,
                tablename: "Commission",
                State: event.data.state,
                编号: 0,
                组名称: null,
                合约: null,
                开仓手续费: null,
                平仓手续费: null,
                平今手续费: null,
                手续费类型: null,
                保证金比例: null
            };
            if (event.data.state == 3) {
                data["编号"] = feeSettingData[selectedIndex][0];
            }

            if ($("#newFeesettingModal #new").prop("checked")) {
                if (!$("#feesettingGroup").val()){
                    $("#alertNotificationBody").text("费率组名不能为空");
                    $("#generalAlert").modal('show');
                    return;
                }
                data["组名称"] = $("#feesettingGroup").val() + "(期货)";
            } else {
                if (!$("#newFeesettingModal #existingGroup option:selected").text()){
                    $("#alertNotificationBody").text("费率组名不能为空");
                    $("#generalAlert").modal('show');
                    return;
                }
                data["组名称"] = $("#newFeesettingModal #existingGroup option:selected").text() + "(期货)";
            }

            data["合约"] = $("#newFeesettingModal #instrument option:selected").text();
            data["开仓手续费"] = $("#openPositionFee").val();
            data["平仓手续费"] = $("#closePositionFee").val();
            data["平今手续费"] = $("#closeNowFee").val();
            data["手续费类型"] = $("#feeType option:selected").text();
            data["保证金比例"] = $("#deposit").val();
        }

        //TODO: 应该做 validate
        //ajax 发送插入

        var hostpath = "../../../../FuturesAccountManagerSystem/BusinessLogicLayer/FeeSetting/InsertData.php";

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

        $('#FeesettingModal').modal('hide');
    }

    //设置费率信息
    function setupFeesettingInfo() {
        $("#new").removeAttr('disabled');
        $("#existing").removeAttr('disabled');
        $("#existingGroup").removeAttr('disabled');
        $("#feesettingGroup").removeAttr('disabled');

        var existingGroupSelect = $("#existingGroup");
        existingGroupSelect.empty();
        for (var i = 0; i < feeSettingData.length; i++) {
            if ($("#existingGroup option[value='" + feeSettingData[i][1] + "']").length == 0) {
                existingGroupSelect.append($('<option>', {
                    value: feeSettingData[i][1].replace(/\(期货\)/g, ""),
                    text: feeSettingData[i][1].replace(/\(期货\)/g, "")
                }));
            }
        }

        var exchangeSelect = $("#newFeesettingModal #exchange");
        exchangeSelect.empty();
        for (var i = 0; i < instrumentData.length; i++) {
            exchangeSelect.append($('<option>', {
                value: i,
                text: instrumentData[i]["Key"]
            }))
        }
        exchangeSelect.on('change', function () {
            var instrumentSelect = $("#newFeesettingModal #instrument");
            var instrumentDictArray = instrumentData[this.value]["Value"];
            console.log(instrumentDictArray);
            instrumentSelect.empty();
            for (var i = 0; i < instrumentDictArray.length; i++) {
                instrumentSelect.append($('<option>', {
                    value: i,
                    text: instrumentDictArray[i]["Key"]
                }))
            }
        });

        exchangeSelect.eq(0).attr('selected', 'selected');
        exchangeSelect.trigger('change');
        $("#newFeesettingModal #new").trigger('click');
        $("#feeType").val("绝对值");
    }

    function fillFeesettingModal(){

        var feesettingRowData = feeSettingData[selectedIndex];

        $("#existing").trigger('click');
        $("#existingGroup").val(feesettingRowData[1].replace(/\(期货\)/g, ""));

        $("#new").attr('disabled','disabled');
        $("#existing").attr('disabled','disabled');
        $("#existingGroup").attr('disabled','disabled');
        $("#feesettingGroup").attr('disabled','disabled');

        for (var i = 0; i < instrumentData.length; i++) {
            var found = -1;
            var instArray = instrumentData[i]["Value"];
            for (var j = 0; j < instArray.length; j++){
                if (feesettingRowData[2] == instArray[j]["Key"]){
                    found = j;
                    $("#newFeesettingModal #exchange").val(i);
                    $("#newFeesettingModal #exchange").trigger('change');
                    $("#newFeesettingModal #instrument").val(found);
                    break;
                }
            }
            if (found > -1) break;
        }

        $("#openPositionFee").val(feesettingRowData[3]);
        $("#closePositionFee").val(feesettingRowData[4]);
        $("#closeNowFee").val(feesettingRowData[5]);
        $("#feeType").val(feesettingRowData[6]);
        $("#deposit").val(feesettingRowData[7]);

    }

    $(document).on("click", "#feesetting-add", function () {
        $(document).off("click", "#newFeesettingModal .btn-primary");
        setupFeesettingInfo();
        $(document).on("click", "#newFeesettingModal .btn-primary", {state: 1}, sendRequest);
        $('#feesettingModal').modal('show');
    });

    $(document).on("click", "#feesetting-update", function () {
        $(document).off("click", "#newFeesettingModal .btn-primary");
        setupFeesettingInfo();
        fillFeesettingModal();
        $(document).on("click", "#newFeesettingModal .btn-primary", {state: 3}, sendRequest);
        $('#feesettingModal').modal('show');
    });

    $(document).on("click", "#feesetting-delete", function () {
        $('#alertNotificationBody').text('确认要删除该记录？');
        $('#generalAlert').modal('show');
        $(document).off("click", "#generalAlert .btn-primary");
        $(document).on("click", "#generalAlert .btn-primary", function(){
            sendRequest();
        });

    });

    $(document).on("click", "#confirmRatio", function () {
        saveMultipliers();
    });

</script>

</body>

</html>
