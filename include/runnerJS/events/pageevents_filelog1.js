
Runner.pages.PageSettings.addPageEvent('filelog1',Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject){var ctrlsup=Runner.getControl(pageid,'CheckedBy');var ctrlsup2=Runner.getControl(pageid,'ApprovedBy');var ctrlsup3=Runner.getControl(pageid,'HRApproval');var ctrlsupc=Runner.getControl(pageid,'Checked');var ctrlsup2c=Runner.getControl(pageid,'Approved');var ctrlsup3c=Runner.getControl(pageid,'HRApproved');var ctrlmlg=Runner.getControl(pageid,'MLogID');var ctrlemp=Runner.getControl(pageid,'EmployeeID');var ctrlk=Runner.getControl(pageid,'Locked');ctrlk.makeReadonly();ctrlsup.makeReadonly();ctrlsup2.makeReadonly();ctrlsup3.makeReadonly();ctrlsup2c.makeReadonly();ctrlsup3c.makeReadonly();ctrlmlg.makeReadonly();ctrlemp.makeReadonly();;});