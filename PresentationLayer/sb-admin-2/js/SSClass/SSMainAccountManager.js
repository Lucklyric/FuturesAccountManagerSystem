/**
 * Created by Alvin on 2015-04-21.
 */
function SSMainAccountManager(accoutId,accoutPwd,redrawCallBack){
    var ssMainAccounttManagerInstance = this;
    this.hostpath = "../../../../../FuturesAccountManagerSystem/BusinessLogicLayer/MainAccount/ExtentionFunctions.php";
    this.accoutId = accoutId;
    this.accoutPwd = accoutPwd;
    this.currentChangedOrders = [];
    this.currentMissingOrders = [];
    this.currentOriginPos = [];
    this.currentQueryPos = [];

    this.currentAllInstrumentIdDic=[];
    this.currentTableData = [];
    this.currentPosTableData = [];
    this.mainAccouts = [];
    this.needCheckQueue = [];
    //this.positionCheckQueue = [];
    this.redrawCallback = redrawCallBack;
    this.orderSyncTable;
    this.positionSyncTable;
    this.isTimerRunning = false;
    this.curSubAccounts =[];
    this.duoPosText="";
    this.kongPosText="";

    /***
     * 定时器函数
     */
    this.checkTimerFunction = function(){
        console.log(ssMainAccounttManagerInstance.needCheckQueue);
        for (var i = 0; i < ssMainAccounttManagerInstance.needCheckQueue.length ; i++){
            ssMainAccounttManagerInstance.GetMainAccountStatus(ssMainAccounttManagerInstance.needCheckQueue[i]);
        }
    }

    /***
     * 初始化检测队列
     * @param mainAccounts
     * @constructor
     */
    this.InitMainAccountsCheckList = function(mainAccounts){
        this.needCheckQueue = [];
        this.mainAccouts = mainAccounts;

        for (var i = 0 ; i < this.mainAccouts.length ;i++){

            if (mainAccounts[i][7].localeCompare("已同步")){
                this.needCheckQueue.push(mainAccounts[i][0]);
            }
        }

        if (!this.isTimerRunning) {
            setInterval(this.checkTimerFunction, 5000);
            this.isTimerRunning = true;
        }
    }

    /***
     * 更新当前主账户的状态
     * @param index
     * @constructor
     */
    this.GetMainAccountStatus = function(index) {
        for (var i = 0 ; i < ssMainAccounttManagerInstance.mainAccouts.length ; i++){
            if (ssMainAccounttManagerInstance.mainAccouts[i][0] == index){
                index = i;
            }
        }
        //alert(this.mainAccouts);
        //alert(ssMainAccounttManagerInstance.mainAccouts[index][0]),
        $.ajax({
            url: ssMainAccounttManagerInstance.hostpath,
            type: "get", //send it through get method
            dataType: "json",
            contentType: "application/json",
            data: {
                AdminAccount:ssMainAccounttManagerInstance.accoutId,
                AdminPassword:ssMainAccounttManagerInstance.accoutPwd,
                MainId:ssMainAccounttManagerInstance.mainAccouts[index][0],
                Method:"getMainStatus"
            },
            success: function (response) {
                var tmpResponse = JSON.parse(response);
                console.log("结果"+tmpResponse+" "+ index);
                if (tmpResponse == "需要报单和持仓同步"){
                   ssMainAccounttManagerInstance.mainAccouts[index][7] = "需要报单同步";
               }else{

                    if (tmpResponse == "需要报单同步"){
                        ssMainAccounttManagerInstance.mainAccouts[index][7] = "需要报单同步";
                    }else if(tmpResponse == "需要持仓同步"){

                        ssMainAccounttManagerInstance.mainAccouts[index][7] = "需要持仓同步";
                    }else if(tmpResponse == "已连接"){
                        ssMainAccounttManagerInstance.mainAccouts[index][7] = "已连接";
                        ssMainAccounttManagerInstance.needCheckQueue.splice(ssMainAccounttManagerInstance.needCheckQueue.indexOf(ssMainAccounttManagerInstance.mainAccouts[index][0]),1);
                    }else if(tmpResponse == "连接错误"){
                        ssMainAccounttManagerInstance.mainAccouts[index][7] = "连接错误";
                        ssMainAccounttManagerInstance.ConnectMainAccount(index);
                        if (ssMainAccounttManagerInstance.needCheckQueue.length == 1){
                            ssMainAccounttManagerInstance.needCheckQueue =[];
                        }else {
                            ssMainAccounttManagerInstance.needCheckQueue.splice(ssMainAccounttManagerInstance.needCheckQueue.indexOf(ssMainAccounttManagerInstance.mainAccouts[index][0]),1);
                        }
                    }else if(tmpResponse == "未启动"){
                        ssMainAccounttManagerInstance.mainAccouts[index][7] = "未启动";
                        ssMainAccounttManagerInstance.ConnectMainAccount(index);
                    }
               }
                sessionStorage.setItem('mainAccountData',JSON.stringify(ssMainAccounttManagerInstance.mainAccouts));
                ssMainAccounttManagerInstance.redrawCallback();
            },
            error: function (xhr) {
                console.log(xhr);
                //Do Something to handle error
            }
        });
    }

    /***
     * 链接主账户
     * @param index
     * @constructor
     */
    this.ConnectMainAccount = function(index) {
        console.log('链接'+this.mainAccouts[index][0]);
        $.ajax({
            url: this.hostpath,
            type: "get", //send it through get method
            dataType: "json",
            contentType: "application/json",
            data: {
                AdminAccount: this.accoutId,
                AdminPassword: this.accoutPwd,
                MainId: this.mainAccouts[index][0],
                Method: "connectMain"
            },
            success: function (response) {
                console.log("链接"+ssMainAccounttManagerInstance.mainAccouts[index][0]+'结果'+response);
            },
            error: function (xhr) {
                //Do Something to handle error
            }
        });
    }

    /**
     * 更新当前的报单同步页面
     * @param index 当前主账户
     * @param table 报单table
     */
    this.updateCurrentMainAccountOrderInfo = function(index,table){
           // var tmpTable = table.dataTable();
            //tmpTable.fnProcessingIndicator(true);


           // var tmpTable = table.dataTable();
            //tmpTable.fnProcessingIndicator(true);
        this.orderSyncTable = table;
            $.ajax({
                url: this.hostpath,
                type: "get", //send it through get method
                dataType: "json",
                contentType: "application/json",
                data: {
                    AdminAccount:this.accoutId,
                    AdminPassword:this.accoutPwd,
                    MainId:this.mainAccouts[index][0],
                    Method:"getNeedSyncOrders"
                },
                success: function (data) {
                    console.log(data);
                    data = JSON.parse(data);

                    if(data.length == 0) return;

                    ssMainAccounttManagerInstance.currentChangedOrders = data["ColChangedOrders"];

                    ssMainAccounttManagerInstance.currentMissingOrders = data['ColMissingOrders'];
                    ssMainAccounttManagerInstance.currentTableData = [];
                    for (var i = 0 ; i < ssMainAccounttManagerInstance.currentChangedOrders.length ; i++){
                        var curRowData = ssMainAccounttManagerInstance.currentChangedOrders[i]['Order'];
                        var tmpTableRowData = [];
                        tmpTableRowData.push('');
                        tmpTableRowData.push(ssMainAccounttManagerInstance.mainAccouts[index][0]);
                        tmpTableRowData.push(curRowData['OrderSysID']);
                        tmpTableRowData.push(curRowData['InstrumentID']);
                        if(curRowData['BuyOrSell'] == 'true'){
                            tmpTableRowData.push('买');
                        }else{
                            tmpTableRowData.push('卖');
                        }

                        if(curRowData['NewOrClose'] == 'true'){
                            tmpTableRowData.push('开');
                        }else{
                            tmpTableRowData.push('平');
                        }

                        if(curRowData['CloseTodayOrHistoryPos']=='true'){
                            tmpTableRowData.push('平今');
                        }else{
                            tmpTableRowData.push('平昨');
                        }
                        tmpTableRowData.push(curRowData['sStatus']);
                        tmpTableRowData.push(curRowData['TradedPrice']);
                        tmpTableRowData.push(curRowData['TradedVolume']);
                        tmpTableRowData.push(curRowData['TradedTime']);
                        ssMainAccounttManagerInstance.currentTableData.push(tmpTableRowData);
                    }
                    //TODO：后面写成function
                    for (var i = 0 ; i < ssMainAccounttManagerInstance.currentMissingOrders.length ; i++){
                        var curRowData = ssMainAccounttManagerInstance.currentMissingOrders[i]['Order'];
                        var tmpTableRowData = [];
                        tmpTableRowData.push('');
                        tmpTableRowData.push(ssMainAccounttManagerInstance.mainAccouts[index][0]);
                        tmpTableRowData.push(curRowData['OrderSysID']);
                        tmpTableRowData.push(curRowData['InstrumentID']);
                        if(curRowData['BuyOrSell'] == 'true'){
                            tmpTableRowData.push('买');
                        }else{
                            tmpTableRowData.push('卖');
                        }

                        if(curRowData['NewOrClose'] == 'true'){
                            tmpTableRowData.push('开');
                        }else{
                            tmpTableRowData.push('平');
                        }

                        if(curRowData['CloseTodayOrHistoryPos']=='true'){
                            tmpTableRowData.push('平今');
                        }else{
                            tmpTableRowData.push('平昨');
                        }
                        tmpTableRowData.push(curRowData['sStatus']);
                        tmpTableRowData.push(curRowData['TradedPrice']);
                        tmpTableRowData.push(curRowData['TradedVolume']);
                        tmpTableRowData.push(curRowData['TradedTime']);
                        ssMainAccounttManagerInstance.currentTableData.push(tmpTableRowData);
                    }
                    if ($.fn.dataTable.isDataTable(table)) {
                        table.DataTable().clear();
                        for (var i = 0; i <  ssMainAccounttManagerInstance.currentTableData.length; i++) {
                            table.DataTable().row.add( ssMainAccounttManagerInstance.currentTableData[i]);
                        }
                        table.DataTable().draw();

                    }else {
                        table.DataTable({
                            "processing": true,
                            "data": ssMainAccounttManagerInstance.currentTableData,
                            "scrollY": "500px",
                            "scrollCollapse": false,
                            "paging": false,
                            "language": {
                                "search": "搜索:",
                                "info": "显示 _START_ 到 _END_ 共 _TOTAL_ 记录",
                                "infoEmpty": "显示 0 到 0 共 0 记录",
                                "emptyTable": "暂无可显示数据",
                                "processing": "正在加载......"
                            }
                        });
                    }
                        for (var i = 0; i < ssMainAccounttManagerInstance.currentTableData.length; i++) {
                            table.DataTable().cell(i, 0).nodes().to$().append($('<select style="float: right; width: 100%" >'));
                            for (var j = 0; j < ssMainAccounttManagerInstance.curSubAccounts.length; j++) {
                                console.log(table.DataTable().cell(i, 0).nodes().to$().find('select').append($('<option>', {
                                    value: ssMainAccounttManagerInstance.curSubAccounts[j][0],
                                    text: ssMainAccounttManagerInstance.curSubAccounts[j][1]
                                })));
                            }
                        }

                },
                error: function (xhr) {
                    //Do Something to handle error
                }
            });
        }

    /***
     * 提交当前的报单同步信息
     * @param index
     */
    this.submitSyncOrderStream = function(index) {


        var dataStream="adminID="+ssMainAccounttManagerInstance.accoutId+"&adminPwd="+ssMainAccounttManagerInstance.accoutPwd+"&mainAccountID="+(ssMainAccounttManagerInstance.mainAccouts[index][0]);
        dataStream += "&numOfChanged="+ssMainAccounttManagerInstance.currentChangedOrders.length+"&numOfMiss="+ssMainAccounttManagerInstance.currentMissingOrders.length;
        var rowIndex = 0;
        for (var i = 0; i < ssMainAccounttManagerInstance.currentChangedOrders.length; i++) {

            //for (var key in ssMainAccounttManagerInstance.currentChangedOrders[i]['Order']) {

            dataStream +=  "&field="+ssMainAccounttManagerInstance.currentChangedOrders[i]['Order']['OrderSysID'];
            dataStream +=  "&field="+ssMainAccounttManagerInstance.currentChangedOrders[i]['Order']['InstrumentID'];
            dataStream +=  "&field="+ssMainAccounttManagerInstance.currentChangedOrders[i]['Order']['BuyOrSell'];
            dataStream +=  "&field="+ssMainAccounttManagerInstance.currentChangedOrders[i]['Order']['NewOrClose'];
            dataStream +=  "&field="+ssMainAccounttManagerInstance.currentChangedOrders[i]['Order']['CloseTodayOrHistoryPos'];
            dataStream +=  "&field="+ssMainAccounttManagerInstance.currentChangedOrders[i]['Order']['OriginVolume'];
            dataStream +=  "&field="+ssMainAccounttManagerInstance.currentChangedOrders[i]['Order']['OriginPrice'];
            dataStream +=  "&field="+ssMainAccounttManagerInstance.currentChangedOrders[i]['Order']['OriginTime'];
            dataStream +=  "&field="+ssMainAccounttManagerInstance.currentChangedOrders[i]['Order']['TradedVolume'];
            dataStream +=  "&field="+ssMainAccounttManagerInstance.currentChangedOrders[i]['Order']['TradedPrice'];
            dataStream +=  "&field="+ssMainAccounttManagerInstance.currentChangedOrders[i]['Order']['TradedTime'];
            dataStream +=  "&field="+ssMainAccounttManagerInstance.currentChangedOrders[i]['Order']['sStatus'];
            //}
            dataStream += "&DBiD="+ssMainAccounttManagerInstance.currentChangedOrders[i]['OrderDBID'];
            dataStream += "&subID="+ssMainAccounttManagerInstance.orderSyncTable.DataTable().cell(rowIndex, 0).nodes().to$().find(':selected').val();
            rowIndex++;
        }
        for (var i = 0; i < ssMainAccounttManagerInstance.currentMissingOrders.length; i++) {

            dataStream +=  "&field="+ssMainAccounttManagerInstance.currentMissingOrders[i]['Order']['OrderSysID'];
            dataStream +=  "&field="+ssMainAccounttManagerInstance.currentMissingOrders[i]['Order']['InstrumentID'];
            dataStream +=  "&field="+ssMainAccounttManagerInstance.currentMissingOrders[i]['Order']['BuyOrSell'];
            dataStream +=  "&field="+ssMainAccounttManagerInstance.currentMissingOrders[i]['Order']['NewOrClose'];
            dataStream +=  "&field="+ssMainAccounttManagerInstance.currentMissingOrders[i]['Order']['CloseTodayOrHistoryPos'];
            dataStream +=  "&field="+ssMainAccounttManagerInstance.currentMissingOrders[i]['Order']['OriginVolume'];
            dataStream +=  "&field="+ssMainAccounttManagerInstance.currentMissingOrders[i]['Order']['OriginPrice'];
            dataStream +=  "&field="+ssMainAccounttManagerInstance.currentMissingOrders[i]['Order']['OriginTime'];
            dataStream +=  "&field="+ssMainAccounttManagerInstance.currentMissingOrders[i]['Order']['TradedVolume'];
            dataStream +=  "&field="+ssMainAccounttManagerInstance.currentMissingOrders[i]['Order']['TradedPrice'];
            dataStream +=  "&field="+ssMainAccounttManagerInstance.currentMissingOrders[i]['Order']['TradedTime'];
            dataStream +=  "&field="+ssMainAccounttManagerInstance.currentMissingOrders[i]['Order']['sStatus'];
            dataStream += "&DBiD="+ssMainAccounttManagerInstance.currentMissingOrders[i]['OrderDBID'];
            dataStream += "&subID="+ssMainAccounttManagerInstance.orderSyncTable.DataTable().cell(rowIndex, 0).nodes().to$().find(':selected').val();
            rowIndex++;
        }
        //console.log(ssMainAccounttManagerInstance.orderSyncTable.DataTable().cell(rowIndex, 0).nodes().to$().find('select').val());
        console.log(dataStream);
        $.ajax({
            url: ssMainAccounttManagerInstance.hostpath,
            type: "get", //send it through get method
            //dataType: "json",
            contentType: "application/json",
            data: {
                Data: dataStream,
                Method: "onSyncOrder"
            },
            success: function (response) {
               // response = JSON.parse(response);
                if(response==''){
                    $('#generalNotificationBody').text('成功');
                }else{
                    $('#generalNotificationBody').text(response);
                }
            },
            error: function (xhr) {
                //Do Something to handle error
            }
        });
    }

    /***
     * 更新当前的仓位同步页面
     * @param index
     * @param table
     */
    this.updateCurrentMainAccountPositionInfo = function(index,table){
        this.positionSyncTable = table;
        $.ajax({
            url: this.hostpath,
            type: "get", //send it through get method
            dataType: "json",
            contentType: "application/json",
            data: {
                AdminAccount:this.accoutId,
                AdminPassword:this.accoutPwd,
                MainId:this.mainAccouts[index][0],
                Method:"getNeedSyncPositions"
            },
            success: function (data) {
                console.log(data);
                data = JSON.parse(data);
                console.log(data);
                /**
                 * 这边我的QueryPos和ColOrigin弄反了
                 * 为了快速改我就在取数据这先反过来取
                 */
                ssMainAccounttManagerInstance.currentOriginPos = data['ColQueryPos'];
                ssMainAccounttManagerInstance.currentQueryPos = data['ColOriginDBPos'];
                ssMainAccounttManagerInstance.currentPosTableData = [];

                ssMainAccounttManagerInstance.currentAllInstrumentIdDic =[];

                for (var i = 0 ; i < ssMainAccounttManagerInstance.currentQueryPos.length ; i++) {
                    var curPos = ssMainAccounttManagerInstance.currentQueryPos[i];
                    var tmpRawData = [];
                    tmpRawData.push("");
                    tmpRawData.push(curPos['InstrumentID']);

                    if (ssMainAccounttManagerInstance.currentAllInstrumentIdDic[curPos['InstrumentID']]===undefined){
                        ssMainAccounttManagerInstance.currentAllInstrumentIdDic[curPos['InstrumentID']] =[];
                        ssMainAccounttManagerInstance.currentAllInstrumentIdDic[curPos['InstrumentID']]['query'] =[];
                        ssMainAccounttManagerInstance.currentAllInstrumentIdDic[curPos['InstrumentID']]['origin'] =[];
                        ssMainAccounttManagerInstance.currentAllInstrumentIdDic[curPos['InstrumentID']]['query']['duo'] =0;
                        ssMainAccounttManagerInstance.currentAllInstrumentIdDic[curPos['InstrumentID']]['query']['kong'] =0;
                        ssMainAccounttManagerInstance.currentAllInstrumentIdDic[curPos['InstrumentID']]['origin']['duo'] =0;
                        ssMainAccounttManagerInstance.currentAllInstrumentIdDic[curPos['InstrumentID']]['origin']['kong'] =0;
                    }
                    if(curPos['LongOrShort'] == 'true'){
                        tmpRawData.push('多');
                        ssMainAccounttManagerInstance.currentAllInstrumentIdDic[curPos['InstrumentID']]['query']['duo'] += curPos['Volume'];
                    }else{
                        tmpRawData.push('空');
                        ssMainAccounttManagerInstance.currentAllInstrumentIdDic[curPos['InstrumentID']]['query']['kong'] += curPos['Volume'];
                    }
                    tmpRawData.push(curPos['OpenPrice']);
                    tmpRawData.push(curPos['Volume']);
                    tmpRawData.push(curPos['OpenDay']);
                    tmpRawData.push('投机');
                    ssMainAccounttManagerInstance.currentPosTableData.push(tmpRawData);
                }


                console.log(ssMainAccounttManagerInstance.currentPosTableData);
                if ($.fn.dataTable.isDataTable(table)) {
                    table.DataTable().clear();
                    for (var i = 0; i <  ssMainAccounttManagerInstance.currentPosTableData.length; i++) {
                        table.DataTable().row.add( ssMainAccounttManagerInstance.currentPosTableData[i]);
                    }
                    table.DataTable().draw();

                }else {
                    table.DataTable({
                        "processing": true,
                        "data": ssMainAccounttManagerInstance.currentPosTableData,
                        "scrollY": "166px",
                        "scrollCollapse": false,
                        "dom": '<"mainSyncPositionToolbar"f>rlpti',
                        "paging": false,
                        "language": {
                            "search": "搜索:",
                            "info": "显示 _START_ 到 _END_ 共 _TOTAL_ 记录",
                            "infoEmpty": "显示 0 到 0 共 0 记录",
                            "emptyTable": "暂无可显示数据",
                            "processing": "正在加载......"
                        }
                    });

                    table.on('click', 'tr', function () { //绑定点击事件刷新子账户
                        ifHideSubAccountToolBar(false);
                        if ( $(this).hasClass('selected') ) {
                            //$(this).removeClass('selected');
                        }
                        else {
                            table.DataTable().$('tr.selected').removeClass('selected');
                            $(this).addClass('selected');
                        }
                    } );

                    $("#pos-add").on('click',function(){
                        var containerSyncPos = $('#syncPositionTable,div.dataTables_scrollBody');
                        var newLength = table.DataTable().data().length;
                        table.DataTable().row.add( [
                            '',
                            '',
                            '',
                            '',
                            '',
                            '',
                            '投机'
                        ] ).draw();
                        table.DataTable().$('tr.selected').removeClass('selected');
                        table.DataTable().row(newLength).nodes().to$().addClass('selected');
                        table.DataTable().cell(newLength, 0).nodes().to$().append($('<select style="float: right; width: 100%" >'));
                        for (var j = 0; j < ssMainAccounttManagerInstance.curSubAccounts.length; j++) {
                            table.DataTable().cell(newLength, 0).nodes().to$().find('select').append($('<option>', {
                                value: ssMainAccounttManagerInstance.curSubAccounts[j][0],
                                text: ssMainAccounttManagerInstance.curSubAccounts[j][1]
                            }));
                        }
                        table.DataTable().cell(newLength, 1).nodes().to$().append($('<select style="float: right; width: 100%" >'));
                        for (var key in ssMainAccounttManagerInstance.currentAllInstrumentIdDic) {
                            table.DataTable().cell(newLength, 1).nodes().to$().find('select').append($('<option>', {
                                value: key,
                                text: key
                            }));
                        }
                        table.DataTable().cell(newLength, 2).nodes().to$().append($('<select style="float: right; width: 100%" >'));

                        table.DataTable().cell(newLength, 2).nodes().to$().find('select').append($('<option>', {
                            value: 'true',
                            text: "多"
                        }));
                        table.DataTable().cell(newLength, 2).nodes().to$().find('select').append($('<option>', {
                            value: 'false',
                            text: "空"
                        }));
                        table.DataTable().cell(newLength, 3).nodes().to$().append($('<input style="float: right; width: 100%" >'));
                        table.DataTable().cell(newLength, 3).nodes().to$().find('input').val("0");


                        table.DataTable().cell(newLength, 4).nodes().to$().append($('<input style="float: right; width: 100%" >'));
                        table.DataTable().cell(newLength, 4).nodes().to$().find('input').val("0");

                        var today = new Date();
                        var dd = today.getDate();
                        var mm = today.getMonth()+1; //January is 0!


                        table.DataTable().cell(newLength, 5).nodes().to$().append($('<input style="float: right; width: 100%" >'));
                        table.DataTable().cell(newLength, 5).nodes().to$().find('input').val(moment().format('YYYY-MM-DD'));
                        containerSyncPos.scrollTop(1000000);
                    });
                    $("#pos-delete").on('click',function(){
                        var containerSyncPos = $('#syncPositionTable,div.dataTables_scrollBody');
                        var tmpOffset = containerSyncPos.scrollTop();
                        table.DataTable()
                            .rows( '.selected' )
                            .remove()
                            .draw();
                        containerSyncPos.scrollTop(tmpOffset);
                    });
                }

                for (var i = 0; i < ssMainAccounttManagerInstance.currentPosTableData.length; i++) {
                    table.DataTable().cell(i, 0).nodes().to$().append($('<select style="float: right; width: 100%" >'));
                    for (var j = 0; j < ssMainAccounttManagerInstance.curSubAccounts.length; j++) {
                        table.DataTable().cell(i, 0).nodes().to$().find('select').append($('<option>', {
                            value: ssMainAccounttManagerInstance.curSubAccounts[j][0],
                            text: ssMainAccounttManagerInstance.curSubAccounts[j][1]
                        }));
                    }

                    var text =  table.DataTable().cell(i, 1).nodes().to$().text();
                    table.DataTable().cell(i, 1).nodes().to$().text("");
                    table.DataTable().cell(i, 1).nodes().to$().append($('<select style="float: right; width: 100%" >'));
                    for (var key in ssMainAccounttManagerInstance.currentAllInstrumentIdDic) {
                        table.DataTable().cell(i, 1).nodes().to$().find('select').append($('<option>', {
                            value: key,
                            text: key
                        }));
                    }
                    table.DataTable().cell(i, 1).nodes().to$().find('select').val(text);

                    table.DataTable().cell(i, 2).nodes().to$().append($('<select style="float: right; width: 100%" >'));

                    var duoText =  table.DataTable().cell(i, 2).nodes().to$().text();
                    table.DataTable().cell(i, 2).nodes().to$().text("");
                    table.DataTable().cell(i, 2).nodes().to$().append($('<select style="float: right; width: 100%" >'));

                    table.DataTable().cell(i, 2).nodes().to$().find('select').append($('<option>', {
                            value: 'true',
                            text: "多"
                        }));
                    table.DataTable().cell(i, 2).nodes().to$().find('select').append($('<option>', {
                        value: 'false',
                        text: "空"
                    }));
                    var inValue = 'true';
                    if (duoText == "空") inValue ='false';
                    table.DataTable().cell(i, 2).nodes().to$().find('select').val(inValue);

                    var duoText =  table.DataTable().cell(i, 3).nodes().to$().text();
                    table.DataTable().cell(i, 3).nodes().to$().text("");
                    table.DataTable().cell(i, 3).nodes().to$().append($('<input style="float: right; width: 100%" >'));
                    table.DataTable().cell(i, 3).nodes().to$().find('input').val(duoText);


                    var duoText =  table.DataTable().cell(i, 4).nodes().to$().text();
                    table.DataTable().cell(i, 4).nodes().to$().text("");
                    table.DataTable().cell(i, 4).nodes().to$().append($('<input style="float: right; width: 100%" >'));
                    table.DataTable().cell(i, 4).nodes().to$().find('input').val(duoText);


                    var duoText =  table.DataTable().cell(i, 5).nodes().to$().text();
                    table.DataTable().cell(i, 5).nodes().to$().text("");
                    table.DataTable().cell(i, 5).nodes().to$().append($('<input style="float: right; width: 100%" >'));
                    table.DataTable().cell(i, 5).nodes().to$().find('input').val(duoText);
                }


                for (var i = 0 ; i < ssMainAccounttManagerInstance.currentOriginPos.length ; i++) {
                    var curPos = ssMainAccounttManagerInstance.currentOriginPos[i];
                    if (ssMainAccounttManagerInstance.currentAllInstrumentIdDic[curPos['InstrumentID']]===undefined){
                        ssMainAccounttManagerInstance.currentAllInstrumentIdDic[curPos['InstrumentID']] =[];
                        ssMainAccounttManagerInstance.currentAllInstrumentIdDic[curPos['InstrumentID']]['query'] =[];
                        ssMainAccounttManagerInstance.currentAllInstrumentIdDic[curPos['InstrumentID']]['origin'] =[];
                        ssMainAccounttManagerInstance.currentAllInstrumentIdDic[curPos['InstrumentID']]['query']['duo'] =0;
                        ssMainAccounttManagerInstance.currentAllInstrumentIdDic[curPos['InstrumentID']]['query']['kong'] =0;
                        ssMainAccounttManagerInstance.currentAllInstrumentIdDic[curPos['InstrumentID']]['origin']['duo'] =0;
                        ssMainAccounttManagerInstance.currentAllInstrumentIdDic[curPos['InstrumentID']]['origin']['kong'] =0;
                    }
                    if(curPos['LongOrShort'] == 'true'){
                        ssMainAccounttManagerInstance.currentAllInstrumentIdDic[curPos['InstrumentID']]['origin']['duo'] += curPos['Volume'];
                    }else{
                        ssMainAccounttManagerInstance.currentAllInstrumentIdDic[curPos['InstrumentID']]['origin']['kong'] += curPos['Volume'];
                    }
                }


                console.log(ssMainAccounttManagerInstance.currentAllInstrumentIdDic);
                /***
                 * 整合数据分析
                 */
                ssMainAccounttManagerInstance.duoPosText = "     多仓同步提示\n";
                for (var key in ssMainAccounttManagerInstance.currentAllInstrumentIdDic){
                    var originPos = ssMainAccounttManagerInstance.currentAllInstrumentIdDic[key]['origin']['duo'];
                    var queryPos =ssMainAccounttManagerInstance.currentAllInstrumentIdDic[key]['query']['duo'];
                    if (originPos!=queryPos) {
                        ssMainAccounttManagerInstance.duoPosText += key + " 交易所" + originPos + "手，" + "本地" + queryPos + "手，需";
                        if (originPos < queryPos) {
                            ssMainAccounttManagerInstance.duoPosText += "删除" + (queryPos - originPos) + "手";
                        } else if (originPos > queryPos) {
                            ssMainAccounttManagerInstance.duoPosText += "增加" + (originPos - queryPos) + "手";
                        }
                        ssMainAccounttManagerInstance.duoPosText+="\n";
                    }

                }

                ssMainAccounttManagerInstance.kongPosText = "     空仓同步提示\n";
                for (var key in ssMainAccounttManagerInstance.currentAllInstrumentIdDic){
                    var originPos = ssMainAccounttManagerInstance.currentAllInstrumentIdDic[key]['origin']['kong'];
                    var queryPos = ssMainAccounttManagerInstance.currentAllInstrumentIdDic[key]['query']['kong'];
                    if (originPos!=queryPos) {
                        ssMainAccounttManagerInstance.kongPosText += key + " 交易所" + originPos + "手，" + "本地" + queryPos + "手，需";
                        if (originPos < queryPos) {
                            ssMainAccounttManagerInstance.kongPosText += "删除" + (queryPos - originPos) + "手";
                        } else if(originPos > queryPos) {
                            ssMainAccounttManagerInstance.kongPosText += "增加" + (originPos - queryPos) + "手";
                        }
                        ssMainAccounttManagerInstance.kongPosText+="\n";
                    }

                }



                $("#duoCang").text( ssMainAccounttManagerInstance.duoPosText);
                $("#kongCang").text( ssMainAccounttManagerInstance.kongPosText);

            },
            error: function (xhr) {
                //Do Something to handle error
            }
        });
    }

    /***
     * 提交当前的报单同步信息
     * @param index
     */
    this.submitSyncPositionStream = function(index){
        console.log("持仓同步功能");
        var curTableAllInstrumentDic = [];
        for (var key in ssMainAccounttManagerInstance.currentAllInstrumentIdDic) {
            var originDuoPos = ssMainAccounttManagerInstance.currentAllInstrumentIdDic[key]['origin']['duo'];
            var originKongPos = ssMainAccounttManagerInstance.currentAllInstrumentIdDic[key]['origin']['kong'];
            if (curTableAllInstrumentDic[key]===undefined){
                curTableAllInstrumentDic[key] =[];
                curTableAllInstrumentDic[key]['duo'] =0;
                curTableAllInstrumentDic[key]['kong'] =0;
            }
        }


        var dataStream="adminID="+ssMainAccounttManagerInstance.accoutId+"&adminPwd="+ssMainAccounttManagerInstance.accoutPwd+"&mainAccountID="+(ssMainAccounttManagerInstance.mainAccouts[index][0]);
        dataStream += "&numDelete="+ssMainAccounttManagerInstance.currentQueryPos.length;
        dataStream += "&numAdd="+ssMainAccounttManagerInstance.positionSyncTable.DataTable().data().length;
        /***
         * 需要删除的信息
         */
        for (var i = 0; i < ssMainAccounttManagerInstance.currentQueryPos.length; i++) {
            dataStream += "&test="+ ssMainAccounttManagerInstance.currentQueryPos[i]['InstrumentID'];
            dataStream += "&test="+ ssMainAccounttManagerInstance.currentQueryPos[i]['LongOrShort'];
            dataStream += "&test="+ ssMainAccounttManagerInstance.currentQueryPos[i]['TodayOrHistoryPos'];
            dataStream += "&test="+ ssMainAccounttManagerInstance.currentQueryPos[i]['OpenPrice'];
            dataStream += "&test="+ ssMainAccounttManagerInstance.currentQueryPos[i]['Volume'];
            dataStream += "&test="+ ssMainAccounttManagerInstance.currentQueryPos[i]['PosID'];
            dataStream += "&test="+ ssMainAccounttManagerInstance.currentQueryPos[i]['OpenDay'];
            dataStream += "&test="+ ssMainAccounttManagerInstance.currentQueryPos[i]['SubAccountID'];
            dataStream += "&test="+ ssMainAccounttManagerInstance.currentQueryPos[i]['SubAccountUserID'];
            dataStream += "&test="+ ssMainAccounttManagerInstance.currentQueryPos[i]['PosProfit'];
        }
        /***
         * 需要增加的信息
         */
       var currentTable = ssMainAccounttManagerInstance.positionSyncTable;

        for (var i = 0; i < currentTable.DataTable().data().length; i++) {
            dataStream += "&InstrumentID=" +  currentTable.DataTable().cell(i, 1).nodes().to$().find(':selected').val();





            dataStream += "&test=" + currentTable.DataTable().cell(i, 2).nodes().to$().find(':selected').val();

            if(new Date(currentTable.DataTable().cell(i, 5).nodes().to$().find('input').text()).getTime() < new Date().getTime())
            {
                dataStream += "&test=" + 'false';
                console.log('小于今天'+i
                );
            }else{
                dataStream += "&test=" + 'true';
            }
            dataStream += "&test=" + currentTable.DataTable().cell(i, 3).nodes().to$().find('input').val();
            dataStream += "&test=" + currentTable.DataTable().cell(i, 4).nodes().to$().find('input').val();
            if (currentTable.DataTable().cell(i, 2).nodes().to$().find(':selected').val() == "true"){
                curTableAllInstrumentDic[currentTable.DataTable().cell(i, 1).nodes().to$().find(':selected').val()]['duo'] += parseInt(currentTable.DataTable().cell(i, 4).nodes().to$().find('input').val());
            }else{
                curTableAllInstrumentDic[currentTable.DataTable().cell(i, 1).nodes().to$().find(':selected').val()]['kong'] += parseInt(currentTable.DataTable().cell(i, 4).nodes().to$().find('input').val());
            }
            dataStream += "&test=" + "0";
            dataStream += "&test=" + currentTable.DataTable().cell(i, 5).nodes().to$().find('input').val();
            dataStream += "&test=" + currentTable.DataTable().cell(i, 0).nodes().to$().find(':selected').val();
            dataStream += "&test=" + currentTable.DataTable().cell(i, 0).nodes().to$().find(':selected').val();
            dataStream += "&test=" + '0';
        }

        console.log(curTableAllInstrumentDic);

        /***
         * validate 数量
         */
        var validateResult = true;
        for (var key in ssMainAccounttManagerInstance.currentAllInstrumentIdDic) {
            var originDuoPos = ssMainAccounttManagerInstance.currentAllInstrumentIdDic[key]['origin']['duo'];
            var originKongPos = ssMainAccounttManagerInstance.currentAllInstrumentIdDic[key]['origin']['kong'];
            if (curTableAllInstrumentDic[key]['duo'] != originDuoPos || curTableAllInstrumentDic[key]['kong'] != originKongPos){
                validateResult = false;
                break;
            }
        }
        if (!validateResult){
            $('#generalNotificationBody').text('仓位信息有误,请重新确认');
            $('#generalNotification').modal('show');
            return;
        }
        $('#mainSyncPosition').modal('hide');
        $.ajax({
            url: ssMainAccounttManagerInstance.hostpath,
            type: "get", //send it through get method
            dataType: "json",
            contentType: "application/json",
            data: {
                Data: dataStream,
                Method: "onSyncPosition"
            },
            success: function (response) {
                response = JSON.parse(response);
                if(response==''){
                    $('#generalNotificationBody').text('成功');
                }else{
                    $('#generalNotificationBody').text(response);
                }
            },
            error: function (xhr) {
                //Do Something to handle error
            }
        });
    }
}