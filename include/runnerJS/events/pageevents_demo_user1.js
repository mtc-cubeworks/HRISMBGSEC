
Runner.pages.PageSettings.addPageEvent('demo_user1',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Insert_Default_Statutories2';if(!pageObj.buttonEventBefore['Insert_Default_Statutories2']){pageObj.buttonEventBefore['Insert_Default_Statutories2']=function(params,ctrl,pageObj,proxy,pageid,rowData,row){params["txt"]="Hello";ctrl.setMessage("Sending request to server...");}}
if(!pageObj.buttonEventAfter['Insert_Default_Statutories2']){pageObj.buttonEventAfter['Insert_Default_Statutories2']=function(result,ctrl,pageObj,proxy,pageid,rowData,row){var message=result["txt"]+" !!!";ctrl.setMessage(message);}}
$('a[id="Insert_Default_Statutories2"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="Insert_Default_Statutories2"+"_"+Runner.genId();var button_Insert_Default_Statutories2=new Runner.form.Button({id:this.id,btnName:"Insert_Default_Statutories2"});button_Insert_Default_Statutories2.init({args:[pageObj,proxy,pageid]});});});Runner.pages.PageSettings.addPageEvent('demo_user1',Runner.pages.constants.PAGE_LIST,"afterPageReady",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Update_SSS';if(!pageObj.buttonEventBefore['Update_SSS']){pageObj.buttonEventBefore['Update_SSS']=function(params,ctrl,pageObj,proxy,pageid,rowData,row){params["txt"]="Updating...";ctrl.setMessage("Sending request to server...");}}
if(!pageObj.buttonEventAfter['Update_SSS']){pageObj.buttonEventAfter['Update_SSS']=function(result,ctrl,pageObj,proxy,pageid,rowData,row){var message=result["txt"]+" !!!";ctrl.setMessage(message);}}
$('a[id="Update_SSS"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="Update_SSS"+"_"+Runner.genId();var button_Update_SSS=new Runner.form.Button({id:this.id,btnName:"Update_SSS"});button_Update_SSS.init({args:[pageObj,proxy,pageid]});});});Runner.pages.PageSettings.addPageEvent('demo_user1',Runner.pages.constants.PAGE_LIST,"afterPageReady",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Update_PhilHelath';if(!pageObj.buttonEventBefore['Update_PhilHelath']){pageObj.buttonEventBefore['Update_PhilHelath']=function(params,ctrl,pageObj,proxy,pageid,rowData,row){params["txt"]="Updating...";ctrl.setMessage("Sending request to server...");}}
if(!pageObj.buttonEventAfter['Update_PhilHelath']){pageObj.buttonEventAfter['Update_PhilHelath']=function(result,ctrl,pageObj,proxy,pageid,rowData,row){var message=result["txt"]+" !!!";ctrl.setMessage(message);}}
$('a[id="Update_PhilHelath"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="Update_PhilHelath"+"_"+Runner.genId();var button_Update_PhilHelath=new Runner.form.Button({id:this.id,btnName:"Update_PhilHelath"});button_Update_PhilHelath.init({args:[pageObj,proxy,pageid]});});});Runner.pages.PageSettings.addPageEvent('demo_user1',Runner.pages.constants.PAGE_LIST,"afterPageReady",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Update_Pag_Ibig2';if(!pageObj.buttonEventBefore['Update_Pag_Ibig2']){pageObj.buttonEventBefore['Update_Pag_Ibig2']=function(params,ctrl,pageObj,proxy,pageid,rowData,row){params["txt"]="Updating...";ctrl.setMessage("Sending request to server...");}}
if(!pageObj.buttonEventAfter['Update_Pag_Ibig2']){pageObj.buttonEventAfter['Update_Pag_Ibig2']=function(result,ctrl,pageObj,proxy,pageid,rowData,row){var message=result["txt"]+" !!!";ctrl.setMessage(message);}}
$('a[id="Update_Pag_Ibig2"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="Update_Pag_Ibig2"+"_"+Runner.genId();var button_Update_Pag_Ibig2=new Runner.form.Button({id:this.id,btnName:"Update_Pag_Ibig2"});button_Update_Pag_Ibig2.init({args:[pageObj,proxy,pageid]});});});Runner.pages.PageSettings.addPageEvent('demo_user1',Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject){var ctrlap1=Runner.getControl(pageid,'Approved');var ctrlad1=Runner.getControl(pageid,'ApprovedDate');var ctrlapb1=Runner.getControl(pageid,'Approvedby');var ctrlck1=Runner.getControl(pageid,'Checked');var ctrlckd1=Runner.getControl(pageid,'CheckedDate');var ctrlckb1=Runner.getControl(pageid,'Checkedby');var apuser=proxy.approvalpress;ctrlad1.makeReadonly();ctrlckd1.makeReadonly();d1=new Date();var nd=d1.toLocaleDateString();function funcax(){if(ctrlap1.getValue()=='on'){ctrlad1.setValue(d1);ctrlapb1.setValue(apuser);};if(ctrlap1.getValue()==''){ctrlad1.setValue('');ctrlapb1.setValue('');};};function funcay(){if(ctrlck1.getValue()=='on'){ctrlckd1.setValue(d1);ctrlckb1.setValue(apuser);};if(ctrlck1.getValue()==''){ctrlckd1.setValue('');ctrlckb1.setValue('');};};ctrlap1.on('onchange',funcax);ctrlck1.on('onchange',funcay);});Runner.pages.PageSettings.addPageEvent('demo_user1',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject){var ctrlprep1=Runner.getControl(pageid,'Preparedby');;});Runner.pages.PageSettings.addPageEvent('demo_user1',Runner.pages.constants.PAGE_LIST,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject){var s1=proxy.sss;var p1=proxy.phil;var p2=proxy.pag;if(p1==1){var id="Update_PhilHelath";var button=$("[id^="+id+"]");Runner.addDisabledClass(button);};if(p1!=1){var id="Update_PhilHelath";var button=$("[id^="+id+"]");Runner.delDisabledClass(button);};if(p2==1){var id="Update_Pag_Ibig2";var button=$("[id^="+id+"]");Runner.addDisabledClass(button);};if(p2!=1){var id="Update_Pag_Ibig2";var button=$("[id^="+id+"]");Runner.delDisabledClass(button);};if(s1==1){var id="Update_SSS";var button=$("[id^="+id+"]");Runner.addDisabledClass(button);};if(s1!=1){var id="Update_SSS";var button=$("[id^="+id+"]");Runner.delDisabledClass(button);};;});