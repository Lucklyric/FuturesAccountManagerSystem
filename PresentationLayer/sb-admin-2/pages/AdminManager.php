<?php
include_once("Template.php");
?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">管理员管理</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            管理员
                        </div>

                        <div class="panel-body">
                            <div class="dataTable_wrapper">



                                <!--Modal-->
                                <div class="modal fade" tabindex="-1" role="dialog" id="adminManagerModal"
                                     aria-labelledby="adminManagerModal" aria-hidden="true">
                                    <div class="modal-dialog" id="newAdminManagerModal">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="newMainAccountLabel">管理员设置</h4>
                                            </div>
                                            <div class="modal-body">

                                                <div class="container">
                                                    <div class="row clearfix">
                                                        <div class="col-md-2 column modal-row">
                                                            <label style="margin-top: 8px"
                                                                   for="adminManagerAccount">账户</label>
                                                        </div>
                                                        <div class="col-md-4 column modal-row">
                                                            <input class="form-control" type="text"
                                                                   name="adminManagerAccount" id="adminManagerAccount"
                                                                   value="" placeholder="账户ID"/>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-md-2 column modal-row">
                                                            <label style="margin-top: 8px"
                                                                   for="adminManagerPassword">密码</label>
                                                        </div>
                                                        <div class="col-md-4 column modal-row">
                                                            <input class="form-control" type="password"
                                                                   name="adminManagerPassword" id="adminManagerPassword"
                                                                   value="" placeholder="账户密码"/>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-md-2 column modal-row">
                                                            <label style="margin-top: 8px">附属主账户</label>
                                                        </div>
                                                        <div class="col-md-4 column modal-row">
                                                            <div class="well" style="max-height: 300px;overflow: auto;">
                                                                <ul class="list-group checked-list-box"
                                                                    id="mainAccountUL">
                                                                    <li class="list-group-item">Cras justo odio</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-md-2 column modal-row">
                                                            <label style="margin-top: 8px">功能权限</label>
                                                        </div>
                                                        <div class="col-md-4 column modal-row">
                                                            <div class="row clearfix">
                                                                <div style="margin-top: 8px" class="col-md-6 column modal-row">
                                                                    账户管理
                                                                </div>
                                                                <div class="col-md-6 column modal-row">
                                                                    <select  class="form-control" id="accountAdmin">
                                                                        <option value="0">无权限</option>
                                                                        <option value="1">一般权限</option>
                                                                        <option value="2">最高权限</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row clearfix">
                                                                <div style="margin-top: 8px" class="col-md-6 column modal-row">
                                                                    资金管理
                                                                </div>
                                                                <div class="col-md-6 column modal-row">
                                                                    <select class="form-control" id="moneyAdmin">
                                                                        <option value="0">无权限</option>
                                                                        <option value="1">一般权限</option>
                                                                        <option value="2">最高权限</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row clearfix">
                                                                <div style="margin-top: 8px" class="col-md-6 column modal-row">
                                                                    风控管理
                                                                </div>
                                                                <div class="col-md-6 column modal-row">
                                                                    <select class="form-control" id="riskAdmin">
                                                                        <option value="0">无权限</option>
                                                                        <option value="1">一般权限</option>
                                                                        <option value="2">最高权限</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row clearfix">
                                                                <div style="margin-top: 8px" class="col-md-6 column modal-row">
                                                                    费率管理
                                                                </div>
                                                                <div class="col-md-6 column modal-row">
                                                                    <select class="form-control" id="rateAdmin">
                                                                        <option value="0">无权限</option>
                                                                        <option value="1">一般权限</option>
                                                                        <option value="2">最高权限</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row clearfix">
                                                                <div style="margin-top: 8px" class="col-md-6 column modal-row">
                                                                    风控员管理
                                                                </div>
                                                                <div class="col-md-6 column modal-row">
                                                                    <select class="form-control" id="riskManagerAdmin">
                                                                        <option value="0">无权限</option>
                                                                        <option value="1">一般权限</option>
                                                                        <option value="2">最高权限</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-md-2 column modal-row">
                                                            <label style="margin-top: 8px">姓名</label>
                                                        </div>
                                                        <div class="col-md-4 column modal-row">
                                                            <input class="form-control" type="text"
                                                                   name="adminManagerName" id="adminManagerName"
                                                                   value="" placeholder="姓名"/>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-md-2 column modal-row">
                                                            <label style="margin-top: 8px">联系方式</label>
                                                        </div>
                                                        <div class="col-md-4 column modal-row">
                                                            <input class="form-control" type="text"
                                                                   name="adminManagerContact" id="adminManagerContact"
                                                                   value="" placeholder="联系方式"/>
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

                                <table id="adminManagerTable" class="table table-striped table-bordered table-hover"
                                       cellspacing="0" width="100%">

                                    <div class="subAccountToolbar" style="float:left">
                                        <button type="button" class="btn btn-success" id="admin-add"
                                                data-toggle="modal">
                                            添加管理员
                                        </button>
                                        <button type="button" style="Display : none" class="btn btn-warning" id="admin-update"
                                                data-toggle="modal">
                                            修改管理员
                                        </button>
                                        <button type="button" style="Display : none" class="btn btn-danger" id="admin-delete"
                                                data-toggle="modal">
                                            删除管理员
                                        </button>
                                    </div>
                                    <thead>
                                    <tr>
                                        <th>编号</th>
                                        <th>名称</th>
                                        <th>密码</th>
                                        <th>附属主账户</th>
                                        <th>模块权限</th>
                                        <th>姓名</th>
                                        <th>联系方式</th>
                                    </tr>
                                    </thead>

                                    <tfoot>
                                    <tr>
                                        <th>编号</th>
                                        <th>名称</th>
                                        <th>密码</th>
                                        <th>附属主账户</th>
                                        <th>模块权限</th>
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
    var mainAccountTableData=[];
    var adminManagerTable;
    var adminManagerTableData;
    var adminManagerData= [];
    var selectedIndex = 0;  //adminSelectedIndex
    var toolBarManger = new SSToolBar($("#restartServer"),$("#connectMainAccount"),$("#onlineCount"),$("#serverStatus"));
    /**
     * Document加载完毕 更新数据刷新Table绑定点击事件
     */
    $(document).ready(function () {

        ifHideMainAccountToolBar(true);
        refreshMainTable(1);
        refreshData(1); //更新数据
        refreshMainAccounts(1);//更新主账户数据

        $('#adminManagerTable').on('click', 'tr', function () { //绑定点击事件刷新子账户
            selectedIndex = adminManagerTable.row(this).index();
            ifHideMainAccountToolBar(false);
            //refreshMainTable();
            if ( $(this).hasClass('selected') ) {
                //$(this).removeClass('selected');
            }
            else {
                adminManagerTable.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
            // $('.modal-dialog').modal('show');
        } );


    });
</script>

<script>
    /**
     * Ajax从服务端取数据
     */
    function refreshData(flag) {
        adminManagerData = [];
        var table = $('#adminManagerTable').dataTable();
        table.fnProcessingIndicator();      // On
        console.log("开始刷新数据");
        if (flag === undefined){
            if (sessionStorage.getItem('adminManagerData')){
                adminManagerData = JSON.parse(sessionStorage.getItem('adminManagerData'));
                refreshMainTable();
                return;
            }
        }
        //mainAccountTable.fnProcessingIndicator();
        $.getJSON('../../../../FuturesAccountManagerSystem/BusinessLogicLayer/Administrator/Refresh.php?AdminAccount='+superAdminId+'&AdminPassword='+superAdminPwd, function (data) {
            adminManagerTableData = data.data;
            console.log(adminManagerTableData[0]);
            for (var i = 0; i < adminManagerTableData.length; i++) {
                adminManagerData.push(adminManagerTableData[i]);
            }
            console.log("取到数据");
            sessionStorage.setItem('adminManagerData',JSON.stringify(adminManagerData));
            refreshMainTable();

        });
        setAdminCookie("sharpspeedadminaccount", superAdminId, 20);
        setAdminCookie("sharpspeedadminpassword", superAdminPwd, 20);
    }


    /**
     * 刷新主账户表格
     */
    function refreshMainTable() {
        var container = $('#adminManagerTable,div.dataTables_scrollBody');
        if ($.fn.dataTable.isDataTable('#adminManagerTable')) {
            console.log("刷新表格");
            console.log(adminManagerData[0]);
            var tmpOffset = container.scrollTop();
            adminManagerTable.clear();
            for (var i = 0; i < adminManagerData.length; i++) {
                adminManagerTable.row.add(adminManagerData[i]);
            }
            adminManagerTable.draw();
            var table = $('#adminManagerTable').dataTable();
            table.fnProcessingIndicator(false);      // On
            container.scrollTop(tmpOffset);
        }
        else {
            console.log("开始构建主表");
            adminManagerTable = $('#adminManagerTable').DataTable({
                "processing": true,
                "data": adminManagerData,
                "scrollY": "500px",
                "scrollCollapse": false,
                "paging": false,
                "scrollX": true,
                "dom": '<"riskManagerToolbar"f>rlpti',
                "language": {
                    "search": "搜索:",
                    "info": "显示 _START_ 到 _END_ 共 _TOTAL_ 记录",
                    "infoEmpty": "显示 0 到 0 共 0 记录",
                    "emptyTable":"暂无可显示数据",
                    "processing": "正在加载......"
                }
            });
        }
        adminManagerTable.row(selectedIndex).nodes().to$().addClass('selected');
        ifHideMainAccountToolBar(true);
        setAdminCookie("sharpspeedadminaccount", superAdminId, 20);
        setAdminCookie("sharpspeedadminpassword", superAdminPwd, 20);
    }

    function refreshMainAccounts(flag){
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
        setAdminCookie("sharpspeedadminaccount", superAdminId, 20);
        setAdminCookie("sharpspeedadminpassword", superAdminPwd, 20);
    }

</script>

<script>

    function addNewAdminManager(){
        //    $Id="12";
//    $Name="GCtest";
//    $Password="testpass";
//    $SubMain="1";
//    $Restriction="2";
//    $UserName="GameCloud";
//    $Contact="CA";

        //modal 确定 逻辑处理
        var checkedMainAccounts = getCheckedItems().toString();
        var adminManagerAccount = $("#newAdminManagerModal #adminManagerAccount").val();
        var adminManagerPassword = $("#newAdminManagerModal #adminManagerPassword").val();
        var adminManagerName = $("#newAdminManagerModal #adminManagerName").val();
        var adminManagerContact = $("#newAdminManagerModal #adminManagerContact").val();
        var accountAdmin = $("#newAdminManagerModal #accountAdmin :selected").val();
        var moneyAdmin = $("#newAdminManagerModal #moneyAdmin :selected").val();
        var riskAdmin = $("#newAdminManagerModal #riskAdmin :selected").val();
        var rateAdmin = $("#newAdminManagerModal #rateAdmin :selected").val();
        var riskManagerAdmin = $("#newAdminManagerModal #riskManagerAdmin :selected").val();
        var restriction = "0-" + accountAdmin + ",1-" + moneyAdmin + ",2-" + riskAdmin + ",3-" + rateAdmin + ",4-" + riskManagerAdmin;

        alert(checkedMainAccounts);

        //TODO: 应该做 validate
        //ajax 发送插入

        var hostpath = "../../../../FuturesAccountManagerSystem/BusinessLogicLayer/Administrator/InsertData.php";

        $.ajax({
            url: hostpath,
            type: "get", //send it through get method
            data:{
                Id: 0,
                Name: adminManagerAccount,
                Password: adminManagerPassword,
                SubMain: checkedMainAccounts,
                Restriction: restriction,
                UserName: adminManagerName,
                Contact: adminManagerContact,
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

    function updateAdminManager(){

        var adminManagerInfo = adminManagerData[selectedIndex];
        var systemId = adminManagerInfo[0];

        var checkedMainAccounts = getCheckedItems().toString();
        var adminManagerAccount = $("#newAdminManagerModal #adminManagerAccount").val();
        var adminManagerPassword = $("#newAdminManagerModal #adminManagerPassword").val();
        var adminManagerName = $("#newAdminManagerModal #adminManagerName").val();
        var adminManagerContact = $("#newAdminManagerModal #adminManagerContact").val();
        var accountAdmin = $("#newAdminManagerModal #accountAdmin :selected").val();
        var moneyAdmin = $("#newAdminManagerModal #moneyAdmin :selected").val();
        var riskAdmin = $("#newAdminManagerModal #riskAdmin :selected").val();
        var rateAdmin = $("#newAdminManagerModal #rateAdmin :selected").val();
        var riskManagerAdmin = $("#newAdminManagerModal #riskManagerAdmin :selected").val();
        var restriction = "0-" + accountAdmin + ",1-" + moneyAdmin + ",2-" + riskAdmin + ",3-" + rateAdmin + ",4-" + riskManagerAdmin;

        alert(checkedMainAccounts);

        //TODO: 应该做 validate
        //ajax 发送插入

        var hostpath = "../../../../FuturesAccountManagerSystem/BusinessLogicLayer/Administrator/InsertData.php";

        $.ajax({
            url: hostpath,
            type: "get", //send it through get method
            data:{
                Id: systemId,
                Name: adminManagerAccount,
                Password: adminManagerPassword,
                SubMain: checkedMainAccounts,
                Restriction: restriction,
                UserName: adminManagerName,
                Contact: adminManagerContact,
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

    function deleteAdminManager(){
        var adminManagerInfo = adminManagerData[selectedIndex];

        var adminManagerAccount = adminManagerInfo[1];
        var adminManagerPassword = adminManagerInfo[2];
        var checkedMainAccounts = adminManagerInfo[3];
        var systemId = adminManagerInfo[0];
        var adminManagerName = adminManagerInfo[5];
        var adminManagerContact = adminManagerInfo[6];
        var restriction = adminManagerInfo[4];

        //TODO: 应该做 validate
        //ajax 发送插入

        //TODO: PHP有问题，修改PHP
        var hostpath = "../../../../FuturesAccountManagerSystem/BusinessLogicLayer/Administrator/InsertData.php";

        $.ajax({
            url: hostpath,
            type: "get", //send it through get method
            data:{
                Name: adminManagerAccount,
                Password: adminManagerPassword,
                SubMain: checkedMainAccounts,
                Id: systemId,
                Restriction: restriction,
                UserName: adminManagerName,
                Contact: adminManagerContact,
                State: 2,
                AdminAccount: superAdminId,
                AdminPassword: superAdminPwd
            },
            success: function(response) {
                $response = JSON.parse(response);
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

        /**
         * 已经没有用了
         */
        if (flag) {
            $('#admin-update').hide();
            $('#admin-delete').hide();
        } else {
            $('#admin-update').show();
            $('#admin-delete').show();
        }

        if(adminManagerData.length == 0){
            $('#admin-update').hide();
            $('#admin-delete').hide();
        }else{
            $('#admin-update').show();
            $('#admin-delete').show();
        }


    }

    /**
     * 设置管理员信息
     */
    function setAdminManagerInfo() {
        //clear existing contents
        $("#newAdminManagerModal #adminManagerAccount").val("");
        $("#newAdminManagerModal #adminManagerPassword").val("");
        $("#newAdminManagerModal #adminManagerName").val("");
        $("#newAdminManagerModal #adminManagerContact").val("");

        $("#newAdminManagerModal #accountAdmin option").eq(0).attr("selected","selected");
        $("#newAdminManagerModal #moneyAdmin option").eq(0).attr("selected","selected");
        $("#newAdminManagerModal #riskAdmin option").eq(0).attr("selected","selected");
        $("#newAdminManagerModal #rateAdmin option").eq(0).attr("selected","selected");
        $("#newAdminManagerModal #riskManagerAdmin option").eq(0).attr("selected","selected");

        //add mainAccounts
        var mainAccountUL = $("#newAdminManagerModal #mainAccountUL");
        mainAccountUL.empty();
        for (var i = 0; i < mainAccountTableData.length; i++) {
            mainAccountUL.append($("<li class='list-group-item'>").text(mainAccountTableData[i].inf[0]));
        }

        updateCheckBox();
    }

    function fillAdminManagerModal(){
        var adminManagerInfo = adminManagerData[selectedIndex];

        $("#newAdminManagerModal #adminManagerAccount").val(adminManagerInfo[1]);
        $("#newAdminManagerModal #adminManagerPassword").val(adminManagerInfo[2]);
        $("#newAdminManagerModal #adminManagerName").val(adminManagerInfo[5]);
        $("#newAdminManagerModal #adminManagerContact").val(adminManagerInfo[6]);

        var mainAccountArray = adminManagerInfo[3].split(",");

        $("#mainAccountUL li").each(function (idx, li) {
            var subId = $(li).text();
            if (mainAccountArray.indexOf(subId) > -1) //找到
                $(li).click();  //高亮
        });

        var restrictionArray = adminManagerInfo[4].split(",");

        var accountAdmin = restrictionArray[0].slice(-1);
        var accountAdminOption = $("#newAdminManagerModal #accountAdmin option");
        accountAdminOption.eq(accountAdmin).attr('selected', 'selected');

        var moneyAdmin = restrictionArray[1].slice(-1);
        var moneyAdminOption = $("#newAdminManagerModal #moneyAdmin option");
        moneyAdminOption.eq(moneyAdmin).attr('selected', 'selected');

        var riskAdmin = restrictionArray[2].slice(-1);
        var riskAdminOption = $("#newAdminManagerModal #riskAdmin option");
        riskAdminOption.eq(riskAdmin).attr('selected', 'selected');

        var rateAdmin = restrictionArray[3].slice(-1);
        var rateAdminOption = $("#newAdminManagerModal #rateAdmin option");
        rateAdminOption.eq(rateAdmin).attr('selected', 'selected');

        var riskManagerAdmin = restrictionArray[4].slice(-1);
        var riskManagerAdminOption = $("#newAdminManagerModal #riskManagerAdmin option");
        riskManagerAdminOption.eq(riskManagerAdmin).attr('selected', 'selected');

    }

    function getCheckedItems () {
        var checkedItems = [], counter = 0;
        $("#mainAccountUL li.active").each(function (idx, li) {
            checkedItems[counter] = $(li).text();
            counter++;
        });
        return checkedItems;
    }

    $(document).on("click", "#admin-add", function () {
        $(document).off("click", "#newAdminManagerModal .btn-primary");
        setAdminManagerInfo();
        $(document).on("click", "#newAdminManagerModal .btn-primary", addNewAdminManager);
        $('#adminManagerModal').modal('show');
    });

    $(document).on("click", "#admin-update", function () {
        $(document).off("click", "#newAdminManagerModal .btn-primary");
        setAdminManagerInfo();
        fillAdminManagerModal();
        $(document).on("click", "#newAdminManagerModal .btn-primary", updateAdminManager);
        $('#adminManagerModal').modal('show');
    });

    $(document).on("click", "#admin-delete", function () {
        $('#alertNotificationBody').text('确认要删除该管理员？');
        $('#generalAlert').modal('show');
        $(document).off("click", "#generalAlert .btn-primary");
        $(document).on("click", "#generalAlert .btn-primary", function(){
            deleteAdminManager();
        });

    });

</script>

</body>

</html>
