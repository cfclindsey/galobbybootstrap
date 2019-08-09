<?php
//set up Drupal outside of Drupal
chdir("/home/galobby/public_html");
define('DRUPAL_ROOT', getcwd());
require_once './includes/bootstrap.inc';
require_once './includes/file.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);

//don't allow unauthenticated users to view
global $user;

if ($user->uid == 0) {
	exit;
}

if (!user_has_role(3) && !user_has_role(11) && !user_has_role(12) ) {
	exit;
}
//set up the WYSIWYG 
$wysiwyg_root = 'https://galobby.com/notice-entry/wysiwyg/';
include 'wysiwyg/php/init.php';


//IMPORTANT NOTE!!!!!!!
//Do not remove anything from the HTML below unless you are certain it's not needed.  The strange looking encoding is how this external PHP file is pulling in Drupal dependencies (mostly CSS and jQuery) that are needed for this form to work as intended.  Remove code at your own risk!!!
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "https://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="en" version="XHTML+RDFa 1.0" dir="ltr"
  xmlns:content="https://purl.org/rss/1.0/modules/content/"
  xmlns:dc="https://purl.org/dc/terms/"
  xmlns:foaf="https://xmlns.com/foaf/0.1/"
  xmlns:og="https://ogp.me/ns#"
  xmlns:rdfs="https://www.w3.org/2000/01/rdf-schema#"
  xmlns:sioc="https://rdfs.org/sioc/ns#"
  xmlns:sioct="https://rdfs.org/sioc/types#"
  xmlns:skos="https://www.w3.org/2004/02/skos/core#"
  xmlns:xsd="https://www.w3.org/2001/XMLSchema#">

<head profile="https://www.w3.org/1999/xhtml/vocab">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="https://galobby.com/logo.ico" type="image/vnd.microsoft.icon" />
  <title>Notice Entry Screen | Georgia Lobby</title>
  <link type="text/css" rel="stylesheet" href="sites/default/files/css/css_xE-rWrJf-fncB6ztZfd2huxqgxu4WO-qwma6Xer30m4.css" media="all" />
<link type="text/css" rel="stylesheet" href="sites/default/files/css/css_SviQLhUhLPk7u1Ngc21yVkqXl1aHKE5TYVGafRJ52wA.css" media="all" />
<link type="text/css" rel="stylesheet" href="sites/default/files/css/css_OVIE99N-eT3hYnUt0vJTB2ARp6MQ4kFNBbl1pmlZOzo.css" media="all" />
<link type="text/css" rel="stylesheet" href="sites/default/files/css/css_jardc3NJraPgHFZFrc1PIQT5cdBhGT5K2gQNFJBfo-k.css" media="all" />
<link type="text/css" rel="stylesheet" href="sites/default/files/css/css_gQASUo9YR2wkLgSLbCkvn1jdBrkwpsOA2JwlTa-21dg.css" media="all" />
<link type="text/css" rel="stylesheet" href="sites/default/files/css/css_2THG1eGiBIizsWFeexsNe1iDifJ00QRS9uSd03rY9co.css" media="print" />
  <script type="text/javascript" src="sites/default/files/js/js_xAPl0qIk9eowy_iS9tNkCWXLUVoat94SQT48UBCFkyQ.js"></script>
