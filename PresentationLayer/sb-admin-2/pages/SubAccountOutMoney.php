<?php
include_once("Template.php");
?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">子账户出金</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            出金
                        </div>

                        <div class="panel-body">
                            <div class="dataTable_wrapper">


                                <!--Modal-->
                                <div class="modal fade" tabindex="-1" role="dialog" id="inMoneyModal"
                                     aria-labelledby="newMainAccountLabel" aria-hidden="true">
                                    <div class="modal-dialog" id="newInMoneyModal">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="newMainAccountLabel">子账户出金</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container">
                                                    <div class="row clearfix">
                                                        <div class="col-md-2 column modal-row">
                                                            <label style="margin-top: 8px">子账户:</label>
                                                        </div>
                                                        <div class="col-md-4 column modal-row">
                                                            <label style="margin-top: 8px" id="subAccount" >XXX</label>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-md-2 column modal-row">
                                                            <label style="margin-top: 8px">主账户:</label>
                                                        </div>
                                                        <div class="col-md-4 column modal-row">
                                                            <label style="margin-top: 8px" id="mainAccount" >XXX</label>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-md-2 column modal-row">
                                                            <label style="margin-top: 8px">输出金额:</label>
                                                        </div>
                                                        <div class="col-md-4 column modal-row">
                                                            <input class="form-control" style="max-width: 300px" type="text" name="moneyAmount" id="moneyAmount"
                                                                   value="" placeholder="请输出金额"/>
                                                        </div>
                                                    </div>


                                                    <div class="row clearfix">
                                                        <div class="col-md-2 column modal-row">
                                                            <div class="radio">
                                                                <label><input type="radio" name="inMoneyRadio" value="优先" id="preferred">优先资金</label>
                                                            </div>
                                                            <div class="radio">
                                                                <label><input type="radio" name="inMoneyRadio" value="劣后" id="nonPreferred">劣后资金</label>
                                                            </div>                                                        </div>
                                                    </div>


                                                </div>

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
                                <!--/.modal-->

                                <table id="subAccountMoneyTable" class="table table-striped table-bordered table-hover"
                                       cellspacing="0" width="100%">

                                    <div class="subAccountToolbar" style="float:left">
                                        <button type="button" class="btn btn-default" id="manual-refresh" data-toggle="modal">
                                            刷新
                                        </button>
                                        <button type="button" style="Display : none" class="btn btn-success" id="sub-update" data-toggle="modal">
                                            子账户出金
                                        </button>
                                    </div>
                                    <thead>
                                    <tr>
                                        <th>编号</th>
                                        <th>子账户名称</th>
                                        <th>静态权益</th>
                                        <th>手续费</th>
                                        <th>平仓盈亏</th>
                                        <th>持仓盈亏</th>
                                        <th>占用保证金</th>
                                        <th>动态权益</th>
                                        <th>风险度</th>
                                        <th>结算日期</th>
                                        <th>结算时间</th>
                                        <th>优先资金</th>
                                    </tr>
                                    </thead>

                                    <tfoot>
                                    <tr>
                                        <th>编号</th>
                                        <th>子账户名称</th>
                                        <th>静态权益</th>
                                        <th>手续费</th>
                                        <th>平仓盈亏</th>
                                        <th>持仓盈亏</th>
                                        <th>占用保证金</th>
                                        <th>动态权益</th>
                                        <th>风险度</th>
                                        <th>结算日期</th>
                                        <th>结算时间</th>
                                        <th>优先资金</th>
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
    var mainAccountTableData=[];
    var subAccountTable;
    var subAccountTableData;
    var subAccounts = [];
    var selectedIndex = 0;  //mainSelectedIndex
    var toolBarManger = new SSToolBar($("#restartServer"),$("#connectMainAccount"),$("#onlineCount"),$("#serverStatus"));
    /**
     * Document加载完毕 更新数据刷新Table绑定点击事件
     */
    $(document).ready(function () {
        refreshMainTable();
        refreshData(1); //更新数据
        refreshMainSubAccounts(1);

        $('#subAccountMoneyTable').on('click', 'tr', function () { //绑定点击事件刷新子账户
            selectedIndex = subAccountTable.row(this).index();
            //refreshMainTable();
            ifHideSubAccountToolBar(false);
            if ( $(this).hasClass('selected') ) {
                //$(this).removeClass('selected');
            }
            else {
                subAccountTable.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }

        } );


    });
</script>

