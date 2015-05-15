/**
 * Created by Alvin on 2015-03-29.
 */
function SSToolBar(restartServer,connectMainAccount,onlineCount,serverStatus){
    this.restartServerJq = restartServer;
    this.connectMainAccoutJq = connectMainAccount;
    this.onlineCounJq = onlineCount;
    this.serverStatusJq = serverStatus;
    var parent = this;
    //this.onlinecountText = "在线人数：0人";
    //this.serverStatusText = "服务器状态：关闭";
    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i=0; i<ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1);
            if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
        }
        return "";
    }

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires="+d.toUTCString();
        document.cookie = cname + "=" + cvalue + "; " + expires;
    }

    function checkCookie()
    {
        var tmp_status=getCookie('toolBarStatus-CID1');
        console.log("取到cookies:"+tmp_status);
        if (tmp_status!=null && tmp_status!="") {
            parent.serverStatusJq.text(tmp_status);
        }
        tmp_status=getCookie('toolBarCount-CID1');
        console.log("取到cookies:"+tmp_status);
        if (tmp_status!=null && tmp_status!="") {
            parent.onlineCounJq.text(tmp_status);
        }
    }


    this.callRefresh = function (){
        console.log("SSToolBar开始刷新服务器状态");
        $.getJSON('../../../../../FuturesAccountManagerSystem/BusinessLogicLayer/Server/ServerState.php?AdminAccount='+superAdminId+'&AdminPassword='+superAdminPwd, function (data) {
            console.log("服务器状态"+data);
            //if (data == "0"){
               parent.serverStatusJq.text("服务器状态："+data);
                setCookie('toolBarStatus-CID1', parent.serverStatusJq.text(),15*1/24/60/60);
            //}
        });
        console.log("SSToolBar开始刷新在线人数");
        $.getJSON('../../../../../FuturesAccountManagerSystem/BusinessLogicLayer/Server/GetLoggedInSubAccountCount.php?AdminAccount='+superAdminId+'&AdminPassword='+superAdminPwd, function (data) {
            console.log("在线人数"+data);
            parent.onlineCounJq.text("在线人数："+data+"人");
            setCookie('toolBarCount-CID1', parent.onlineCounJq.text(),15*1/24/60/60);
        });
    }
    checkCookie();
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
        $.getJSON('../../../../../FuturesAccountManagerSystem/BusinessLogicLayer/Server/RestartSharpSpeedServer.php?AdminAccount='+superAdminId+'&AdminPassword='+superAdminPwd, function (data) {
            console.log("服务器状态"+data);
            if (data == ""){
                parent.serverStatusJq.text("服务器状态：正在重启...");
            }
        });
    });

    this.connectMainAccoutJq.on('click', function() {
        console.log("SSToolBar-连接");
        parent.serverStatusJq.text("服务器状态：请求链接...");
        $.getJSON('../../../../../FuturesAccountManagerSystem/BusinessLogicLayer/Server/ConnectAllSPServerMainAccounts.php?AdminAccount='+superAdminId+'&AdminPassword='+superAdminPwd, function (data) {
            console.log("服务器状态"+data);
            if (data == ""){
                parent.serverStatusJq.text("服务器状态:正在链接...");
            }
        });
    });

}
