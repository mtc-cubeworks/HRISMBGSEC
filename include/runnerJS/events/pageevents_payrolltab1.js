
Runner.pages.PageSettings.addPageEvent('payrolltab1',Runner.pages.constants.PAGE_LIST,"afterPageReady",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Payslip41';if(!pageObj.buttonEventBefore['Payslip41']){pageObj.buttonEventBefore['Payslip41']=function(params,ctrl,pageObj,proxy,pageid,rowData,row){params["txt"]="Previewing...";ctrl.setMessage("Sending request to server...");}}
if(!pageObj.buttonEventAfter['Payslip41']){pageObj.buttonEventAfter['Payslip41']=function(result,ctrl,pageObj,proxy,pageid,rowData,row){var p=result["PtabID"];var ps=result["Pass"];window.open('pdfprint2/pay99.php?ps1='+p+'&pw2='+ps,'_blank');}}
$('a[id="Payslip41"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="Payslip41"+"_"+Runner.genId();var button_Payslip41=new Runner.form.Button({id:this.id,btnName:"Payslip41"});button_Payslip41.init({args:[pageObj,proxy,pageid]});});});