<script type="text/javascript" src="sites/default/files/js/js_2G0iZC_n9NvnBwKZmuMY8HNII0QoNBVePJW77NSlHSs.js"></script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
window.CKEDITOR_BASEPATH = "https://galobby.com/sites/all/libraries/ckeditor/"
//--><!]]>
</script>
<script type="text/javascript" src="sites/default/files/js/js_cpA3cgIZppIduj5PDNqtdwfBOayJn329pexgVGQxne8.js"></script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery.extend(Drupal.settings, {"basePath":"\/","pathPrefix":"","ajaxPageState":{"theme":"bartik","theme_token":"aCgnYWCsCse30OVyj7kxiFKABn0iln0PXEns4QjGpCY","js":{"sites\/all\/modules\/ckeditor\/includes\/ckeditor.utils.js":1,"sites\/all\/libraries\/ckeditor\/ckeditor.js":1,"misc\/jquery.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"misc\/ui\/jquery.ui.core.min.js":1,"misc\/ui\/jquery.ui.datepicker.min.js":1,"sites\/all\/modules\/date\/date_popup\/jquery.timeentry.pack.js":1,"modules\/contextual\/contextual.js":1,"misc\/jquery.cookie.js":1,"misc\/jquery.form.js":1,"misc\/vertical-tabs.js":1,"misc\/states.js":1,"misc\/form.js":1,"misc\/ajax.js":1,"0":1,"misc\/tabledrag.js":1,"sites\/all\/modules\/custom_search\/js\/custom_search.js":1,"sites\/all\/libraries\/wvega-timepicker\/jquery.timepicker.js":1,"sites\/all\/modules\/date\/date_popup\/date_popup.js":1,"misc\/progress.js":1,"modules\/file\/file.js":1,"misc\/textarea.js":1,"modules\/field\/modules\/text\/text.js":1,"modules\/filter\/filter.js":1,"misc\/collapse.js":1,"modules\/comment\/comment-node-form.js":1,"misc\/autocomplete.js":1,"modules\/node\/node.js":1,"sites\/all\/modules\/conditional_fields\/js\/conditional_fields.js":1,"sites\/all\/modules\/field_group\/field_group.js":1,"sites\/all\/modules\/hide_submit\/hide_submit.js":1},"css":{"modules\/system\/system.base.css":1,"modules\/system\/system.menus.css":1,"modules\/system\/system.messages.css":1,"modules\/system\/system.theme.css":1,"misc\/ui\/jquery.ui.core.css":1,"misc\/ui\/jquery.ui.theme.css":1,"misc\/ui\/jquery.ui.datepicker.css":1,"sites\/all\/modules\/date\/date_popup\/themes\/jquery.timeentry.css":1,"modules\/contextual\/contextual.css":1,"misc\/vertical-tabs.css":1,"sites\/all\/modules\/comment_notify\/comment_notify.css":1,"sites\/all\/modules\/calendar\/css\/calendar_multiday.css":1,"modules\/comment\/comment.css":1,"sites\/all\/modules\/date\/date_api\/date.css":1,"sites\/all\/modules\/date\/date_popup\/themes\/datepicker.1.7.css":1,"modules\/field\/theme\/field.css":1,"sites\/all\/modules\/logintoboggan\/logintoboggan.css":1,"modules\/node\/node.css":1,"modules\/search\/search.css":1,"modules\/user\/user.css":1,"sites\/all\/modules\/views\/css\/views.css":1,"sites\/all\/modules\/ckeditor\/css\/ckeditor.css":1,"sites\/all\/modules\/ctools\/css\/ctools.css":1,"sites\/all\/modules\/genpass\/genpass.css":1,"sites\/all\/modules\/rate\/rate.css":1,"sites\/all\/modules\/taxonomy_access\/taxonomy_access.css":1,"sites\/all\/libraries\/wvega-timepicker\/jquery.timepicker.css":1,"modules\/file\/file.css":1,"sites\/all\/modules\/ckeditor\/css\/ckeditor.editor.css":1,"modules\/filter\/filter.css":1,"sites\/all\/modules\/field_group\/field_group.field_ui.css":1,"sites\/all\/modules\/field_group\/field_group.css":1,"sites\/all\/modules\/hide_submit\/hide_submit.css":1,"sites\/all\/themes\/bartik2\/css\/layout.css":1,"sites\/all\/themes\/bartik2\/css\/style.css":1,"sites\/all\/themes\/bartik2\/css\/colors.css":1,"sites\/all\/themes\/bartik2\/css\/print.css":1}},"custom_search":{"form_target":"_self","solr":0},"hide_submit":{"hide_submit_status":true,"hide_submit_method":"hide","hide_submit_css":"hide-submit-disable","hide_submit_abtext":"","hide_submit_atext":"","hide_submit_hide_css":"hide-submit-processing","hide_submit_hide_text":"Processing...","hide_submit_hide_fx":1,"hide_submit_reset_time":5000},"datePopup":{"edit-field-starts-und-0-value-datepicker-popup-0":{"func":"datepicker","settings":{"changeMonth":true,"changeYear":true,"autoPopUp":"focus","closeAtTop":false,"speed":"immediate","firstDay":0,"dateFormat":"D, M d, yy","yearRange":"-3:+3","fromTo":false,"defaultDate":"0y"}},"edit-field-starts-time-und-0-value-datepicker-popup-0":{"func":"datepicker","settings":{"changeMonth":true,"changeYear":true,"autoPopUp":"focus","closeAtTop":false,"speed":"immediate","firstDay":0,"dateFormat":"yy\/mm\/dd","yearRange":"-3:+3","fromTo":false,"defaultDate":"0y"}},"edit-field-starts-time-und-0-value--popup-1":{"func":"","settings":[]},"edit-field-ends-und-0-value-datepicker-popup-0":{"func":"datepicker","settings":{"changeMonth":true,"changeYear":true,"autoPopUp":"focus","closeAtTop":false,"speed":"immediate","firstDay":0,"dateFormat":"D, M d, yy","yearRange":"-3:+3","fromTo":false,"defaultDate":"0y"}},"edit-field-ends-time-und-0-value-datepicker-popup-0":{"func":"datepicker","settings":{"changeMonth":true,"changeYear":true,"autoPopUp":"focus","closeAtTop":false,"speed":"immediate","firstDay":0,"dateFormat":"mm\/dd\/yy","yearRange":"-3:+3","fromTo":false,"defaultDate":"0y"}},"edit-field-ends-time-und-0-value--popup-1":{"func":"","settings":[]}},"states":{"#edit-field-boardcommittee":{"enabled":{"[name=\u0022field_select_category[und]\u0022]":{"value":"boardnote"}}},"#edit-field-govtdept":{"enabled":{"[name=\u0022field_select_category[und]\u0022]":{"value":"govtnote"}}},"#edit-field-starts":{"disabled":{"[name=\u0022field_use_start_date[und]\u0022]":{"!checked":true}}},"#edit-field-starts-time":{"disabled":{"[name=\u0022field_use_start_time[und]\u0022]":{"!checked":true}}},"#edit-field-datestart":{"disabled":{"[name=\u0022field_use_start_notes[und]\u0022]":{"!checked":true}}},"#edit-field-ends":{"disabled":{"[name=\u0022field_use_end_date[und]\u0022]":{"!checked":true}}},"#edit-field-ends-time":{"disabled":{"[name=\u0022field_use_end_time[und]\u0022]":{"!checked":true}}},"#edit-field-dateendtext":{"disabled":{"[name=\u0022field_use_end_notes[und]\u0022]":{"!checked":true}}},"#edit-revision":{"checked":{"textarea[name=\u0022log\u0022]":{"empty":false}}}},"tableDrag":{"edit-field-fileupload-und-table":{"edit-field-fileupload-und-weight":[{"target":"edit-field-fileupload-und-weight","source":"edit-field-fileupload-und-weight","relationship":"sibling","action":"order","hidden":true,"limit":0}]}},"file":{"elements":{"#edit-field-fileupload-und-0-upload":"txt,pdf,doc,docx,rtf,xls,xlsx,ppt,pptx,jpeg,jpg,gif,png"}},"ajax":{"edit-field-fileupload-und-0-upload-button":{"wrapper":"edit-field-fileupload-und-ajax-wrapper","effect":"fade","progress":{"type":"throbber","message":null},"event":"mousedown","keypress":true,"prevent":"click","url":"\/file\/ajax\/field_fileupload\/und\/form-zOg7qCFwAnnBAWuIfsl067fufxgf1ExqF-fS_YQZjWk","submit":{"_triggering_element_name":"field_fileupload_und_0_upload_button","_triggering_element_value":"Upload"}}},"ckeditor":{"input_formats":{"filtered_html":{"customConfig":"\/sites\/all\/modules\/ckeditor\/ckeditor.config.js?","defaultLanguage":"en","toolbar":"\n[\n    [\u0027Source\u0027],\n    [\u0027Cut\u0027,\u0027Copy\u0027,\u0027Paste\u0027,\u0027PasteText\u0027,\u0027PasteFromWord\u0027,\u0027-\u0027,\u0027SpellChecker\u0027, \u0027Scayt\u0027],\n    [\u0027Undo\u0027,\u0027Redo\u0027,\u0027Find\u0027,\u0027Replace\u0027,\u0027-\u0027,\u0027SelectAll\u0027],\n    [\u0027Image\u0027,\u0027Media\u0027,\u0027Flash\u0027,\u0027Table\u0027,\u0027HorizontalRule\u0027,\u0027Smiley\u0027,\u0027SpecialChar\u0027],\n    [\u0027Maximize\u0027, \u0027ShowBlocks\u0027],\n    \u0027\/\u0027,\n    [\u0027Format\u0027],\n    [\u0027Bold\u0027,\u0027Italic\u0027,\u0027Underline\u0027,\u0027Strike\u0027,\u0027-\u0027,\u0027Subscript\u0027,\u0027Superscript\u0027,\u0027-\u0027,\u0027RemoveFormat\u0027],\n    [\u0027NumberedList\u0027,\u0027BulletedList\u0027,\u0027-\u0027,\u0027Outdent\u0027,\u0027Indent\u0027,\u0027Blockquote\u0027],\n    [\u0027JustifyLeft\u0027,\u0027JustifyCenter\u0027,\u0027JustifyRight\u0027,\u0027JustifyBlock\u0027,\u0027-\u0027,\u0027BidiLtr\u0027,\u0027BidiRtl\u0027],\n    [\u0027Link\u0027,\u0027Unlink\u0027,\u0027Anchor\u0027,\u0027Linkit\u0027]\n]\n    ","enterMode":1,"shiftEnterMode":2,"toolbarStartupExpanded":true,"width":"100%","skin":"moono","format_tags":"p;div;pre;address;h1;h2;h3;h4;h5;h6","show_toggle":"t","ss":"2","loadPlugins":[],"entities":false,"entities_greek":false,"entities_latin":false,"scayt_autoStartup":false,"stylesCombo_stylesSet":"drupal:\/sites\/all\/modules\/ckeditor\/ckeditor.styles.js","contentsCss":["\/sites\/all\/modules\/ckeditor\/css\/ckeditor.css?o4ezs2","\/sites\/all\/libraries\/ckeditor\/contents.css?o4ezs2"]},"full_html":{"customConfig":"\/sites\/all\/modules\/ckeditor\/ckeditor.config.js?","defaultLanguage":"en","toolbar":"[\n    [\u0027Source\u0027],\n    [\u0027Cut\u0027,\u0027Copy\u0027,\u0027Paste\u0027,\u0027PasteText\u0027,\u0027PasteFromWord\u0027,\u0027-\u0027,\u0027SpellChecker\u0027,\u0027Scayt\u0027],\n    [\u0027Undo\u0027,\u0027Redo\u0027,\u0027Find\u0027,\u0027Replace\u0027,\u0027-\u0027,\u0027SelectAll\u0027],\n    [\u0027Image\u0027,\u0027Flash\u0027,\u0027Table\u0027,\u0027HorizontalRule\u0027,\u0027Smiley\u0027,\u0027SpecialChar\u0027,\u0027Iframe\u0027],\n    \u0027\/\u0027,\n    [\u0027Bold\u0027,\u0027Italic\u0027,\u0027Underline\u0027,\u0027Strike\u0027,\u0027-\u0027,\u0027Subscript\u0027,\u0027Superscript\u0027,\u0027-\u0027,\u0027RemoveFormat\u0027],\n    [\u0027NumberedList\u0027,\u0027BulletedList\u0027,\u0027-\u0027,\u0027Outdent\u0027,\u0027Indent\u0027,\u0027Blockquote\u0027,\u0027CreateDiv\u0027],\n    [\u0027JustifyLeft\u0027,\u0027JustifyCenter\u0027,\u0027JustifyRight\u0027,\u0027JustifyBlock\u0027,\u0027-\u0027,\u0027BidiLtr\u0027,\u0027BidiRtl\u0027,\u0027-\u0027,\u0027Language\u0027],\n    [\u0027Link\u0027,\u0027Unlink\u0027,\u0027Anchor\u0027,\u0027Linkit\u0027,\u0027LinkToNode\u0027,\u0027LinkToMenu\u0027],\n    \u0027\/\u0027,\n    [\u0027Format\u0027,\u0027Font\u0027,\u0027FontSize\u0027],\n    [\u0027TextColor\u0027,\u0027BGColor\u0027],\n    [\u0027Maximize\u0027,\u0027ShowBlocks\u0027],\n    [\u0027DrupalBreak\u0027,\u0027DrupalPageBreak\u0027]\n]","enterMode":1,"shiftEnterMode":2,"toolbarStartupExpanded":true,"width":"100%","skin":"moono","format_tags":"p;div;pre;address;h1;h2;h3;h4;h5;h6","show_toggle":"t","ss":"2","loadPlugins":[],"entities":false,"entities_greek":false,"entities_latin":false,"scayt_autoStartup":false,"stylesCombo_stylesSet":"drupal:\/sites\/all\/themes\/freedom\/ckeditor.styles.js","contentsCss":["\/sites\/all\/modules\/ckeditor\/css\/ckeditor.css?o4ezs2","\/sites\/all\/libraries\/ckeditor\/contents.css?o4ezs2"]},"notice_html":{"customConfig":"\/sites\/all\/modules\/ckeditor\/ckeditor.config.js?","defaultLanguage":"en","toolbar":"[\n    [\u0027Font\u0027,\u0027FontSize\u0027],\n    [\u0027TextColor\u0027,\u0027BGColor\u0027,\u0027-\u0027,\u0027Bold\u0027,\u0027Italic\u0027,\u0027Underline\u0027,\u0027Strike\u0027,\u0027-\u0027,\u0027NumberedList\u0027,\u0027BulletedList\u0027,\u0027-\u0027,\u0027JustifyLeft\u0027,\u0027JustifyCenter\u0027,\u0027JustifyRight\u0027,\u0027-\u0027,\u0027Link\u0027,\u0027Unlink\u0027,\u0027IMCE\u0027]\n]","enterMode":2,"shiftEnterMode":1,"toolbarStartupExpanded":true,"width":"100%","skin":"moono","format_tags":"p;div;pre;address;h1;h2;h3;h4;h5;h6","show_toggle":"t","allowedContent":true,"ss":"2","loadPlugins":{"drupalbreaks":{"name":"drupalbreaks","desc":"Plugin for inserting Drupal teaser and page breaks.","path":"\/sites\/all\/modules\/ckeditor\/plugins\/drupalbreaks\/","buttons":{"DrupalBreak":{"label":"DrupalBreak","icon":"images\/drupalbreak.png"}},"default":"t"},"imce":{"name":"imce","desc":"Plugin for inserting files from IMCE without image dialog","path":"\/sites\/all\/modules\/ckeditor\/plugins\/imce\/","buttons":{"IMCE":{"label":"IMCE","icon":"images\/icon.png"}},"default":"f"},"mediaembed":{"name":"mediaembed","desc":"Plugin for inserting Drupal embeded media","path":"\/sites\/all\/modules\/ckeditor\/plugins\/mediaembed\/","buttons":{"MediaEmbed":{"label":"MediaEmbed","icon":"images\/icon.png"}},"default":"f"}},"entities":false,"entities_greek":false,"entities_latin":false,"scayt_autoStartup":false,"filebrowserBrowseUrl":"\/imce?app=ckeditor%7Csendto%40ckeditor_imceSendTo%7C","stylesCombo_stylesSet":"drupal:\/sites\/all\/themes\/freedom\/ckeditor.styles.js","contentsCss":["\/sites\/all\/modules\/ckeditor\/css\/ckeditor.css?o4ezs2","\/sites\/all\/libraries\/ckeditor\/contents.css?o4ezs2"]}},"plugins":[],"textarea_default_format":{"edit-body-und-0-value":"notice_html","edit-body-und-0-summary":"notice_html"},"module_path":"\/sites\/all\/modules\/ckeditor","editor_path":"\/sites\/all\/libraries\/ckeditor\/","ajaxToken":"5t5vOrkVZ1NXeVK79HcyO9FiFg-o4445eq3I2QzsGws","xss_url":"\/ckeditor\/xss","theme":"bartik","elements":{"edit-body-und-0-value":"notice_html","edit-body-und-0-summary":"notice_html"},"autostart":{"edit-body-und-0-value":true,"edit-body-und-0-summary":true}},"anonymous":"Anonymous","field_group":{"div":"form"}});
//--><!]]>
</script>
<!--jQuery dependencies-->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>    
 <script src="https://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
 
<!--Include Touch Punch file to provide support for touch devices-->
 <script type="text/javascript" src="sites/all/themes/bartik2/grid/jquery.ui.touch-punch.min.js.html" ></script>   
 
 <!--ParamQuery Grid files-->
 <link rel="stylesheet" href="sites/all/themes/bartik2/grid/pqgrid.min.css" />
 <script type="text/javascript" src="sites/all/themes/bartik2/grid/pqgrid.min.js" ></script>   

<!--ParamQuery Select files-->
 <link rel="stylesheet" href="sites/all/themes/bartik2/grid/pqselect.dev.css" />
 <script type="text/javascript" src="sites/all/themes/bartik2/grid/pqselect.dev.js" ></script>    

<!-- Time Picker Jquery -->
<link rel="stylesheet" href="timepicker/jquery.timepicker.css" />
 <script src="timepicker/jquery.timepicker.min.js"></script>

<script type="text/javascript"> 

	var loc = window.location.href+'';
		if (loc.indexOf('http://')==0){
    	window.location.href = loc.replace('http://','https://');
	}

$(function() {
	//set up Board and Gov't drop down boxes
	$("#edit-field-boardcommittee-und").pqSelect({
    	multiplePlaceholder: '',    
   	 	checkbox: true, //adds checkbox to options
		width: 420,
		maxDisplay: 1  
	}).pqSelect("open");

	$("#edit-field-govtdept-und").pqSelect({
   		 multiplePlaceholder: '',    
   		 checkbox: true, //adds checkbox to options   
		 width: 420,
		 maxDisplay: 1
	}).pqSelect("close");
	
});

$(document).on("keypress", ":input:not(textarea)", function(event) {
    return event.keyCode != 13;
});

</script>

<script>
$(function() {	
	//automatically fill time in end time based on current time +1 hour
	$(document).ready(function (){
    	$('#edit-field-starts-time-und-0-value--popup-1').timepicker('setTime', new Date());
		
		var time = $('#edit-field-starts-time-und-0-value--popup-1').val();
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
		
		$('#edit-field-starts-time-und-0-value--popup-1').timepicker({ 'timeFormat': 'h:ia' });
		
		$('#edit-field-starts-und-0-value-datepicker-popup-0').datepicker().datepicker('setDate', new Date());
		$('#edit-field-ends-und-0-value-datepicker-popup-0').datepicker().datepicker('setDate', new Date());
		
		$('#edit-field-starts-und-0-value-datepicker-popup-0').datepicker("option", "dateFormat", "D, M d, yy");
		$('#edit-field-ends-und-0-value-datepicker-popup-0').datepicker("option", "dateFormat", "D, M d, yy");
	});
	
	$('#edit-field-starts-time-und-0-value--popup-1').timepicker({ 'step': 15 });
	$('#edit-field-ends-time-und-0-value--popup-1').timepicker({ 'step': 15 });
});
</script>

<script  type="text/javascript" >
$(function() {
	//automatically update end time to be +1 hour after start date/time
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
				/*if(ampm == 'am') {
					ampm = 'pm';
				}
				else if(ampm == 'pm') {
					ampm = 'am';
				}*/
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
	
	$('#edit-field-starts-und-0-value-datepicker-popup-0').change(function() {
		var date = (this.value);
		$('#edit-field-ends-und-0-value-datepicker-popup-0').val(date);
	});
	
});
</script>

<script  type="text/javascript" >
$(function() {
	//Board selection automatically selected and opened at screen load
	$('#edit-field-use-date-und').change(function() {
		$('#edit-field-location').toggleClass( "noCal" );
	});
	
	$('#edit-field-select-category-und-govtnote').click(function() {
		$('#label').removeClass( "noDisplay").addClass( "govtLabel" );
	});
	
	$('#edit-field-select-category-und-boardnote').click(function() {
		$('#label').removeClass( "govtLabel" ).addClass( "noDisplay" );
	});
});
</script>

<style  type="text/css">
body {
	margin: auto;
}
body, .form-item-field-use-date-und::after, .field-name-field-fileupload legend, input, .ui-widget {
		font-family: serif;
		text-shadow: 0 0 0 #000;
	}
	.noCal {
		padding-top: 54px;
    	background-color: #d6d7ce;
   		width: 70%;
	}
	.govtLabel {
		display: inline-block;
    	float: left;
    	position: absolute;
    	top: 106px;
    	left: 50px;
		
	}
	.noDisplay, .field-group-div h3, .form-item label, .field-type-datetime .fieldset-legend {
		display: none !important;
	}
	
	.ui-state-default, .ui-state-active {
		border: 0px;
		background: #FFF;
	}
	
	.form-actions {
		margin: 0px;
		padding: 0px;
	}
	
	#main {
		width: auto;
	}
	
	.one-sidebar #content {
		width: 650px;
   	 	margin: auto;
    	display: block;
		float: none;
	}
	
	#page-wrapper {
		min-width: 775px;
		min-height: 640px;
	}
	
	input.form-submit {
		margin: 0px;
	}
	#old-notice-node-form, .page-node-edit #notice-node-form  {
		padding-bottom: 0px;
	}
	
	input.form-text {
		padding-left: 23px !important;
	}
	#edit-field-dateendtext-und-0-value, #edit-field-datestart-und-0-value {
		padding-left: 3px !important;
	}
	#edit-field-use-start-time, #edit-field-use-end-time {
		position: relative;
		left: 45px;
		z-index: 1;
	}
	#edit-field-use-start-date, #edit-field-use-end-date {
		position: relative;
		left: 80px;
		top: 4px;
		z-index: 1;
	}
	#edit-field-use-end-date::before, #edit-field-use-start-date::before  {
		content: '';
	}
	.region {
		background: url('images/notice-background.png') no-repeat;
		min-height: 575px;
	}
	.region-3 {
		background: url('images/files-3.png') no-repeat;
		min-height: 601px;
	}
	.region-5 {
		background: url('images/files-5.png') no-repeat;
		min-height: 627px;
	}
	.region-7 {
		background: url('images/files-7.png') no-repeat;
		min-height: 653px;
	}
	.region-9 {
		background: url('images/files-9.png') no-repeat;
		min-height: 679px;
	}
	#old-notice-node-form, #edit-field-select-category, .field-group-div {
		background: inherit; 
		border: 0px;
		outline: 0px;
	}
	#old-notice-node-form input.form-text, input#edit-submit {
		border: 0px;
		outline: 0px;
		padding: 1px;
	}
	.field-group-div {
		position: relative;
		top: 50px;
	}
	#edit-field-select-category-und-boardnote {
		position: relative;
    	top: 30px;
    	left: 100px;
	}
	#edit-field-select-category-und-govtnote {
	    position: relative;
    	top: 30px;
    	left: 200px;
	}
	#edit-field-boardcommittee, #edit-field-govtdept {
		position: relative;
    	top: -5px;
    	left: 80px;
	}
	.form-item-title {
		position: relative;
		left: 80px;
    	top: -5px;
	}
	.form-item-field-use-date-und::after {
		content: '';
	}
	input#edit-field-use-date-und {
		left: 80px;
	} 
	#edit-field-starts-und-0-value-datepicker-popup-0, #edit-field-ends-und-0-value-datepicker-popup-0 {
	    position: relative;
    	left: 40px;
	}
	.form-item-field-datestart-und-0-value, .form-item-field-dateendtext-und-0-value {
		position: relative;
    	left: 53px;
    	top: 3px;
		padding-top: 1px;
	}
	#edit-field-starts-time, #edit-field-ends-time {
		left: 25px;
	}
	#edit-field-use-start-notes, #edit-field-use-end-notes {
		position: relative;
		left: 28px;
		z-index: 10;
	}
	#ui-datepicker-div {
		z-index: 11 !important;
	}
	#edit-field-location {
		position: relative;
    	left: 78px;
	}
	.form-item-body-und-0-value	{
	    max-width: 525px;
    	position: relative;
    	top: 30px;
	}
	input#edit-submit {
	    background: #d6d7ce url('images/save-button.png') 0 0 no-repeat;
		padding: 8px 55px;
		height: 28px;
	}
	body.page-node-add-old-notice #edit-actions {
		top: 100px;
    	left: 450px;
	}
	table {
		margin: 0px;
	}
	#edit-field-fileupload {
		position: relative;
    	left: 10px;
	}
	.field-type-datetime input {
		background: #fff url('images/dropdown.png') no-repeat right;
	}
	div.pq-select-button {
		box-shadow: 0px;
		border-radius: 0px;
		-webkit-border-radius: 0px;
		background: #fff url('images/dropdown.png') no-repeat right;
		line-height: inherit;
		padding: 2px;
		font-size: 95%;
		height: 20px;
	}
	.pq-select-text > .pq-select-item {
		padding: 0px 0px 0px 3px;
		margin: 0px;
		line-height: inherit;
		background: #e2e0e3;
	}
	.form-file {
		padding: 3px 4px;
	}
	.form-file-hide {
		display: none !important;
	}
	.form-file-secondary {
		display: block;
		position: absolute;
		top: 25px;
		left: 625px;
		margin: 10px 10px;
	}
	#add-a-file {
		color: blue;
		text-decoration: underline;
		margin-left: 25px;
		padding-bottom: 1px;
	}
	
	#edit-title, #edit-field-location-und-0-value {
		padding-left: 3px !important;
	}
	
	.pq-select-menu {
		background: white;
	}
	
	/* Firefox CSS hacks */
	@supports (-moz-appearance:none) and (display:contents) {
    
	#edit-field-use-start-time, #edit-field-use-end-time { 
		top: 3px; 
	} 
	.form-item-field-datestart-und-0-value, .form-item-field-dateendtext-und-0-value {
		left: 80px;
		top: 4px;
		padding-top: 3px;
	}
	#edit-field-use-start-notes, #edit-field-use-end-notes {
		left: 48px;
		top: 7px;
	}
}
/* CSS hacks for Safari */
@supports (overflow:-webkit-marquee) and (justify-content:inherit) 
{

  .form-item-field-fileupload-und-0 .safari_only {
     padding-top: 0px;
  }
	#edit-field-use-start-time, #edit-field-use-end-time { 
		top: 3px; 
	} 
	.form-item-field-datestart-und-0-value, .form-item-field-dateendtext-und-0-value {
		left: 68px;
		top: 4px;
		padding-top: 3px;
	}
	#edit-field-use-start-notes, #edit-field-use-end-notes {
		left: 35px;
		top: 7px;
	}

}

