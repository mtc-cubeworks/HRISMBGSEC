
Runner.pages.PageSettings.addPageEvent('demo_log',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject){var ctrllog=Runner.getControl(pageid,'MLogID');ctrllog.makeReadonly();;});Runner.pages.PageSettings.addPageEvent('demo_log',Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject){var ctrllog=Runner.getControl(pageid,'MLogID');ctrllog.makeReadonly();;});