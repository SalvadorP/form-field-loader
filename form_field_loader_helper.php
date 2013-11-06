<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Form Field Loader
*
* This helper module contains functions for making easier the task 
* of processing of the application forms
*
* @package		CodeIgniter
* @subpackage	Helpers
* @category		Helpers
* @author 		Salvador P.
*/


/**
 * Loads in an array all the form fields with their values
 *
 * @access public
 *
 * @return form_elements
 */
if ( ! function_exists('loadFormFields')){

	function loadFormFields(){
		
		$CI =& get_instance();

		$data = array();
		
		// Get the array with the form data
		$formData = $CI->input->get();
		if (empty($formData)) {
			$formData = $CI->input->post();
			if (empty($formData)) {
				return array();
			}
		}

		// Put in an array all the form fields with their values
		foreach($formData as $field => $value){
			$data[$field] = $value;
		}
		return $data;
	}
}
