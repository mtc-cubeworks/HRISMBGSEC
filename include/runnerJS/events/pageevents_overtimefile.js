
Runner.pages.PageSettings.addPageEvent('overtimefile',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject){var ctrlfd=Runner.getControl(pageid,'FromDateTime');var ctrltd=Runner.getControl(pageid,'ToDateTime');var ctrlhrs=Runner.getControl(pageid,'NoMins');d=new Date();var nt=d.toLocaleTimeString();function funca1(){var diffMs=(ctrltd.getValue()-ctrlfd.getValue());var diffHrs=Math.floor((diffMs%86400000)/3600000);var diffMins=Math.round(((diffMs%86400000)%3600000)/60000);ctrlhrs.setValue((diffHrs*60)+diffMins);};ctrlfd.on('onchange',funca1);ctrltd.on('onchange',funca1);ctrlfd.on('keyup',funca1);ctrltd.on('keyup',funca1);});Runner.pages.PageSettings.addPageEvent('overtimefile',Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject){var ctrlfd=Runner.getControl(pageid,'FromDateTime');var ctrltd=Runner.getControl(pageid,'ToDateTime');var ctrlhrs=Runner.getControl(pageid,'NoMins');d=new Date();var nt=d.toLocaleTimeString();function funca1(){var diffMs=(ctrltd.getValue()-ctrlfd.getValue());var diffHrs=Math.floor((diffMs%86400000)/3600000);var diffMins=Math.round(((diffMs%86400000)%3600000)/60000);ctrlhrs.setValue((diffHrs*60)+diffMins);};ctrlfd.on('onchange',funca1);ctrltd.on('onchange',funca1);ctrlfd.on('keyup',funca1);ctrltd.on('keyup',funca1);});