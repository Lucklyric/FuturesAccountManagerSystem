<?php
include_once("Template.php");
?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">证券账户管理</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            主账户
                        </div>

                        <div class="panel-body">
                            <div class="dataTable_wrapper">


                                <!--Modal-->
                                <div class="modal fade" tabindex="-1" role="dialog" id="accountModal"
                                     aria-labelledby="newMainAccountLabel" aria-hidden="true">
                                    <div class="modal-dialog" id="newAccountModal">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="newMainAccountLabel">新建主账户</h4>
                                            </div>
                                            <div class="modal-body">

                                                <div class="form-group">

                                                    <label for="channel">通道</label>

                                                    <select style="float: right; width: 50%" class="form-control" id="channel">
                                                        <option>CTP</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">

                                                    <label for="company">经纪公司</label>

                                                    <select  style="float: right; width: 50%" class="form-control" id="company">
                                                        <option>CTP</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">

                                                    <label for="server">服务器</label>

                                                    <select  style="float: right; width: 50%" class="form-control" id="server">
                                                        <option>上海电信</option>
                                                    </select>
                                                </div>


                                                <div class="form-group">
                                                    <label for="userId">账户ID</label>
                                                    <input class="form-control" style="float: right; width: 50%" type="text" name="userId" id="userId"
                                                           value="" placeholder="账户ID"/>
                                                </div>

                                                <div class="form-group">
                                                    <label for="userPassword">账户密码</label>
                                                    <input  class="form-control" style="float: right; width: 50%" type="password" name="userPassword"
                                                            id="userPassword" value="" placeholder="账户密码"/>
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

                                <!-- Modal -->
                                <div class="modal fade" tabindex="-1" role="dialog" id="subModal"
                                     aria-labelledby="newSubAccountLabel" aria-hidden="true">
                                    <div class="modal-dialog" id="newSubModal">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="newSubAccountLabel">新建子账户</h4>
                                            </div>
                                            <div class="modal-body">


                                                <div class="form-group">
                                                    <label for="subId">子账户ID</label>
                                                    <input  class="form-control" style="float: right; width: 50%" type="text" name="userId" id="subId"
                                                            value="" placeholder="账户ID"/>
                                                </div>

                                                <div class="form-group">
                                                    <label for="subPassword">子账户密码</label>
                                                    <input  class="form-control" style="float: right; width: 50%" type="password" name="subPassword"
                                                            id="subPassword" value="" placeholder="账户密码"/>
                                                </div>

                                                <div class="form-group">

                                                    <label for="mainAccount">主账户</label>

                                                    <select  style="float: right; width: 50%" class="form-control" id="mainAccount">
                                                    </select>
                                                </div>

                                                <div class="form-group">

                                                    <label for="riskControl">风控</label>

                                                    <select  style="float: right; width: 50%" class="form-control" id="riskControl">
                                                        <option></option>
                                                    </select>
                                                </div>

                                                <div class="form-group">

                                                    <label for="rate">费率</label>

                                                    <select  style="float: right; width: 50%" class="form-control" id="rate">
                                                        <option>上海电信</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="subName">用户姓名</label>
                                                    <input  class="form-control" style="float: right; width: 50%" type="text" name="userId" id="subName"
                                                            value=""/>
                                                </div>

                                                <div class="form-group">
                                                    <label for="subContact">联系方式</label>
                                                    <input  class="form-control" style="float: right; width: 50%" type="password" name="userId"
                                                            id="subContact" value="" />
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
                                <!-- /.modal -->


                                <table id="mainAccounts" class="table table-striped table-bordered table-hover"
                                       cellspacing="0" width="100%">

                                    <div class="mainAccountToolbar" style="float:left">
                                        <button type="button" class="btn btn-success" id="main-add" data-toggle="modal">
                                            添加主账户
                                        </button>
                                        <button type="button" class="btn btn-warning" id="main-update" data-toggle="modal">
                                            修改主账户
                                        </button>
                                        <button type="button" class="btn btn-danger" id="main-delete" data-toggle="modal">
                                            删除主账户
                                        </button>
                                    </div>
                                    <thead>
                                    <tr>
                                        <th>编号</th>
                                        <th>通道</th>
                                        <th>经纪公司名称</th>
                                        <th>经纪公司服务器</th>
                                        <th>账户ID</th>
                                        <th>账户密码</th>
                                        <th>静态权益</th>
                                    </tr>
                                    </thead>

                                    <tfoot>
                                    <tr>
                                        <th>编号</th>
                                        <th>通道</th>
                                        <th>经纪公司名称</th>
                                        <th>经纪公司服务器</th>
                                        <th>账户ID</th>
                                        <th>账户密码</th>
                                        <th>静态权益</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            子账户
                        </div>
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table id="subAccounts" class="table table-striped table-bordered table-hover"
                                       cellspacing="0"
                                       width="100%">
                                    <div class="subAccountToolbar" style="float:left">
                                        <button type="button" class="btn btn-success" id="sub-add" data-toggle="modal">
                                            添加子账户
                                        </button>
                                        <button type="button" class="btn btn-warning" id="sub-update" data-toggle="modal">
                                            修改子账户
                                        </button>
                                        <button type="button" class="btn btn-danger" id="sub-delete" data-toggle="modal">
                                            删除子账户
                                        </button>
                                    </div>
                                    <thead>
                                    <tr>
                                        <th>编号</th>
                                        <th>子账户ID</th>
                                        <th>子账户密码</th>
                                        <th>限制使用</th>
                                        <th>创建日期</th>
                                        <th>最后登录时间</th>
                                        <th>用户姓名</th>
                                        <th>联系方式</th>
                                        <th>主账户名称</th>
                                        <th>风控组名称</th>
                                        <th>费率组名称</th>
                                    </tr>
                                    </thead>

                                    <tfoot>
                                    <tr>
                                        <th>编号</th>
                                        <th>子账户ID</th>
                                        <th>子账户密码</th>
                                        <th>限制使用</th>
                                        <th>创建日期</th>
                                        <th>最后登录时间</th>
                                        <th>用户姓名</th>
                                        <th>联系方式</th>
                                        <th>主账户名称</th>
                                        <th>风控组名称</th>
                                        <th>费率组名称</th>
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
<script src="../js/SSClass/dataTables.scroller.js"></script>
<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

