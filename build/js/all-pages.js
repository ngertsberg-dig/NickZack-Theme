jQuery(document).ready(function($){
	//enqueues JS class depending what the page-view ID is for each page
	const classToInit = $(".page-view").attr("id");
	//eval(`new ${classToInit};`)
	Function('new ' + classToInit)();
})