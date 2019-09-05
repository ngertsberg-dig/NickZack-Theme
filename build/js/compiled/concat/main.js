"use strict";

jQuery(document).ready(function ($) {
  //enqueues JS class depending what the page-view ID is for each page
  var classToInit = $(".page-view").attr("id"); //eval(`new ${classToInit};`)

  Function('new ' + classToInit)();
});
"use strict";

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var Homepage = function Homepage() {
  _classCallCheck(this, Homepage);

  console.log('new function not eval');
};