<script>
    /**
     * 定义全局变量
     */
    var allBrokersInfo ={};
    var riskGroups=[];
    var ratioTypes=[];
    var mainAccountTable;
    var subAccountTable;
    var mainAccountTableData;
    var mainAccounts = [];
    var curSubAccounts = [];
    var selectedIndex = 0;  //mainSelectedIndex
    var subSelectedIndex = 0;  //subSelectedIndex
    var toolBarManger = new SSToolBar($("#restartServer"),$("#connectMainAccount"),$("#onlineCount"),$("#serverStatus"));
    /**
     * Document加载完毕 更新数据刷新Table绑定点击事件
     */
    $(document).ready(function () {
        refreshBrokerInfo();
        refreshRiskGroupInfo();
        refreshMoneyRationInfo();
        ifHideMainAccountToolBar(true);
        ifHideSubAccountToolBar(true);
        refreshMainAccountsTable();
        refreshData(); //更新数据

        $('#mainAccounts').on('click', 'tr', function () { //绑定点击事件刷新子账户

            selectedIndex = mainAccountTable.row(this).index();
            console.log("选择"+selectedIndex);
            updateSubAccounts(selectedIndex);
            refreshSubAccountsTable();
            ifHideMainAccountToolBar(false);
            if(curSubAccounts.length == 0) {
                ifHideSubAccountToolBar(true);
            }else{
                ifHideSubAccountToolBar(false);
            }
            if ( $(this).hasClass('selected') ) {
                //$(this).removeClass('selected');
            }
            else {
                mainAccountTable.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        } );

        $('#subAccounts').on('click', 'tr', function () { //绑定点击事件刷新子账户
            ifHideSubAccountToolBar(false);
            subSelectedIndex = subAccountTable.row(this).index();
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
        mainAccounts = [];



        var table = $('#mainAccounts').dataTable();
        table.fnProcessingIndicator();      // On
        console.log("开始刷新数据");
        if (flag === undefined){
            if (sessionStorage.getItem('mainAccountTableData')){
                mainAccountTableData = JSON.parse(sessionStorage.getItem('mainAccountTableData'));
                for (var i = 0; i < mainAccountTableData.length; i++) {
                    mainAccounts.push(mainAccountTableData[i].inf);
                }
                //console.log(mainAccounts);
                refreshMainAccountsTable();
                updateSubAccounts(selectedIndex);
                refreshSubAccountsTable();
                ifHideMainAccountToolBar(false);
                if(curSubAccounts.length == 0) {
                    ifHideSubAccountToolBar(true);
                }else{
                    ifHideSubAccountToolBar(false);
                }
                return;
            }
        }
        //mainAccountTable.fnProcessingIndicator();
        $.getJSON('../../../../FuturesAccountManagerSystem/BusinessLogicLayer/MainAccount/Refresh.php', function (data) {
            mainAccountTableData = data.data;
            sessionStorage.setItem('mainAccountTableData',JSON.stringify(mainAccountTableData));
            // console.log(mainAccountTableData);
            console.log("走到这里了");
            for (var i = 0; i < mainAccountTableData.length; i++) {
                mainAccounts.push(mainAccountTableData[i].inf);
            }
            //console.log(mainAccounts);
            refreshMainAccountsTable();
            updateSubAccounts(selectedIndex);
            refreshSubAccountsTable();
            ifHideMainAccountToolBar(false);
            if(curSubAccounts.length == 0) {
                ifHideSubAccountToolBar(true);
            }else{
                ifHideSubAccountToolBar(false);
            }
        });
    }

    /**
     * 取得交易所详情信息
     */
    function refreshBrokerInfo(flag){
        if (flag === undefined){
            if (sessionStorage.getItem('allBrokerInfo')){
                allBrokersInfo = JSON.parse(sessionStorage.getItem('allBrokerInfo'));
                return;
            }
        }
        console.log("开始获取交易所信息");
        $.getJSON('../../../../FuturesAccountManagerSystem/BusinessLogicLayer/Server/BrokersInfo.php', function (data) {

            //allBrokersInfo = data;
            allBrokersInfo['0'] = new Array();
            allBrokersInfo['1'] = new Array();
            allBrokersInfo['2'] = new Array();
            allBrokersInfo['4'] = new Array();
            for (var i = 0; i < data.length; i++) {
                var tmpInfo = [];
                tmpInfo.push(data[i].mapServer2MarketDataAddresses);
                tmpInfo.push(data[i].sBrokerName);

                if (allBrokersInfo[data[i].eChannel]) {
                    allBrokersInfo[data[i].eChannel].push(tmpInfo);
                } else {
                    allBrokersInfo[data[i].eChannel] = [];
                }
            }
            sessionStorage.setItem('allBrokerInfo',JSON.stringify(allBrokersInfo));
            console.log("获取到交易所信息");
            console.log(allBrokersInfo);
        });
    }

    /**
     * 取得风控组名称
     */
    function refreshRiskGroupInfo(flag){
        if (flag === undefined){
            if (sessionStorage.getItem('riskGroups')){
                riskGroups = JSON.parse(sessionStorage.getItem('riskGroups'));
                return;
            }
        }
        console.log("开始获取风控组信息");
        $.getJSON('../../../../FuturesAccountManagerSystem/BusinessLogicLayer/RiskManage/Refresh.php', function (data) {
            riskGroups=[];
            console.log("取到风控组信息");
            for (var i = 0; i < data.data.length; i++) {
                riskGroups.push(data.data[i]);
            }
            sessionStorage.setItem('riskGroups',JSON.stringify(riskGroups));
        });
    }

    /**
     * 取得费率组名称
     */
    function refreshMoneyRationInfo(flag){
        if (flag === undefined){
            if (sessionStorage.getItem('ratioTypes')){
                ratioTypes = JSON.parse(sessionStorage.getItem('ratioTypes'));
                return;
            }
        }
        console.log("开始获取费率组信息");
        $.getJSON('../../../../FuturesAccountManagerSystem/BusinessLogicLayer/FeeSetting/Refresh.php', function (data) {
            ratioTypes=[];
            console.log("取到费率组信息");
            for (var i = 0; i < data.data.length; i++) {
                ratioTypes.push(data.data[i]);
            }
            sessionStorage.setItem('ratioTypes',JSON.stringify(ratioTypes));
        });
    }


    /**
     * 从本地取出对应的子账户信息
     * @param index 对应主账户index
     */
    function updateSubAccounts(index) {
        curSubAccounts = [];
        for (var i = 0; i < mainAccountTableData[index].subs.length; i++) {
            curSubAccounts.push(mainAccountTableData[index].subs[i]);
            curSubAccounts[curSubAccounts.length-1][8] = mainAccountTableData[index].inf[4];
        }
    }

    /**
     * 刷新主账户表格
     */
    function refreshMainAccountsTable() {
        var container = $('#mainAccounts,div.dataTables_scrollBody');
        if ($.fn.dataTable.isDataTable('#mainAccounts')) {
            var tmpOffset = container.scrollTop();
            var table = $('#mainAccounts').dataTable();
            // var scrollPos=mainAccountTable.scrollTop();
            mainAccountTable.clear();
            for (var i = 0; i < mainAccounts.length; i++) {
                mainAccountTable.row.add(mainAccounts[i]);
            }
            mainAccountTable.draw();

            table.fnProcessingIndicator(false);      // off
            container.scrollTop(tmpOffset);

        }
        else {
            console.log("开始构建主表");
            mainAccountTable = $('#mainAccounts').DataTable({
                "processing": true,
                "data": mainAccounts,
                "scrollY": "200px",
                "scrollCollapse": false,
                "paging": false,
                "dom": '<"mainAccountToolbar"f>rlpti',
                "language": {
                    "search": "搜索:",
                    "info": "显示 _START_ 到 _END_ 共 _TOTAL_ 记录",
                    "infoEmpty": "显示 0 到 0 共 0 记录",
                    "emptyTable":"暂无可显示数据",
                    "processing": "正在加载......"
                }
            });
        }
        mainAccountTable.row(selectedIndex).nodes().to$().addClass('selected');

    }

    /**
     * 刷新子账户表格
     */
    function refreshSubAccountsTable() {
        var container = $('#subAccounts,div.dataTables_scrollBody');
        if ($.fn.dataTable.isDataTable('#subAccounts')) {
            var tmpOffset = container.scrollTop();
            subAccountTable.clear();
            for (var i = 0; i < curSubAccounts.length; i++) {
                subAccountTable.row.add(curSubAccounts[i]);
            }
            subAccountTable.draw();
            container.scrollTop(tmpOffset);
        }
        else {
            subAccountTable = $('#subAccounts').DataTable({
                "processing": true,
                "data": curSubAccounts,
                "scrollY": "500px",
                "scrollCollapse": true,
                "paging": false,
                "dom": '<"subAccountToolbar"f>rlpti',
                "language": {
                    "search": "搜索:",
                    "info": "显示 _START_ 到 _END_ 共 _TOTAL_ 记录",
                    "infoEmpty": "显示 0 到 0 共 0 记录",
                    "emptyTable":"暂无可显示数据",
                    "processing": "正在加载......"
                }
            });
        }
        subAccountTable.row(subSelectedIndex).nodes().to$().addClass('selected');
    }

    /**
     * 是否隐藏工具栏
     * @param flag
     */
    function ifHideMainAccountToolBar(flag){

        /**
         * 已经没有用了
         */
        if (flag){
            $('#main-update').hide();
            $('#main-delete').hide();
        }else{
            $('#main-update').show();
            $('#main-delete').show();
        }
        /**
         * 新逻辑
         */
        if(mainAccounts.length == 0){
            $('#main-update').hide();
            $('#main-delete').hide();
        }else{
            $('#main-update').show();
            $('#main-delete').show();
        }
    }

    /**
     * 同上
     * @param flag
     */
    function ifHideSubAccountToolBar(flag){
        if (flag){
            $('#sub-update').hide();
            $('#sub-delete').hide();
        }else{
            $('#sub-update').show();
            $('#sub-delete').show();
        }

        if(curSubAccounts.length == 0){
            $('#sub-update').hide();
            $('#sub-delete').hide();
        }else{
            $('#sub-update').show();
            $('#sub-delete').show();
        }
    }

</script>

<script>

    //填充MainModal
    function fillMainModal(modal, data) {

        var channelArray = $(modal + " #channel option");
        for (var i = 0; i < channelArray.length; i++){
            if (channelArray.eq(i).text() == data[1]){
                channelArray.eq(i).attr('selected', 'selected');
                channelArray.trigger('change')
                break;
            }
        }

        var companyArray = $(modal + " #company option");
        for (var i = 0; i < companyArray.length; i++){
            if (companyArray.eq(i).text() == data[2]){
                companyArray.eq(i).attr('selected', 'selected');
                companyArray.trigger('change')
                break;
            }
        }

        var serverArray = $(modal + " #server option");

        for (var i = 0; i < serverArray.length; i++){
            if (serverArray.eq(i).text() == data[3]){
                serverArray.eq(i).attr('selected', 'selected');
                break;
            }
        }

        $(modal + " #userId").val(data[4]);
        $(modal + " #userPassword").val(data[5]);
    }

    //填充MainModal
    function fillSubModal(modal, data) {

        $(modal + " #subId").val(data[1]);
        $(modal + " #subPassword").val(data[2]);
        $(modal + " #subName").val(data[6]);
        $(modal + " #subContact").val(data[7]);

        var mainArray = $(modal + " #mainAccount option");
        for (var i = 0; i < mainArray.length; i++){
            if (mainArray.eq(i).text() == data[8]){
                mainArray.eq(i).attr('selected', 'selected');
                break;
            }
        }

        var riskArray = $(modal + " #riskControl option");
        for (var i = 0; i < riskArray.length; i++){
            if (riskArray.eq(i).text() == data[9]){
                riskArray.eq(i).attr('selected', 'selected');
                break;
            }
        }

        var rateArray = $(modal + " #rate option");
        for (var i = 0; i < rateArray.length; i++){
            if (rateArray.eq(i).text() == data[10]){
                rateArray.eq(i).attr('selected', 'selected');
                break;
            }
        }

    }

    function newAccount() {
        var channel = $("#newAccountModal #channel :selected").text();
        var company = $("#newAccountModal #company :selected").text();
        var server = $("#newAccountModal #server :selected").text();
        var userId = $("#newAccountModal #userId")[0].value;
        var userPassword = $("#newAccountModal #userPassword")[0].value;

        alert(channel + company + server);

        //TODO: 应该做 validate
        //ajax 发送插入

        var hostpath = "../../../../FuturesAccountManagerSystem/BusinessLogicLayer/MainAccount/InsertData.php";

        $.ajax({
            url: hostpath,
            type: "get", //send it through get method
            data: {
                Channel: channel,
                CompanyName: company,
                CompanyServer: server,
                AccountId: userId,
                AccountPassword: userPassword
            },
            success: function (response) {
                alert("Data Loaded: " + response);
                refreshData(1);
            },
            error: function (xhr) {
                //Do Something to handle error
            }
        });
    }

    function updateAccount() {
        var channel = $("#newAccountModal #channel :selected").text();
        var company = $("#newAccountModal #company :selected").text();
        var server = $("#newAccountModal #server :selected").text();
        var userId = $("#newAccountModal #userId")[0].value;
        var userPassword = $("#newAccountModal #userPassword")[0].value;

        //TODO: 应该做 validate
        //ajax 发送插入

        var hostpath = "../../../../FuturesAccountManagerSystem/BusinessLogicLayer/MainAccount/UpdateData.php";

        $.ajax({
            url: hostpath,
            type: "get", //send it through get method
            data: {
                Channel: channel,
                CompanyName: company,
                CompanyServer: server,
                AccountId: userId,
                AccountPassword: userPassword
            },
            success: function (response) {
                alert("Data Loaded: " + response);
                refreshData(1);
            },
            error: function (xhr) {
                //Do Something to handle error
            }
        });
    }

    function deleteAccount(data) {

        var rowId = data[0];
        var channel = data[1];
        var company = data[2];
        var server = data[3];
        var userId = data[4];
        var userPassword = data[4];

        var hostpath = "../../../../FuturesAccountManagerSystem/BusinessLogicLayer/MainAccount/DeleteData.php";

        $.ajax({
            url: hostpath,
            type: "get", //send it through get method
            data: {
                RowId: rowId,
                Channel: channel,
                CompanyName: company,
                CompanyServer: server,
                AccountId: userId,
                AccountPassword: userPassword
            },
            success: function (response) {
                alert("Data Loaded: " + response);
                selectedIndex = 0;
                refreshData(1);
            },
            error: function (xhr) {
                //Do Something to handle error
            }
        });
    }

    function newSubAccount() {
        var subId = $("#newSubModal #subId")[0].value;
        var subPassword = $("#newSubModal #subPassword")[0].value;
        var mainAccount = $("#newSubModal #mainAccount :selected").val();
        var riskControl = $("#newSubModal #riskControl :selected").text();
        var rate = $("#newSubModal #rate :selected").text();
        var subName = $("#newSubModal #subName")[0].value;
        var subContact = $("#newSubModal #subContact")[0].value;

        alert(mainAccount);

        //TODO: 应该做 validate
        //ajax 发送插入

        var hostpath = "../../../../FuturesAccountManagerSystem/BusinessLogicLayer/SubAccount/InsertData.php";

        $.ajax({
            url: hostpath,
            type: "get", //send it through get method
            data: {
                SubId: subId,
                SubPass: subPassword,
                MainId: mainAccount,
                RiskManagementGroup: riskControl,
                MoneyRatio: rate,
                UserName: subName,
                ContactInfo: subContact
            },
            success: function (response) {
                alert("Data Loaded: " + response);
                refreshData(1);
            },
            error: function (xhr) {
                //Do Something to handle error
            }
        });
    }

    function updateSubAccount() {
        var subId = $("#newSubModal #subId")[0].value;
        var subPassword = $("#newSubModal #subPassword")[0].value;
        var mainAccount = $("#newSubModal #mainAccount :selected").val();
        var riskControl = $("#newSubModal #riskControl :selected").text();
        var rate = $("#newSubModal #rate :selected").text();
        var subName = $("#newSubModal #subName")[0].value;
        var subContact = $("#newSubModal #subContact")[0].value;

        //TODO: 应该做 validate
        //ajax 发送插入

        var hostpath = "../../../../FuturesAccountManagerSystem/BusinessLogicLayer/SubAccount/UpdateData.php";

        $.ajax({
            url: hostpath,
            type: "get", //send it through get method
            data: {
                SubId: subId,
                SubPass: subPassword,
                MainId: mainAccount,
                RiskManagementGroup: riskControl,
                MoneyRatio: rate,
                UserName: subName,
                ContactInfo: subContact
            },
            success: function (response) {
                alert("Data Loaded: " + response);
                refreshData(1);
            },
            error: function (xhr) {
                //Do Something to handle error
            }
        });
    }

    function deleteSubAccount(data) {

        var subSystemId = data[0];

        var hostpath = "../../../../FuturesAccountManagerSystem/BusinessLogicLayer/SubAccount/DeleteData.php";

        $.ajax({
            url: hostpath,
            type: "get", //send it through get method
            data: {
                SubSystemId: subSystemId
            },
            success: function (response) {
                alert("Data Loaded: " + response);
                subSelectedIndex = 0;
                refreshData(1);
            },
            error: function (xhr) {
                //Do Something to handle error
            }
        });
    }

    //设置动态更新
    function setMainAccountCompanyInfo(index) {

        var brokerArray = allBrokersInfo[index];
        var companySelect = $("#newAccountModal #company");
        companySelect.empty();
        for (var i = 0; i < brokerArray.length; i++) {
            companySelect.append($('<option>', {
                value: i,
                text: brokerArray[i][1]
            }))
        }
        companySelect.on('change', function(){
            var severSelect = $("#newAccountModal #server");
            var serverDict = brokerArray[this.value][0];
            severSelect.empty();
            for (var i = 0; i < serverDict.length; i++) {
                severSelect.append($('<option>', {
                    value: i,
                    text: serverDict[i]["Key"]
                }))
            }
        })
        companySelect.eq(0).attr('selected', 'selected');
        companySelect.trigger('change')
    }

    function setMainAccountInfo(){
        //clear existing info
        $("#newAccountModal #userId").val("");
        $("#newAccountModal #userPassword").val("");

        var mainChannelOption = $("#newAccountModal #channel");
        mainChannelOption.empty();
        mainChannelOption.append($('<option>', {
                    value:'0',
                    text: 'CTP'
                })
        )
        mainChannelOption.append($('<option>', {
                    value:'1',
                    text: '金仕达'
                })
        )
        mainChannelOption.append($('<option>', {
                    value:'2',
                    text: '恒生期货'
                })
        )
        mainChannelOption.append($('<option>', {
                    value:'4',
                    text: '恒生证券'
                })
        )
        mainChannelOption.on('change', function(){
            setMainAccountCompanyInfo(this.value)
        });
        mainChannelOption.eq(0).attr('selected', 'selected');
        mainChannelOption.trigger('change');
    }

    //显示add modal
    $(document).on("click", "#main-add", function () {
        if (allBrokersInfo.length == 0) return;
        //绑定回调
        $(document).off("click", "#newAccountModal .btn-primary");
        $(document).on("click", "#newAccountModal .btn-primary", newAccount);
        setMainAccountInfo();
        $('#accountModal').modal('show');
    });

    //显示update modal
    $(document).on("click", "#main-update", function () {
        if (allBrokersInfo.length == 0) return;
        $(document).off("click", "#newAccountModal .btn-primary");
        setMainAccountInfo();
        fillMainModal("#accountModal", mainAccounts[selectedIndex]);
        //绑定回调
        $(document).on("click", "#newAccountModal .btn-primary", updateAccount);

        $('#accountModal').modal('show');
    });

    $(document).on("click", "#main-delete", function () {
        deleteAccount(mainAccounts[selectedIndex]);
    });


    //显示add sub modal
    $(document).on("click", "#sub-add", function () {
        if (mainAccounts.length == 0) return;
        //绑定回调
        $(document).off("click", "#newSubModal .btn-primary");
        $(document).on("click", "#newSubModal .btn-primary", newSubAccount);
        setSubAccountInfo();
        $('#subModal').modal('show');
    });

    function setSubAccountInfo(){
        //clear existing info
        $("#newSubModal #subId").val("");
        $("#newSubModal #subPassword").val("");
        $("#newSubModal #subName").val("");
        $("#newSubModal #subContact").val("");

        var mainAccountOption = $("#newSubModal #mainAccount");
        mainAccountOption.empty();
        for (var i = 0; i < mainAccounts.length; i++) {
            mainAccountOption.append($('<option>', {
                        value: mainAccounts[i][0],
                        text: mainAccounts[i][4]
                    })
            )
        }
        var riskControlOptions = $("#newSubModal #riskControl");
        riskControlOptions.empty();
        for (var i = 0; i < riskGroups.length; i++) {
            riskControlOptions.append($('<option>', {
                        value: riskGroups[i][0],
                        text: riskGroups[i][0]
                    })
            )
        }
        var ratioTypesOptions = $("#newSubModal #rate");
        ratioTypesOptions.empty();
        for (var i = 0; i < ratioTypes.length; i++) {
            ratioTypesOptions.append($('<option>', {
                        value: ratioTypes[i][0],
                        text: ratioTypes[i][0]
                    })
            )
        }
    }

    //显示update sub modal
    $(document).on("click", "#sub-update", function () {
        if (mainAccounts.length == 0) return;
        //if (riskGroups.length == 0 || ratioTypes.length == 0) return;
        $(document).off("click", "#newSubModal .btn-primary");
        setSubAccountInfo();
        fillSubModal("#subModal", curSubAccounts[subSelectedIndex]);
        //绑定回调
        $(document).on("click", "#newSubModal .btn-primary", updateSubAccount);
        $('#subModal').modal('show');
    });


    $(document).on("click", "#sub-delete", function () {
        deleteSubAccount(curSubAccounts[subSelectedIndex]);
    });

    //理论上来说添加修改以后都应该刷新

</script>

</body>

</html>