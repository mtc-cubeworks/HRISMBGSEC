
Runner.pages.PageSettings.addPageEvent('payrolltab',Runner.pages.constants.PAGE_LIST,"afterPageReady",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Print_Payslip';if(!pageObj.buttonEventBefore['Print_Payslip']){pageObj.buttonEventBefore['Print_Payslip']=function(params,ctrl,pageObj,proxy,pageid,rowData,row){params["txt"]="Previewing...";ctrl.setMessage("Sending request to server...");}}
if(!pageObj.buttonEventAfter['Print_Payslip']){pageObj.buttonEventAfter['Print_Payslip']=function(result,ctrl,pageObj,proxy,pageid,rowData,row){var p=result["PtabID"];window.open('pdfprint2/payslip.php?ps1='+p,'_blank');}}
$('a[id="Print_Payslip"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="Print_Payslip"+"_"+Runner.genId();var button_Print_Payslip=new Runner.form.Button({id:this.id,btnName:"Print_Payslip"});button_Print_Payslip.init({args:[pageObj,proxy,pageid]});});});