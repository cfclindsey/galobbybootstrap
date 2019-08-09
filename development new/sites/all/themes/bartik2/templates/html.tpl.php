<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
<!--jQuery dependencies-->
 <link rel="stylesheet"
     href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/base/jquery-ui.css" />
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>    
 <script src="https://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
 
<!--Include Touch Punch file to provide support for touch devices-->
 <script type="text/javascript" src="https://galobby.com/sites/all/themes/bartik2/grid/jquery.ui.touch-punch.min.js" ></script>   
 
 <!--ParamQuery Grid files-->
 <link rel="stylesheet" href="https://galobby.com/sites/all/themes/bartik2/grid/pqgrid.min.css" />
 <script type="text/javascript" src="https://galobby.com/sites/all/themes/bartik2/grid/pqgrid.min.js" ></script>   

<!--ParamQuery Select files-->
 <link rel="stylesheet" href="https://galobby.com/sites/all/themes/bartik2/grid/pqselect.dev.css" />
 <script type="text/javascript" src="https://galobby.com/sites/all/themes/bartik2/grid/pqselect.dev.js" ></script>    

<script>
$(function() {
	
	$("#edit-field-boardcommittee-und").pqSelect({
    	multiplePlaceholder: 'Select Committees',    
   	 	checkbox: true, //adds checkbox to options
		width: 420   
	}).pqSelect("open");

	$("#edit-field-govtdept-und").pqSelect({
   		 multiplePlaceholder: 'Select Departments',    
   		 checkbox: true, //adds checkbox to options   
		 width: 420
	}).pqSelect("open");
	
});
</script>

<script  type="text/javascript" >
$(function() {

	$('#edit-field-starts-time-und-0-value--popup-1').change(function() {
		var time = (this.value);
		var min = time.match(/(\d+)/g)[1];
		var hour = time.match(/(\d+)/g)[0];
		var ampm = time.match(/([aApP][mM])/)[0];
		var endmin = parseInt(min)+30;
		var h = 0;
		var z = '0';
		if(parseInt(endmin) > 59) {
			h = 1;
			endmin = parseInt(endmin)-60;
		}
		var endhour = parseInt(hour)+h;
		if(parseInt(endhour) > 11) {
			endhour = parseInt(endhour)-12;
			if(endhour == 0) {
				endhour = 12;
				if(ampm == 'am') {
					ampm = 'pm';
				}
				else if(ampm == 'pm') {
					ampm = 'am';
				}
			}
		}
		if(endhour < 10) {
			endhour = endhour.toString();
			endhour = z.concat(endhour);
		}
		if(endmin < 10) {
			endmin = endmin.toString();
			endmin = z.concat(endmin);
		}
		var s = ":";
		endhour = endhour.toString();
		endmin = endmin.toString();
		var endtime = endhour.concat(s).concat(endmin).concat(ampm);
		$('#edit-field-ends-time-und-0-value--popup-1').val(endtime);
	});
	
});
</script>
<style  type="text/css">
	.noDisplay {
		display: none !important;
	}
</style>
<script  type="text/javascript">
$(function() {
	$("#edit-field-govtdept").toggleClass('noDisplay');
	$("#edit-field-select-category-und-boardnote").click(function() {
			$("#edit-field-boardcommittee").toggleClass('noDisplay');
			$("#edit-field-govtdept").toggleClass('noDisplay');
	});
	$("#edit-field-select-category-und-govtnote").click(function() {
			$("#edit-field-govtdept").toggleClass('noDisplay');
			$("#edit-field-boardcommittee").toggleClass('noDisplay');
	});
	$("#edit-field-use-date-und").click(function() {
			$("#edit-field-use-start-date").toggleClass('noDisplay');
			$("#edit-field-starts").toggleClass('noDisplay');
			$("#edit-field-use-start-time").toggleClass('noDisplay');
			$("#edit-field-starts-time").toggleClass('noDisplay');
			$("#edit-field-use-start-notes").toggleClass('noDisplay');
			$("#edit-field-datestart").toggleClass('noDisplay');
			$("#edit-field-use-end-date").toggleClass('noDisplay');
			$("#edit-field-ends").toggleClass('noDisplay');
			$("#edit-field-use-end-time").toggleClass('noDisplay');
			$("#edit-field-ends-time").toggleClass('noDisplay');
			$("#edit-field-use-end-notes").toggleClass('noDisplay');
			$("#edit-field-dateendtext").toggleClass('noDisplay');
	});
	$("#edit-field-use-start-date").click(function() {
			$("#edit-field-starts-und-0-value-datepicker-popup-0").val("");
	});
	$("#edit-field-use-start-time").click(function() {
			$("#edit-field-starts-time-und-0-value--popup-1").val("");
	});
	$("#edit-field-use-start-notes").click(function() {
			$("#edit-field-datestart-und-0-value").val("");
	});
	$("#edit-field-use-end-date").click(function() {
			$("#edit-field-ends-und-0-value-datepicker-popup-0").val("");
	});
	$("#edit-field-use-end-time").click(function() {
			$("#edit-field-ends-time-und-0-value--popup-1").val("");
	});
	$("#edit-field-use-end-notes").click(function() {
			$("#edit-field-dateendtext-und-0-value").val("");
	});
});
</script>

</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>

<script  type="text/javascript">
$(function() {
	$('#edit-field-starts-und-0-value-datepicker-popup-0').focusout(function() {
		$('#edit-field-ends-und-0-value-datepicker-popup-0').val(this.value);
	});
	$('#edit-field-starts-time-und-0-value--popup-1').focusin(function() {
		var enddate = $('#edit-field-starts-und-0-value-datepicker-popup-0').val();
		$('#edit-field-ends-und-0-value-datepicker-popup-0').val(enddate);
	});
});
</script>
</body>
</html>
