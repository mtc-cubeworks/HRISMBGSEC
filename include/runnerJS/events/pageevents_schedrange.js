
Runner.pages.PageSettings.addPageEvent('schedrange',Runner.pages.constants.PAGE_LIST,"afterPageReady",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Upload_Schedule';if(!pageObj.buttonEventBefore['Upload_Schedule']){pageObj.buttonEventBefore['Upload_Schedule']=function(params,ctrl,pageObj,proxy,pageid,rowData,row){params["txt"]="Uploading...";ctrl.setMessage("Uploading...");}}
if(!pageObj.buttonEventAfter['Upload_Schedule']){pageObj.buttonEventAfter['Upload_Schedule']=function(result,ctrl,pageObj,proxy,pageid,rowData,row){var message=result["txt"]+" !!!";ctrl.setMessage(message);}}
$('a[id="Upload_Schedule"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="Upload_Schedule"+"_"+Runner.genId();var button_Upload_Schedule=new Runner.form.Button({id:this.id,btnName:"Upload_Schedule"});button_Upload_Schedule.init({args:[pageObj,proxy,pageid]});});});Runner.pages.PageSettings.addPageEvent('schedrange',Runner.pages.constants.PAGE_LIST,"afterPageReady",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Clear_Uploaded_Schedule';if(!pageObj.buttonEventBefore['Clear_Uploaded_Schedule']){pageObj.buttonEventBefore['Clear_Uploaded_Schedule']=function(params,ctrl,pageObj,proxy,pageid,rowData,row){var txt;var r=confirm("You're about to delete a schedule range. Are you sure?");if(r==true){params["txt"]="Deleting data...";ctrl.setMessage("Processing...");}else{txt="You pressed Cancel!";return false;}}}
if(!pageObj.buttonEventAfter['Clear_Uploaded_Schedule']){pageObj.buttonEventAfter['Clear_Uploaded_Schedule']=function(result,ctrl,pageObj,proxy,pageid,rowData,row){var message=result["txt"]+" !!!";ctrl.setMessage(message);}}
$('a[id="Clear_Uploaded_Schedule"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="Clear_Uploaded_Schedule"+"_"+Runner.genId();var button_Clear_Uploaded_Schedule=new Runner.form.Button({id:this.id,btnName:"Clear_Uploaded_Schedule"});button_Clear_Uploaded_Schedule.init({args:[pageObj,proxy,pageid]});});});Runner.pages.PageSettings.addPageEvent('schedrange',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject){var ctrlp=Runner.getControl(pageid,'Posted');var ctrlst=Runner.getControl(pageid,'SchedType');ctrlp.makeReadonly();ctrlst.makeReadonly();;});Runner.pages.PageSettings.addPageEvent('schedrange',Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject){var ctrlp=Runner.getControl(pageid,'Posted');var ctrlst=Runner.getControl(pageid,'SchedType');ctrlp.makeReadonly();ctrlst.makeReadonly();;});