@media screen and (min-color-index:0) and(-webkit-min-device-pixel-ratio:0) 
{ @media {
     .form-item-field-fileupload-und-0 {
     	padding-top: 0px;
  	}
}}
</style>
<script  type="text/javascript">
$(function() {
	//set up hidden fields based on other field selections (ie, Board or Gov't?, use date/time hides calendar fields, etc)
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
	var i = 1;
	$("#add-a-file").click(function() {
		$('#edit-field-fileupload-' + i).removeClass('form-file-hide').addClass('form-file');
		if (i == 2 || i == 3 ) {
			$('#region').removeClass('region').addClass('region-3');
		}
		else if (i == 4 || i == 5 ) {
			$('#region').removeClass('region-3').addClass('region-5');
		}
		else if (i == 6 || i == 7 ) {
			$('#region').removeClass('region-5').addClass('region-7');
		} 
		else if (i == 8 || i == 9 ) {
			$('#region').removeClass('region-7').addClass('region-9');
		}
		i++;
	});
});
</script>

<script type="text/javascript">
	function resizePage(){
	//set browser window size
    	var width = 720;
    	var height = 679;
    	window.resizeTo(width, height); 
		window.moveTo(((screen.width - width) / 2), ((screen.height - height) / 2));  
	}  
</script>

