<?php
/**
 * Created by IntelliJ IDEA.
 * User: Alvin
 * Date: 2015-05-15
 * Time: 1:11 PM
 */
?>
<!---->
<!--    <!-- Bootstrap Core JavaScript -->-->
<!--    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>-->
<!---->
<!--    <!-- Metis Menu Plugin JavaScript -->-->
<!--    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>-->
<!---->
<!--    <!-- DataTables JavaScript -->-->
<!--    <script-->
<!--        src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>-->
<!--    <script-->
<!--        src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>-->
<!---->
<!--    <script src="../../../Source/DataTable-Plugins/api/fnProcessingIndicator.js"></script>-->
<!---->
<!--    <script src="../js/SSClass/SSToolBar.js"></script>-->
<!---->
<!--    <!-- Custom Theme JavaScript -->-->
<!--    <script src="../dist/js/sb-admin-2.js"></script>-->
<!--    <script>-->
<!---->
<!---->
<!---->
<!---->
<!--        $(document).ready(function () {-->
<!--            $.ajaxSetup({cache:false});-->
<!--            $(document).on("click", "#mainLogout", function () {-->
<!--                delCookie('sharpspeedadminaccount');-->
<!--                delCookie('sharpspeedadminpassword');-->
<!--                self.location = 'http://121.40.131.144/Report/Shared/login.html';-->
<!--            });-->
<!---->
<!--            $(document).on("click", "#mainInformation", function () {-->
<!--                $.ajax({-->
<!--                    url: "../../../../../FuturesAccountManagerSystem/BusinessLogicLayer/Server/ServerExtention.php",-->
<!--                    type: "get", //send it through get method-->
<!--                    dataType: "json",-->
<!--                    contentType: "application/json",-->
<!--                    data: {-->
<!--                    AdminAccount: superAdminId,-->
<!--                        AdminPassword: superAdminPwd-->
<!--                    },-->
<!--                    success: function (response) {-->
<!--                    var supperAccountInfo = response.split(":");-->
<!--                    var ip = "";-->
<!--                    if (supperAccountInfo[0] == "127.0.0.1"){-->
<!--                        ip = "--><?php //echo $_SERVER['SERVER_NAME']; ?>//";
//                        }else{
//                        ip = supperAccountInfo[0];
//                        }
//
//                        $('#generalMainAccountInfoBody').html('管理员账户:' + superAdminId + "<br/>服务器地址:" + ip + ":" + supperAccountInfo[1]);
//                        $('#generalMainAccountInfo').modal('show');
//                    },
//                    error: function (xhr) {
//                    //Do Something to handle error
//                    console.log("取地址信息发生错误" + xhr);
//                }
//                });
//            });
//        });
//
//    </script>