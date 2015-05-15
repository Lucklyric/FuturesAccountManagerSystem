<?php
include_once("Template.php");
?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">业务审核</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            业务详情
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
                                                        <option>CTP</option>
                                                        <option>CTP</option>
                                                        <option>CTP</option>
                                                        <option>CTP</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">

                                                    <label for="company">经纪公司</label>

                                                    <select  style="float: right; width: 50%" class="form-control" id="company">
                                                        <option>CTP</option>
                                                        <option>CTP</option>
                                                        <option>CTP</option>
                                                        <option>CTP</option>
                                                        <option>CTP</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">

                                                    <label for="server">服务器</label>

                                                    <select  style="float: right; width: 50%" class="form-control" id="server">
                                                        <option>上海电信</option>
                                                        <option>上海电信</option>
                                                        <option>上海电信</option>
                                                        <option>上海电信</option>
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
                                                        <option></option>
                                                        <option></option>
                                                        <option></option>
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
                                                        <option>上海电信</option>
                                                        <option>上海电信</option>
                                                        <option>上海电信</option>
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


                                <table id="operationManagerTable" class="table table-striped table-bordered table-hover"
                                       cellspacing="0" width="100%">

                                    <div class="operationManagerToolbar" style="float:left">
                                        <button type="button" class="btn btn-success" id="main-accept">
                                           生效
                                        </button>
                                        <button type="button" class="btn btn-danger" id="main-reject" data-toggle="modal">
                                            驳回
                                        </button>
                                    </div>
                                    <thead>
                                    <tr>
                                        <th>编号</th>
                                        <th>功能模块</th>
                                        <th>操作员</th>
                                        <th>操作时间</th>
                                        <th>操作类型</th>
                                        <th>操作对象</th>
                                        <th>审核员</th>
                                        <th>审核结果</th>
                                        <th>审核时间</th>
                                    </tr>
                                    </thead>

                                    <tfoot>
                                    <tr>
                                        <th>编号</th>
                                        <th>功能模块</th>
                                        <th>操作员</th>
                                        <th>操作时间</th>
                                        <th>操作类型</th>
                                        <th>操作对象</th>
                                        <th>审核员</th>
                                        <th>审核结果</th>
                                        <th>审核时间</th>
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
include_once("SharedScript.php");
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

    var operationManagerTable;
    var operationManagerTableData;
    var operationManagerData= [];
    var selectedIndex = 0;  //mainSelectedIndex
    var toolBarManger = new SSToolBar($("#restartServer"),$("#connectMainAccount"),$("#onlineCount"),$("#serverStatus"));
    /**
     * Document加载完毕 更新数据刷新Table绑定点击事件
     */
    $(document).ready(function () {
        ifHideMainAccountToolBar(true);
        refreshMainTable();
        refreshData(1); //更新数据

        $('#operationManagerTable').on('click', 'tr', function () { //绑定点击事件刷新子账户
            selectedIndex = operationManagerTable.row(this).index();
            ifHideMainAccountToolBar(false);
            //refreshMainTable();
            if ( $(this).hasClass('selected') ) {
                //$(this).removeClass('selected');
            }
            else {
                operationManagerTable.$('tr.selected').removeClass('selected');
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
        operationManagerData = [];
        ifHideMainAccountToolBar(true);
        var table = $('#operationManagerTable').dataTable();
        table.fnProcessingIndicator();      // On
        console.log("开始刷新数据");
        //mainAccountTable.fnProcessingIndicator();
        if (flag === undefined){
            if (sessionStorage.getItem('operationManagerData')){
                operationManagerData = JSON.parse(sessionStorage.getItem('operationManagerData'));
                refreshMainTable();
                return;
            }
        }
        $.getJSON('../../../../FuturesAccountManagerSystem/BusinessLogicLayer/Operations/Refresh.php?AdminAccount='+superAdminId+'&AdminPassword='+superAdminPwd, function (data) {
            operationManagerTableData = data.data;
            console.log(operationManagerTableData[0]);
            for (var i = 0; i < operationManagerTableData.length; i++) {
                operationManagerData.push(operationManagerTableData[i]);
            }
            console.log("取到数据");
            sessionStorage.setItem('operationManagerData',JSON.stringify(operationManagerData));
            refreshMainTable();
        });
        setAdminCookie("sharpspeedadminaccount", superAdminId, 20);
        setAdminCookie("sharpspeedadminpassword", superAdminPwd, 20);
    }


    /**
     * 刷新主账户表格
     */
    function refreshMainTable() {
        var container = $('#operationManagerTable,div.dataTables_scrollBody');
        if ($.fn.dataTable.isDataTable('#operationManagerTable')) {
            console.log("刷新表格");
            console.log(operationManagerData[0]);
            var tmpOffset = container.scrollTop();
            operationManagerTable.clear();
            for (var i = 0; i < operationManagerData.length; i++) {
                operationManagerTable.row.add(operationManagerData[i]);
            }
            operationManagerTable.draw();
            var table = $('#operationManagerTable').dataTable();
            table.fnProcessingIndicator(false);      // On
            container.scrollTop(tmpOffset);
        }
        else {
            console.log("开始构建主表");
            operationManagerTable = $('#operationManagerTable').DataTable({
                "processing": true,
                "data": operationManagerData,
                "scrollY": "500px",
                "scrollCollapse": false,
                "paging": false,
                "scrollX": true,
                "dom": '<"operationManagerToolbar"f>rlpti',
                "language": {
                    "search": "搜索:",
                    "info": "显示 _START_ 到 _END_ 共 _TOTAL_ 记录",
                    "infoEmpty": "显示 0 到 0 共 0 记录",
                    "emptyTable":"暂无可显示数据",
                    "processing": "正在加载......"
                }
            });
        }
        operationManagerTable.row(selectedIndex).nodes().to$().addClass('selected');
        ifHideMainAccountToolBar(true);
    }



</script>

<script>

    //modal 确定 逻辑处理
    $(document).on("click", "#newAccountModal .btn-primary", function () {
        var channel = $("#newAccountModal #channel")[0].value;
        var company = $("#newAccountModal #company")[0].value;
        var server = $("#newAccountModal #server")[0].value;
        var userId = $("#newAccountModal #userId")[0].value;
        var userPassword = $("#newAccountModal #userPassword")[0].value;

        //TODO: 应该做 validate
        //ajax 发送插入

        var hostpath = "../../../../FuturesAccountManagerSystem/BusinessLogicLayer/MainAccount/InsertData.php";

        $.ajax({
            url: hostpath,
            type: "get", //send it through get method
            data:{
                Channel: channel,
                CompanyName: company,
                CompanyServer: server,
                AccountId: userId,
                AccountPassword: userPassword,
                AdminAccount: superAdminId,
                AdminPassword: superAdminPwd
            },
            success: function(response) {
                $('#generalNotificationBody').text(response);
                $('#generalNotification').modal('show');
                refreshData(1);
            },
            error: function(xhr) {
                //Do Something to handle error
            }
        });

    });



    function ifHideMainAccountToolBar(flag){
        return;
        if (flag){
            $('#main-accept').hide();
            $('#main-reject').hide();
        }else{
            $('#main-accept').show();
            $('#main-reject').show();
        }

        if (operationManagerData.length == 0){
            $('#main-accept').hide();
            $('#main-reject').hide();
        }else{
            $('#main-accept').hide();
            $('#main-reject').hide();
        }
    }
    // .click(function() {
    // alert( "Handler for .click() called." );
    // });

    $(document).on("click", "#main-accept", function () {
        //TODO 做同意请求
    });

    $(document).on("click", "#main-reject", function () {
        //TODO 做撤回请求
    });

</script>

</body>

</html>