</head>
<body class="html not-front logged-in one-sidebar sidebar-first page-node page-node-add page-node-add-old-notice" onload="resizePage();" >
    <div id="page-wrapper"><div id="page">
  <div id="header" class="with-secondary-menu"></div> <!-- /.section, /#header -->
  <div id="main-wrapper" class="clearfix"><div id="main" class="clearfix">
    <div id="content" class="column"><div class="section">  
    <div class="region region-content" id="region">
    <div id="block-system-main" class="block block-system">
    
  <div class="content">
    <form class="node-form node-old_notice-form" enctype="multipart/form-data" action="notice-post.php" method="post" id="old-notice-node-form" accept-charset="UTF-8"><div><div class="field-type-list-text field-name-field-select-category field-widget-options-buttons form-wrapper" id="edit-field-select-category"><div class="form-item form-type-radios form-item-field-select-category-und">
  <label for="edit-field-select-category-und">Select Category <span class="form-required" title="This field is required.">*</span></label>
 <div id="edit-field-select-category-und" class="form-radios"><div class="form-item form-type-radio form-item-field-select-category-und">
 <input type="radio" id="edit-field-select-category-und-boardnote" name="field_select_category[und]" value="boardnote" checked="checked" class="form-radio" />  <label class="option" for="edit-field-select-category-und-boardnote">Board Watch </label>

