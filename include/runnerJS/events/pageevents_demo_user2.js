
Runner.pages.PageSettings.addPageEvent('demo_user2',Runner.pages.constants.PAGE_LIST,"afterPageReady",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Refresh1';if(!pageObj.buttonEventBefore['Refresh1']){pageObj.buttonEventBefore['Refresh1']=function(params,ctrl,pageObj,proxy,pageid,rowData,row){}}
if(!pageObj.buttonEventAfter['Refresh1']){pageObj.buttonEventAfter['Refresh1']=function(result,ctrl,pageObj,proxy,pageid,rowData,row){location.reload();}}
$('a[id="Refresh1"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="Refresh1"+"_"+Runner.genId();var button_Refresh1=new Runner.form.Button({id:this.id,btnName:"Refresh1"});button_Refresh1.init({args:[pageObj,proxy,pageid]});});});Runner.pages.PageSettings.addPageEvent('demo_user2',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject){var ctrlprep1=Runner.getControl(pageid,'Preparedby');var prp=proxy.preparedx;var ctrlina=Runner.getControl(pageid,'Inactive');ctrlina.makeReadonly();ctrlprep1.makeReadonly();ctrlprep1.setValue(prp);});Runner.pages.PageSettings.addPageEvent('demo_user2',Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject){var ctrlina=Runner.getControl(pageid,'Inactive');ctrlina.makeReadonly();;});