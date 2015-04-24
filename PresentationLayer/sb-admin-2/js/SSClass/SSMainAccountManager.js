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
    this.currentTableData = [];
    this.mainAccouts = [];
    this.needCheckQueue = [];
    //this.positionCheckQueue = [];
    this.redrawCallback = redrawCallBack;
    this.orderSyncTable;
    this.curSubAccounts =[];
    this.curMainIndex = 0;

    /***
     * ��ʱ������
     */
    this.checkTimerFunction = function(){
        console.log(ssMainAccounttManagerInstance.needCheckQueue);
        for (var i = 0; i < ssMainAccounttManagerInstance.needCheckQueue.length ; i++){
            ssMainAccounttManagerInstance.GetMainAccountStatus(ssMainAccounttManagerInstance.needCheckQueue[i]);
        }
    }

    /***
     * ��ʼ��������
     * @param mainAccounts
     * @constructor
     */
    this.InitMainAccountsCheckList = function(mainAccounts){
        this.needCheckQueue = [];
        this.mainAccouts = mainAccounts;

        for (var i = 0 ; i < this.mainAccouts.length ;i++){


            if (mainAccounts[i][7].localeCompare("��ͬ��")){
                this.needCheckQueue.push(i);
            }

        }
        setInterval(this.checkTimerFunction, 5000);
    }

    /***
     * ���µ�ǰ���˻���״̬
     * @param index
     * @constructor
     */
    this.GetMainAccountStatus = function(index) {

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
                console.log("���"+tmpResponse+" "+ index);
                if (tmpResponse == "��Ҫ�����ͳֲ�ͬ��"){
                   ssMainAccounttManagerInstance.mainAccouts[index][7] = "��Ҫ����ͬ��";
               }else{

                    if (tmpResponse == "��Ҫ����ͬ��"){
                        ssMainAccounttManagerInstance.mainAccouts[index][7] = "��Ҫ����ͬ��";
                    }else if(tmpResponse == "��Ҫ��λͬ��"){

                        ssMainAccounttManagerInstance.mainAccouts[index][7] = "��Ҫ��λͬ��";
                    }else if(tmpResponse == "������"){
                        ssMainAccounttManagerInstance.mainAccouts[index][7] = "��ͬ��";
                        ssMainAccounttManagerInstance.needCheckQueue.splice(index,1);
                    }else{
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
     * �������˻�
     * @param index
     * @constructor
     */
    this.ConnectMainAccount = function(index) {
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

            },
            error: function (xhr) {
                //Do Something to handle error
            }
        });
    }

    /**
     * ���µ�ǰ�ı���ͬ��ҳ��
     * @param index ��ǰ���˻�
     * @param table ����table
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
                        tmpTableRowData.push(curRowData['BuyOrSell']);
                        tmpTableRowData.push(curRowData['NewOrClose']);
                        tmpTableRowData.push(curRowData['CloseTodayOrHistoryPos']);
                        tmpTableRowData.push(curRowData['Status']);
                        tmpTableRowData.push(curRowData['TradedPrice']);
                        tmpTableRowData.push(curRowData['TradedVolume']);
                        tmpTableRowData.push(curRowData['TradedTime']);
                        ssMainAccounttManagerInstance.currentTableData.push(tmpTableRowData);
                    }
                    //TODO������д��function
                    for (var i = 0 ; i < ssMainAccounttManagerInstance.currentMissingOrders.length ; i++){
                        var curRowData = ssMainAccounttManagerInstance.currentMissingOrders[i]['Order'];
                        var tmpTableRowData = [];
                        tmpTableRowData.push('');
                        tmpTableRowData.push(ssMainAccounttManagerInstance.mainAccouts[index][0]);
                        tmpTableRowData.push(curRowData['OrderSysID']);
                        tmpTableRowData.push(curRowData['InstrumentID']);
                        tmpTableRowData.push(curRowData['BuyOrSell']);
                        tmpTableRowData.push(curRowData['NewOrClose']);
                        tmpTableRowData.push(curRowData['CloseTodayOrHistoryPos']);
                        tmpTableRowData.push(curRowData['Status']);
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
                                "search": "����:",
                                "info": "��ʾ _START_ �� _END_ �� _TOTAL_ ��¼",
                                "infoEmpty": "��ʾ 0 �� 0 �� 0 ��¼",
                                "emptyTable": "���޿���ʾ����",
                                "processing": "���ڼ���......"
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
            dataStream +=  "&field="+ssMainAccounttManagerInstance.currentChangedOrders[i]['Order']['Status'];
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
            dataStream +=  "&field="+ssMainAccounttManagerInstance.currentMissingOrders[i]['Order']['Status'];
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
                console.log("ͬ�����:"+response+".");
            },
            error: function (xhr) {
                //Do Something to handle error
            }
        });
    }
}