</div>
<div class="form-item form-type-radio form-item-field-select-category-und">
 <input type="radio" id="edit-field-select-category-und-govtnote" name="field_select_category[und]" value="govtnote" class="form-radio" />  <label class="option" for="edit-field-select-category-und-govtnote">Government Watch </label>

</div>
</div>
</div>
</div><input type="hidden" name="changed" value="" />
<input type="hidden" name="form_id" value="notice_entry" />
<img id="label" src="images/govt-label.png" class="noDisplay" width="77px" height="24px"/>
<div class="required-fields group-notice-details field-group-div"><h3><span>Notice Detail Section</span></h3><div class="field-type-taxonomy-term-reference field-name-field-boardcommittee field-widget-options-select form-wrapper" id="edit-field-boardcommittee"><div class="form-item form-type-select form-item-field-boardcommittee-und">
  <label for="edit-field-boardcommittee-und">Committee </label>
 <select multiple="multiple" name="field_boardcommittee[und][]" id="edit-field-boardcommittee-und" class="form-select"><option value="_none">- None -</option><option value="139">All</option><option value="18572">Group2</option><option value="55">House Agriculture and Consumer Affairs</option><option value="56">House Appropriations</option><option value="58">House Banks and Banking</option><option value="59">House Budget and Fiscal Affairs Oversight</option><option value="61">House Code Revision</option><option value="62">House Defense and Veterans Affairs</option><option value="63">House Economic Development and Tourism</option><option value="64">House Education</option><option value="65">House Energy, Utilities and Telecommunications</option><option value="66">House Ethics</option><option value="67">House Game, Fish and Parks</option><option value="68">House Governmental Affairs</option><option value="69">House Health and Human Services</option><option value="70">House Higher Education</option><option value="71">House Human Relations and Aging</option><option value="72">House Industry and Labor</option><option value="73">House Information and Audits</option><option value="74">House Insurance</option><option value="75">House Interstate Cooperation</option><option value="76">House Intragovernmental Coordination</option><option value="77">House Judiciary - Civil</option><option value="78">House Judiciary - Non Civil</option><option value="60">House Juvenile Justice</option><option value="79">House Legislative and Congressional Reapportionment</option><option value="11955">House Legislative Services</option><option value="80">House MARTOC</option><option value="81">House Motor Vehicles</option><option value="82">House Natural Resources and Environment</option><option value="83">House Public Safety and Homeland Security</option><option value="11961">House Reapportionment</option><option value="85">House Regulated Industries</option><option value="86">House Retirement</option><option value="87">House Rules</option><option value="88">House Science and Technology</option><option value="89">House Small Business Development and Job Creation</option><option value="90">House Special Committee on Certificate of Need</option><option value="91">House Special Rules (Policy)</option><option value="93">House State Planning and Community Affairs</option><option value="92">House State Properties</option><option value="94">House Transportation</option><option value="95">House Ways and Means</option><option value="96">Office of the Governor</option><option value="24">Senate Administrative Affairs</option><option value="25">Senate Agriculture and Consumer Affairs</option><option value="26">Senate Appropriations</option><option value="27">Senate Assignments</option><option value="28">Senate Banking and Financial Institutions</option><option value="29">Senate Economic Development and Tourism</option><option value="30">Senate Education and Youth</option><option value="31">Senate Ethics</option><option value="32">Senate Finance</option><option value="33">Senate Government Oversight</option><option value="34">Senate Health and Human Services</option><option value="35">Senate Higher Education</option><option value="36">Senate Insurance and Labor</option><option value="37">Senate Interstate Cooperation</option><option value="39">Senate Judiciary</option><option value="11959">Senate Judiciary (Non-Civil)</option><option value="11957">Senate Legislative Services</option><option value="40">Senate MARTOC</option><option value="41">Senate Natural Resources and the Environment</option><option value="42">Senate Public Safety and Homeland Security</option><option value="43">Senate Reapportionment and Redistricting</option><option value="44">Senate Regulated Industries and Utilities</option><option value="45">Senate Retirement</option><option value="46">Senate Rules</option><option value="47">Senate Science and Technology</option><option value="48">Senate Special Judiciary</option><option value="49">Senate State and Local Governmental Operations</option><option value="51">Senate State Institutions and Property</option><option value="52">Senate Transportation</option><option value="53">Senate Urban Affairs</option><option value="11963">Senate Veterans, Military and Homeland Security</option><option value="11970">Test Notice Committee</option></select>
