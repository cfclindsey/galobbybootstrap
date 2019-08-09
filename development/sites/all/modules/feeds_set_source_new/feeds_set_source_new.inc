<?php

/**
 * Provides the Feeds Fetcher with a custom URL from a fixed base URL and user entered info in form fields.
 */

class feeds_set_source_new extends FeedsHTTPFetcher {

 /**
   *   Source determined by base URL and user entered info into form fields.
   */

  function sourceForm($source_config) {
    $form = array();

	/*$form['source0'] = array(
      '#type' => 'select',
      '#title' => t('Session'),
      '#description' => t('Select a session.'),
	  '#options' => array(
		'20172018' => '2017 - 2018 Regular Session',
		'20132014' => '2013 - 2014 Regular Session',
		'20112012' => '2011 - 2012 Regular Session'
	),
      '#default_value' => isset($source_config['source0']) ? $source_config['source0'] : '',
      '#maxlength' => NULL,
      '#required' => TRUE,
    );*/

    $form['source'] = array(
      '#type' => 'select',
      '#title' => t('Bill Type'),
      '#description' => t('Select a bill type.'),
	  '#options' => array(
		'hb' => 'HB',
		'hr' => 'HR',
		'sb' => 'SB',
		'sr' => 'SR'
	),
      '#default_value' => isset($source_config['source']) ? $source_config['source'] : '',
      '#maxlength' => NULL,
      '#required' => TRUE,
    );

    $form['source2'] = array(
      '#type' => 'textfield',
      '#title' => t('Bill Number'),
      '#description' => t('Enter a Bill Number'),
      '#default_value' => '1',
      '#maxlength' => NULL,
      '#required' => TRUE,
    );

    return $form;
  }

/**
   * Override parent::sourceFormValidate().
   */
  public function sourceFormValidate(&$values) {

/*    if (!feeds_valid_url($values['source'], TRUE)) {
      $form_key = 'feeds][' . get_class($this) . '][source';
      form_set_error($form_key, t('The URL %source is invalid.', array('%source' => $values['source'])));
    }
    elseif ($this->config['auto_detect_feeds']) {
      feeds_include_library('http_request.inc', 'http_request');
      if ($url = http_request_get_common_syndication($values['source'])) {
        $values['source'] = $url;
      }
    }
*/
 
 }
	
  
  public function fetch(FeedsSource $source) {
   		$baseURL = 'http://www.legis.ga.gov/legislation/en-US/Display/';
	
        $source_config = $source->getConfigFor($this);
		//$sessionYear = $source_config['source0'];
		$sessionYear = '20172018';
        $billPrefix = $source_config['source'];
        $billNumber = $source_config['source2'];

		$siteURL = $baseURL . $sessionYear . "/" . $billPrefix . "/" . $billNumber;
        return new FeedsHTTPFetcherResult($siteURL);
  }

}
?>