
Runner.pages.PageSettings.addPageEvent('leaveremarks1',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject){var ctrlemp=Runner.getControl(pageid,'LogID');ctrlemp.makeReadonly();});