</div>
</div><div class="field-type-taxonomy-term-reference field-name-field-govtdept field-widget-options-select form-wrapper" id="edit-field-govtdept"><div class="form-item form-type-select form-item-field-govtdept-und">
  <label for="edit-field-govtdept-und">Department </label>
 <select multiple="multiple" name="field_govtdept[und][]" id="edit-field-govtdept-und" class="form-select"><option value="_none">- None -</option><option value="144">All</option><option value="98">Atlanta Regional Commission</option><option value="11964">Behavioral Health Coordinating Council</option><option value="11965">Board of Physician Workforce</option><option value="99">Board of Regents</option><option value="11969">Child Welfare and Reform Council</option><option value="19016">Criminal Justice Coordinating Council (CJCC)</option><option value="11958">Criminal Justice Reform Council</option><option value="11952">Department of Administrative Services</option><option value="11954">Department of Audits and Accounts</option><option value="100">Department of Behavioral Health and Developmental Disabilities</option><option value="101">Department of Community Affairs</option><option value="102">Department of Community Health</option><option value="16313">Department of Community Supervision</option><option value="103">Department of Corrections</option><option value="104">Department of Early Care and Learning</option><option value="105">Department of Economic Development</option><option value="18967">Department of Driver Services</option><option value="106">Department of Education</option><option value="107">Department of Human Services</option><option value="108">Department of Insurance</option><option value="109">Department of Juvenile Justice</option><option value="110">Department of Labor</option><option value="111">Department of Natural Resources</option><option value="11960">Department of Pardons and Paroles</option><option value="112">Department of Public Health</option><option value="19010">Department of Public Safety</option><option value="113">Department of Revenue</option><option value="114">Department of Transportation</option><option value="115">Employees&#039; Retirement System of Georgia</option><option value="19012">Georgia Aviation Authority</option><option value="13704">Georgia Board of Dentistry</option><option value="11956">Georgia Board of Pharmacy</option><option value="116">Georgia Composite Medical Board</option><option value="117">Georgia Council on Developmental Disabilities</option><option value="118">Georgia Environmental Finance Authority</option><option value="11968">Georgia Immigration Review Board</option><option value="119">Georgia Office of Homeland Security</option><option value="120">Georgia Ports Authority</option><option value="18828">Georgia Professional Standards Commission</option><option value="121">Georgia Public Service Commission</option><option value="122">Georgia Regional Transportation Authority</option><option value="128">Georgia Secretary of State/Board Licensure</option><option value="123">Georgia State Financing and Investment Commission</option><option value="124">Georgia State Properties Commission</option><option value="125">Georgia Student Finance Commission</option><option value="126">Georgia Technology Authority</option><option value="18393">Georgia Vocational Rehabilitation Agency</option><option value="18968">Georgia Vocational Rehabilitation Services</option>><option value="19013">Georgia Workforce Development Board</option><option value="19011">Georgia World Congress Center Authority</option><option value="127">Governor&#039;s Council on Maternal and Infant Health</option>><option value="19014">Invest Georgia Authority</option><option value="129">State Board of Worker&#039;s Compensation</option><option value="130">State Ethics Commission</option><option value="131">State Medical Education Board</option><option value="132">State Personnel Administration</option><option value="133">State Roads and Tollway Authority</option><option value="134">State Soil and Water Conservation Committee</option><option value="135">Subsequent Injury Trust Fund</option><option value="136">Technical and Adult Education</option><option value="11974">Test Notice Department</option></select>
