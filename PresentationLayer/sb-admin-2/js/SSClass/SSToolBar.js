/**
 * Created by Alvin on 2015-03-29.
 */
function SSToolBar(restartServer,connectMainAccount,onlineCount,serverStatus){
    this.restartServerJq = restartServer;
    this.connectMainAccoutJq = connectMainAccount;
    this.onlineCounJq = onlineCount;
    this.serverStatusJq = serverStatus;

    //var onlinecountText = "在线人数：0人";
    //var serverStatusText = "服务器状态：关闭";


    var parent = this;
    this.callRefresh = function (){
        console.log("SSToolBar开始刷新服务器状态");
        $.getJSON('http://localhost:63342/FuturesAccountManagerSystem/BusinessLogicLayer/Server/ServerState.php', function (data) {
            console.log("服务器状态"+data);
            if (data == "0"){
               parent.serverStatusJq.text("服务器状态：关闭");
            }
        });
        console.log("SSToolBar开始刷新在线人数");
        $.getJSON('http://localhost:63342/FuturesAccountManagerSystem/BusinessLogicLayer/Server/GetLoggedInSubAccountCount.php', function (data) {
            console.log("在线人数"+data);
            parent.onlineCounJq.text("在线人数："+data+"人");
        });
    }
    this.callRefresh();

    setInterval(this.callRefresh, 10000);


    /***
     * 绑定按钮点击事件
     */
    this.restartServerJq.on('click', function() {
        console.log("SSToolBar-重启");
        parent.serverStatusJq.text("服务器状态：请求重启...");
        console.log("开始请求服务器状态")
        //parent.manualRefreah();
        $.getJSON('../../../../../FuturesAccountManagerSystem/BusinessLogicLayer/Server/RestartSharpSpeedServer.php', function (data) {
            console.log("服务器状态"+data);
            if (data == ""){
                parent.serverStatusJq.text("服务器状态：正在重启...");
            }
        });
    });

    this.connectMainAccoutJq.on('click', function() {
        console.log("SSToolBar-连接");
        parent.serverStatusJq.text("服务器状态：请求链接...");
        $.getJSON('http://localhost:63342/FuturesAccountManagerSystem/BusinessLogicLayer/Server/ConnectAllSPServerMainAccounts.php', function (data) {
            console.log("服务器状态"+data);
            if (data == ""){
                parent.serverStatusJq.text("服务器状态:正在链接...");
            }
        });
    });

}
