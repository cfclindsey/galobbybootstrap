(function ($) {

$("div").addClass(function(index, currentClass) {
 	var addedClass;
	if ( currentClass === "field-name-field-descrip") {
		addedClass = "ctools-collapsible-container";
	}
	return addedClass;
});

})(jQuery); 