</div>
</div><div class="form-item form-type-textfield form-item-title">
  <label for="edit-title">Subject <span class="form-required" title="This field is required.">*</span></label>
 <input type="text" id="edit-title" name="title" value="" size="60" maxlength="255" class="form-text required" />
</div>
<div class="field-type-list-boolean field-name-field-use-date field-widget-options-onoff form-wrapper" id="edit-field-use-date"><div class="form-item form-type-checkbox form-item-field-use-date-und">
 <input type="checkbox" id="edit-field-use-date-und" name="field_use_date[und]" value="1" checked="checked" class="form-checkbox css-label lrg klaus" /> 
</div>
</div><div class="field-type-list-boolean field-name-field-use-start-date field-widget-options-onoff form-wrapper" id="edit-field-use-start-date"><div class="form-item form-type-checkbox form-item-field-use-start-date-und">
 <input type="checkbox" id="edit-field-use-start-date-und" name="field_use_start_date[und]" value="1" checked="checked" class="form-checkbox css-label lrg klaus" /> 
</div>
</div><div class="field-type-datetime field-name-field-starts field-widget-date-popup form-wrapper" id="edit-field-starts"><div id="field-starts-add-more-wrapper"><fieldset class="form-wrapper"><legend><span class="fieldset-legend">Starts </span></legend><div class="fieldset-wrapper"><div  class="date-no-float container-inline-date"><div class="form-item form-type-date-popup form-item-field-starts-und-0-value">
 <div id="edit-field-starts-und-0-value"  class="date-padding"><div class="form-item form-type-textfield form-item-field-starts-und-0-value-date">
  <label for="edit-field-starts-und-0-value-datepicker-popup-0">Date </label>
 <input class="date-clear form-text" type="text" id="edit-field-starts-und-0-value-datepicker-popup-0" name="field_starts[und][0][value][date]" value="Fri, Apr 1, 2016" size="18" maxlength="30" />
</div>
</div>
</div>
</div></div></fieldset>
</div></div><div class="field-type-list-boolean field-name-field-use-start-time field-widget-options-onoff form-wrapper" id="edit-field-use-start-time"><div class="form-item form-type-checkbox form-item-field-use-start-time-und">
 <input type="checkbox" id="edit-field-use-start-time-und" name="field_use_start_time[und]" value="1" checked="checked" class="form-checkbox css-label lrg klaus" /> 
</div>
</div><div class="field-type-datetime field-name-field-starts-time field-widget-date-popup form-wrapper" id="edit-field-starts-time"><div id="field-starts-time-add-more-wrapper"><fieldset class="form-wrapper"><legend><span class="fieldset-legend">Starts Time </span></legend><div class="fieldset-wrapper"><div  class="date-no-float container-inline-date"><div class="form-item form-type-date-popup form-item-field-starts-time-und-0-value">
 <div id="edit-field-starts-time-und-0-value"  class="date-padding"><div class="form-item form-type-textfield form-item-field-starts-time-und-0-value-date">
  <label for="edit-field-starts-time-und-0-value-datepicker-popup-0">Date </label>
 <input class="date-clear form-text" type="text" id="edit-field-starts-time-und-0-value-datepicker-popup-0" name="field_starts_time[und][0][value][date]" value="2016/04/01" size="10" maxlength="30" />
</div>
<div class="form-item form-type-textfield form-item-field-starts-time-und-0-value-time">
  <label for="edit-field-starts-time-und-0-value--popup-1">Time </label>
 <input class="date-clear form-text" type="text" id="edit-field-starts-time-und-0-value--popup-1" name="field_starts_time[und][0][value][time]" value="10:58am" size="10" maxlength="10" />
</div>
</div>
</div>
</div></div></fieldset>
</div></div><div class="field-type-list-boolean field-name-field-use-start-notes field-widget-options-onoff form-wrapper" id="edit-field-use-start-notes"><div class="form-item form-type-checkbox form-item-field-use-start-notes-und">
 <input type="checkbox" id="edit-field-use-start-notes-und" name="field_use_start_notes[und]" value="1" checked="checked" class="form-checkbox css-label lrg klaus" /> 
 <label for="edit-field-use-start-notes-und" class="css-checkbox lrg klaus"></label>
</div>
</div><div class="field-type-text field-name-field-datestart field-widget-text-textfield form-wrapper" id="edit-field-datestart"><div id="field-datestart-add-more-wrapper"><div class="form-item form-type-textfield form-item-field-datestart-und-0-value">
  <label for="edit-field-datestart-und-0-value">Text </label>
 <input class="text-full form-text" type="text" id="edit-field-datestart-und-0-value" name="field_datestart[und][0][value]" value="" size="12" maxlength="255" />
</div>
</div></div><div class="field-type-list-boolean field-name-field-use-end-date field-widget-options-onoff form-wrapper" id="edit-field-use-end-date"><div class="form-item form-type-checkbox form-item-field-use-end-date-und">
 <input type="checkbox" id="edit-field-use-end-date-und" name="field_use_end_date[und]" value="1" checked="checked" class="form-checkbox css-label lrg klaus" /> 
</div>
</div><div class="field-type-datetime field-name-field-ends field-widget-date-popup form-wrapper" id="edit-field-ends"><div id="field-ends-add-more-wrapper"><fieldset class="form-wrapper"><legend><span class="fieldset-legend">Ends </span></legend><div class="fieldset-wrapper"><div  class="date-no-float container-inline-date"><div class="form-item form-type-date-popup form-item-field-ends-und-0-value">
 <div id="edit-field-ends-und-0-value"  class="date-padding"><div class="form-item form-type-textfield form-item-field-ends-und-0-value-date">
  <label for="edit-field-ends-und-0-value-datepicker-popup-0">Date </label>
 <input class="date-clear form-text" type="text" id="edit-field-ends-und-0-value-datepicker-popup-0" name="field_ends[und][0][value][date]" value="Fri, Apr 1, 2016" size="18" maxlength="30" />
