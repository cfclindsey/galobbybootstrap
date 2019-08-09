<?php
// $Id: template.php,v 1.7 2010/10/05 19:59:10 dries Exp $

/**
 * Add body classes if certain regions have content.
 */
function freedom_preprocess_html(&$variables) {
	//dpm($variables);
  if (!empty($variables['page']['featured'])) {
    $variables['classes_array'][] = 'featured';
  }

  if (!empty($variables['page']['triptych_first'])
    || !empty($variables['page']['triptych_middle'])
    || !empty($variables['page']['triptych_last'])) {
    $variables['classes_array'][] = 'triptych';
  }

  if (!empty($variables['page']['footer_firstcolumn'])
    || !empty($variables['page']['footer_secondcolumn'])
    || !empty($variables['page']['footer_thirdcolumn'])
    || !empty($variables['page']['footer_fourthcolumn'])) {
    $variables['classes_array'][] = 'footer-columns';
  }

	foreach($variables['user']->roles as $role){
    	$variables['classes_array'][] = 'role-' . drupal_html_class($role);
  }

  // Add conditional stylesheets for IE
  drupal_add_css(path_to_theme() . '/css/ie.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lte IE 7', '!IE' => FALSE), 'preprocess' => FALSE));
  drupal_add_css(path_to_theme() . '/css/ie6.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'IE 6', '!IE' => FALSE), 'preprocess' => FALSE));


	/*dpm('page preprocess');
	dpm($variables);
	
	if(isset($variables['tabs']['#primary'])){
    	$tabs = $variables['tabs']['#primary'];
   		 for($i=0; $i <= count($tabs); $i++){
     		 if($tabs[$i]['#link']['title'] == 'Edit'){
       			  
       			if(isset($variables['user'])){
          			$variables['tabs']['#primary'][$i]['#link']['title'] = 'Edit Profile';
       		 	}
      		}
			if($tabs[$i]['#link']['title'] == 'View'){
       			 
       			if(isset($variables['user'])){
          			$variables['tabs']['#primary'][$i]['#link']['title'] = 'Profile';
       		 	}
      		}
    
    	}
  	}*/
}

/**
 * Override or insert variables into the page template for HTML output.
 */
function freedom_process_html(&$variables) {
	//dpm('html process');
	//dpm($variables);
  // Hook into color.module.
  if (module_exists('color')) {
    _color_html_alter($variables);
  }
}

/**
 * Override or insert variables into the page template.
 */
function freedom_process_page(&$variables) {
	//dpm('process page');
	//dpm($variables);
  // Hook into color.module.
  if (module_exists('color')) {
    _color_page_alter($variables);
  }
  // Always print the site name and slogan, but if they are toggled off, we'll
  // just hide them visually.
  $variables['hide_site_name']   = theme_get_setting('toggle_name') ? FALSE : TRUE;
  $variables['hide_site_slogan'] = theme_get_setting('toggle_slogan') ? FALSE : TRUE;
  if ($variables['hide_site_name']) {
    // If toggle_name is FALSE, the site_name will be empty, so we rebuild it.
    $variables['site_name'] = filter_xss_admin(variable_get('site_name', 'Drupal'));
  }
  if ($variables['hide_site_slogan']) {
    // If toggle_site_slogan is FALSE, the site_slogan will be empty, so we rebuild it.
    $variables['site_slogan'] = filter_xss_admin(variable_get('site_slogan', ''));
  }
  // Since the title and the shortcut link are both block level elements,
  // positioning them next to each other is much simpler with a wrapper div.
  if (!empty($variables['title_suffix']['add_or_remove_shortcut']) && $variables['title']) {
    // Add a wrapper div using the title_prefix and title_suffix render elements.
    $variables['title_prefix']['shortcut_wrapper'] = array(
      '#markup' => '<div class="shortcut-wrapper clearfix">',
      '#weight' => 100,
    );
    $variables['title_suffix']['shortcut_wrapper'] = array(
      '#markup' => '</div>',
      '#weight' => -99,
    );
    // Make sure the shortcut link is the first item in title_suffix.
    $variables['title_suffix']['add_or_remove_shortcut']['#weight'] = -100;
  }

}

/**
 * Implements hook_preprocess_maintenance_page().
 */
function freedom_preprocess_maintenance_page(&$variables) {
  drupal_add_css(drupal_get_path('theme', 'freedom') . '/css/maintenance-page.css');
}

/**
 * Override or insert variables into the maintenance page template.
 */
function freedom_process_maintenance_page(&$variables) {
  // Always print the site name and slogan, but if they are toggled off, we'll
  // just hide them visually.
  $variables['hide_site_name']   = theme_get_setting('toggle_name') ? FALSE : TRUE;
  $variables['hide_site_slogan'] = theme_get_setting('toggle_slogan') ? FALSE : TRUE;
  if ($variables['hide_site_name']) {
    // If toggle_name is FALSE, the site_name will be empty, so we rebuild it.
    $variables['site_name'] = filter_xss_admin(variable_get('site_name', 'Drupal'));
  }
  if ($variables['hide_site_slogan']) {
    // If toggle_site_slogan is FALSE, the site_slogan will be empty, so we rebuild it.
    $variables['site_slogan'] = filter_xss_admin(variable_get('site_slogan', ''));
  }
}

/**
 * Override or insert variables into the block template.
 */
function freedom_preprocess_block(&$variables) {
  // In the header region visually hide block titles.
  if ($variables['block']->region == 'header') {
    $variables['title_attributes_array']['class'][] = 'element-invisible';
  }
}

function freedom_preprocess_node(&$vars){
	if (isset($vars['content']['links']['node']['#links']['node-readmore']['title'])) {
  		$vars['content']['links']['node']['#links']['node-readmore']['title'] = str_replace("Read more","Read more about this bill.",$vars['content']['links']['node']['#links']['node-readmore']['title']);
	}
}

function freedom_preprocess_user_profile(&$variables) {

  $account = $variables['elements']['#account'];
  //Add the user ID into the user profile as a variable
  $variables['user_id'] = $account->uid;
  // Helpful $user_profile variable for templates.
  foreach (element_children($variables['elements']) as $key) {
    $variables['user_profile'][$key] = $variables['elements'][$key];
  }

  // Preprocess fields.
  field_attach_preprocess('user', $account, $variables['elements'], $variables);

}

function freedom_theme() {
  return array(
    'contracts_node_form' => array(
      'arguments' => array(
          'form' => NULL,
      ),
      'template' => 'templates/contracts-node-form', // set the path here if not in root theme directory
      'render element' => 'form',
    ),
  );
}