<script>
    /**
     * Ajax从服务端取数据
     */
    function refreshData(flag) {
        subAccounts = [];
        ifHideSubAccountToolBar(true);
        var table = $('#subAccountMoneyTable').dataTable();
        table.fnProcessingIndicator();      // On
        console.log("开始刷新数据");
        if (flag === undefined){
            if (sessionStorage.getItem('localSettlement')){
                subAccounts = JSON.parse(sessionStorage.getItem('localSettlement'));
                refreshMainTable();
                return;
            }
        }
        //mainAccountTable.fnProcessingIndicator();
        $.getJSON('../../../../FuturesAccountManagerSystem/BusinessLogicLayer/Settlement/Refresh.php?AdminAccount='+superAdminId+'&AdminPassword='+superAdminPwd, function (data) {
            subAccountTableData = data.data;
            // subAccounts.push(subAccountTableData);
            for (var i = 0; i < subAccountTableData.length; i++) {
                subAccounts.push(subAccountTableData[i]);
            }
            console.log(subAccounts);
            sessionStorage.setItem('localSettlement',JSON.stringify(subAccounts));
            refreshMainTable();
        });
        setAdminCookie("sharpspeedadminaccount", superAdminId, 20);
        setAdminCookie("sharpspeedadminpassword", superAdminPwd, 20);
    }

    /**
     * 取得主账户子账户关系表
     */
    function refreshMainSubAccounts(flag){
        if (flag === undefined) {
            if (sessionStorage.getItem('mainAccountTableData')) {
                mainAccountTableData = JSON.parse(sessionStorage.getItem('mainAccountTableData'));
                return;
            }
        }
        $.getJSON('../../../../FuturesAccountManagerSystem/BusinessLogicLayer/MainAccount/Refresh.php?AdminAccount='+superAdminId+'&AdminPassword='+superAdminPwd, function (data) {
            mainAccountTableData = data.data;
            sessionStorage.setItem('mainAccountTableData', JSON.stringify(mainAccountTableData));
            console.log(mainAccountTableData);
        });
        setAdminCookie("sharpspeedadminaccount", superAdminId, 30*1/24/60);
        setAdminCookie("sharpspeedadminpassword", superAdminPwd, 30*1/24/60);
    }

    /**
     * 返回主账户ID
     * @param subAccountID:子账户ID
     */
    function returnMainAccountId(subAccountID){
        for (var i = 0; i < mainAccountTableData.length;i++){
            for (var j = 0; j < mainAccountTableData[i].subs.length;j++){
                if (mainAccountTableData[i].subs[j][1] == subAccountID){
                    return [mainAccountTableData[i].inf[4],mainAccountTableData[i].inf[0]];
                }
            }
        }
    }

    /**
     * 刷新主账户表格
     */
    function refreshMainTable() {
        var container = $('#subAccountMoneyTable,div.dataTables_scrollBody');
        if ($.fn.dataTable.isDataTable('#subAccountMoneyTable')) {
            console.log("刷新表格");
            console.log(subAccounts[0]);
            var tmpOffset = container.scrollTop();
            subAccountTable.clear();
            for (var i = 0; i < subAccounts.length; i++) {
                subAccountTable.row.add(subAccounts[i]);
            }
            subAccountTable.draw();
            var table = $('#subAccountMoneyTable').dataTable();
            table.fnProcessingIndicator(false);      // On
            container.scrollTop(tmpOffset);
        }
        else {
            console.log("开始构建主表");
            subAccountTable = $('#subAccountMoneyTable').DataTable({
                "processing": true,
                "data": subAccounts,
                "scrollY": "500px",
                "scrollCollapse": false,
                "paging": false,
                "scrollX": true,
                "dom": '<"#mainAccountToolbar"f>rlpti',
                "language": {
                    "search": "搜索:",
                    "info": "显示 _START_ 到 _END_ 共 _TOTAL_ 记录",
                    "infoEmpty": "显示 0 到 0 共 0 记录",
                    "emptyTable":"暂无可显示数据",
                    "processing": "正在加载......"
                }
            });

        }
        subAccountTable.row(selectedIndex).nodes().to$().addClass('selected');
        ifHideSubAccountToolBar(true);
    }



</script>

<script>

    function ifHideSubAccountToolBar(flag){
        if (flag){
            $('#sub-update').hide();
        }else{
            $('#sub-update').show();
        }
        if(subAccounts.length == 0){
            $('#sub-update').hide();
        }else{
            $('#sub-update').show();
        }
    }
</script>

<script>

    function getFormattedDate() {
        var date = new Date();
        var str = date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate() + " " +  date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds();
        return str;
    }

    //填充modal
    function fillModal(){
        var subAccountId = subAccounts[selectedIndex][1];
        var mainAccountInfo = returnMainAccountId(subAccountId);
        $("#newInMoneyModal #mainAccount").text(mainAccountInfo[0]);
        $("#newInMoneyModal #mainAccount").val(mainAccountInfo[1]);
        $("#newInMoneyModal #subAccount").text(subAccountId);
        $("#newInMoneyModal #preferred").prop("checked", true);
    }

    //出金
    function SubAccountOutMoney() {

        var selectedData = subAccounts[selectedIndex];
        var amount = -$("#newInMoneyModal #moneyAmount")[0].value;
        var preferredMoney = $("input:radio[name ='inMoneyRadio']:checked").val();
        var subId = selectedData[0];
        var subAccountName = selectedData[1];
        var mainAccountId = $("#newInMoneyModal #mainAccount").val();

        //TODO: 应该做 validate
        //ajax 发送插入

        var hostpath = "../../../../FuturesAccountManagerSystem/BusinessLogicLayer/Settlement/InsertData.php";

        $.ajax({
            url: hostpath,
            type: "get", //send it through get method
            data: {
                SubAccountName: subAccountName,
                InAndOut: amount,
                Priority: preferredMoney,
                Id: subId,
                MainId: mainAccountId,
                UpdateTime: getFormattedDate(),
                AdminAccount: superAdminId,
                AdminPassword: superAdminPwd
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
    /***
     * 手动刷新数据
     */
    $(document).on("click", "#manual-refresh", function () {
        console.log("手动刷新数据");
        refreshData(1);
    });
    //显示inMoney modal
    $(document).on("click", "#sub-update", function () {
        $(document).off("click", "#newInMoneyModal .btn-primary");
        //绑定回调
        fillModal();
        $(document).on("click", "#newInMoneyModal .btn-primary", SubAccountOutMoney);
        $('#inMoneyModal').modal('show');
    });
</script>

</body>

</html>
