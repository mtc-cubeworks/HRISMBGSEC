
Runner.pages.PageSettings.addPageEvent('overtimefileapp2',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject){var ctrlfd=Runner.getControl(pageid,'FromDateTime');var ctrltd=Runner.getControl(pageid,'ToDateTime');var ctrlhrs=Runner.getControl(pageid,'NoMins');d=new Date();var nt=d.toLocaleTimeString();function funca1(){var diffMs=(ctrltd.getValue()-ctrlfd.getValue());var diffHrs=Math.floor((diffMs%86400000)/3600000);var diffMins=Math.round(((diffMs%86400000)%3600000)/60000);ctrlhrs.setValue((diffHrs*60)+diffMins);};ctrlfd.on('onchange',funca1);ctrltd.on('onchange',funca1);ctrlfd.on('keyup',funca1);ctrltd.on('keyup',funca1);});Runner.pages.PageSettings.addPageEvent('overtimefileapp2',Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject){var ctrlti=Runner.getControl(pageid,'FromTime');var ctrlto=Runner.getControl(pageid,'ToTime');var ctrlap=Runner.getControl(pageid,'Approved');var ctrlmin=Runner.getControl(pageid,'NoMins');var ctrlsup=Runner.getControl(pageid,'Superior');var ctrlsup2=Runner.getControl(pageid,'Superior2');var ctrlap1=Runner.getControl(pageid,'1stApproval');var ctrlap2=Runner.getControl(pageid,'2ndApproval');ctrlsup.makeReadonly();ctrlsup2.makeReadonly();ctrlap1.makeReadonly();function funca1(){var dxt='1/1/2018 '+ctrlto.getValue();var dxf='1/1/2018 '+ctrlti.getValue();var dd1=(new Date(dxf).getHours())*60+(new Date(dxf).getMinutes());var dd2=(new Date(dxt).getHours())*60+(new Date(dxt).getMinutes());if(dd2>dd1){var daten1='1/1/2018 '+ctrlto.getValue();}
else{var daten1='2/1/2018 '+ctrlto.getValue();};var daten2='1/1/2018 '+ctrlti.getValue();var date1=new Date(daten1);var date2=new Date(daten2);var diffMs=(date1-date2);var diffHrs=Math.floor((diffMs%86400000)/3600000);var diffMins=Math.round(((diffMs%86400000)%3600000)/60000);ctrlmin.setValue((diffHrs*60)+diffMins);}
ctrlti.on('onchange',funca1);ctrlto.on('onchange',funca1);ctrlti.on('keyup',funca1);ctrlto.on('keyup',funca1);});