</div>
</div>
</div>
</div></div></fieldset>
</div></div><div class="field-type-list-boolean field-name-field-use-end-time field-widget-options-onoff form-wrapper" id="edit-field-use-end-time"><div class="form-item form-type-checkbox form-item-field-use-end-time-und">
 <input type="checkbox" id="edit-field-use-end-time-und" name="field_use_end_time[und]" value="1" checked="checked" class="form-checkbox css-label lrg klaus" /> 
</div>
</div><div class="field-type-datetime field-name-field-ends-time field-widget-date-popup form-wrapper" id="edit-field-ends-time"><div id="field-ends-time-add-more-wrapper"><fieldset class="form-wrapper"><legend><span class="fieldset-legend">Ends Time </span></legend><div class="fieldset-wrapper"><div  class="date-no-float container-inline-date"><div class="form-item form-type-date-popup form-item-field-ends-time-und-0-value">
 <div id="edit-field-ends-time-und-0-value"  class="date-padding"><div class="form-item form-type-textfield form-item-field-ends-time-und-0-value-date">
  <label for="edit-field-ends-time-und-0-value-datepicker-popup-0">Date </label>
 <input class="date-clear form-text" type="text" id="edit-field-ends-time-und-0-value-datepicker-popup-0" name="field_ends_time[und][0][value][date]" value="04/01/2016" size="10" maxlength="30" />
</div>
<div class="form-item form-type-textfield form-item-field-ends-time-und-0-value-time">
  <label for="edit-field-ends-time-und-0-value--popup-1">Time </label>
 <input class="date-clear form-text" type="text" id="edit-field-ends-time-und-0-value--popup-1" name="field_ends_time[und][0][value][time]" value="11:28am" size="10" maxlength="10" />
</div>
</div>
</div>
</div></div></fieldset>
</div></div><div class="field-type-list-boolean field-name-field-use-end-notes field-widget-options-onoff form-wrapper" id="edit-field-use-end-notes"><div class="form-item form-type-checkbox form-item-field-use-end-notes-und">
 <input type="checkbox" id="edit-field-use-end-notes-und" name="field_use_end_notes[und]" value="1" checked="checked" class="form-checkbox css-label lrg klaus" /> 
</div>
</div><div class="field-type-text field-name-field-dateendtext field-widget-text-textfield form-wrapper" id="edit-field-dateendtext"><div id="field-dateendtext-add-more-wrapper"><div class="form-item form-type-textfield form-item-field-dateendtext-und-0-value">
  <label for="edit-field-dateendtext-und-0-value">Text </label>
 <input class="text-full form-text" type="text" id="edit-field-dateendtext-und-0-value" name="field_dateendtext[und][0][value]" value="or TBD" size="12" maxlength="255" />
</div>
</div></div><div class="field-type-text field-name-field-location field-widget-text-textfield form-wrapper" id="edit-field-location"><div id="field-location-add-more-wrapper"><div class="form-item form-type-textfield form-item-field-location-und-0-value">
  <label for="edit-field-location-und-0-value">Location </label>
 <input class="text-full form-text" type="text" id="edit-field-location-und-0-value" name="field_location[und][0][value]" value="" size="60" maxlength="255" />
</div>
</div></div>

<div class="field-type-file field-name-field-fileupload field-widget-file-generic form-wrapper" id="edit-field-fileupload"><div id="edit-field-fileupload-und-ajax-wrapper"><fieldset id="edit-field-fileupload-und" class="form-wrapper"><legend><span class="fieldset-legend">File Upload</span> <a id="add-a-file">Add another file</a></legend><div class="fieldset-wrapper"><div class="form-item form-type-managed-file form-item-field-fileupload-und-0">
 <div class="file-widget form-managed-file clearfix">
<input type="file" id="edit-field-fileupload-0" name="field_fileupload[]" size="22" class="form-file" />
<input type="file" id="edit-field-fileupload-1" name="field_fileupload[]" size="22" class="form-file-hide" />
<input type="file" id="edit-field-fileupload-2" name="field_fileupload[]" size="22" class="form-file-hide" />
<input type="file" id="edit-field-fileupload-3" name="field_fileupload[]" size="22" class="form-file-hide" />
<input type="file" id="edit-field-fileupload-4" name="field_fileupload[]" size="22" class="form-file-hide" />
<input type="file" id="edit-field-fileupload-5" name="field_fileupload[]" size="22" class="form-file-hide" />
<input type="file" id="edit-field-fileupload-6" name="field_fileupload[]" size="22" class="form-file-hide" />
<input type="file" id="edit-field-fileupload-7" name="field_fileupload[]" size="22" class="form-file-hide" />
<input type="file" id="edit-field-fileupload-8" name="field_fileupload[]" size="22" class="form-file-hide" />
<input type="file" id="edit-field-fileupload-9" name="field_fileupload[]" size="22" class="form-file-hide" />

<input type="hidden" name="field_fileupload[und][0][_weight]" value="0" />
<input type="hidden" name="field_fileupload[und][0][fid]" value="0" />
<input type="hidden" name="field_fileupload[und][0][display]" value="1" />
</div>
</div>
</div></fieldset>
</div>
</div>

<div class="form-item form-type-textarea form-item-body-und-0-value">
  <label for="edit-body-und-0-value">Notice Content </label>
 <div class="form-textarea-wrapper resizable"><?php echo wysiwyg('wysiwyg_id', 'body[und][0][value]', ''); ?></div>
</div><div></div>
<div id="jquery-debug"></div>
</div><div class="form-actions form-wrapper" id="edit-actions"><input type="hidden" name="uid" value="<?php $user->uid; ?>" /><input type="submit" id="edit-submit" name="field_fileupload" value="" class="form-submit" /></div></div></form>  </div>
</div>
  </div></div>
      <a href="https://new.galobby.com/development">Click here to return to the main Georgia Lobby system.</a>
    </div></div> <!-- /.section, /#content -->
  </div></div> <!-- /#main, /#main-wrapper -->

</div></div> <!-- /#page, /#page-wrapper -->
  <script type="text/javascript" src="sites/default/files/js/js_tj2H7Wck3J6keo4GGSGrY3b-B-sTGQ_ui-DfImWImJ4.js"></script>
<script type="text/javascript" src="sites/all/libraries/ckeditor/ckeditor-o4ezs2.js"></script>

<script  type="text/javascript">
$(function() {
	//close calendar fields if they aren't being worked with
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
