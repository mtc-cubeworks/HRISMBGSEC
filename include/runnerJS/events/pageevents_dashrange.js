
Runner.pages.PageSettings.addPageEvent('dashrange',Runner.pages.constants.PAGE_LIST,"afterPageReady",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Update_Dashboard';if(!pageObj.buttonEventBefore['Update_Dashboard']){pageObj.buttonEventBefore['Update_Dashboard']=function(params,ctrl,pageObj,proxy,pageid,rowData,row){}}
if(!pageObj.buttonEventAfter['Update_Dashboard']){pageObj.buttonEventAfter['Update_Dashboard']=function(result,ctrl,pageObj,proxy,pageid,rowData,row){location.reload();}}
$('a[id="Update_Dashboard"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="Update_Dashboard"+"_"+Runner.genId();var button_Update_Dashboard=new Runner.form.Button({id:this.id,btnName:"Update_Dashboard"});button_Update_Dashboard.init({args:[pageObj,proxy,pageid]});});});