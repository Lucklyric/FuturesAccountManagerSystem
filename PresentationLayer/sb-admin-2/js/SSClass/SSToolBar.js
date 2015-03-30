/**
 * Created by Alvin on 2015-03-29.
 */
function SSToolBar(restartServer,connectMainAccount,onlineCount,serverStatus){
    this.restartServerJq = restartServer;
    this.connectMainAccoutJq = connectMainAccount;
    this.onlineCounJq = onlineCount;
    this.serverStatusJq = serverStatus;



    this.manualRefreah = function(){
        console.log("SSToolBar开始刷新");
    }

    /***
     * 绑定按钮点击事件
     */
    this.restartServerJq.on('click', function() {
        console.log("SSToolBar-重启");
    });

    this.connectMainAccoutJq.on('click', function() {
        console.log("SSToolBar-连接");
    });

}
