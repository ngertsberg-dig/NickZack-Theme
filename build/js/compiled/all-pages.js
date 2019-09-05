"use strict";

jQuery(document).ready(function ($) {
  //enqueues JS class depending what the page-view ID is for each page
  var classToInit = $(".page-view").attr("id");
  eval("new ".concat(classToInit, ";"));
});