
Runner.pages.PageSettings.addPageEvent('leaves1',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject){var ctrldays=Runner.getControl(pageid,'Days');var ctrlfh=Runner.getControl(pageid,'FirstHalf');var ctrlsh=Runner.getControl(pageid,'SecondHalf');d=new Date();var nt=d.toLocaleTimeString();function funcaq(){if(ctrlfh.getValue()=='on'&&ctrlsh.getValue()=='on'){ctrldays.setValue(1);};if(ctrlfh.getValue()=='on'&&ctrlsh.getValue()==''){ctrldays.setValue(0.5);};if(ctrlfh.getValue()==''&&ctrlsh.getValue()=='on'){ctrldays.setValue(0.5);};if(ctrlfh.getValue()==''&&ctrlsh.getValue()==''){ctrldays.setValue(0);};};ctrlfh.on('onchange',funcaq);ctrlsh.on('onchange',funcaq);});Runner.pages.PageSettings.addPageEvent('leaves1',Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject){var ctrlp=Runner.getControl(pageid,'Posted');var ctrlap=Runner.getControl(pageid,'Approved');var ctrlad=Runner.getControl(pageid,'ApprovedDate');var ctrlat=Runner.getControl(pageid,'ApprovedTime');var ctrldays=Runner.getControl(pageid,'Days');var ctrlfh=Runner.getControl(pageid,'FirstHalf');var ctrlsh=Runner.getControl(pageid,'SecondHalf');var cfa=Runner.getControl(pageid,'1stApproval');var csa=Runner.getControl(pageid,'2ndApproval');var cpo=Runner.getControl(pageid,'Posted');ctrlad.makeReadonly();cfa.makeReadonly();csa.makeReadonly();ctrlap.makeReadonly();cpo.makeReadonly();clk.makeReadonly();d=new Date();var nt=d.toLocaleTimeString();function funcaq(){if(ctrlfh.getValue()=='on'&&ctrlsh.getValue()=='on'){ctrldays.setValue(1);};if(ctrlfh.getValue()=='on'&&ctrlsh.getValue()==''){ctrldays.setValue(0.5);};if(ctrlfh.getValue()==''&&ctrlsh.getValue()=='on'){ctrldays.setValue(0.5);};if(ctrlfh.getValue()==''&&ctrlsh.getValue()==''){ctrldays.setValue(0);};};ctrlfh.on('onchange',funcaq);ctrlsh.on('onchange',funcaq);});